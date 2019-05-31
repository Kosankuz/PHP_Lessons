<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 31/05/2019
 * Time: 20:51
 */

$dataP = rand(1,26);
$dataG = rand(26,1);

if (isset($_POST)){
getData($dataP . "POST");

}

if (isset($_GET)){
    getData($dataG . 'GET');

}

function getData($data){
    echo $data;
}