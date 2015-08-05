<?php

 class Rectangle
{
    private $height;
    private $width;

    public function __construct($height, $width)
    {
        $this->setHeight($height);
        $this->setWidth($width);
    }

    protected function setHeight($height)
    {
        $this->height = intval(trim($height));
    }

    protected function setWidth($width)
    {
        $this->width = intval(trim($width));
    }

    public function getHeight()
    {
        return $this->height;
    }

    public function getWidth()
    {
        return $this->width;
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