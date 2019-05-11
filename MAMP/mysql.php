<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 11/05/2019
 * Time: 23:04
 */

$servername = "localhost";
$username = "usernname";
$passwrod = "yourpass";

// Create connection

$connection = new mysqli($servername,$username,$passwrod);


//check connection

if ($connection-> connect_error){
    die("Connection Failed: " . $connection->connect_error);
}

echo "Connected successfully";