<?php
include '../../koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];


		mysqli_query($db, "INSERT INTO tb_user VALUES('','','$username','$password','0','')'");
		header("location:../pecah/dt-user.php");

?>
 