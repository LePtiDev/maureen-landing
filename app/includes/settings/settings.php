<?php
$settings = array();

// DOMAINES REFERENCE
$settings['domains']['preproduction'] = 'dev.mustii.fr';
$settings['domains']['production'] = 'dev.mustii.fr';


// DONNEES LIEES AU PROGRAMME
$settings['residenceInfos'] = array();
$settings['residenceInfos']['name'] = "Maureen Nicolas";
$settings['residenceInfos']['city'] = "VILLE_RESIDENCE";
$settings['residenceInfos']['dpt'] = "00";
$settings['residenceInfos']['brochureFilename'] = $settings['residenceInfos']['city'] . "-" . $settings['residenceInfos']['name'] . ".pdf"; // Ex : Noisy-Tendance.pdf
$settings['residenceInfos']['brochureURL'] = "pdf/" . $settings['residenceInfos']['brochureFilename'];


// TEXTES REDONDANTS
$settings['texts'] = array();
$settings['texts']['tel'] = "00&nbsp;00&nbsp;00&nbsp;00&nbsp;00";
$settings['texts']['telLink'] = "0000000000";
$settings['texts']['maquette3d'] = "https://services.vor-immobilier.fr/RivageImmobilier/HautsDeTanchet/op/101/floor/0"; ///Mettre l'url de la maquette 3D, ne rien mettre pour enlever le bloc


// META DATA
$settings['meta'] = array();
$settings['meta']['title'] = "Maureen Nicolas"; // A optimiser pour le référencement - 55 caractères maximum
$settings['meta']['description'] = "Maureen Nicolas - Portfolio"; // A optimiser pour le référencement - 155 caractères maximum
$settings['meta']['site_name'] = "Maureen Nicolas";

// E-MAILS
$settings['email']['libelleProgramme'] = $settings['residenceInfos']['name'] . " à " . $settings['residenceInfos']['city'] . " (" . $settings['residenceInfos']['dpt'] . ")";
$settings['email']['primaryColor'] = "#304bd8"; // Code couleur principal, utilisé pour l'e-mailing transactionnel
$settings['email']['subject'] = $settings['residenceInfos']['name'] . " à " . $settings['residenceInfos']['city'] . " (" . $settings['residenceInfos']['dpt'] . ")"; // Objet de l'e-mail
$settings['email']['from'] = 'nepasrepondre@acheter-neuf.immo'; // Adresse e-mail expéditeur
$settings['email']['fromName'] = "NOM_EXPEDITEUR"; // Nom complet du promoteur (exemple : Beryl Investissement)

// LEGAL INFOS
$settings['legalInfos'] = array();
$settings['legalInfos']['promoteur'] = "NOM_PROMOTEUR";
$settings['legalInfos']['status'] = "STATUT_PROPRIETAIRE"; // Ex: Société, Particulier, Association...
$settings['legalInfos']['company'] = "NOM_SOCIETE";
$settings['legalInfos']['address'] = "ADRESSE";
$settings['legalInfos']['tel'] = "TELEPHONE";
$settings['legalInfos']['capital'] = "CAPITAL"; // Ex : 3 000 €
$settings['legalInfos']['siret'] = "SIRET";
$settings['legalInfos']['rcs'] = "RCS";
$settings['legalInfos']['tva'] = "NUM_TVA";
$settings['legalInfos']['agency'] = "ADN Realty";
$settings['legalInfos']['publication'] = "RESPONSABLE_PUBLICATION";
$settings['legalInfos']['host'] = "Amazon Web Services (31 Place des Corolles, 92400 Courbevoie)";
$settings['legalInfos']['site_name'] = $settings['meta']['site_name'];

$settings['legalInfos']['email'] = array();
$settings['legalInfos']['email']['webmaster'] = "EMAIL_WEBMASTER";
$settings['legalInfos']['email']['publicationManager'] = "EMAIL_RESPONSABLE_PUBLICATION";

// DONNEES TECHNIQUES
define('TABLE_PREFIX', 'client_ville_residence_'); // à définir de la forme {client}_{ville}_{residence}_ >> {client} = promoteur ou commercialisateur
// Prioriser le promoteur lorsque le commercialisateur travaille avec plusieurs promoteurs différents (Exemple : Pour CGV Beryl, mettre beryl_ville_residence_)
// PENSER A METTRE A JOUR LE FICHIER TABLES.SQL EN CONSEQUENCE !!!

define('NOM_PROGRAMME', $settings['residenceInfos']['name']);
define('VILLE_PROGRAMME', $settings['residenceInfos']['city']);



// CODE GTM
$settings['GTM']['head'] = <<<EOD
<!-- Google Tag Manager -->
<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
})(window,document,'script','dataLayer','GTM-*******');</script>
<!-- End Google Tag Manager --> 
EOD;

$settings['GTM']['body'] = <<<EOD
<!-- Google Tag Manager (noscript) -->
<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-*******" height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
<!-- End Google Tag Manager (noscript) -->  
EOD;
