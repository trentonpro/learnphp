<?php
$test = 10;
$test = 10 + 2;
$test = 10 - 2;
$test = 10 * 2;
$test = 10 / 2;
$test = $test - 1; //samad vaartused
$test -= 1; //samad vaartused
$test += 1; //samad vaartused
$test *= 2; //samad vaartused
$test /= 2; //samad vaartused
$test = 10 % 3; //samad vaartused
$test++; //tahendab +1
$test--; // tahendab -1
$test = (10 + (2 - 3) * 4) / 2; //sulud on olulised, sest need muudavad arvutuste järjekorda
$test %= 2;
$test = 2 ** 4; //2 astmel 4
$test = sqrt(16); //ruutjuur
var_dump($test);
?>