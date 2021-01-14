<?php
include '../../koneksi.php';
	
	$id_ukm	  = $_POST['id_ukm'];
    $username = htmlspecialchars($_POST['username'], ENT_QUOTES);
    $password = md5($_POST["password"]);

    $query = mysqli_query($db, "INSERT INTO tb_user VALUES ('','$username','$password','2')");
    if ($query == true) {
    	$get_id_user = mysqli_fetch_array($db->query('SELECT max(id_user) as last_id FROM tb_user'))['last_id'];
    	$update = mysqli_query ($db, "UPDATE tb_ukm SET id_user = '$get_id_user' WHERE id_ukm='$id_ukm'");
    	header("location:../pecah/dt-user");
    }
    header("<script>alert('Data Gagal Ditambahkan'); location:'../pecah/tambah-dt-user';</script>")

?>