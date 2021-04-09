<?php

class ImmoleadService
{
	const ENDPOINT = 'https://immo-lead.com/api/1.0/contacts';
	public $url;
    private $apiKey;
    private $customerKey;
    private $productId;

	public function __construct($apiKey, $customerKey, $productId)
	{
        $this->apiKey = $apiKey;
        $this->customerKey = $customerKey;
        $this->productId = $productId;

        $this->url = self::ENDPOINT . '?apikey=' . $this->apiKey . '&customerkey=' . $this->customerKey;
	}

    public function insertContact($data) {
        $postfields = [];
        $postfields['contact']['email'] = $data['email'];
        $postfields['contact']['civilite'] = $data['civilite'];
        $postfields['contact']['prenom'] = $data['prenom'];
        $postfields['contact']['nom'] = $data['nom'];
        $postfields['contact']['societe'] = $data['societe'];
        $postfields['contact']['ville'] = $data['ville'];
        $postfields['contact']['adresse'] = $data['adresse'];
        $postfields['contact']['codepostal'] = $data['cp'];
        $postfields['contact']['telephone'] = $data['telephone'];
        $postfields['contact']['mobile'] = '';
        $postfields['contact']['telpro'] = '';
        $postfields['contact']['origine'] = 5;
        $postfields['contact']['optin'] = $data['optin'];
        $postfields['contact']['datecreation'] = date('Y-m-d H:i:s');

        $postfields['event']['idproduit'] = $this->productId;
        $postfields['event']['type'] = 'info'; // info si contact ou demanderdv si webcallback
        $postfields['event']['origine'] = 'Landing page';
        $postfields['event']['medium'] = $data['utm_medium'];
        $postfields['event']['source'] = $data['utm_source'];
        $postfields['event']['content'] = $data['utm_content'];
        $postfields['event']['campaign'] = $data['utm_campaign'];

        if(!empty($data['interet'])) {
            $postfields['event']['commentaire'] = $data['interet'] . " / " . $data['message'];
        }
        else {
            $postfields['event']['commentaire'] = $data['message'];
        }

        $postfields['recherche']['idproduit'] = $this->productId;

        $this->send($postfields);
    }

    public function insertWebcallback($data) {
        $postfields = [];
        $postfields['contact']['telephone'] = $data['telephone'];
        $postfields['contact']['optin'] = 0;
        $postfields['contact']['datecreation'] = date('Y-m-d H:i:s');

        $postfields['event']['idproduit'] = $this->productId;
        $postfields['event']['type'] = 'demanderdv'; // info si contact ou demanderdv si webcallback
        $postfields['event']['origine'] = 'Landing page';
        $postfields['event']['medium'] = $data['utm_medium'];
        $postfields['event']['source'] = $data['utm_source'];
        $postfields['event']['content'] = $data['utm_content'];
        $postfields['event']['campaign'] = $data['utm_campaign'];
        $postfields['event']['commentaire'] = $data['plage_horaire'];

        $postfields['recherche']['idproduit'] = $this->productId;

        $this->send($postfields);
    }

    public function send($data) {

        $postfields = json_encode($data, JSON_FORCE_OBJECT);

        $curl = curl_init();
        curl_setopt($curl, CURLOPT_URL, $this->url);
        curl_setopt($curl, CURLOPT_POST, 1);
        curl_setopt($curl, CURLOPT_POSTFIELDS, $postfields);
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($curl, CURLOPT_SSL_VERIFYPEER, false);
        curl_setopt($curl, CURLOPT_VERBOSE, true);
        $result = curl_exec($curl);

//        var_dump(json_decode($result));
//        var_dump(curl_getinfo($curl));
//        echo '================';
//        var_dump($data);

        curl_close($curl);
    }
}
