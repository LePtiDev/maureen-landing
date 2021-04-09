<?php
require_once 'init.php';
require_once 'settings/settings.php';


// CHARGEMENT DES LIBRAIRIES
require_once 'phpmailer/class.phpmailer.php';
require_once 'phpmailer/class.smtp.php';


// CHARGEMENT DES FICHIERS DE CONFIG SPECIFIQUES A L'ENVIRONNEMENT
if($_SERVER['HTTP_HOST'] === $settings['domains']['production'] || $_SERVER['HTTP_HOST'] === ('www.' . $settings['domains']['production'])) {
    require_once 'settings/production.settings.php';
}
elseif($_SERVER['HTTP_HOST'] == $settings['domains']['preproduction']) {
    require_once 'settings/preproduction.settings.php';
}
else {
    require_once 'settings/local.settings.php';
}


// MISE A JOUR DU CODE GTM
if(!empty($settings['GTM']['ID'])) {
    $settings['GTM']['head'] = str_replace('GTM-*******', $settings['GTM']['ID'], $settings['GTM']['head']);
    $settings['GTM']['body'] = str_replace('GTM-*******', $settings['GTM']['ID'], $settings['GTM']['body']);
}
else {
    $settings['GTM']['head'] = NULL;
    $settings['GTM']['body'] = NULL;
}

// FORCE REFRESH
if(SETTINGS !== 'PRODUCTION') {
    $settings['forceRefresh'] = '?v=' . time();
}



