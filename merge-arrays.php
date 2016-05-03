<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];
$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combineArrays($compare, $names){
    $new = [];
    
    foreach($names as $index => $name) {
        $check = array_shift($compare);
        if($name == $check){
            $new[] = $name;
        }else{
            $new[] = $name;
            $new[] = $check;
        };
    };
    print_r($new). PHP_EOL;
};

combineArrays($compare, $names);