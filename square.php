<?php

require_once 'rectangle.php';

class Square extends Rectangle {

    public function area()
    {
        $this->height * 4;
    }

    public function perimeter() 
    {
        return 4 * $this->height;
    }
}