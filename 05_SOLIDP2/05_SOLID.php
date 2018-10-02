<?php 


// class PasswordReminder {
// 	private $dbConnection;

// 	public function __construct(MySQLConnection $dbConnection) {
// 		$this->dbConnection = $dbConnection;
// 	}
// }



interface DBConnectionInterface {
	public function connect();
}   


class MySQLConnection implements DBConnectionInterface 
{
	public function connect() {
		return //конкретната реализация на връзката към БД
	}
}

class PasswordReminder {
	private $dbConnection;
	
	public function __construct(DBConnectionInterface $dbConnection) {
		$this->dbConnection = $dbConnection;
	}
} 