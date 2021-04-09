<?php
define('SETTINGS', 'PRODUCTION');

///// GENERAL /////
define('SITE_URL', ''); // Si landing Adscore : https://www.acheter-neuf.immo/PROMOTEUR/VILLE/RESIDENCE/


///// FAVICON /////
$settings['favicon_path'] = '/';


///// DATABASE /////
// - Si landing non adscore
//define('HOST', 'u4h2db.cdmbpqzq4tn6.eu-west-1.rds.amazonaws.com');
//define('DB_NAME', '');
//define('DB_USER', '');
//define('DB_PASSWD', '');

// - Si landing Adscore
//define('HOST', 'u4h2db.cdmbpqzq4tn6.eu-west-1.rds.amazonaws.com');
//define('DB_NAME', 'acheterneuf');
//define('DB_USER', 'std_achete433');
//define('DB_PASSWD', 'Qf9cpJP8UiyCUf');


///// EMAILS /////
$settings['sendTo'] = 'leads@adn-realty.com'; // NE JAMAIS LAISSER VIDE
$settings['sendToCC'][] = 'realty.adn@gmail.com';
//$settings['sendToCC'][] = '';


///// GTM /////
$settings['GTM']['ID'] = ''; // exemple : GTM-AAFQZF0


// --- ADLEAD ---
// Configuration pour la transmission du lead au CRM Adlead
// LAISSER VIDE POUR NE RIEN ENVOYER
// ----------------
define('ADLEAD_APIKEY', null);
define('ADLEAD_TENANTKEY', null);
define('ADLEAD_PROGRAMID', null);


// --- IMMOLEAD ---
// Configuration pour la transmission du lead au CRM Immolead
// LAISSER VIDE POUR NE RIEN ENVOYER
// ----------------
define('IMMOLEAD_APIKEY', null);
define('IMMOLEAD_CUSTOMERKEY', null);
define('IMMOLEAD_PRODUCTID', null);


// --- KOBAN ---
// Configuration pour la transmission du lead au CRM Koban
// LAISSER VIDE POUR NE RIEN ENVOYER
// ----------------
define('KOBAN_ZID', null); // EMERIGE = 58f8bdcb4e86af0d9c964098
define('KOBAN_ID', null); // EMERIGE = 5919c6214e86af136444cc15
define('KOBAN_LP', null); // ID de la Landing page - A demander au client


// --- ADSCORE ---
// Configuration pour la transmission à l'outil de requalification Adscore
// LAISSER VIDE POUR NE RIEN ENVOYER
// ----------------
define('ADSCORE_CAMPAIGNID', null);
define('ADSCORE_TENANTKEY', null);