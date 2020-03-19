<?php
require_once 'vendor/autoload.php';

$google_client = new Google_Client();
$google_client->setClientId('662135407730-v4kqikodv1ihcr56sgtjpd2va3seks40.apps.googleusercontent.com');
$google_client->setClientSecret('O-kRQixHH9hOQHTzSzVjyDrk');
$google_client->setRedirectUri('https://hiladocordones.herokuapp.com/home.php');
$google_client->addScope('email');
$google_client->addScope('profile');


session_start();
?>
