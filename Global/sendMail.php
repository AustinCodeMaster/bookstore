<?php
require '../vendor/autoload.php';

use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;


require 'dataBaseConfigurations.php'; // Loads both DB and mail configs

$mail = new PHPMailer(true);

try {
    $mail->isSMTP();
    $mail->Host       = $mailHost;
    $mail->SMTPAuth   = true;
    $mail->Username   = $mailUsername;
    $mail->Password   = $mailPassword;
    $mail->SMTPSecure = PHPMailer::ENCRYPTION_STARTTLS;
    $mail->Port       = $mailPort;

    $mail->setFrom($mailFromEmail, $mailFromName);
    $mail->addAddress('recipient@example.com');
    $mail->isHTML(true);
    $mail->Subject = 'Test Email';
    $mail->Body    = 'This is a test email from our group project.';

    $mail->send();
    echo "Email sent successfully!";
} catch (Exception $e) {
    echo "Mailer Error: {$mail->ErrorInfo}";
}
?>
