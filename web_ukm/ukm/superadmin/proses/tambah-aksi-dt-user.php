<?php
include '../../koneksi.php';
$username = $_POST['username'];
$password = $_POST['password'];

mysqli_query($db,"insert into tb_user values('','$username','$password')");
if($db){
header("location:../pecah/dt-user.php?pesan=input");
}else{
    echo "Maaf, Data Anda Belum Tersimpan pada Database.";
    echo "<br><a href='dt-user.php'>Kembali Ke Data User</a>";

}
?>