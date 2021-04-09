<?php
include('../includes/autoloader.php');

if(isset($_POST["nom"]) && !empty($_POST["nom"])) {

    $data = $_POST;

    // ----------------
    // Envoi des e-mails transactionnels
    // ----------------
    try {
        $emailController = new EmailController;
        $emailController->sendEmailClient($data, $settings);
        $emailController->sendEmailVisitor($data, $settings);
    }
    catch (Exception $e) {
        echo "Erreur : Impossible d'envoyer les e-mails";
    }
}