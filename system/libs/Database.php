<?php 
/**
 * Database
 */
class Database extends PDO{
	function __construct($dsn, $user, $pass){
		parent::__construct($dsn, $user, $pass);
	}

	// select query 
	public function select($sql, $data = array(), $fetchStyle = PDO::FETCH_ASSOC){
		$stmt = $this->prepare($sql);
		foreach($data as $key => $value){ 
			$stmt->bindParam($key, $value);
		}
	    $stmt->execute();
	    return $stmt->fetchAll();
	}


	// insert query
	public function insert($table, $data){
		$keys = implode(',', array_keys($data));
		$values = ':'.implode(', :', array_keys($data));
		$insert = "INSERT INTO $table($keys) VALUES ($values)";
		$stmt   = $this->prepare($insert);
		foreach ($data as $key => $value){
			$stmt->bindParam(":$key", $value);
		}
		return $stmt->execute();
	}

	// Update method
	public function update($table, $data, $cond){
		$updateKeys = NULL;
		foreach($data as $key => $value){
			$updateKeys .= "$key=:$key,";
		}
		$updateKeys = rtrim($updateKeys, ',');
		$sql = "UPDATE $table SET $updateKeys WHERE $cond";
		$stmt = $this->prepare($sql);
		foreach ($data as $key => $value) {
			$stmt->bindParam(":$key", $value);
		}
		return $stmt->execute();
	}

	// delete method
	public function delete($table, $cond){
		$sql = "DELETE FROM $table WHERE $cond LIMIT 1";
		$stmt = $this->prepare($sql);
		return $stmt->execute();
	}
}