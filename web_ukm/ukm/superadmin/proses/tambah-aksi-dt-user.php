<?php
    include '../../koneksi.php';

    $username = $_POST['username'];
    $password = $_POST['password'];

    mysqli_query($db,"INSERT INTO tb_user VALUES('','$username','$password')");
    header("location:../pecah/dt-user.php");

<<<<<<< Updated upstream
$sql = "SELECT * FROM tbl_user WHERE username='$username'";
$query = mysql_query($sql) or die (mysql_error());

mysqli_query($db,"insert into tb_user values('','$username','$password')");
if(mysql_num_rows($query) > 0){
    header("location:../pecah/dt-user.php?pesan=input");

} else {

    $sql = "INSERT INTO tbl_user(username, password, status) VALUES('$username','$password','0')";
    $query = mysql_query($sql) or die (mysql_error());

    header("location: form_registrasi.php?hasil=sukses");
}

=======
>>>>>>> Stashed changes
?>
 