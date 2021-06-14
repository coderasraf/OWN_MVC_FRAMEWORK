<?php 
/**
 * DModel
 */
class DModel{
	protected $db = array();
	function __construct(){
		$dsn  = "mysql:dbname=db_lr;host=localhost";
		$user = "root";
		$pass = "";
		$this->db = new Database($dsn, $user, $pass);
	}
}