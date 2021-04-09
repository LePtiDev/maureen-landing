<?php
include('../includes/autoloader.php');

if(isset($_POST["telephone"]) && !empty($_POST["telephone"])) {

    $data = $_POST;
    $data['type'] = 'webcallback';
    $data['utm_source'] = $_SESSION['tracking']['utm_source'];
    $data['utm_medium'] = $_SESSION['tracking']['utm_medium'];
    $data['utm_campaign'] = $_SESSION['tracking']['utm_campaign'];
    $data['utm_content'] = $_SESSION['tracking']['utm_content'];


    // ----------------
    // Insertion du lead en base de données
    // ----------------
    try {
        $contactController = new ContactController;
        $contactController->insertContact($data);
    }
    catch (Exception $e) {
        echo "Erreur : Impossible d'insérer le lead";
    }


    // ----------------
    // Transmission du lead au CRM Adlead
    // ----------------
    if(!empty(ADLEAD_APIKEY) && !empty(ADLEAD_TENANTKEY) && !empty(ADLEAD_PROGRAMID)) {
        try {
            $adlead = new AdleadService(ADLEAD_APIKEY, ADLEAD_TENANTKEY, ADLEAD_PROGRAMID);
            $adlead->insertWebcallback($data);
        }
        catch (Exception $e) {
            echo "Erreur : Impossible de transmettre le lead au CRM Adlead";
        }
    }


    // ----------------
    // Transmission du lead au CRM Immolead
    // ----------------
    if(!empty(IMMOLEAD_APIKEY) && !empty(IMMOLEAD_CUSTOMERKEY) && !empty(IMMOLEAD_PRODUCTID)) {
        try {
            $immolead = new ImmoleadService(IMMOLEAD_APIKEY, IMMOLEAD_CUSTOMERKEY, IMMOLEAD_PRODUCTID);
            $immolead->insertWebcallback($data);
        }
        catch (Exception $e) {
            echo "Erreur : Impossible de transmettre le lead au CRM Immolead";
        }
    }


    // ----------------
    // Transmission du lead au CRM Koban
    // ----------------
    if(!empty(KOBAN_ZID) && !empty(KOBAN_ID) && !empty(KOBAN_LP)) {
        try {
            $koban = new KobanService(KOBAN_ZID, KOBAN_ID, KOBAN_LP);
            $koban->insertWebcallback($data);
        }
        catch (Exception $e) {
            echo "Erreur : Impossible de transmettre le lead au CRM Koban";
        }
    }


    // ----------------
    // Transmission du lead pour requalification Adscore
    // ----------------
    if(!empty(ADSCORE_CAMPAIGNID)) {
        try {
            $adscore = new AdscoreService(ADSCORE_CAMPAIGNID, ADLEAD_TENANTKEY);
            $_SESSION['typeform_url'] = $adscore->qualify($data);

            echo $_SESSION['typeform_url'];
        }
        catch (Exception $e) {
            echo "Erreur : Impossible de transmettre le lead en requalification Adscore";
        }
    }


    // ----------------
    // Envoi des e-mails transactionnels
    // ----------------
    try {
        $emailController = new EmailController;
        $emailController->sendWebcallbackData($data, $settings);
    }
    catch (Exception $e) {
        echo "Erreur : Impossible d'envoyer les e-mails";
    }
}