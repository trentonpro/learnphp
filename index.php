<?php

class Cat {
    use MakesSound;
}

class Dog {
    use HasSmell, MakesSound;
}

trait HasSmell {
    public $smell;
    public function sniff() {
        return 'Smells like ' . $this->smell;
    }
}

trait MakesSound {
    public $sound;
    public function noise() {
        return $this->sound;
    }
}

class MetalBox extends Box { //inherits from box with extend
    public $weight;

    public function mass(){
        return $this->volume() * $this->weight;
    }
}