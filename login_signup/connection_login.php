<?php
	session_start();

	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');
	$email = $_POST['email'];
	$password = $_POST['password'];
	//$error = "Invalid Email or Password.";
	$select = "SELECT * FROM doctors WHERE email='$email' AND password='$password'";
	$output = mysqli_query($connect, $select);
	$count = mysqli_num_rows($output);

	if($count == 1){
		$_SESSION['email']=$email; 
		header('location:../html/index.html');
	}
	else{
		//$_SESSION["error"] = $error;
		header('location:login_signup.php');
	}

	$select -> close();
	$connect -> close();
?>
