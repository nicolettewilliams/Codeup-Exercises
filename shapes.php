<?php

require_once 'Rectangle.php';
require_once 'Square.php';

$rectangle = new Rectangle(5, 8);
echo 'rectangle area: ' . $rectangle->area() . PHP_EOL;

$square = new Square(4);
echo 'square perimeter: ' . $square->perimeter() . PHP_EOL;
