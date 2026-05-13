<?php

class factory 
{
    public function findShape(string $shapetype): ?Shapes
    {
        $shapetype = strtolower(trim($shapetype));
        switch ($shapetype) {
            case 'circle':
                return new Circle();
            case 'square':
                return new Square();
            default:
                return null;
        }
    }
}