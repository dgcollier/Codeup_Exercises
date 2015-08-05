<?php

require_once "rectangle.php";
require_once "square.php";

$rectangle = new Rectangle(5,10);
$rectangle->area();
$rectangle->perimeter();

$rectangle = new Rectangle(20,2);
$rectangle->area();
$rectangle->perimeter();

$rectangle = new Rectangle(3,57);
$rectangle->area();
$rectangle->perimeter();

$square = new Square(4);
$square->area();
$square->perimeter();

$square = new Square(5);
$square->area();
$square->perimeter();

$square = new Square(6);
$square->area();
$square->perimeter();