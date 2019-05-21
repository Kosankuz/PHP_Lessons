<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 11/05/2019
 * Time: 23:04
 */
// adding  variables

$servername = "localhost";
$username = "kostix";
$password = "kostix@kostix";
$db = "phpStorm";

// Create connection with database


try {
    $connection = new PDO("mysql:host=$servername;dbname=$db", $username, $password);
    // set the PDO error mode to exception
    $connection->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    echo "Connected successfully";
}
catch (PDOException $e){
    echo "connection failed: " . $e->getMessage();
}

$conn = null;


$handle = curl_init();

$url = "https://www.delfi.lv/";

// Set the url
curl_setopt($handle, CURLOPT_URL, $url);
// Set the result output to be a string.
curl_setopt($handle, CURLOPT_RETURNTRANSFER, true);

$output = curl_exec($handle);

curl_close($handle);

echo $output;