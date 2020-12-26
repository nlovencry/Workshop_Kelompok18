<?php
	
	include 'koneksi.php';

	if (isset($_POST['register']) ) {

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

	mysqli_query($db, "INSERT INTO tb_mahasiswa VALUES ('$nim', '', '$nama_mhs', '$jk', '$email', '', '', '$username', '$password', '$no_wa')");
	?>
	<script type="text/javascript">
		alert("Simpan Berhasil");
		window.location.href="login.php"
	</script>

	<?php }

	
?>