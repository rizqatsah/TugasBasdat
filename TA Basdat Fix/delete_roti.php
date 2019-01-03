<?php 
	include 'db.php';
	$kode_roti = $_GET['kode_roti'];

	$query = "DELETE FROM roti WHERE kode_roti ='$kode_roti'";
		$sql = mysqli_query($connect,$query);

		if ($sql) {
			header("location:tampil_roti.php");
		}
		else{
			die("Not Responding");
		}
 ?>
