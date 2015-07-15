<?php  

// Create a for loop that shows all even numbers between 1 and 100 using continue.
for ($i = 1; $i < 100; $i++) {
    if ($i % 2 != 0) {
        continue;
    } else {
        echo $i . PHP_EOL;
    }
}


// Create a for loop that counts from 1 to 100 but stops after 10 using break.

for ($j = 1; $j < 100; $j++) {
    echo $j . PHP_EOL;
    if ($j == 10) {
        break;
    }
}

?>