<?php

	$connect = new mysqli("localhost", "root", "", "toko_roti");

	function hapus_customer($ID){
        global $connect;
        mysqli_query($connect, "DELETE FROM customer where ID = '$ID'");

        return mysqli_affected_rows($connect);
    }
?>