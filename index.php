<?php
$test = [1, 2, 'word', true];
var_dump($test[2]);
$test[2] = 'new word';
var_dump($test);
$test[4] = 'yuppity';
var_dump($test);
$test[] = 'yup';
var_dump($test);
array_push($test, 'pushed value');
var_dump($test);
$test = [
    'name' => 'tret',
    'age' => 25,
];
