<?php

require_once '../vendor/autoload.php';

if (!empty($_POST["email"]) && !empty($_POST["message"])) {

    // Create the Transport
    $transport = (new Swift_SmtpTransport('in-v3.mailjet.com', 587))
        ->setUsername('a571535be8886882c6f9b896377fdd3c')
        ->setPassword('5aed2a1da35f77d2ec73b948830661c9');


    // Create the Mailer using your created Transport
    $mailer = new Swift_Mailer($transport);

    //var_dump($_POST);exit;

    // Create a message
    $message = (new Swift_Message($_POST["name"]." - Contact depuis le trombi Simplon Roanne"))
        ->setFrom(["contact@simplon-roanne.com" => $_POST["name"]])
        ->setTo($_POST["to"])
        ->setReplyTo($_POST['email'])
        ->setBody($_POST['message']);

    // Send the message
    $result = $mailer->send($message);

    header('Location: ../index.php?send-success');
    exit;
}

header('Location: ../index.php?send-fail');