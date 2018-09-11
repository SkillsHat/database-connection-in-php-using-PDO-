<?php

Class Database {
	private $hostname = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname   = "dbname";
  
	private $connect;
	private $dsn;
  
	private $options = [
		 PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
	];

	public function getConnection() {
		try {
			$this->connect = null;
			$this->dsn = "mysql:host=" . $this->hostname . ";dbname=" . $this->dbname;
			$this->connect = new PDO($this->dsn, $this->username, $this->password, $this->options);
			
		} catch(PDOException $e){
			echo "Connection Error : " . $e->getMessage();
		}

		return $this->connect;
	}
}
