<?php
	
	include 'koneksi.php';

	if (@$_POST['simpan']) {

	$nama_lengkap = $_POST['nama_mhs'];
	$nim = $_POST['nim_mhs'];
	$jk = $_POST['jk'];
	$no_wa = $_POST['no_wa'];
	$email = $_POST['email'];
	/*$prodi = $_POST['id_prodi'];
	$angkatan = $_POST['angkatan'];
	$alamat = $_POST['alamat'];*/
	$username = $_POST['username'];
	$password = md5($_POST['password']);

	mysqli_query($db, "INSERT INTO tb_mahasiswa(nama_mhs,nim_mhs,jk,no_wa,email,username,password) VALUES ('$$nama_lengkap','$nim','$jk','$no_wa','$email','$username','$password')");
	?>
	<script type="text/javascript">
		alert("Simpan Berhasil");
		window.location.href="login.php"
	</script>

	<?php }

	
?>