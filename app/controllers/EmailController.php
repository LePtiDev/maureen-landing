<?php
class EmailController {


    // Va chercher le template pour le renvoyer
    public function loadTemplate($template, $params) {

        // Va cherche le template avce le bon nom de dosser
        $sourceHTML = file_get_contents('../templates/' . $template . '/index.html');

        // pour toute les clés défini dans le html on les remplace par les params de la fonction
        foreach($params as $key => $text) {
            $sourceHTML = str_replace('{' . $key . '}', $text, $sourceHTML);
        }

        return $sourceHTML;
    }

    // Email pour le visiteur
    public function sendEmailVisitor($data, $settings) {

        // Paramètre du template
        $params = array();
        /*
         * Exemple:
         * $params['SITE_URL'] = SITE_URL;
         * $params['nom'] = htmlentities($data['name']);
        */

        // Chargement du template dans la variable body
        $body = $this->loadTemplate('email', $params);

        // Remplacement de toute les images par le dossier image
        $body = str_replace('images/', SITE_URL . '/templates/email/images/', $body);

        // Initialisation de php mailer
        $phpMailer = new PHPMailer(true);
        $phpMailer->IsHTML(true);
        $phpMailer->IsMail();
        $phpMailer->From = $settings['email']['from'];
        $phpMailer->FromName = $settings['email']['fromName'];
        $phpMailer->AddReplyTo($settings['email']['from'], $settings['email']['fromName']);
        $phpMailer->Subject = $settings['email']['subject'];
        $phpMailer->CharSet = "utf-8";
        $phpMailer->Body = $body;

        $phpMailer->AddAddress($data['email'], $data['prenom'] . " " . $data['nom']);

        $phpMailer->Send();
    }


    // Email pour le client
    public function sendEmailClient($data, $settings) {

        // Paramètre du template
        $params = array();
        /*
         * Exemple:
         * $params['SITE_URL'] = SITE_URL;
         * $params['nom'] = htmlentities($data['name']);
        */

        // Chargement du template dans la variable body
        $body = $this->loadTemplate('email', $params);

        // Remplacement de toute les images par le dossier image
        $body = str_replace('images/', SITE_URL . '/templates/email/images/', $body);

        // Initialisation de php mailer
        $phpMailer = new PHPMailer(true);
        $phpMailer->IsHTML(true);
        $phpMailer->IsMail();
        $phpMailer->From = $settings['email-client']['from'];
        $phpMailer->FromName = $settings['email-client']['fromName'];
        $phpMailer->AddReplyTo($settings['email-client']['from'], $settings['email-client']['fromName']);
        $phpMailer->Subject = $settings['email-client']['subject'];
        $phpMailer->CharSet = "utf-8";
        $phpMailer->Body = $body;

        $phpMailer->Send();
    }
}