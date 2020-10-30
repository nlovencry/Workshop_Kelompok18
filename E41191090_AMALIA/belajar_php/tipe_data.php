<?php 

//tipe data char (karakter)
$jenis_kelamin='l';

//tipe data srtring (teks)
$nama_lengkap = "Petani kode";

//tipe data integer
$umur = 20;

//tipe data float
$berat = 48.3;

//tipe data float
$tinggi = 182.2;

//tipe data boolean
$menikah = false;

echo "Nama:$nama_lengkap<br>";
echo "Jenis Kelamin: $jenis_kelamin<br>";
echo "Umur: $umur<br>";
echo "Berat Badan: $berat Kg<br>";
echo "Tinggi Badan: $tinggi Cm<br>";

//mengecek tipe data pada php
echo gettype ($nama_lengkap); echo "<br />";
echo gettype ($jenis_kelamin); echo "<br />";
echo gettype ($umur); echo "<br />";
echo gettype ($berat); echo "<br />";
echo gettype ($tinggi); echo "<br />";

?>