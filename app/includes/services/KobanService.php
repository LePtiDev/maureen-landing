<?php

class KobanService
{
	const ENDPOINT = 'http://track02-koban.com/Form/sbm/';

    private $zId;
    private $id;
    private $lp;

	public function __construct($zId, $id, $lp)
	{
        $this->zId = $zId;
        $this->id = $id;
        $this->lp = $lp;
	}

    public function insertContact($data) {
        $params = [
            'cid' => 'NO',
            'zid' => $this->zId,
            'id' => $this->id,
            '_lp' => $this->lp,

            'utm_source' => $data['utm_source'],
            'utm_medium' => $data['utm_medium'],
            'utm_campaign' => $data['utm_campaign'],
            'utm_content' => $data['utm_content'],
        ];

        $postfields = [];

        $data['telephone'] = str_replace(' ', '', $data['telephone']);
        if(substr($data['telephone'], 9, 1) == '_') {
            $data['telephone'] = '0' . substr($data['telephone'], 0, 9);
        }

        if(!empty($data['civilite'])) $postfields['contact_gender'] = $data['civilite'];
        if(!empty($data['nom'])) $postfields['contact_name'] = $data['nom'];
        if(!empty($data['prenom'])) $postfields['contact_firstname'] = $data['prenom'];
        if(!empty($data['email'])) $postfields['contact_email'] = $data['email'];
        if(!empty($data['telephone'])) $postfields['contact_phone'] = $data['telephone'];
        if(!empty($data['message'])) $postfields['contact_comment'] = $data['message'];

        if(!empty($data['adresse'])) $postfields['third_adrsstreet'] = $data['adresse'];
        if(!empty($data['cp'])) $postfields['third_adrszipcode'] = $data['cp'];
        if(!empty($data['ville'])) $postfields['third_adrscity'] = $data['ville'];

        if($data['optin'] == 1) $postfields['Optin'] = 'on';
        else $postfields['Optin'] = 'off';

        // Champ personnalisé : Type de demande de contact
        $postfields['Spe5927f7844e86af030450df54'] = "[LST]5927f7374e86af030450df51;Demande d'information";

        // Tag personnalisé : Destination du contact (projet)
        if($data['projet'] == 'Habiter') $postfields['Tag58f8c4ac4e86af0d9c964130'] = "Résidence principale";
        elseif($data['projet'] == 'Investir') $postfields['Tag58f8c4ac4e86af0d9c964130'] = "Investisseur";

        $this->send($params, $postfields);
    }

    public function insertWebcallback($data) {
        $params = [
            'cid' => 'NO',
            'zid' => $this->zId,
            'id' => $this->id,
            '_lp' => $this->lp,

            'utm_source' => $data['utm_source'],
            'utm_medium' => $data['utm_medium'],
            'utm_campaign' => $data['utm_campaign'],
            'utm_content' => $data['utm_content'],
        ];


        $postfields = [];

        $data['telephone'] = str_replace(' ', '', $data['telephone']);
        if(substr($data['telephone'], 9, 1) == '_') {
            $data['telephone'] = '0' . substr($data['telephone'], 0, 9);
        }

        if(!empty($data['civilite'])) $postfields['contact_gender'] = $data['civilite'];
        if(!empty($data['nom'])) $postfields['contact_name'] = $data['nom'];
        if(!empty($data['prenom'])) $postfields['contact_firstname'] = $data['prenom'];
        if(!empty($data['email'])) $postfields['contact_email'] = $data['email'];
        if(!empty($data['telephone'])) $postfields['contact_phone'] = $data['telephone'];
        if(!empty($data['message'])) $postfields['contact_comment'] = $data['message'];

        if(!empty($data['adresse'])) $postfields['third_adrsstreet'] = $data['adresse'];
        if(!empty($data['cp'])) $postfields['third_adrszipcode'] = $data['cp'];
        if(!empty($data['ville'])) $postfields['third_adrscity'] = $data['ville'];

        if($data['rgpd'] == 1) $postfields['Optin'] = 'on';
        else $postfields['Optin'] = 'off';

        // Champ personnalisé : Type de demande de contact
        $postfields['Spe5927f7844e86af030450df54'] = "[LST]5927f7374e86af030450df51;Demande d'appel";

        $this->send($params, $postfields);
    }

    public function send($params, $postfields) {

        $url = self::ENDPOINT . "?" . http_build_query($params);

        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_POST, true);
        curl_setopt($ch, CURLOPT_POSTFIELDS, http_build_query($postfields));
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
        curl_setopt($ch, CURLINFO_HEADER_OUT, true);

        $server_output = curl_exec($ch);
        $info = curl_getinfo($ch);
        curl_close($ch);

        //print_r($server_output);
        //print_r($info);
        //echo http_build_query($postfields);
    }
}
