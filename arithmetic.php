<?php

$a = 25;
$b = 5;

function add($a, $b){
    if (errorFunction($a, $b)){
        return $a + $b;
    };
};

function subtract($a, $b){
    if (errorFunction($a, $b)){
        return $a - $b;
    };
};

function multiply($a, $b){
    if (errorFunction($a, $b)){
        return $a * $b;
    };
};

function divide($a, $b){
    if(!$b){
        return "ERROR: Can not divide by 0. Undefined.";
    }else if (errorFunction($a, $b)){
        return $a / $b;
    };
};

function modulus($a, $b){
    if (errorFunction($a, $b)){
        return $a % $b;
    };  
};

function errorFunction($a, $b){
    if (is_numeric($a) && is_numeric($b)){
        return true;
    }else{
        echo "ERROR: Make sure inputs $a and $b are both numbers.";
        return false;
    };
};

echo add(t, 2) . PHP_EOL;
echo subtract(v, 2) . PHP_EOL;
echo multiply($a, $b) . PHP_EOL;
echo divide($a, r) . PHP_EOL;
echo modulus(6, 3) . PHP_EOL;