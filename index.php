<?php

class Box {
    public $width;
    public $height;
    public $length;
    public $isOpen;
    public $hasBeenOpened;

    public function open() {
        $this->isOpen = true;
        $this->hasBeenOpened = true;
    }

    public function close() {
        $this->isOpen = false;
    }

   public function volume() {
        return $this->height * $this->width * $this->length;
    }
}

$num = 1;
$num =  &$num1; //pointer pass by reference
$num1 = 2;
var_dump($num1, $num2);

$box1 = new Box();
$box1->width = 1;
$box2 = clone $box1; // use clone to create a copy of the object
$box2->width = 2;
var_dump($box1, $box2);