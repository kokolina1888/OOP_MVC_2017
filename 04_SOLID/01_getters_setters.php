<?php 

class Person {
	private $name;
	
	public function set_name($value){ 

		$this->name = $value;

	}

	public function get_name() {

		return $this->name;

	}
}



$person = new Person();

// $person->name = 'Pesho';
//results Cannot access private property Person::$name in ....
//but

$person->set_name('Pesho');
// //no error
// var_dump($person);
echo $person->get_name();
// //no error
