<?php
	session_start();

	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');
	$email = $_POST['email'];
	$password = $_POST['password'];
	$hash_pass = hash('sha256', $password);

	$error = "Invalid Email or Password.";
	$select = "SELECT mobile_number, first_name, last_name, specialty FROM doctors WHERE email='$email' AND password='$hash_pass'";
	$output = mysqli_query($connect, $select);
	$count = mysqli_num_rows($output);

	if($count == 1){
		$_SESSION['email'] = $email;
		$details = mysqli_fetch_row($output);
		$_SESSION['details'] = $details; 
		header('location:../html/index.php');
	}
	else{
		$_SESSION["error"] = $error;
		header('location:login_signup.php');
	}

	$select -> close();
	$connect -> close();
?>
