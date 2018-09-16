<?php

class User {

	private $username;
	public $password;
	public $role = 'plain user';
	protected $count = 0;

	public function __construct($role){
		
		$this->count++;
		$this->role = $role;

	}

	public function set_username($param){
		$this->username = $param;
	}

	public function print_username(){
		echo $username;
	}

	public function create(){

	}

	public function update(){

	}

	public function read(){

	}

	public function delete(){

	}


	
}