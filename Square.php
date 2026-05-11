<?php

class Square implements Shape
{
    public function getName(): string
    {
        return 'Square<br><img src="assets/square.png" alt="Square" width="150">';
    }

    public function draw(): string
    {
        return 'A square is a shape with four equal sides and four right angles.';
    }
}
