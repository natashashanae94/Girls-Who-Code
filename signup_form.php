<?php 

	if ($_SERVER["REQUEST_METHOD"] == "POST") {

	//if sign up form submits
		if(isset($_POST['submit'])) {

			//store all input data into these variables
			$fname = $_POST['fname'];
			$lname = $_POST['lname'];
			$address = $_POST['address'];
			$city = $_POST['city'];
			$state = $_POST['state'];
			$zip = $_POST['zip'];
			$phone = $_POST['phone'];
			$email = $_POST['email'];
			$experience = $_POST['experience'];
			$experienceArray = array('0', '1-3', '3-5', '5-10', '10+');
			$role = $_POST['gwc_role'];
			$roleArray = array('Student', 'Volunteer', 'Guest Speaker');
			$school = $_POST['school'];
			$company = $_POST['company'];
			$message = $_POST['message'];
			$subject = "Girls Who Code sign up form.";
		}

		//Sanitize the form data
		function cleanString($x){
			if($x != "") {
				$x = filter_var($x, FILTER_SANITIZE_STRING, FILTER_FLAG_STRIP_HIGH);
			}
		}

		function cleanEmail($x){
			if($x != "") {
				$x = filter_var($x, FILTER_SANITIZE_EMAIL);
			}
		}

		function cleanNumber($x) {
			if($x != "") {
				$x = filter_var($x, FILTER_SANITIZE_NUMBER_INT);
			}
		}


		//call function to sanitize string and escape the result.
		htmlspecialchars(cleanString($fname));
		htmlspecialchars(cleanString($lname);
		htmlspecialchars(cleanString($address));
		htmlspecialchars(cleanString($city));
		htmlspecialchars(cleanNumber($zip));
		htmlspecialchars(cleanNumber($phone));
		htmlspecialchars(cleanString($message));
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

		if 
	}
?>