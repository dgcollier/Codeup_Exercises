<?php 

require_once "rectangle.php";

class Square extends Rectangle
{
    public function __construct($height)
    {
        parent::setHeight($height);
        parent::setWidth($height);
    }

    public function area()
    {
        return print_r('Area is: ' . parent::getHeight() * parent::getWidth() . PHP_EOL);
    }

    public function perimeter()
    {
        return print_r('Perimeter is: ' . (parent::getHeight() * 4) . PHP_EOL);
    }
}