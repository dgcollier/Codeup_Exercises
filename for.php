<?php

fwrite(STDOUT, 'Enter start number:' . PHP_EOL);
$startNum = fgets(STDIN);
fwrite(STDOUT, 'Enter end number:' . PHP_EOL);
$endNum = fgets(STDIN);

for ($i = $startNum; $i <= $endNum; $i += 1) {
    sleep(1);
    echo trim($i) . PHP_EOL;
}

?>