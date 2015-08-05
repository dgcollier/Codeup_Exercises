<?php

 class Rectangle
{
    public $height;
    public $width;

    public function __construct($height, $width)
    {
        $this->height = $height;
        $this->width = $width;
    }

    public function area()
    {
        return print_r('Area is: ' . $this->height * $this->width . PHP_EOL);
    }

    public function perimeter()
    {
        return print_r('Perimeter is: ' . (($this->height * 2) + ($this->width * 2)) . PHP_EOL);
    }
}