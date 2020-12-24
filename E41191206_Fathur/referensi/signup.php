<?php 
	include"../header.php"; 
?>
	<section class="daftar" id="daftar">
		<div class="container">
			<div class="row">
				<div class="col-md-8 offset-2 text-center mt-3">
				<h3>SIMATONG</h3>
				</div>
			</div>
			<div class="row mb-2">
				<div class="col-md-8 offset-2 text-center mt-2">
				<h4>kuY Daftar Yuk</h4>
				</div>
			</div>
			<div class="row">
				<div class="col-md-6 offset-3 px-5">
				<form action="" method="POST" id="signup_form">
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Nama Lengkap" name="Nama" id="nama_user" required>
					</div>
					<div class="form-group">
						<input type="text" class="form-control" placeholder="Username" id="user_signup" name="User" required>
					</div>
					<div class="form-check-inline col-md-3">
						<input type="radio" class="form-check-input jk" name="jenis_kelamin" id="radio1" value="laki-laki">
						<label for="radio1" class="form-check-label">Laki-Laki</label>
					</div>
					<div class="form-check-inline col-md-7">
						<input type="radio" class="form-check-input jk" name="jenis_kelamin" id="radio2" value="Perempuan">
						<label for="radio2" class="form-check-label">Perempuan</label>
					</div>
					<div class="form-row mt-2">
					<div class="form-group col-md-6">
						<input type="date"class="form-control" name="tgl_lahir" id="tgl_user" required>
					</div>
					<div class="form-group col-md-6">
						<input type="text"class="form-control" placeholder="Tempat Lahir" name="tempat" id="tmp_user" required>
					</div>
					</div>
					<div class="form-group">
						<textarea class="form-control" placeholder="Alamat Lengkap" name="alamat" id="alamat_user" required></textarea>
					</div>
					<div class="form-row">
					</div>
					<div class="form-group">
						<input type="text" class="form-control" name="telp" placeholder="No Telp" id="tlp_user" required>
					</div>
					<div class="form-group">
						<input type="Email" class="form-control" name="Email" placeholder=" Alamat Email" id="email_user" required>
					</div>

					<div class="form-row pass_form">
					<div class="form-group col-md-6">
						<input type="Password" class="form-control pass1" name="Password" id="pass_1" placeholder="Password" required>
					</div>
					<div class="form-group col-md-6">
						<input type="password" class="form-control" id="pass_2" name="Password2" placeholder=" Ulangi Password" required>
					</div>
					</div>
					<button type="submit" class="btn btn-success bg-hijau col-md-12" name="daftar">Daftar</button>
				</form>
				<p class="mt-1">Sudah Punya Akun ? <a href="login.php">Login Disini</a></p>
			</div>
			</div>
		</div>
	</section>

<?php
	include"../footer.php";
?>
