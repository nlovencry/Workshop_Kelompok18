<?php
include '../../koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($db,"insert into tb_user values('','$username','$password')");
header("location:../pecah/dt-user.php?pesan=input");
?>