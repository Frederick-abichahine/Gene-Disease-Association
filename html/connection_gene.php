<?php  
	session_start();
	//header('location:search_tool.php');
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');

	$disease = mysqli_real_escape_string($connect, $_POST['disease']);
	$select = "SELECT * FROM genes WHERE id IN (SELECT gene_id FROM genes_has_diseases WHERE disease_id = (SELECT id FROM diseases WHERE name='$disease'))";
	$output = mysqli_query($connect, $select);
	$count = mysqli_num_rows($output);
	$result = [];

	if ($count > 0) {

		while ($gene = mysqli_fetch_row($output)) {
			$result[] = $gene; 
		}
		$_SESSION['gene'] = $result;
		header('location:search_tool.php');
	}
	else {
		$error = "Either this disease does not have detected genes yet or this disease does not exist in the database!";
		$_SESSION["error"] = $error;
		header('location:search_tool.php');
	}
?>