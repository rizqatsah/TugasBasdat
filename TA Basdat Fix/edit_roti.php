<?php 
	include 'db.php';
	$kode_roti = $_GET['kode_roti'];
	$tampil = mysqli_query($connect, "SELECT * FROM roti WHERE kode_roti='$kode_roti'");
	$row = mysqli_fetch_array($tampil);
 ?>


 <!DOCTYPE html>
 <html>
 <head>
 	<title>TAMPIL DATA CUSTOMER</title>
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
        <h3>TOKO ROTI</h3>
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
          <h3>CUSTOMER DATA</h3>
        </div>
        <div class="data">
 	<form method="POST" action="update_roti.php">
 	<input type="hidden" name="kode_roti" value="<?php echo $row['kode_roti'];?>">
					<div class="row">
						<div class="col1">
							<label>ID</label>
						</div>
						
						<div class="col2">
							<input type="text" name="kode_roti" value="<?php echo $row['kode_roti']?>">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Nama Roti</label>
						</div>
						<div class="col2">
							<input type="text" name="nama_roti" value="<?php echo $row['nama_roti']?>">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Ukuran</label>
						</div>
						<div class="col2">
							<input type="text" name="ukuran" value="<?php echo $row['ukuran']?>">
						</div>
					</div>
					<div class="row">
						<div class="col1">
							<label>Harga</label>
						</div>
						<div class="col2">
							<input type="text" name="harga" value="<?php echo $row['harga']?>">
						</div>
					</div>
					<!-- <div class="row"> -->
					<div>
						 <input type="submit" name="SAVE" value="SAVE">
					</div>
				</form>
				</div>
      </div>
    </div>
 </body>
 </html>