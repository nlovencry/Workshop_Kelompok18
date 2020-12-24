<?php
    include'../core/koneksi.php';
    if (isset($_POST['id_modal'])) {
    $id = intval($_POST['id_modal']);
    $nama	= ucfirst(mysqli_real_escape_string($conn,$_POST["nama"]));
	$user	= strtolower(stripslashes($_POST["user"]));
    $email	= mysqli_real_escape_string($conn,$_POST["email"]);
    $nomor = $_POST['telp'];
    $idmnb = intval($_POST['id_modal']);
	$foto = $_FILES['upload']['name'];
	$size = $_FILES['upload']['size'];
	$loc_foto = $_FILES['upload']['tmp_name'];
	if (!empty($foto)) {
		$valid_ext = array("jpg","png","jpeg");
		$extensi = strtolower(end(explode('.',$foto)));
		if (in_array($extensi,$valid_ext)) {
			if ($size != 0) {
			$nama_foto = query("SELECT foto FROM tbl_anggota WHERE id_anggota = '$id'");
			unlink("../foto_produk/foto_profil/".$nama_foto[0]['foto']);
			$upload = move_uploaded_file($loc_foto,'../foto_produk/foto_profil/'.$foto);
			$update = "UPDATE tbl_anggota SET nama_lengkap ='$nama',username = '$user',email = '$email', no_telp='$nomor',foto='$foto' WHERE id_anggota = '$id'";
			$result = mysqli_query($conn,$update);
			}
			else {
				echo"<script>alert('Upload Foto Max 2 MB')</script>";
				echo"<script>window.location='akun.php'</script>";
				exit;
			}
		}
		else {
			echo"<script>alert('Masukkan Format Gambar Yang Benar')</script>";
		}
	}
	else {
		$update = "UPDATE tbl_anggota SET nama_lengkap ='$nama',username = '$user',email = '$email' WHERE id_anggota = '$id'";
		$result = mysqli_query($conn,$update);	
    }
    }
	echo"<script>Data Berhasil di Ubah'</script>";
	echo"<script>window.location='akun.php'</script>";
	
?>