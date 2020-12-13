<?php
$koneksi=mysqli_connect("localhost","root","","web_ukm");
if(mysqli_connect_error()){
    echo"Koneksi database gagal : " . myssql_connect_error();
}
?>