<?php 
	
	
	require_once ('../model/muktijurda.php');
	
	 class List_show {

	

		public function display_muktijurda_info($id){

			  $objAdmin = new Muktijurda();
			 return $objAdmin->get_muktijurda_info($id);
		}


		public function display_all_muktijurda_info(){

			  $objAdmin = new Muktijurda();
			 return $objAdmin->get_all_muktijurda_info();
		}

	 }	

 ?>