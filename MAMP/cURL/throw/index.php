<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 26/05/2019
 * Time: 01:54
 */


function devide($a,$b){

    try{
        if($b ===0){
            throw new Exception('Division by Zero');
        } else{
            echo ($a / $b);
        }
    }
    catch (Exception $e){
        echo 'Couhgt exception' , $e->getMessage();
    }

}


devide(8,2);  // output 4

devide(8, 0 ); // 'Division by Zero'