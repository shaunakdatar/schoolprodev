<?php

/**
* 
*/
class Connectdb 
{
	protected $dbhost;
	protected $dbuser;
	protected $dbname;
	protected $dbpass;
	function __construct()
	{
		# code...
		$this->dbhost = 'localhost';
		$this->dbuser = 'root';
		$this->dbname = 'attendance_system';
		$this->dbpass = 'mysql';
	}

	function makeconnection(){
		try {
			$dbh = new PDO("mysql:host=$this->dbhost;dbname=$this->dbname",$this->dbuser,$this->dbpass);
			$dbh->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
			return $dbh;
		} catch (Exception $e) {
			return $e->getMessage();
		}
	}
}