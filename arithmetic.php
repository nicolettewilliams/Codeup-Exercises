<?php

$a = 25;
$b = 5;

function add($a, $b) {
    return $a + $b . PHP_EOL;
};

function subtract($a, $b) {
    return $a - $b . PHP_EOL;
};

function multiply($a, $b) {
    return $a * $b . PHP_EOL;
};

function divide($a, $b) {
    return $a / $b . PHP_EOL;
};

function modulus($a, $b) {
    return $a % $b . PHP_EOL;
};

echo add($a , $b);
echo subtract($a , $b);
echo multiply($a , $b);
echo divide($a , $b);
echo modulus($a, $b);

