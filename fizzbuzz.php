<?php

foreach(range(1, 100) as $number) {
    if ($number % 3 != 0 && $number % 5 != 0) {
        echo $number . PHP_EOL;
        continue;
    }
    if ($number % 3 == 0) echo 'Fizz';
    if ($number % 5 == 0) echo 'Buzz';
    echo PHP_EOL;
};

for ($i = 1; $i <= 100; $i++)
{
    if($i % 3 == 0 && $i % 5 ==0){
        echo "FizzBuzz" . PHP_EOL;
    }
    else if($i % 3 == 0){
        echo "Fizz" . PHP_EOL;
    }
    else if($i % 5 == 0){
        echo "Buzz" . PHP_EOL;
    }
    else {
        echo $i . PHP_EOL;
    }
};

$i = 1;

while ($i <= 100) {

    $r = '';

    if ($i % 3 === 0) {
        $r .= 'Fizz';
    }

    if ($i % 5 === 0) {    
        $r .= 'Buzz';        
    }

    if (!$r) {
        $r = $i;
    }

    echo "$r\n";
    ++$i;
};