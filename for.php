<?php

fwrite(STDOUT, 'Enter start number:' . PHP_EOL);
$startNum = intval(fgets(STDIN));
fwrite(STDOUT, 'Enter end number:' . PHP_EOL);
$endNum = intval(fgets(STDIN));
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