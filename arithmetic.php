<?php

$a = 3;
$b = 0;

function add($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a + $b . PHP_EOL;
    } else {
        return 'ERROR: Both arguments must be numbers' . PHP_EOL;
    }
}

function subtract($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a - $b . PHP_EOL;
    } else {
        return 'ERROR: Both arguments must be numbers' . PHP_EOL;
    }
}

function multiply($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        return $a * $b . PHP_EOL;
    } else {
        return 'ERROR: Both arguments must be numbers' . PHP_EOL;
    }
}

function divide($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        if ($b == 0) {
            echo 'ERROR: Cannot divide by zero' . PHP_EOL;
        } else {
            return $a / $b . PHP_EOL;
        }
    } else {
        return 'ERROR: Both arguments must be numbers' . PHP_EOL;
    }
}

function modulus($a, $b) {
    if (is_numeric($a) && is_numeric($b)) {
        if ($b == 0) {
            echo 'ERROR: Cannot divide by zero' . PHP_EOL;
        } else {
            return $a % $b . PHP_EOL;
        }
    } else {
        return 'ERROR: Both arguments must be numbers' . PHP_EOL;
    }
}

// Add code to test your functions here
echo 'Passing numbers:' . PHP_EOL;
echo add(5, 10);
echo subtract(10, 5);
echo multiply(10, 5);
echo divide(10, 5);
echo modulus(10, 2);

echo 'Passing global variables:' . PHP_EOL;
echo add($a, $b);
echo subtract($a, $b);
echo multiply($a, $b);
echo divide($a, $b);
echo modulus($a, $b);