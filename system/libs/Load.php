<?php 

	/**
	 * Load class
	 */
	class Load{
		// view
		public function view($fileName){
			include "app/views/$fileName".".php";
		}

		public function model($modelName){
			include "app/models/".$modelName.".php";
			return new $modelName();
		}

	}