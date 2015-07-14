<?php  

$a = 0;
$b = 1;
// echo $a . PHP_EOL;
// echo $b . PHP_EOL;
$sum = 0;

while ($a < 4000000 && $b < 4000000) {

    $a+=$b;
    $b+=$a;
    // echo $a . PHP_EOL;
    // echo $b . PHP_EOL;
    if ($a % 2 == 0) {
        $sum+=$a;
    } else if ($b % 2 == 0) {
        $sum+=$b;
    }   
}

echo $sum . PHP_EOL;

?>