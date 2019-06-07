<?php

require_once 'config.php';

if (isset($_SESSION['success_token'])){
    $gClient->setAccessToken($_SESSION['access_token']);
}

else if (isset($_GET['code'])){
    $token = $gClient->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
} else {
    header('Location: login.php');
    exit();
}



$oAuth = new Google_Service_Oauth2($gClient);
$userData = $oAuth->userinfo_v2_me->get();

$_SESSION['id'] = $userData['id'];
$_SESSION['email'] = $userData['email'];
$_SESSION['gender'] = $userData['gender'];
$_SESSION['familyName'] = $userData['familyNname'];
$_SESSION['givenName'] = $userData['givenName'];
echo "<pre>";
var_dump($userData);

header('Location: index.php');
exit();