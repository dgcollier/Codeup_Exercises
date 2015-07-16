<?php

$names = ['Tina', 'Dana', 'Mike', 'Amy', 'Adam'];

$compare = ['Tina', 'Dean', 'Mel', 'Amy', 'Michael'];

function findValue ($query, $array) {

$result = array_search($query, $array);

        if ($result !== false) {
            return true . PHP_EOL;
        } else {
            return false . PHP_EOL;
        }
}

echo findValue('Bob', $names);


?>