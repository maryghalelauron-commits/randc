<?php

interface ShapeFactory
{
    public function createCircle(): Circle;

    public function createSquare(): Square;
}

class ConcreteShapeFactory implements ShapeFactory
{
    public function createCircle(): Circle
    {
        return new Circle();
    }

    public function createSquare(): Square
    {
        return new Square();
    }
}
