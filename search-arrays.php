<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function isFound($item, $array){
    $result = array_search($item, $array);
    if($result === false){
        return 'FALSE' . PHP_EOL;
    }else{
        return 'TRUE' . PHP_EOL;
    };
};

echo isFound('Tina', $names);
echo isFound('Bob', $compare);

if(isFound('Mel', $names)){
    echo 'True' . PHP_EOL;
}else{
    echo 'False' . PHP_EOL;
}
if(isFound('Mel', $compare)){
    echo 'True' . PHP_EOL;
}else{
    echo 'False' . PHP_EOL;
}
function numberOfMatches($array1, $array2){
    $matches = 0;
    foreach ($array1 as $value) {
        $match = array_search($value, $array2);
        if($match !== false){
            $matches++;
        }
    }
    return $matches . PHP_EOL;
}
echo numberOfMatches($names, $compare);