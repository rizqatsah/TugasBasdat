<?php 
	include 'db.php';

	$kode_roti = $_POST['kode_roti'];
	$nama_roti = $_POST['nama_roti'];
	$ukuran = $_POST['ukuran'];
	$harga = $_POST['harga'];
	$query = "UPDATE roti SET kode_roti='$kode_roti', nama_roti='$nama_roti', ukuran='$ukuran', harga=$harga WHERE kode_roti='$kode_roti'";
	mysqli_query($connect, $query);
	// echo $kode_kategori;
	// die("mampus");
	header("location:tampil_roti.php");
 ?>