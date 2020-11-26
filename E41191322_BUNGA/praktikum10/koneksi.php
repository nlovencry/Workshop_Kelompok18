<?php

	$db = mysqli_connect("localhost","root","","db_praktikum10");

	if (mysqli_connect_error()) {
		echo "koneksi gagal : " . mysqli_connect_error();
	}

?>