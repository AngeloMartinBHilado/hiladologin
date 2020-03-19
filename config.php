<?php

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('662135407730-v4kqikodv1ihcr56sgtjpd2va3seks40.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('O-kRQixHH9hOQHTzSzVjyDrk');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('https://hiladocordones.herokuapp.com/home.php');

//
$google_client->addScope('email');

$google_client->addScope('profile');

//start session on web page
session_start();

?>
