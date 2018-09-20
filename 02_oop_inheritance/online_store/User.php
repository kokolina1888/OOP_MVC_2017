<?php 

class User {
	public $profile;
	public $username;
	public $type;

	
	public function register($u){
		$this->username = $u;		
		$this->profile = new Profile();
	}
	public function set_type($t){
		$this->type = $t;
	}
}