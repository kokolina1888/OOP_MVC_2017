<?php 

class User {
	public $profile;
	public $username;

	public function register($username){
		$this->username = $username;
		$this->profile = new Profile();
	}
}