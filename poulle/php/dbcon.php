<?php

class dbconn
{
	private $servername = "localhost";
	private $username = "root";
	private $password = "";
	private $dbname = "poule-systeem";
	protected $mysqli;

	public function __construct()
	{
		$this->mysqli= new mysqli($this->servername, $this->username, $this->password, $this->dbname);
	}
}
?>