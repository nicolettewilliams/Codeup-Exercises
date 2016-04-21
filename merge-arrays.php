<?php

function combineArrays($compare, $names){
    
    foreach($names as $index => $name) {
        if($names[$index] == $compare[$index]){
            $new[] = $names[$index];
        }else{
            $new[] = $names[$index];
            $new[] = $compare[$index];
        };
    };
    print_r($new). PHP_EOL;
};

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];
combineArrays($compare, $names);