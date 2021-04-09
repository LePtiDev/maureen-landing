<?php
$settings = array();

// DOMAINES REFERENCE
$settings['domains']['preproduction'] = 'dev.mustii.fr';
$settings['domains']['production'] = '';



// TEXTES REDONDANTS
$settings['texts'] = array();
$settings['texts']['tel'] = "00&nbsp;00&nbsp;00&nbsp;00&nbsp;00";
$settings['texts']['telLink'] = "0000000000";

// META DATA
$settings['meta'] = array();
$settings['meta']['title'] = ""; // A optimiser pour le référencement - 55 caractères maximum
$settings['meta']['description'] = ""; // A optimiser pour le référencement - 155 caractères maximum
$settings['meta']['site_name'] = ""; // Nom du site
$settings['meta']['image'] = "images/share.jpg"; // A créer

// E-MAILS POUR LE CLIENT
$settings['email-client']['subject'] = ""; // Objet de l'e-mail
$settings['email-client']['from'] = ""; // Adresse e-mail expéditeur
$settings['email-client']['fromName'] = ""; // Nom de l'expéditeur

// E-MAILS POUR LE VISTEUR
$settings['email']['subject'] = ""; // Objet de l'e-mail
$settings['email']['from'] = ""; // Adresse e-mail expéditeur
$settings['email']['fromName'] = "NOM_EXPEDITEUR"; // Nom complet du promoteur (exemple : Beryl Investissement)

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
