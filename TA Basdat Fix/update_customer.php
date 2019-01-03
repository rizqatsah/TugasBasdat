<?php 
	include 'db.php';

	$ID = $_POST['ID'];
	$Nama = $_POST['Nama'];
	$Alamat = $_POST['Alamat'];
	$NoHp = $_POST['NoHp'];
	$query = "UPDATE customer SET ID='$ID', Nama='$Nama',Alamat='$Alamat', NoHp='$NoHp' WHERE ID='$ID'";
	mysqli_query($connect, $query);
	// echo $kode_kategori;
	// die("mampus");
	header("location:tampil_customer.php");
 ?>