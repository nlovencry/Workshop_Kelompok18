<?php
    include"../core/koneksi.php";

    // Check User exist
    if (isset($_POST['usermen'])) {
        $user	= strtolower(stripslashes($_POST["usermen"]));
        $result = mysqli_query($conn,"SELECT * FROM tbl_anggota WHERE username = '$user'");
        if (mysqli_fetch_assoc($result)) {
            echo"User sudah ada";
            return false;
        }
    } 

    // Check signup Daftar
    if (isset($_POST["nama"])) {
		$nama	= ucfirst(mysqli_real_escape_string($conn,$_POST["nama"]));
		$user	= strtolower(stripslashes($_POST["user"]));
		$jk		= mysqli_real_escape_string($conn,$_POST["jk"]);
		$tgl	= mysqli_real_escape_string($conn,$_POST["tgl"]);
		$tempat	= mysqli_real_escape_string($conn,$_POST["tmp"]);
		$alamat	= mysqli_real_escape_string($conn,$_POST["alamat"]);
		$telp	= mysqli_real_escape_string($conn,$_POST["tlp"]);
		$email	= mysqli_real_escape_string($conn,$_POST["email"]);
		$pass1	= mysqli_real_escape_string($conn,$_POST["pass1"]);
		// $pass2	= mysqli_real_escape_string($conn,$_POST["Password2"]);
        $password = password_hash($pass1,PASSWORD_DEFAULT);
	
        $sql = "INSERT INTO tbl_anggota(nama_lengkap,jenis_kelamin,tgl_lahir,tempat_lahir,alamat,email,no_telp,username,password) VALUES('$nama','$jk','$tgl','$tempat','$alamat','$email','$telp','$user','$password')";
        $result = mysqli_query($conn,$sql);
        if (mysqli_affected_rows($conn) > 0) {
            echo "Check Verifikasi Email";
            }
        else{
            echo mysqli_error($conn);
        }
    }

    // check Login
    if (isset($_POST["user_login"])) {
		$user = mysqli_real_escape_string($conn,$_POST["user_login"]);
		$password = mysqli_real_escape_string($conn,$_POST["pass_login"]);
		// get data from database
		$cek = "SELECT id_anggota,password FROM tbl_anggota WHERE username = '$user'";
		$result = mysqli_query($conn,$cek);
		$resultCheck = mysqli_num_rows($result);
		if ( $resultCheck == 1) {
			$row = mysqli_fetch_assoc($result);
				if (password_verify($password,$row["password"])) {
					// header("Location: ../index.php");
					$_SESSION["sudahLogin"] = true;
                    $_SESSION['id_anggota'] = $row["id_anggota"];
                    echo"Berhasil Login";
					exit;
				}
				else{
					echo"Password Salah";
				}

			}
			else{
				echo"Username tidak ditemukan";
			}
    }
?>