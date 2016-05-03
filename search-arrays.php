<?php

function isFound($item, $array){
    $result = array_search($item, $array);
    if($result === false){
        return false . PHP_EOL;
    }else{
        return true . PHP_EOL;
    };
};

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

var_dump(isFound($item, $array));