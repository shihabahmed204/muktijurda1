<?php 


    $servername="localhost";
	$username="root";
	$password="";
	$dbname="muktijurda";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql;
	
	

	 class Muktijurda {


	
		public function register_muktijurda($muktijurda_name, $award , $birthday_place , $education_and_work, $roal_in_war, $other_award , $nationality,$image ){

			$GLOBALS['sql'] = "INSERT INTO muktijurda_details (muktijurda_name, award, birthday_place , education_and_work , roal_in_war , other_award , nationality , image) VALUES('$muktijurda_name','$award', '$birthday_place ' ,'$education_and_work' , '$roal_in_war' ,'$other_award ','$nationality','$image');";

			return  mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}

		public function update_muktijurda_info($id ,$muktijurda_name, $award , $birthday_place , $education_and_work, $roal_in_war, $other_award , $nationality){

			$GLOBALS['sql'] = "UPDATE muktijurda_details set muktijurda_name = ' $muktijurda_name' , award = ' $award' , birthday_place = ' $birthday_place' , education_and_work = ' $education_and_work' , roal_in_war = ' $roal_in_war' , other_award = ' $other_award' ,
			    nationality = '$nationality' WHERE muktijurda_id = '$id' ";
			
			 return mysqli_query( $GLOBALS["conn"], $GLOBALS["sql"]);
		}


		public function get_all_muktijurda_info(){
			$GLOBALS['sql'] ="SELECT * FROM muktijurda_details ";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);
		}  

		public function get_muktijurda_info($id){
			
			$GLOBALS['sql'] ="SELECT * FROM muktijurda_details where muktijurda_id = '$id' ";
			return mysqli_query($GLOBALS["conn"], $GLOBALS["sql"]);

		}

		
	 }	

 ?>