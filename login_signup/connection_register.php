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

	$checker1 = "SELECT * FROM doctors WHERE email='$email'";
	$result1 = mysqli_query($connect, $checker1);
	$num1 = mysqli_num_rows($result1);

	$checker2 = "SELECT * FROM doctors WHERE mobile_number='$mobile_number'";
	$result2 = mysqli_query($connect, $checker2);
	$num2 = mysqli_num_rows($result2);

	if ($num1 == 1) {
		echo "Email Already In Use.";
	}
	else if ($num2 == 1) {
		echo "Mobile Number Already In Use.";
	}
	else {
		$insert = "INSERT INTO doctors SET first_name = '$first_name', last_name = '$last_name', mobile_number = '$mobile_number', email  = '$email', specialty = '$specialty', password  = '$password'";
		mysqli_query($connect, $insert);
		echo "Doctor Registered!"; //fix echo to display on screen
		
		//Edit:
		//hash password before inserting
		//Display proper ouput that a doctor has been entered
		//Add admin code so that only admins (of a hospital) can add a doctor and not a random user -> Professional use
	}

	$insert -> close();
	$connect -> close();
	$checker1 -> close();
	$checker2 -> close();
?>
