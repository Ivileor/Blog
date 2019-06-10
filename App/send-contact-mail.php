<?php

require_once '../vendor/autoload.php';


if(!$_POST || empty($_POST['mail']) || empty($_POST['subject'])){

    header('Location: /');

}


$username = 'dro.formation@gmail.com';


// Create the Transport

$transport = (new Swift_SmtpTransport('smtp.gmail.com', 587, 'tls'))

    ->setUsername($username)

    ->setPassword('DrosalysFormation')

    ->setStreamOptions(array('ssl' => array('allow_self_signed' => true, 'verify_peer' => false)))

;


// Create the Mailer using your created Transport

$mailer = new Swift_Mailer($transport);


// Create a message

$message = (new Swift_Message('Contact blog | ' . $_POST['mail'] ))

    ->setFrom([$username => 'Contact Blog'])

    ->setTo([

        'olivier.barnerias@hotmail.fr',

    ])
    ->setReplyTo([
        $_POST['mail']
    ])

    ->setBody('<img src="https://cdn.pixabay.com/photo/2016/09/01/10/23/image-1635747_960_720.jpg"/>'.$_POST['message'], 'text/html')
;


// Send the message

$result = $mailer->send($message);

