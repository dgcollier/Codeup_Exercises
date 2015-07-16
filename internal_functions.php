<?php

// TODO: Create your inspect() function here

function inspect ($a) {

    switch (gettype($a)) {
        case 'integer':
            return "The integer is $a." . PHP_EOL;
            break;
        case 'double':
            return "The float is $a." . PHP_EOL;
            break;
        case 'boolean':
            if(empty($a)) {
                return 'The boolean value is FALSE.' . PHP_EOL;
            } else {
                return 'The boolean value is TRUE.' . PHP_EOL;
            } break;
        case 'string':
            if (empty($a)) {
                return 'The string is empty.' . PHP_EOL;
            } else {
                return "The string is '$a'." . PHP_EOL;
            } break;
        case 'array':
            if (empty($a)) {
                return 'The value is an empty array.' . PHP_EOL;
            } else {
                return 'The value is an array.' . PHP_EOL;
            } break;
        case 'NULL':
            return 'The value is NULL.' . PHP_EOL;
            break;
        default:
            return 'ERROR' . PHP_EOL;
    }
}

// Do not modify these variables!
$string1 = "I'm a little teapot";
$string2 = ''; // SET
$array1 = [];
$array2 = [1, 2, 3]; 
$bool1 = true;
$bool2 = false;
$num1 = 0;
$num2 = 0.0;
$num3 = 12;
$num4 = 14.4;
$null = NULL;

// TODO: After each echo statement, use inspect() to output the variable's type and its value
echo 'Inspecting $num1:' . PHP_EOL;
sleep(1);
echo inspect(intval($num1)) . PHP_EOL;
sleep(1);
echo 'Inspecting $num2:' . PHP_EOL;
sleep(1);
echo inspect(floatval($num2)) . PHP_EOL;
sleep(1);
echo 'Inspecting $num3:' . PHP_EOL;
sleep(1);
echo inspect($num3) . PHP_EOL;
sleep(1);
echo 'Inspecting $num4:' . PHP_EOL;
sleep(1);
echo inspect($num4) . PHP_EOL;
sleep(1);
echo 'Inspecting $null:' . PHP_EOL;
sleep(1);
echo inspect($null) . PHP_EOL;
sleep(1);
echo 'Inspecting $bool1' . PHP_EOL;
sleep(1);
echo inspect($bool1) . PHP_EOL;
sleep(1);
echo 'Inspecting $bool2' . PHP_EOL;
sleep(1);
echo inspect($bool2) . PHP_EOL;
sleep(1);
echo 'Inspecting $string1' . PHP_EOL;
sleep(1);
echo inspect($string1) . PHP_EOL;
sleep(1);
echo 'Inspecting $string2' . PHP_EOL;
sleep(1);
echo inspect($string2) . PHP_EOL;
sleep(1);
echo 'Inspecting $array1' . PHP_EOL;
sleep(1);
echo inspect($array1) . PHP_EOL;
sleep(1);
echo 'Inspecting $array2' . PHP_EOL;
sleep(1);
echo inspect($array2) . PHP_EOL;