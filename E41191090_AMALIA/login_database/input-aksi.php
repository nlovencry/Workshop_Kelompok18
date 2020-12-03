<?php

    include 'koneksi.php';
        $nama = $_POST['id'];
        $alamat = $_POST['email'];
        $pekerjaan = $_POST['password'];

mysqli_query($koneksi,"insert into user values ('','$id','$email','$password')");
header("location:index.php?pesan=input");

?>