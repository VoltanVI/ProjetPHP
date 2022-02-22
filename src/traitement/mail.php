<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\SMTP;

require '../../assets/vendor/autoload.php';
require '../../assets/vendor/phpmailer/phpmailer/src/SMTP.php';

$mail = new PHPMailer(true);

$mail->isSMTP(); // Paramétrer le Mailer pour utiliser SMTP
$mail->Host = 'smtp-mail.outlook.fr'; // Spécifier le serveur SMTP // mail.votredomaine.com
$mail->SMTPAuth = true; // Activer authentication SMTP
$mail->Username = 'huglop2304@outlook.fr'; // Votre adresse email d'envoi // user@votredomaine.com
$mail->Password = 'L3-M@uX_2()pAsçS3'; // Le mot de passe de cette adresse email
$mail->SMTPSecure = PHPMailer::ENCRYPTION_SMTPS; // Accepter SSL
$mail->Port = 587; // 465

$mail->setFrom('huglop2304@outlook.fr', 'Hu40'); // Personnaliser l'envoyeur
$mail->addAddress('To1@example.net', 'Karim User'); // Ajouter le destinataire
$mail->addAddress('To2@example.com');
$mail->addReplyTo('info@example.com', 'Information'); // L'adresse de réponse
$mail->addCC('cc@example.com');
$mail->addBCC('bcc@example.com');

$mail->addAttachment('/var/tmp/file.tar.gz'); // Ajouter un attachement
$mail->addAttachment('/tmp/image.jpg', 'new.jpg');
$mail->isHTML(true); // Paramétrer le format des emails en HTML ou non

$mail->Subject = 'Email PHP';
$mail->Body = 'Je sais envoyer un email OwO';
$mail->AltBody = 'rien';

if(!$mail->send()) {
    echo 'Erreur, message non envoyé.';
    echo 'Mailer Error: ' . $mail->ErrorInfo;
} else {
    echo 'Le message a bien été envoyé !';
}
