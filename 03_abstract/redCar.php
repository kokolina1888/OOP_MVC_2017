<?php 

class redCar {
	
	static public $color = 'red';

	static public function get_color(){
		return static::$color;
	}

	//  public function get_color(){
	// 	return self::$color;
	// }

	
}

class Toyota extends redCar {
	
	static public $color = 'blue';


	public function get(){
		return self::$color;
		
	}

}

echo redCar::$color;

echo Toyota::$color;
echo '<p></p>';

echo Toyota::get();
echo '<p></p>';

echo Toyota::get_color();