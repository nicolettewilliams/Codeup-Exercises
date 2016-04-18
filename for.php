<?php
fwrite(STDOUT, 'Starting number: ');
$startNumber = (int)fgets(STDIN);
fwrite(STDOUT, 'Ending number: ');
$endNumber = (int)fgets(STDIN);
fwrite(STDOUT, 'Increment by: ');
$increment = (int)fgets(STDIN);

if($increment == 0){
    $increment = 1;
}

for($i = $startNumber; $i <= $endNumber; $i += $increment){
    echo $i . PHP_EOL;
}