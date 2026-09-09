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

class MetalBox extends Box { //inherits from box with extend
    public $weight;

    public function mass(){
        return $this->volume() * $this->weight;
    }
}