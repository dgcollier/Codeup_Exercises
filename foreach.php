<?php 

$things = array('Sgt. Pepper', "11", null, array(1,2,3), 3.14, "12 + 7", false, (string) 11);

/* STEP ONE: Construct a loop that iterates through each value and outputs its type as either 
integer, float, boolean, array, null, or string. */
echo ' ' . PHP_EOL . 'STEP ONE:' .PHP_EOL;
foreach ($things as $type) {
    if (is_int($type)) {
        echo "{$type} is an integer.\n";
    } else if (is_float($type)) {
        echo "{$type} is a float.\n";
    } else if (is_bool($type)) {
        if (intval($type)) {
            echo "'True' is a boolean value.\n";
        } else {
            echo "'False' is a boolean value.\n";
        }   
    } else if (is_array($type)) {
        echo "Array ({$type[0]}, {$type[1]}, {$type[2]})\n";
    } else if (is_null($type)) {
        $newType = intval($type);
        echo "{$newType} is a null value.\n";
    } else if (is_string($type)) {
        echo "{$type} is a string.\n";
    }
}

/* STEP TWO: Construct a loop that iterates through each value and outputs only values with a 
type that is scalar. */
echo ' ' . PHP_EOL . 'STEP TWO:' .PHP_EOL;
foreach ($things as $type) {   
    if (is_scalar($type)) {
        if (is_bool($type)) {
            if (intval($type)) {
                echo "'True' is scalar.\n";
            } else {
                echo "'False' is scalar.\n";
            }      
        } else {
            echo "{$type} is scalar.\n";
        }
    }
}

/* STEP THREE: Create a loop that will echo out every value, including those nested in arrays. */
echo ' ' . PHP_EOL . 'STEP THREE:' .PHP_EOL;
foreach ($things as $type) {
    if (is_array($type)) {
        echo "Array ({$type[0]}, {$type[1]}, {$type[2]})\n";
    } else {
        echo "{$type}\n";
    }
}
echo ' ' . PHP_EOL . 'END OF CODE' . PHP_EOL;
?>