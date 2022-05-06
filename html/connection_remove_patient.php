<?php  
	session_start();
	$connect = mysqli_connect('localhost', 'root', '');
	mysqli_select_db($connect, 'gene-disease-association-db');

	if(isset($_SESSION['case'])) {
      $result = $_SESSION['case'];
    }

    $idz = mysqli_real_escape_string($connect, $_POST['idz']);

    $var = $result[$idz][0];

    $delete1 = "DELETE FROM biometrics WHERE id = $var";
    mysqli_query($connect, $delete1);
	$delete2 = "DELETE FROM patients WHERE id = $var";
	mysqli_query($connect, $delete2);

	header('location:cases.php');
?>