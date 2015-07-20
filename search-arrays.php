<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam', 'David', 'Ryan'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael', 'David', 'Ryan'];

function searchArray ($query, $array) 
{

    $result = array_search($query, $array);

            if ($result !== false) {
                return true;
            } else {
                return false;
            }
}

function compareArrays ($queries, $comparison) 
{
    $count = 0;
    foreach ($queries as $query) {
        $result = array_search($query, $comparison);

        if ($result !== false) {
            $count++;
        } 
    }

    return $count;
}

echo searchArray('Tina', $names) . PHP_EOL;
echo searchArray('Bob', $names) . PHP_EOL;
echo compareArrays($names, $compare) . PHP_EOL;
?>