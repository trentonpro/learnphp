<?php

function hello() {
    var_dump('Hello');
}

hello();
hello();
hello();

function helloNameandage ($name, $age, $debt) {
    var_dump("Hello, $name. You are $age years old. You owe child support of $debt dollars.");
}

helloNameandage('Dale', 41, 115000);

$test = function (){

};

var_dump($test);

$numbers = [1,2,3,4,5];
$squares = array_map(function ($n) {
    return $n * $n;
}, $numbers);
$squares = array_map(fn ($n) => $n * $n, $numbers);
var_dump($squares);

function cube($a) {
    if($a < 0) {
        return 'Negative.';
    }
    return $a * $a * $a;
}

var_dump(cube(4));

$answer = cube(5);
$text = "cube of 5 is $answer";
echo $text;