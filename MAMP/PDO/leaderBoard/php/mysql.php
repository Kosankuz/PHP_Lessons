
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
   // echo "Connected successfully";

    $sql = 'SELECT * FROM office ';
    $q = $connection->query($sql);
    $q->setFetchMode(PDO::FETCH_ASSOC);
    while($r = $q->fetch()){

        echo '<p>'  ;
        echo 'First name : ' . htmlspecialchars($r["name"]);
        echo '</p>' ;

        echo htmlspecialchars($r['lastname']);

    }
}
catch (PDOException $e){
    echo "connection failed: " . $e->getMessage();
}



$conn = null;


echo $output;