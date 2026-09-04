<?php
$test = 'hello';
$test = 'hello' . 'world';
$test .= '!'; 
$name = 'John';
$age = '30';
$test = $name . ' is ' . $age . ' years old.';
$test = "$name is $age years old.";
var_dump($test);
$test = "hello\n\nworld";
var_dump($test);
?>