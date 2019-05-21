<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 11/05/2019
 * Time: 23:04
 */
// adding  variables

$servername = "localhost";
$username = "username";
$passwrod = "pass";
$db = "phpStorm";

// Create connection with database

$connection = new mysqli($servername,$username,$passwrod);


//check connection

if ($connection-> connect_error){
    die("Connection Failed: " . $connection->connect_error);
}

echo "Connected successfully";

// choosing database

if(mysqli_select_db($connection,$db)){
 echo 'db is chosen';
} else{
    echo 'error has occurred when choosing db';
}

// closing connection

mysqli_close($connection);

