<?php
 
class Circle implements Shapes
{
    public function getDescription(): string {
        return "A circle is a round shape with all points equidistant from the center.";
    }

    public function getAreaFormula(): string {
        return "Area = π * radius²";
    }

}

 