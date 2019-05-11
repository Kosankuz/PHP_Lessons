<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 11/05/2019
 * Time: 23:04
 */

$servername = "localhost";
$username = "rkostix";
$passwrod = "yourpass";
$db = "phpStorm";

// Create connection and connect to DB

$connection = new mysqli($servername,$username,$passwrod,$db);


//check connection

if ($connection-> connect_error){
    die("Connection Failed: " . $connection->connect_error);
}

echo "Connected successfully";

// close connection

mysqli_close($connection);

