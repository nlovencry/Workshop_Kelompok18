<?php
include "koneksi.php";

$p = $_GET['p'];

if ($p == 'tambah') {
    $sql = "insert into mahasiswa values ('','$_POST[xnama]','$_POST[xjurusan]', '$_POST[xprodi]','$_POST[xgolongan]')";
    $data = $konek->prepare($sql);
    $data->execute();

    echo "<script>alert('Data Berhasil Ditambah!');location='.'</script>";
}

if ($p == 'edit') {
    $sql = "update mahasiswa set nama_mhs='$_POST[xnama]', jurusan='$_POST[xjurusan]', golongan='$_POST[xgolongan]' where id_mhs='$_GET[id]'";
    $data = $konek->prepare($sql);
    $data->execute();

    echo "<script>alert('Data Berhasil Diedit!');location='.'</script>";
}

if ($p == 'hapus') {
    $sql = "delete from mahasiswa where id_mhs='$_GET[id]'";
    $data = $konek->prepare($sql);
    $data->execute();

    echo "<script>alert('Data Berhasil Dihapus!');location='.'</script>";
}
?>
