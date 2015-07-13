<?php

$test = 1;
$firstCondition = 2;
$secondCondition = 3;

// while ($test <= 15) {
//     if ($test % 4 == 0) {
//         echo "$test is divisible by both 4 and 2\n";
//     } else if ($test % 2 == 0) {
//         echo "$test is divisible by 2\n";
//     } else {
//         echo $test . PHP_EOL;
//     }
        
//     $test++;
// }

while ($test <= 100) {
    if ($test % $firstCondition == 0 && $test % $secondCondition == 0) {
        echo "$test is divisible by both {$firstCondition} and {$secondCondition}\n";
    } else if ($test % $firstCondition == 0) {
        echo "$test is divisible by {$firstCondition}\n";
    } else if ($test % $secondCondition == 0) {
        echo "$test is divisible by {$secondCondition}\n";
    } else {
        echo $test . PHP_EOL;
    }

    $test++;
}

?>