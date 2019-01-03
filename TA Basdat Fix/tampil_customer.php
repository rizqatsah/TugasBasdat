<?php
	include 'db.php';
	$QueryString = "SELECT * FROM customer";
	$SQL = mysqli_query($connect,$QueryString); 
?>

 <!DOCTYPE html>
 <html>
 <head>
 	<title>TAMPIL DATA CUSTOMER</title>
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
          <h3>CUSTOMER DATA</h3>
        </div>
        <div class="data">
        	<table id="t1" border="5" align="center" cellspacing="3">
 			<tr>
      			<td><b> ID </b></td>
 				<td><b> NAME </b></td>
 				<td><b> ADDRESS</b></td>
 				<td><b> PHONE</b></td>
 				<td><b> ACTION</b></td>
   			 </tr>
    <?php
      foreach ($SQL as $data) {
        echo "
          <tr>
            <td>$data[ID]</td>
            <td>$data[Nama]</td>
            <td>$data[Alamat]</td>
            <td>$data[NoHp]</td>
            <td><a href='edit_customer.php?ID=$data[ID]'>Update</a> | <a href='delete_customer.php?ID=$data[ID]'>Delete</a></td>
          </tr>

        ";
      }
      
    ?>
    
  </table>

  <button><a href="input_customer.php">Input</a></button>
        </div>
      </div>
    </div>
 </body>
 </html>