<?php

class Square implements Shapes 
{
	public function getDescription(): string {
		return "A square is a quadrilateral with all sides equal and all angles 90 degrees.";
	}

	public function getAreaFormula(): string {
		return "Area = side * side";
	}

}