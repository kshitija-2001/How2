<?php

//start session on web page
session_start();

//config.php

//Include Google Client Library for PHP autoload file
require_once 'vendor/autoload.php';

//Make object of Google API Client for call Google API
$google_client = new Google_Client();

//Set the OAuth 2.0 Client ID
$google_client->setClientId('428489866573-es88lcki9d9d9f7j8tgis46uqh8oe68n.apps.googleusercontent.com');

//Set the OAuth 2.0 Client Secret key
$google_client->setClientSecret('74TnJfc49bgbPMhvVYEeKO-7');

//Set the OAuth 2.0 Redirect URI
$google_client->setRedirectUri('localhost/how2');

// to get the email and profile 
$google_client->addScope('email');

$google_client->addScope('profile');
