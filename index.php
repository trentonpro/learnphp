<?php
$test = true;
$test = false;
$test = true && false;
$test = true || false;
$test = !false;
var_dump($test);
$test = !(10 > 5);
var_dump($test);
$test = 10 < 5;
$test = 10 == 10;
$test = 10 === 10;
$test = 10 >= 10;
$test = 10 <= 10;
$test = 10 != 10;
$test = 10 !== 10;
$test = 10 == '10';
$test = 10 === '10';
$test = true && false || (true && !true);
//true and false or true and false
var_dump($test);
?>