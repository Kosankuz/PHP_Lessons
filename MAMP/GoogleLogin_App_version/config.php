<?php

require_once 'env.php';

    session_start();
    require_once "GoogleAPI/vendor/autoload.php";
    $gClient = new Google_Client();
    $gClient -> setClientId($ClientId);
    $gClient -> setClientSecret($ClientSecret);
    $gClient -> setApplicationName("CPI Login Tutorials");
    $gClient -> setRedirectUri("http://localhost/GoogleLogin/g-callback.php");
    $gClient -> addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email ");

$gClient2 = new Google_Client();
$gClient2 -> setClientId($ClientId);
$gClient2 -> setClientSecret($ClientSecret);
$gClient2 -> setApplicationName("CPI Login Tutorials");
$gClient2 -> setRedirectUri("http://localhost/GoogleLogin/g-callback2.php");
$gClient2 -> addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email ");

$gClient3 = new Google_Client();
$gClient3 -> setClientId($ClientId);
$gClient3 -> setClientSecret($ClientSecret);
$gClient3 -> setApplicationName("CPI Login Tutorials");
$gClient3 -> setRedirectUri("http://localhost/GoogleLogin/g-callback3.php");
$gClient3 -> addScope("https://www.googleapis.com/auth/plus.login https://www.googleapis.com/auth/userinfo.email ");


?>