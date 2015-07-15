<?php

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
echo add(5, 10);
echo subtract(10, 5);
echo multiply(10, 5);
echo divide(10, 5);
echo modulus(10, 2);
