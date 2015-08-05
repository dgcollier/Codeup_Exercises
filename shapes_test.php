<?php

require_once "rectangle.php";
require_once "square.php";

$rectangle = new Rectangle(20,2);
echo $rectangle->getWidth() . PHP_EOL;
$rectangle->area();
$rectangle->perimeter();

$square = new Square(4);
echo $square->getHeight() . PHP_EOL;
$square->area();
$square->perimeter();

