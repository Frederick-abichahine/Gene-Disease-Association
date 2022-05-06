<?php  
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');

	$first_name = mysqli_real_escape_string($connect, $_POST['first_name']);
	$last_name = mysqli_real_escape_string($connect, $_POST['last_name']);
	$mobile_number = mysqli_real_escape_string($connect, $_POST['mobile_number']);
	$email = mysqli_real_escape_string($connect, $_POST['email']);
	$specialty = mysqli_real_escape_string($connect,$_POST['specialty']);
	$password = mysqli_real_escape_string($connect,$_POST['password']);
	$hash_pass = hash('sha256', $password);

	if(isset($_SESSION['details'])) {
    	$details = $_SESSION['details'];
    }

	$checker1 = "SELECT * FROM doctors WHERE email='$email' AND id != $details[0]";
	$result1 = mysqli_query($connect, $checker1);
	$num1 = mysqli_num_rows($result1);

	$checker2 = "SELECT * FROM doctors WHERE mobile_number='$mobile_number' AND id != $details[0]";
	$result2 = mysqli_query($connect, $checker2);
	$num2 = mysqli_num_rows($result2);

	if ($num1 == 1) {
		$error = "Email already in use.";
		$_SESSION["error"] = $error;
		header('location:edit_profile.php');
	}
	else if ($num2 == 1) {
		$error = "Mobile number already in use.";
		$_SESSION["error"] = $error;
		header('location:edit_profile.php');
	}
	else {
		$update = "UPDATE doctors SET first_name = '$first_name', last_name = '$last_name', mobile_number = '$mobile_number', email  = '$email', specialty = '$specialty', password  = '$hash_pass' WHERE id = $details[0]";
		mysqli_query($connect, $update);
		$success = "Profile Updated! Please log in.";
		$_SESSION["success"] = $success;
		header('location:../login_signup/login_signup.php');
	}

	$update -> close();
	$connect -> close();
	$checker1 -> close();
	$checker2 -> close();
?>