<?php
	include 'db.php';
	$key = $_POST['cari'];
	echo "Keyword pencarian = $key";
	$QueryString = "SELECT `beli`.kode_beli as 'kode_beli', `roti`.kode_roti as 'kode_roti' ,`customer`.ID as 'ID', `beli`.tgl_beli as 'tgl_beli', `beli`.tgl_antar as 'tgl_antar', `beli`.jumlah as 'jumlah', `beli`.jumlah * `roti`.harga as 'total' FROM `customer` join `beli` on `customer`.ID = `beli`.ID join `roti` on `roti`.kode_roti = `beli`.kode_roti WHERE `beli`.kode_beli LIKE '%$key%' OR `roti`.kode_roti LIKE '%$key%' OR `customer`.ID LIKE '%$key%' OR `beli`.tgl_beli LIKE '%$key%' OR `beli`.tgl_antar LIKE '%$key%'";
	$SQL = mysqli_query($connect,$QueryString); 

?>

 <!DOCTYPE html>
 <html>
 <head>
  <title>TAMPIL DATA PEMBELIAN</title>
  <meta charset="utf-8">
  <link rel="stylesheet" href="style.css">
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
          <h3>DATA PEMBELIAN</h3>
        </div>
        <div class="data">
	<form method="post" action="cari_beli.php">
		<input type="text" name="cari">
		<input type="submit" name="kirim" value="cari">
	</form>
	<table border="1">
		
		<tr>
			<td><b>Kode Beli</b></td>
			<td><b>Kode Roti</b></td>
			<td><b>ID</b></td>
			<td><b>Tanggal Beli</b></td>
			<td><b>Tanggal Antar</b></td>
			<td><b>Jumlah</b></td>
			<td><b>Total Harga</b></td>
			<td><b>Action</b></td>
		</tr>
		<?php
			foreach ($SQL as $data) {
				echo "
					<tr>
						<td>$data[kode_beli]</td>
						<td>$data[kode_roti]</td>
						<td>$data[ID]</td>
						<td>$data[tgl_beli]</td>
						<td>$data[tgl_antar]</td>
						<td>$data[jumlah]</td>
						<td>$data[total]</td>
						<td><a href='edit_beli.php?kode_beli=$data[kode_beli]'>Update</a> | <a href='delete_beli.php?kode_beli=$data[kode_beli]'>Delete</a></td>
					</tr>

				";
			}
			
		?>
		
	</table>
</div>
      </div>
    </div>

</body>
</html>