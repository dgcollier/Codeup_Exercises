<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'David', 'Ryan'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'David', 'Ryan'];

function searchArray ($query, $array) {

    $result = array_search($query, $array);

            if ($result !== false) {
                return true;
            } else {
                return false;
            }
}


function compareArrays ($names, $compare) {
    $count = 0;
    foreach ($names as $name) {
        $result = array_search($name, $compare);

        if ($result !== false) {
            $count++;
        } 
    }

    return $count;
}

echo searchArray('Tina', $names) . PHP_EOL;
echo compareArrays($names, $compare) . PHP_EOL;
?>