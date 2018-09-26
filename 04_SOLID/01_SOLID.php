<?php 
class Circle {
	public $radius;
	
	public function __construct($radius) {
		$this->radius = $radius;
	}
	
	public function calc_area() {
		//логика за изчисляване на площта
	} 
}

class Square {
	
	public $length;
	
	public function __construct($length) {
		$this->length = $length;
	}
	
	public function calc_area() {
		//логика за изчисляване на площта
	} 
}

class AreaCalculator {
	
	protected $shapes;
	
	public function __construct($shapes = []) {
		$this->shapes = $shapes;
	
	}
	
	public function sum() {
		// logic to sum the areas
	}
	
	public function output() {
		return "Sum of the areas of provided shapes: ". $this->sum();
	}
}

//CREATE OBJ AND SUM THE AREAS, TRY TO GET REAL RESULTS

// $circle = new Circle(4);
// $square = new Square(5);

$geom_fig = [new Circle(4), new Square(5)];

$area_calculator = new AreaCalculator($geom_fig);

var_dump($area_calculator);

