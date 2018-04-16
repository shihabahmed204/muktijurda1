
<?php


	$servername="localhost";
	$username="root";
	$password="";
	$dbname="muktijurda";

	$conn = mysqli_connect($servername, $username, $password, $dbname);
	$sql;

	include ('../model/muktijurda.php');

	

	  $errors = array();
    	if (isset($_POST['reg_user'])) {


		$muktijurda_name = mysqli_real_escape_string($conn, $_POST['name']);
		$birthday_place = mysqli_real_escape_string($conn, $_POST['birthday_place']);
		$education_and_work = mysqli_real_escape_string($conn, $_POST['work_education']);
		$roal_in_war = mysqli_real_escape_string($conn, $_POST['roal_in_war']);
		$award = mysqli_real_escape_string($conn, $_POST['type']);

		$other_award = mysqli_real_escape_string($conn, $_POST['other_award']);
		$nationality = mysqli_real_escape_string($conn, $_POST['nationility']);



		if (empty($muktijurda_name)) { 
				array_push($errors, "fill up required");
			}
		if (empty($roal_in_war)) {
				array_push($errors, "Role war is required");
			}
		if (empty($education_and_work)) { 
				array_push($errors, "Education & work required");
		}

		if (empty($other_award)) {
				array_push($errors, "Father name is required");
			}
		if (empty($nationality)) { 
				array_push($errors, "Mother name is required");
		}

		if(strcmp("award","$award") == 0) { 
				array_push($errors, "Award not select");
			} 


		if(isset($_FILES['image'])){
                  $image = addslashes($_FILES['image']['tmp_name']);
                  
                  if( $image == true) {
                      $image =file_get_contents($image);
                      $image = base64_encode($image);

                    }  else {
                    	array_push($errors, "Image  not set ");
                    }

              
          } else {
          			array_push($errors, "Image  not set");   
          }

  		

// Call 
	  	$objMuktijurda = new Muktijurda();
	

		if (count($errors) == 0) {
          
			 $result = $objMuktijurda->register_muktijurda($muktijurda_name,$award, $birthday_place , $education_and_work, $roal_in_war, $other_award , $nationality, $image);
             if ($result == false){
             		array_push($errors, "Data no Entry");
             } else {
             		array_push($errors, "Data Entry");
             }
             
             
			}  

        }



?>
