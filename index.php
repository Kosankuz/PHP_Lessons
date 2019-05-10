<?php
/**

 * User: konstantinkuzmenko
 * Date: 10/05/2019
 * Time: 22:16
 */

// require the Faker autoloader
require_once 'vendor/fzaninotto/faker/src/autoload.php';
// alternatively, use another PSR-4 compliant autoloader

// use the factory to create a Faker\Generator instance
$faker = Faker\Factory::create();

// generate data by accessing properties
echo nl2br($faker->name);
// 'Lucy Cechtelar';



echo nl2br($faker->address);
// "426 Jordy Lodge
// Cartwrightshire, SC 88120-6700"


echo nl2br($faker->text);
// Dolores sit sint laboriosam dolorem culpa et autem. Beatae nam sunt fugit
// et sit et mollitia sed.
// Fuga deserunt tempora facere magni omnis. Omnis quia temporibus laudantium
// sit minima sint.