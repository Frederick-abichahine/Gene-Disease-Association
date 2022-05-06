<?php  
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');

	$select = "";
	$output = mysqli_query($connect, $select);
	$count = mysqli_num_rows($output);
	$result = [];

	if ($count > 0) {
	}
	else {
	}
?>