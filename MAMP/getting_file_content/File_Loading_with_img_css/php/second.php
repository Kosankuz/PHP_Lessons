<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 01/06/2019
 * Time: 21:30
 */
include '../txt/text.txt';

if (isset($_GET)){

    if ($fh = fopen('text.txt', 'r')) {
        while (!feof($fh)) {
            $line = fgets($fh);
            echo $line;
        }
        fclose($fh);
    }


}