<?php

class Rectangle
{
    private $width;
    private $height;
    public function __construct($width, $height)
    {
        $this->width = $width;
        $this->height  = $height;
    }
    public function perimeter(){
        $perimeter = ($this->getHeight() * 2) + ($this->getWidth() *2);
    }
    
    public function area()
    {
       $area = $this->getWidth() * $this->getHeight();
       return $area;
    }
    public function getHeight()
    {
        return $this->height;
    }
    public function getWidth()
    {
        return $this->width;
    }
}