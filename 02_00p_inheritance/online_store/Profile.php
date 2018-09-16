<?php 

class Profile {
	public $name;
	public $address;

	public function create_profile($name, $address){
		$this->name = $name;
		$this->address = $address;
	}
}