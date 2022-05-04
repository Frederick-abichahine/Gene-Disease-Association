<?php

	$first_name=$_POST['first_name'];
	$last_name=$_POST['last_name'];
	$email=$_POST['email'];
	$mobile_number=$_POST['mobile_number'];
	$specialty=$_POST['specialty'];

	$conn= new mysqli('localhost','root','', 'gene-disease-association-db');

	if($conn->connect_error) {
			echo "$conn->connect_error";
			die("Connection Failed : ". $conn->connect_error);
	}

	else {
		$stmt = $conn->prepare("INSERT INTO doctors(first_name, last_name, email, mobile_number, specialty) values(?, ?, ?, ?, ?");
		$stmt->bind_param("sssss", $first_name, $last_name, $email, $mobile_number, $specialty);
		$execval = $stmt->execute();
		echo $execval;
		echo "insertion complete";
		$stmt->close();
		$conn->close();
	}
	
?>
