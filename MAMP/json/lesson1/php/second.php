<?php
/**
 * Created by PhpStorm.
 * User: konstantinkuzmenko
 * Date: 01/06/2019
 * Time: 21:30
 */

// подключаем text.txt

include '../txt/text.txt';

// проверяем был ли GET запрос
if (isset($_GET)){

    // проверяем существует ли фаил и если его нет кидаем ошибку

try
    {
        $fileName = '../txt/text.txt';
        if ( !file_exists($fileName) ) {
            throw new Exception('File not found.');
        }

// если есть фаил читаем его и выводим


    if ($fh = fopen('text.txt', 'r')) {
        while (!feof($fh)) {
            $line = fgets($fh);
            echo $line;
        }
        fclose($fh);
    }

    // ловим ошибку и выводим ее

}catch (Exception $e){
    echo "Message: " . $e->getMessage();
  //  echo "";
    // echo "getCode(): " . $e->getCode();
  //  echo "";
  //  echo "__toString(): " . $e->__toString();
}
}