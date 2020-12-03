<?
session_start();
include 'koneksi.php';

$email = $_POST['email'];
$password = $_POST['password'];
$query = mysqli_query($db, "SELECT *FROM user WHERE email = '$email'");
$data = mysqli_fecth_array($query);
if ($email == $data['email']){
    header("location:index.php?pesan=berhasil");
}
else{
    header("location:login.php?pesan=emailsalah");
}
?>