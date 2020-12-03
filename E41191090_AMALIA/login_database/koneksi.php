<?php 

$koneksi = mysqli_connect ("localhost","root","","web_bootstrap1");

    if (mysqli_connect_error()){
    echo "Koneksi Database Gagal : " . mysqli_connect_error ();
    }

?>