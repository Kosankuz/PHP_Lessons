<?php

require_once 'config.php';

if (isset($_SESSION['success_token'])){
    $gClient4->setAccessToken($_SESSION['access_token']);
}

else if (isset($_GET['code'])){
    $token = $gClient4->fetchAccessTokenWithAuthCode($_GET['code']);
    $_SESSION['access_token'] = $token;
} else {
    header('Location: login.php');
    exit();
}



$oAuth = new Google_Service_Oauth2($gClient4);
$userData = $oAuth->userinfo_v2_me->get();

$_SESSION['id'] = $userData['id'];
$_SESSION['email'] = $userData['email'];
$_SESSION['gender'] = $userData['gender'];
$_SESSION['picture'] = $userData['picture'];
$_SESSION['familyName'] = $userData['familyName'];
$_SESSION['givenName'] = $userData['givenName'];


header('Location: admin/admin.php');

exit();