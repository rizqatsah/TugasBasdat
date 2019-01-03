<?php 
	include 'db.php';
	// $kode_beli = $_POST['kode_beli'];
	$kode_roti = $_POST['kode_roti'];
	$ID = $_POST['ID'];
	$tgl_beli = $_POST['tgl_beli'];
	$tgl_antar = $_POST['tgl_antar'];
	$jumlah = $_POST['jumlah'];

	$query = "UPDATE beli SET `roti`.kode_roti = '$kode_roti' ,`customer`.ID ='$ID', `beli`.tgl_beli ='$tgl_beli', `beli`.tgl_antar = '$tgl_antar', `beli`.jumlah ='$jumlah'  FROM `beli` join `roti` on `roti`.kode_roti = `beli`.kode_roti join `customer` on `customer`.ID = `beli`.ID where `beli`.kode_beli='$kode_beli'";
	mysqli_query($connect, $query);
	// echo $kode_kategori;
	// die("mampus");
	header("location:tampil_beli.php");
 ?>