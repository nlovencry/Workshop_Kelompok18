<?php

	$db = mysqli_connect('localhost','root','','db_ukm');

	if (mysqli_connect_error()) {
		echo "koneksi gagal".mysqli_connect_error();
	}

?>