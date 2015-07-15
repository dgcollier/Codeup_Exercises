<?php

$a = 3;
$b = 10;

function add($a, $b)
{
    return $a + $b . PHP_EOL;
}

function subtract($a, $b)
{
    return $a - $b . PHP_EOL;
}

function multiply($a, $b)
{
    return $a * $b . PHP_EOL;
}

function divide($a, $b)
{
    return $a / $b . PHP_EOL;
}

function modulus($a, $b)
{
    return $a % $b . PHP_EOL;
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