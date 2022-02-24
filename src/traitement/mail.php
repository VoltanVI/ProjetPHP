<?php

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
use PHPMailer\PHPMailer\SMTP;

require '../../assets/vendor/phpmailer/phpmailer/src/PHPMailer.php';
require '../../assets/vendor/phpmailer/phpmailer/src/Exception.php';
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
$mail->addAddress($_POST['login'],$_POST['nom']); // Ajouter le destinataire
$mail->addReplyTo('huglop2304@outlook.fr', 'Hu40'); // L'adresse de réponse

$mail->isHTML(true); // Paramétrer le format des emails en HTML ou non

$mail->Subject = 'Email PHP';
$mail->Body = 'Je sais envoyer un email OwO';
$mail->AltBody = 'rien';
var_dump($mail);

if(!$mail->send()) {
    echo 'Erreur, message non envoyé.';
    echo $mail->ErrorInfo;
} else {
    echo 'Le message a bien été envoyé !';
    header('Location: inscription.php');
}
