<?php 
	include 'db.php';
	$kode_beli = $_GET['kode_beli'];
	$QueryString = "SELECT `beli`.kode_beli as 'kode_beli', `roti`.kode_roti as 'kode_roti' ,`customer`.ID as 'ID', `beli`.tgl_beli as 'tgl_beli', `beli`.tgl_antar as 'tgl_antar', `beli`.jumlah as 'jumlah', `beli`.jumlah * `roti`.harga as 'total'  FROM `beli` join `roti` on `roti`.kode_roti = `beli`.kode_roti join `customer` on `customer`.ID = `beli`.ID where `beli`.kode_beli='$kode_beli'";
	$tampil = mysqli_query($connect,$QueryString);
	$row = mysqli_fetch_array($tampil);
 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>Edit Data Pembelian</title>
 </head>
 <body>
 	<form method="POST" action="update_beli.php">
 	<input type="hidden" name="kode_beli" value="<?php echo $row['kode_beli'];?>">
					
					<div class="row">
						<div class="col1">
							<label>Kode Roti</label>
						</div>
						<div class="col2">
							<input type="text" name="kode_roti" value="<?php echo $row['kode_roti']?>">
						</div>
					</div>
					
					<div class="row">
						<div class="col1">
							<label>Tanggal Beli</label>
						</div>
						<div class="col2">
							<input type="date" name="tgl_beli" value="<?php echo $row['tgl_beli']?>" min="2018-01-01" max="2018-12-31">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Tanggal Antar</label>
						</div>
						<div class="col2">
							<input type="date" name="tgl_antar" value="<?php echo $row['tgl_antar']?>" min="2018-01-01" max="2018-12-31">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Jumlah</label>
						</div>
						<div class="col2">
							<input type="number" name="jumlah" value="<?php echo $row['jumlah']?>">
						</div>
					</div>
					
					<!-- <div class="row"> -->
					<div>
						 <input type="submit" name="SAVE" value="SAVE">
					</div>
				</form>
 </body>
 </html>