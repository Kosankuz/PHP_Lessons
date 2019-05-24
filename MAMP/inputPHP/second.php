<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 24/05/2019
 * Time: 19:19
 */

$varToConsole = 'console ept';


if  (isset($_POST)){
   echo 'This value is taken fro PHP file ';
   echo "<script> console.log('.$varToConsole.') </scirpt>";
   return;
} else {
    echo 'nopost';
    return;
}