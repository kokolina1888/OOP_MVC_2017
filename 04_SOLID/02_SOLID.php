<?php 
interface CalculateArea {
	public function calc_area();
}

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
		// return result - number
	} 
}

class AreaCalculator {
	
	protected $shapes;
	protected $sum = 0;
	
	public function __construct($shapes = []) {
		$this->shapes = $shapes;
	
	}
	
	public function total_sum() {
		foreach ($this->shapes as $shape) {
			$this->sum += $shape->calc_area();
		}

	}
	
	public function output() {
		return "Sum of the areas of provided shapes: ". $this->total_sum();
	}
}

//CREATE OBJ AND SUM THE AREAS, TRY TO GET REAL RESULTS

// $circle = new Circle(4);
// $square = new Square(5);

$geom_fig = [new Circle(4), new Square(5), new Square(20), new Square(2000)];

$area_calculator = new AreaCalculator($geom_fig);

$area_calculator->output();
var_dump($area_calculator);

