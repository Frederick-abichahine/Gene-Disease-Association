<?php  
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');

	if(isset($_SESSION['details'])) {
    	$details = $_SESSION['details'];
    }
	$select = "SELECT * FROM patients WHERE id IN (SELECT patient_id FROM cases WHERE id IN (SELECT case_id FROM doctors_has_cases WHERE doctor_id = $details[0]))";
	$output = mysqli_query($connect, $select);
	$count = mysqli_num_rows($output);
	$result = [];

	if ($count > 0) {

		while ($case = mysqli_fetch_row($output)) {
			$result[] = $case; 
		}
		$_SESSION['case'] = $result;
		//header('location:cases.php');
	}
	else {
		$error = "No cases!";
		$_SESSION["error"] = $error;
		//header('location:cases.php');
	}
?>