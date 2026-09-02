<?php
$int = 10;
$test = 50;
$test = "Hello";
$test = false;
$test = null;
$fakk = true;
var_dump($test);
var_dump($fakk);
$test = [1, 2, "three", true];
var_dump($test);
$test = new stdClass();
$test->name = "John";
var_dump($test);
$num1 = 10;
$num2 = 20;
var_dump($num1 === $num2);
?>