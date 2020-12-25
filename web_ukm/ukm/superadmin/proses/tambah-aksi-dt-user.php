<?php
include '../../koneksi.php';
	
	$id_ukm	  = $_POST['id_ukm'];
    $username = $_POST['username'];
    $password = $_POST['password'];

    $query = mysqli_query($db, "INSERT INTO tb_user VALUES ('','$username','$password','2')");
    if ($query == true) {
    	$get_id_user = mysqli_fetch_array($db->query('SELECT max(id_user) as last_id FROM tb_user'))['last_id'];
    	$update = mysqli_query ($db, "UPDATE tb_ukm SET id_user = '$get_id_user' WHERE id_ukm='$id_ukm'");
    	header("location:../pecah/dt-user.php");
    }
    header("<script>alert('Data Gagal Ditambahkan'); location:'../pecah/tambah-dt-user.php';</script>")

 	// $query = mysqli_query($db, "SELECT id_user FROM tb_ukm WHERE id_ukm='$id_ukm'");
	// $cekdata = mysqli_num_rows($query);

	// if ($cekdata != 0) {
	// 	echo "<script>alert('Data Sudah Ada'); location:'../pecah/tambah-dt-user.php';</script>"
	// }else{
	// 	mysqli_query($db, "UPDATE tb_ukm SET('','$username','$password','2')");
	// 	header("location:../pecah/dt-ukm.php");

?>