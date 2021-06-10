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
			$catModel = $this->load->model('CatModel');
			$catList = $catModel->catList();
		}


	}
	