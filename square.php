<?php 

require_once "rectangle.php";

class Square extends Rectangle
{
    public function __construct($height)
    {
        $this->height = $height;
        $this->width = $height;
    }

    public function perimeter()
    {
        return print_r('Perimeter is: ' . ($this->height * 4) . PHP_EOL);
    }
}