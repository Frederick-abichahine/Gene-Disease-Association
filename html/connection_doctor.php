<?php  
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');

	$select = "SELECT * FROM doctors";
	$output = mysqli_query($connect, $select);
	$count = mysqli_num_rows($output);
	$result = [];
	//die($count);
	if ($count > 0) {

		while ($doctor = mysqli_fetch_row($output)) {
			$result[] = $doctor;
		}
		$_SESSION['doctor'] = $result;
		//header('location:doctors.php');
	}
	else {
		$error = "There are no doctors!";
		$_SESSION["error"] = $error;
		//header('location:doctors.php');
	}
?>