<?php 
	/**
	 * Welcome php
	 */
	class Index extends DController{

		function __construct(){
			parent::__construct();
		}

		public function Home(){
			$this->load->view('home');
		}

		public function category(){
			$data = array();
			$catModel = $this->load->model('CatModel');
			$data['cat'] = $catModel->catList();
			$this->load->view('category', $data);
		}


	}
	