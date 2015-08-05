<?php 

require_once "rectangle.php";

class Square extends Rectangle
{
    public function perimeter()
    {
        return print_r(($this->width * 2) + ($this->height * 2) . PHP_EOL);
    }
}