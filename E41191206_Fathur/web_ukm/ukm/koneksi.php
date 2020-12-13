<?php
$koneksi = mysqli_connect("localhost","root","","web_bootstrap");

if (mysqli_connect_error()) {
	echo "Koneksi database gagal : " . mysql_connect_error();
}
?>