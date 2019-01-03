<?php 
	include 'db.php';
	$ID = $_GET['ID'];

	$query = "DELETE FROM customer WHERE ID ='$ID'";
		$sql = mysqli_query($connect,$query);

		if ($sql) {
			header("location:tampil_customer.php");
		}
		else{
			die("Not Responding");
		}
 ?>
