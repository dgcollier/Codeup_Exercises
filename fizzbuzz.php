<?php
/*Write a program that prints the numbers from 1 to 100. 
But for multiples of three print “Fizz” instead of the number 
and for the multiples of five print “Buzz”. For numbers which 
are multiples of both three and five print “FizzBuzz”. */

// FOR LOOP EXAMPLE

// for ($i = 1; $i <= 100; $i++) {
//     if ($i % 5 == 0 && $i % 3 == 0) {
//         echo 'FizzBuzz' . PHP_EOL;
//     } else if ($i % 5 == 0) {
//         echo 'Buzz' . PHP_EOL;
//     } else if ($i % 3 == 0) {
//         echo 'Fizz' . PHP_EOL;
//     } else {
//         echo $i . PHP_EOL;
//     }
// }

// WHILE LOOP EXAMPLE

// $i = 1;
// while ($i < 100) {
//     $i++;

//     if ($i % 5 == 0 && $i % 3 == 0) {
//             echo 'FizzBuzz' . PHP_EOL;
//         } else if ($i % 5 == 0) {
//             echo 'Buzz' . PHP_EOL;
//         } else if ($i % 3 == 0) {
//             echo 'Fizz' . PHP_EOL;
//         } else {
//             echo $i . PHP_EOL;
//         }
// }

// DO WHILE LOOP EXAMPLE

$i = 1;
do {
    if ($i % 5 == 0 && $i % 3 == 0) {
            echo 'FizzBuzz' . PHP_EOL;
        } else if ($i % 5 == 0) {
            echo 'Buzz' . PHP_EOL;
        } else if ($i % 3 == 0) {
            echo 'Fizz' . PHP_EOL;
        } else {
            echo $i . PHP_EOL;
        }
    $i++;

} while ($i <= 100)

?>