<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function combineArrays($array1, $array2) {
    $combined = [];

    foreach ($array1 as $key => $value) {

        array_push($combined, $array1[$key]);

        if ($array1[$key] != $array2[$key]) {
            array_push($combined, $array2[$key]);
        }
    }

   return $combined; 
}

print_r(combineArrays($names, $compare));

?>