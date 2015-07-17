<?php  

// Converts array into list n1, n2, ..., and n3

function humanizedList($array) {
// Your solution goes here!
    sort($array);
    $arrayPop = array_pop($array);
    array_push($array, "and $arrayPop");

    $humanizedString = implode(', ', $array);

    return $humanizedString;

}

// List of famous peeps
$physicistsString = 'Gordon Freeman, Samantha Carter, Sheldon Cooper, Quinn Mallory, Bruce Banner, Tony Stark';

// Converts the string into an array
$physicistsArray = explode(', ', $physicistsString);

// Humanize that list
$famousFakePhysicists = humanizedList($physicistsArray);

// Output sentence
echo "Some of the most famous fictional theoretical physicists are {$famousFakePhysicists}.\n";

?>