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
        return print_r($this->height * $this->width . PHP_EOL);
    }
}