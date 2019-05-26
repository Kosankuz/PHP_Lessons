<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 26/05/2019
 * Time: 00:55
 */

$url = "http://www.example.com/";
$ch = curl_init();
curl_setopt($ch, CURLOPT_URL,$url);
curl_setopt($ch, CURLOPT_RETURNTRANSFER,1);//для возврата результата в виде строки, вместо прямого вывода в браузер
$returned = curl_exec($ch);
curl_close ($ch);
echo $returned;