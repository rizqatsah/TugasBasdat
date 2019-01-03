<?php 
	if($_POST) {
		# code...
		include 'db.php';

		$ID = $_POST['ID'];
		$Nama = $_POST['Nama'];
		$Alamat = $_POST['Alamat'];
		$NoHp = $_POST['NoHp'];
		$query = "INSERT INTO customer VALUES ('$ID', '$Nama', '$Alamat', '$NoHp')";

		$sql = mysqli_query($connect, $query);
		
		if ($sql) {
			echo "<script type='text/javascript'>
					window.alert('Input is successful');
					window.location.href = 'tampil_customer.php';
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
 	<title>INSERT DATA CUSTOMER</title>
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
          <h3>INSERT CUSTOMER DATA</h3>
        </div>
        <div class="data">

 				<form method="post" action="input_customer.php" name="myForm" >
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