<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$tabel = "mahasiswa";
		$where = "nim='$id'"; 
		$mahasiswa = $koneksi->remove($tabel,$where);
		header('location:index.php?pesan=hapus');
	}  
?>