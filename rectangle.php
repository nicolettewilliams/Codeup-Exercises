<?php

class Rectangle {

    public $width;
    public $height;

    public function __construct($height, $width) 
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return $this->height*$this->width;
    }
}


// Method to determine if the rectangle
// is also a square.
function isSquare() {
    if ($this->width == $this->height) {
        return true; // Square
    } else {
       return false; 
    }
}


   