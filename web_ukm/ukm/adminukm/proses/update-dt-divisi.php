<?php
	include '../../koneksi.php';

	$id_divisi = $_POST['id_divisi'];
	$id_ukm = $_POST['id_ukm'];
	$nama_divisi = $_POST['nama_divisi'];
	$nama_co = $_POST['nama_co'];

	mysqli_query($db, "UPDATE tb_divisi SET id_ukm='$id_ukm', nama_divisi='$nama_divisi', nama_co='$nama_co' WHERE id_ukm='$id_ukm' AND id_divisi='$id_divisi'");
	header("location:../pecah/dt-divisi.php");

?>