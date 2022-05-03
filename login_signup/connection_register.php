<?php
	session_start();
	header('location:login_signup.php');
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');

	$first_name = $_POST['first_name'];
	$last_name = $_POST['last_name'];
	$mobile_number = $_POST['mobile_number'];
	$email = $_POST['email'];
	$specialty = $_POST['specialty'];
	$password = $_POST['password'];

	$checker = "SELECT * FROM doctors WHERE email='$email'";
	$result = mysqli_query($connect, $checker);
	$num = mysqli_num_rows($result);

	if($num == 1){
		echo "Email Already In Use.";
	}

	else{

		//add doctor using INSERT INTO query
		//edit login_signup.php with the variables above...
	}
?>
