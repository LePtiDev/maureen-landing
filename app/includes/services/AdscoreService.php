<?php

class AdscoreService
{
    const ENDPOINT = 'https://backend.adscore.immo/webhooks/qualification.php';

    public $campaignId;
    public $tenantKey;

    public function __construct($campaignId, $tenantKey)
    {
        $this->campaignId = $campaignId;
        $this->tenantKey = $tenantKey;
    }

    public function qualify($data) {
        $postfields = [];
        $postfields['campaign_id'] = $this->campaignId;
        $postfields['tenant_key'] = $this->tenantKey;

        $postfields['civilite'] = $data['civilite'];
        $postfields['nom'] = $data['nom'];
        $postfields['prenom'] = $data['prenom'];
        $postfields['email'] = $data['email'];
        $postfields['telephone'] = $data['telephone'];
        $postfields['cp'] = $data['cp'];
        $postfields['message'] = $data['message'];
        $postfields['optin'] = $data['optin'];
        $postfields['interet'] = $data['interet'];
        $postfields['utm_source'] = $data['utm_source'];
        $postfields['utm_medium'] = $data['utm_medium'];
        $postfields['utm_campaign'] = $data['utm_campaign'];
        $postfields['formulaire'] = $data['type'];

        return $this->send($postfields);
    }

    public function send($postfields) {
        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, self::ENDPOINT);
        curl_setopt($curl, CURLOPT_COOKIESESSION, true);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
        $return = curl_exec($curl);
        curl_close($curl);

        $result = json_decode($return);

        return $result->typeform;
    }
}
