<?php

$firstVar = 'First PHP  Variable ';
$my_array = array('firstElement','secondElement','thirdElement');


foreach ($my_array as $value){
    echo '<script>console.log("' . $value . '")</script>';
}

echo 'check console loge';
echo '<script>console.log("' . $firstVar . '")</script>';
