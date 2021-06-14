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

	}
	