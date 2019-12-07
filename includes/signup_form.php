<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//if sign up form submits
		if(isset($_POST['submit'])) {

			//store all input data into these variables
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$experience = $_POST['experience'];
			$experienceArray = array('Beginner / No Experience', '1-2 years', '3-5 years', '5-9 years', '10+ years');
			$role = $_POST['gwc_role'];
			$roleArray = array('Student', 'Volunteer', 'Guest Speaker');
			$subject = "Girls Who Code sign up form.";
		}

		//Sanitize the form data
		function cleanString($x){
			if($x != "") {
				$x = filter_var($x, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
				//Escape the form data
				htmlentities($x, ENT_QUOTES, 'utf-8');
			}
		}

		function cleanEmail($x){
			if($x != "") {
				$x = filter_var($x, FILTER_SANITIZE_EMAIL);
				htmlentities($x, ENT_QUOTES, 'utf-8');
			}
		}

		function cleanNumber($x) {
			if($x != "") {
				$x = filter_var($x, FILTER_SANITIZE_NUMBER_INT);
				htmlentities($x, ENT_QUOTES, 'utf-8');
			}
		}


		//call function to sanitize string and escape the result.
		htmlspecialchars(cleanString($fname));
		htmlspecialchars(cleanString($lname));
		htmlspecialchars(cleanNumber($phone));
		htmlspecialchars(cleanEmail($email));
		htmlspecialchars(cleanDropDownList($experience));

		

		//SANITIZE AND ESCAPE DROPDOWN LIST
		if($experience != "" && $experience != ' -Please Select- ') {
			if (in_array($experience, $experienceArray)) {
				htmlspecialchars($experience);
				//Code additional escape statement and database insertion commands here.
			} 
		}

		if($role != "" && $role != ' -Please Select- ') {
			if (in_array($role, $roleArray)) {
				htmlspecialchars($role);
				//Code additional escape statement and database insertion commands here.
			}
		}

	
	}
?>