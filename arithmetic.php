<?php

$a = 10;
$b = 2;

function checkArguments($a, $b, $dividing = false) {
    if (is_numeric($a) && is_numeric($b)) {
        if ($dividing && $b == 0) {
            echo 'ERROR: Cannot divide by 0!' . PHP_EOL;
            return false;
        }
        return true;
    } else {
        echo "ERROR: Both '{$a}' and '{$b}' must be numbers." . PHP_EOL;
    }
}

function add($a, $b) {
    if (checkArguments($a, $b)) {
        return $a + $b . PHP_EOL;
    }
}

function subtract($a, $b) {
    if (checkArguments($a, $b)) {
        return $a - $b . PHP_EOL;
    }
}

function multiply($a, $b) {
    if (checkArguments($a, $b)) {
        return $a * $b . PHP_EOL;
    }
}

function divide($a, $b) {
    if (checkArguments($a, $b, true)) {
            return $a / $b . PHP_EOL;
    }
}

function modulus($a, $b) {
    if (checkArguments($a, $b, true)) {
            return $a % $b . PHP_EOL;
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