<?php 
		$kolom = "*";
		$tabel = "mahasiswa";
		$mahasiswa = $koneksi->getID($kolom,$tabel); 
?>
<table border="1">
	<tr>
		<td>Nim</td>
		<td>Nama</td>
		<td>Jenis Kelamin</td>
		<td>Umur</td>
		<td>Aksi</td>
	</tr>
		<?php foreach ($mahasiswa as $key => $value){ ?>
	<tr>
		<td><?php echo $value['nim']; ?></td>
		<td><?php echo $value['nama']; ?></td>
		<td><?php echo $value['jenis_kelamin']; ?></td>
		<td><?php echo $value['umur']; ?></td>
		<td>
			<a href="index.php?hal=edit&&id=<?php echo $value['nim'] ?>" ?>Edit</a> |
			<a href="index.php?hal=hapus&&id=<?php echo $value['nim'] ?>" ?>Hapus</a>
		</td>
	</tr>
		<?php } ?>
</table>