<?php 
	include 'db.php';
	$kode_beli = $_GET['kode_beli'];

	$query = "DELETE FROM beli WHERE kode_beli ='$kode_beli'";
		$sql = mysqli_query($connect,$query);

		if ($sql) {
			header("location:tampil_beli.php");
		}
		else{
			die("Not Responding");
		}
 ?>
