<?php

require_once 'rectangle.php';
require_once 'square.php';

$rectangle = new Rectangle(5,2);
var_dump($rectangle->area());

$square = new Square(10);
var_dump($square->area());
var_dump($square->perimeter());