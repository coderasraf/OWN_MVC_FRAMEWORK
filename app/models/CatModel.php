<?php 
	
	/**
	 * CatModel
	 */
	class CatModel extends DModel{
		
		public function __construct(){
			parent::__construct();
		}

		// Selecting categorylist
		public function catList($table){
			$sql  = "SELECT * FROM $table";
			return $this->db->select($sql);
		}

		// selecting category by id
		public function catByID($table, $id){
			$sql  = "SELECT * FROM $table WHERE id=:id";
			$data = array(':id' => $id);
			return $this->db->select($sql, $data);
		}

		// insert category
		public function insertCat($table, $data){
			return $this->db->insert($table, $data);
		}
		
		// update category model method
		public function updateCat($table, $data, $cond){
			return $this->db->update($table, $data, $cond);
		}

		// Delete category by id
		public function deleteCat($table, $cond){
			return $this->db->delete($table, $cond);
		}

	}



