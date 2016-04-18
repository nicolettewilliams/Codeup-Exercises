<?php

fwrite(STDOUT, 'Starting Number: ');
$startNumber = (int)fgets(STDIN);
fwrite(STDOUT, 'End Number: ');
$endNumber = (int)fgets(STDIN);

for ($i = $startNumber; $i <= $endNumber; $i++) {
    echo $i . PHP_EOL;
};

