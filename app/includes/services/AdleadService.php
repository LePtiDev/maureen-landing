<?php

class AdleadService
{
	const BASE_URL = 'https://api.adlead.immo/v1';

	public $endpoint;
    private $apiKey;
    private $tenantKey;
    private $programId;

	public function __construct($apiKey, $tenantKey, $programId)
	{
        $this->apiKey = $apiKey;
        $this->tenantKey = $tenantKey;
        $this->programId = $programId;

        $this->endpoint = self::BASE_URL . '/' . $this->tenantKey . '/programs/' . $this->programId . '/leads';
	}

    public function insertContact($data) {
        $data['telephone'] = str_replace(' ', '', $data['telephone']);
        if(substr($data['telephone'], 9, 1) == '_') {
            $data['telephone'] = '0' . substr($data['telephone'], 0, 9);
        }

        if($data['civilite'] === 'Madame') {
            $data['civilite'] = 'ms';
        }
        else if($data['civilite'] === 'Monsieur') {
            $data['civilite'] = 'mr';
        }
        else {
            $data['civilite'] = null;
        }

        if(!empty($data['interet'])) {
            $data['message'] = "Intérêt : " . $data['interet'] . "\r\n" . $data['message'];
        }

        $postfields = [
            'contact' => [
                'title' => $data['civilite'],
                'name' => $data['nom'],
                'firstname' => $data['prenom'],
                'email1' => $data['email'],
                'phone1' => $data['telephone'],
                'optin_email' => ($data['optin']) ? true : false,
                'optin_phone' => ($data['optin']) ? true : false,
                'optin_sms' => ($data['optin']) ? true : false,
            ],
            'lead' => [
                'message' => $data['message'],
                'tracking_origin' => 'landing',
                'tracking_source' => $data['utm_source'],
                'tracking_medium' => $data['utm_medium'],
                'tracking_campaign' => $data['utm_campaign'],
                'tracking_content' => $data['utm_content'],
            ],
        ];

        $this->send($postfields);
    }

    public function insertWebcallback($data) {
        $data['telephone'] = str_replace(' ', '', $data['telephone']);
        if(substr($data['telephone'], 9, 1) == '_') {
            $data['telephone'] = '0' . substr($data['telephone'], 0, 9);
        }


        // CALCUL DE L'HEURE DE RAPPEL
        $hours = explode('-' , $data['plage_horaire']);

        $minHour = filter_var($hours[0], FILTER_SANITIZE_NUMBER_INT);
        $maxHour = filter_var($hours[1], FILTER_SANITIZE_NUMBER_INT);

        if(date('H') > $maxHour) {
            $time = strtotime("+1 day", strtotime(date("Y-m-d " . $minHour . ":00:00")));
        }
        elseif(date('H') > $minHour) {
            $time = strtotime(date("Y-m-d H:i:00"));
            $quarter = 60 * 15;
            $time = $time + ($quarter - ($time % $quarter));
        }
        else {
            $time = strtotime(date("Y-m-d " . $minHour . ":00:00"));
        }
        $data['callback_date'] = date("Y-m-d H:i:s", $time);
        // ===============


        $postfields = [
            'contact' => [
                'name' => 'NC',
                'phone1' => $data['telephone'],
            ],
            'lead' => [
                'message' => "[Webcallback] Demande de rappel sur la plage horaire suivante : " . $data['plage_horaire'],
                'tracking_origin' => 'landing',
                'tracking_source' => $data['utm_source'],
                'tracking_medium' => $data['utm_medium'],
                'tracking_campaign' => $data['utm_campaign'],
                'tracking_content' => $data['utm_content'],
            ],
            'events' => [
                [
                    'type' => 'callback',
                    'date' => $data['callback_date'],
                    'comment' => "[Webcallback] À rappeler sur la plage horaire suivante : " . $data['plage_horaire'],
                ]
            ]
        ];

        $this->send($postfields);
    }

    public function send($postfields) {
        $payload = json_encode($postfields);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->endpoint);
        curl_setopt($curl, CURLOPT_HTTPHEADER, [
            'Content-Type: application/json',
            'Content-Length: ' . strlen($payload),
            'X-API-Key: ' . $this->apiKey,
        ]);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $payload);
        $return = curl_exec($curl);
        curl_close($curl);

        $response = json_decode($return);

        if(!$response->success) {
            var_dump($response);
        }
    }
}
