<?php

class Circle implements Shape
{
    public function getName(): string
    {
        return 'Circle<br><img src="assets/circle.jpg" alt="Circle" width="150">';
    }

    public function draw(): string
    {
        return 'A circle is a round shape where all points are the same distance from the center.';
    }
}