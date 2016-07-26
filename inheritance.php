<?php

abstract class Shape
{
    protected $color;

    public function __construct($color = 'red')
    {
        $this->color = $color;
    }

    public function getColor()
    {
        return $this->color;
    }

    //this is like a contract, making sure that each
    //class that extends the Shape class has an getArea method
    abstract protected function getArea();
}

class Square extends Shape
{
    protected $length = 4;

    public function getArea()
    {
        return pow($this->length, 2);
    }

}

class Triangle extends Shape
{
    protected $base = 4;

    protected $height = 7;

    public function getArea()
    {
        return .5 * $this->base * $this->height;
    }
}

class Circle extends Shape
{
    public function getArea()
    {

    }
}

$Square = new Square('green');
echo $Square->getColor();