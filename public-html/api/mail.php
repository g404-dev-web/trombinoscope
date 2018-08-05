<?php

require_once '../vendor/autoload.php';

if (!empty($_POST["email"]) && !empty($_POST["email"])) {

    // Sendmail
    $transport = new Swift_SendmailTransport('/usr/sbin/sendmail -bs');

    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message($_POST['subject']))
        ->setFrom($_POST['email'])
        ->setTo('zzgael@gmail.com')
        ->setBody($_POST['message']);

    // Send the message
    $result = $mailer->send($message);
}

header('Location: index.html');