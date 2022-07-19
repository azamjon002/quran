<?php

ini_set('display_errors',1);

require '../vendor/autoload.php';
   

use Telegram\Bot\Api;
$telegram = new Api('5424070776:AAFLyx7ASZXqECnzDxJs6PSOxKsev_fUVmg');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$message = $_POST['massage'];

$test = $telegram->sendMessage([
    'chat_id'=> '1305389065',
    'text'=> "Name: $name".PHP_EOL. "Email: $email".PHP_EOL."Phone number: $phone".PHP_EOL."Message: $message"
]);

$test = $telegram->sendMessage([
    'chat_id'=> '1275916822',
    'text'=> "Name: $name".PHP_EOL. "Email: $email".PHP_EOL."Phone number: $phone".PHP_EOL."Message: $message"
]);
header('Location: contact.php');
?>