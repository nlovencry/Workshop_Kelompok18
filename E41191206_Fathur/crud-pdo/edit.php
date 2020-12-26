<?php
	if (isset($_GET['id'])) {
		$id = $_GET['id'];
		$kolom = "*";
		$tabel = "mahasiswa";
		$where = "nim='$id'"; 
		$mahasiswa = $koneksi->getID($kolom,$tabel,$where);
		foreach ($mahasiswa as $key => $value){
	}
?>
<h2>Edit Data Mahasiswa</h2>
<form method="post" action="">
		<table>
			<tr>
				<td>NIM</td>
				<td><input type="text" name="nim" value="<?php echo $value['nim'] ?>"></td>					
			</tr>	
			<tr>
				<td>Nama</td>
				<td><input type="text" name="nama" value="<?php echo $value['nama'] ?>"></td>					
			</tr>
			<tr>
				<td>Jenis Kelamin</td>
				<td>
					<input type="radio" name="jk" value="Laki-Laki"> Laki - Laki
					<input type="radio" name="jk" value="Perempuan"> Perempuan
				</td>
			</tr>	
			<tr>
				<td>Umur</td>
				<td><input type="text" name="umur" value="<?php echo $value['umur'] ?>"></td>					
			</tr>	
			<tr>
				<td></td>
				<td><input type="submit" name="update" value="Update"></td>					
			</tr>				
		</table>
	<?php } ?>
	</form>