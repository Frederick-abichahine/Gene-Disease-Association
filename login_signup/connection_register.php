<?php
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');
	$admin = 11111;

	$first_name = mysqli_real_escape_string($connect, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($connect, $_POST['last_name']);
	$mobile_number = mysqli_real_escape_string($connect, $_POST['mobile_number']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$specialty = mysqli_real_escape_string($connect,$_POST['specialty']);
	$password = mysqli_real_escape_string($connect,$_POST['password']);
	$admin_code = mysqli_real_escape_string($connect, $_POST['admin_code']);
	$hash_pass = hash('sha256', $password);
	

	$checker1 = "SELECT * FROM doctors WHERE email='$email'";
	$result1 = mysqli_query($connect, $checker1);
	$num1 = mysqli_num_rows($result1);

	$checker2 = "SELECT * FROM doctors WHERE mobile_number='$mobile_number'";
	$result2 = mysqli_query($connect, $checker2);
	$num2 = mysqli_num_rows($result2);

	if ($admin != $admin_code) {
		$error = "You are not an admin and can not register a doctor.";
		$_SESSION["error"] = $error;
		header('location:login_signup.php');
	}
	else if ($num1 == 1) {
		$error = "Email already in use.";
		$_SESSION["error"] = $error;
		header('location:login_signup.php');
	}
	else if ($num2 == 1) {
		$error = "Mobile number already in use.";
		$_SESSION["error"] = $error;
		header('location:login_signup.php');
	}
	else {
		$insert = "INSERT INTO doctors SET first_name = '$first_name', last_name = '$last_name', mobile_number = '$mobile_number', email  = '$email', specialty = '$specialty', password  = '$hash_pass'";
		mysqli_query($connect, $insert);
		$success = "Doctor registered! Please log in.";
		$_SESSION["success"] = $success;
		header('location:login_signup.php');
	}

	$insert -> close();
	$connect -> close();
	$checker1 -> close();
	$checker2 -> close();
?>
