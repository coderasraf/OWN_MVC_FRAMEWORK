<?php 

	/**
	 * Load class
	 */
	class Load{
		
		function __construct()
		{
			
		}

		// view
		public function view($fileName){
			include "app/views/$fileName".".php";
		}

	}