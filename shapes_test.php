<?php

require_once "rectangle.php";
require_once "square.php";

$shape = new Rectangle(5,10);
$shape->area();

$shape = new Rectangle(20,2);
$shape->area();

$shape = new Rectangle(3,57);
$shape->area();

$square = new Square(4,4);
$square->area();
$square->perimeter();

$square = new Square(5,5);
$square->area();
$square->perimeter();

$square = new Square(6,6);
$square->area();
$square->perimeter();