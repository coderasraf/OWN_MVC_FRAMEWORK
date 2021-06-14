<?php 

	/**
	 * category
	 */
	class Category extends DController{
		
		public function __construct(){
			parent::__construct();
		}

		// Getting all categories list
		public function category(){
			$data = array();
			$table = 'tbl_users';
			$catModel = $this->load->model('CatModel');
			$data['cat'] = $catModel->catList($table);
			$this->load->view('category', $data);
		}

		// Getting category by id
		public function getCategoryByID(){
			$data = array();
			$table = 'tbl_users';
			$id    = 3;
			$catModel = $this->load->model('CatModel');
			$data['catById'] = $catModel->catByID($table, $id);
			$this->load->view('catById', $data);
		}

		// Add category view
		public function addCategory(){
			$this->load->view('addCategory');
		}

		// Inserting category
		public function insertCat(){
			$name = $_POST['name'];
			$email = $_POST['email'];
			$table  = 'tbl_users';
			$data   = array(
				'name' => $name,
				'email'=> $email
			);
			$catModel  = $this->load->model('CatModel');
			$result = $catModel->insertCat($table, $data);
			$mdata = array();
			if ($result == 1) {
				$mdata['msg'] = 'Data Inserted Successfully!';
			}else{
				$mdata['msg'] = 'Data not inserted Successfully!';
			}
			$this->load->view('addCategory', $mdata);
		}

		// Category update views
		public function catUpdate(){
			$data = array();
			$table = "tbl_users";
			$cond  = "7";
			$catModel = $this->load->model('CatModel');
			$data['getdata'] = $catModel->catByID($table, $cond);
			$this->load->view('catupdate', $data);
		}

		// Updating category
		public function updateCategory(){
			$table = "tbl_users";
			$cond  = "id=3";
			$data = array(
				"name" => 'Hass Asraf',
				"email" => 'halavai'
			);
			$catModel  = $this->load->model('CatModel');
			$catModel->updateCat($table, $data, $cond);
		}


		// Delete Category
		public function deleteCategory(){
			$table = "tbl_users";
			$cond  = "id=3";
			$catModel = $this->load->model('CatModel');
			$catModel->deleteCat($table, $cond);
		}
	
	}



