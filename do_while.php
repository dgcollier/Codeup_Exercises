<?php

$a = 0;

do {
    echo $a . PHP_EOL;
    $a += 2;
} while ($a <= 100);

$a = 100;

do {
    echo $a . PHP_EOL;
    $a -= 5;
} while ($a >= -10);

?>