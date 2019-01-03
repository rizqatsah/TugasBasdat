<?php 
	if($_POST) {
		# code...
		include 'db.php';

		$ID = $_POST['ID'];
		$Nama = $_POST['Nama'];
		$Alamat = $_POST['Alamat'];
		$NoHp = $_POST['NoHp'];
		$query2 = "INSERT INTO customer VALUES ('$ID', '$Nama', '$Alamat', '$NoHp')";


		$kode_roti = $_POST['kode_roti'];

		$tgl_beli = date("Y-m-d", strtotime($_POST['tgl_beli']));
		$tgl_antar = date("Y-m-d", strtotime($_POST['tgl_antar']));
		$jumlah = $_POST['jumlah'];

		$query = "INSERT INTO beli VALUES ('', '$kode_roti', 'ID', $tgl_beli, $tgl_antar, $jumlah)";

		$sql1 = mysqli_query($connect, $query);
		$sql2 = mysqli_query($connect, $query2);
		if ($sql1 && $sql2) {
			echo "<script type='text/javascript'>
					window.alert('Input is successful');
					window.location.href = 'tampil_beli.php';
					</script>
			";
		}
		// echo "INPUTNYA BERHASIL LHO <br>";
		// echo "<a href = 'tampil_kamar.php'>LIHAT DATA</a>";
	}

 ?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>INSERT PEMBELIAN</title>
 	<meta charset="utf-8">
 	<link rel="stylesheet" href="style2.css">
  	<meta name="viewport" content="width=device-width, initial-scale=1">
  	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
  	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
 </head>

 <body>
<div class="container">
      <div class="foto">
        <div id="myCarousel" class="carousel slide" data-ride="carousel">
  <!-- Indicators -->
  <ol class="carousel-indicators">
    <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
    <li data-target="#myCarousel" data-slide-to="1"></li>
    <li data-target="#myCarousel" data-slide-to="2"></li>
  </ol>

  <!-- Wrapper for slides -->
  <div class="carousel-inner" role="listbox">
    <div class="item active">
      <img src="img1.png" >
      <div class="carousel-caption">
        <!-- <h3><a href="tam.html">TOKO ROTI</a></h3> -->
        <h3><a href="tampil_customer.php">CUSTOMER</h3>
      <!--   <p>You can know us here</p> -->
      </div> 
    </div>

    <div class="item">
      <img src="img2.jpg">
      <div class="carousel-caption">
        <h3><a href="tampil_roti.php">ROTI</a></h3>
        
      </div> 
    </div>
   
   <div class="item">
      <img src="img3.jpg">
      <div class="carousel-caption">
        <h3><a href="tampil_beli.php">PEMBELIAN</a></h3>
        
      </div> 
    </div>
</div>
      </div>
      
      <div class="detail" align="center">
        <div class="text text-center">
          <h3>INSERT PEMBELIAN</h3>
        </div>
        <div class="data">
 	<form method="post" action="input_beli.php" name="myForm" >
 					<div class="row">
						<div class="col1">
							<label>ID</label>
						</div>
						
						<div class="col2">
							<input type="text" name="ID">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Nama</label>
						</div>
						<div class="col2">
							<input type="text" name="Nama">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Alamat</label>
						</div>
						<div class="col2">
							<input type="text" name="Alamat">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>No.Hp</label>
						</div>
						<div class="col2">
							<input type="text" name="NoHp">
						</div>
					</div>

					<div class="row">
						<div class="col1">
							<label>Roti</label>
						</div>
						
						<div class="col2">
							<select name="kode_roti">
							<option>Roti</option>
<?php 
$query3 = "SELECT kode_roti, nama_roti FROM roti";
$sql3 = mysqli_query($connect, $query3);
while ($row = mysqli_fetch_array($sql3))
{
    echo "<option value='".$row['kode_roti']."'>'".$row['nama_roti']."'</option>";
}
?>        
</select>
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Tanggal Beli</label>
						</div>
						<div class="col2">
							<input type="date" name="tgl_beli">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Tanggal Antar</label>
						</div>
						<div class="col2">
							<input type="date" name="tgl_antar">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Jumlah</label>
						</div>
						<div class="col2">
							<input type="text" name="jumlah">
						</div>
					</div>
					<!-- <div class="row"> -->
					<div>
						 <input type="submit" name="SEND" value="SEND">
					</div>
				</form>
				</div>
      </div>
    </div>
 </body>
 </html>