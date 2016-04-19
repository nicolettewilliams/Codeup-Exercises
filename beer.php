<?php

fwrite(STDOUT, 'What are you drinking? ');
$drink = trim(fgets(STDIN));
$plural = 's';

$number = 99;
while ($number >= 1) {
    echo "$number bottle$plural of $drink on the wall,\n";
    echo "{$number} bottle$plural of $drink!\n";
    echo "Take one down, pass it around!\n";
    $number--;

    if ($number - 1 == 1) {
        $plural = '';
    };

    if ($number >1) {
        echo ($number - 1). "bottle$plural of $drink on the wall,";
    } else {
        echo "No more bottles of $drink on the wall!\n";
    };
};