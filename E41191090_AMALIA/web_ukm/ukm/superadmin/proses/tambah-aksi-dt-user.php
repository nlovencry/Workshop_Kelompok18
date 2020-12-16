<?php
include '../../koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    $sql = "SELECT * FROM tbl_user WHERE username='$username'";
    $query = mysql_query($sql) or die (mysql_error());
if(mysql_num_rows($query) > 0){

    mysqli_query($db,"INSERT INTO tb_user VALUES('','$username','$password')");

} else {
    header("location:../pecah/dt-user.php");
    $sql = "INSERT INTO tbl_user(username, password, status) VALUES('$username','$password','0')";
    $query = mysql_query($sql) or die (mysql_error());
    header("location: form_registrasi.php?hasil=sukses");
}

?>

 