<?php

do { 
    fwrite(STDOUT, 'Enter a start number:' . PHP_EOL);
    $startNum = trim(fgets(STDIN)); 
} while (!(is_numeric($startNum)));

do {
    fwrite(STDOUT, 'Enter a LARGER end number:' . PHP_EOL);
    $endNum = trim(fgets(STDIN)); 
} while (!(is_numeric($endNum)) || $endNum <= $startNum);

fwrite(STDOUT, 'Enter an number to increment by:' . PHP_EOL);
$increment = intval(fgets(STDIN));

if ($increment == 0) {
    $increment = 1;
}

for ($i = $startNum; $i <= $endNum; $i += $increment) {
    sleep(1);
    echo trim($i) . PHP_EOL;
}

?>