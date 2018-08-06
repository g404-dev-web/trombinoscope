<?php

require_once '../vendor/autoload.php';

if (!empty($_POST["email"]) && !empty($_POST["email"])) {

    // Create the Transport
    $transport = (new Swift_SmtpTransport('in-v3.mailjet.com', 25))
    ->setUsername('845ba2291acc5b0d66153772b61c2fc1')
    ->setPassword('65fb2a30bee428eec867c1e60df1ef40')
    ;


    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    // Create a message
    $message = (new Swift_Message($_POST['subject']))
        ->setFrom("simplonienn.e@mailtest.simplon-roanne.com")
        ->setTo('zzgael@gmail.com')
        ->setReplyTo($_POST['email'])
        ->setBody($_POST['message']);

    // Send the message
    $result = $mailer->send($message);
}

header('Location: ../index.html');