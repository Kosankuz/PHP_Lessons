<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 26/05/2019
 * Time: 01:00
 */



try {
    $data=array("a"=>"6","b"=>"3");
    $url = "http://example.com/testCURL.php/";
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL,$url);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    $returned = curl_exec($ch);
    curl_close ($ch);
    echo $returned;

}
catch(PDOException $e) {

    echo "Error: " . $e->getMessage();


}