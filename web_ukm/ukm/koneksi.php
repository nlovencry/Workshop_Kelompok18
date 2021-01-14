<?php

	$db = mysqli_connect('localhost','root','','db_ukm');
	// $db = mysqli_connect('localhost','u1011496_kelompok18golb','sipukmpolije123','u1011496_db_sipukmpolije');
	

	if (mysqli_connect_error()) {
		echo "koneksi gagal : ". mysqli_connect_error();
	}

?>