<?php  
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');

	$select = "SELECT * FROM hospitals";
	$output = mysqli_query($connect, $select);
	$count = mysqli_num_rows($output);
	$result = [];
	//die($count);
	if ($count > 0) {

		while ($hospital = mysqli_fetch_row($output)) {
			$result[] = $hospital;
		}
		$_SESSION['hospital'] = $result;
		//header('location:doctors.php');
	}
	else {
		$error = "There are no hospitals!";
		$_SESSION["error"] = $error;
		//header('location:doctors.php');
	}
?>