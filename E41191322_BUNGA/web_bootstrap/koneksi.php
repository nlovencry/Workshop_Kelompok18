<?php
	
	$db = mysqli_connect("localhost","root","","db_praktikum11");
	
	if (mysqli_connect_error()) {
		echo "Koneksi Gagal : ".mysqli_connect_error();
	}

?>