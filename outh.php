<?php
require 'vendor/autoload.php';

$client = new Google_Client();

$client->setClientId("YOUR_CLIENT_ID");
$client->setClientSecret("YOUR_CLIENT_SECRET");
$client->setRedirectUri("http://localhost/spotify-project/google-login.php");

$client->addScope("email");
$client->addScope("profile");

if (!isset($_GET['code'])) {
    $login_url = $client->createAuthUrl();
    header("Location: " . $login_url);
    exit();
} else {
    $token = $client->fetchAccessTokenWithAuthCode($_GET['code']);
    $client->setAccessToken($token);

    $google_service = new Google_Service_Oauth2($client);
    $data = $google_service->userinfo->get();

    session_start();
    $_SESSION['name'] = $data->name;
    $_SESSION['email'] = $data->email;
    $_SESSION['picture'] = $data->picture;

    header("Location: dashboard.php");
    exit();
}
?>