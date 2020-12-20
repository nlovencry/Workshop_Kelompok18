<!DOCTYPE html>
<html lang="en">

<?php include '../head.php'; ?>

<body class="hold-transition sidebar-mini layout-fixed layout-navbar-fixed layout-footer-fixed">
  <?php 
  session_start();
    // cek apakah yang mengakses halaman ini sudah login
    if($_SESSION['level']==""){
      echo "<script>alert('Silahkan login terlebih dahulu!'); location='../../login.php';</script>";
    }
  ?>
<div class="wrapper">
  <?php include '../navbar.php'; ?>

  <?php include '../sidebar.php'; ?>

  <?php include'../../koneksi.php'; ?>

  <!-- Javascript -->
  <script type="text/javascript" src="Chart.js"></script>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Dashboard</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
            <ol class="breadcrumb float-sm-right">
              <li class="breadcrumb-item"><a href="#">Home</a></li>
              <li class="breadcrumb-item active">Dashboard</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
        <!-- Info boxes -->
        <div class="row">
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box">
              <span class="info-box-icon bg-info elevation-1"><i class="fas fa-cog"></i></span>
              <div class="info-box-content">
                <span class="info-box-text">Data UKM</span>
                <span class="info-box-number">
                  <!-- Menampilkan Jumlah UKM yang ada -->
                  <?php 
                  $data_ukm = mysqli_query($db, "SELECT * FROM tb_ukm");
                  $jumlah_ukm = mysqli_num_rows($data_ukm);
                   ?>
                   <?php echo $jumlah_ukm; ?>



                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-danger elevation-1"><i class="fas fa-thumbs-up"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data User</span>
                <span class="info-box-number">
                	 <?php 
                  $data_user = mysqli_query($db, "SELECT * FROM tb_user");
                  $jumlah_user = mysqli_num_rows($data_user);
                   ?>
                   <?php echo $jumlah_user; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->

          <!-- fix for small devices only -->
          <div class="clearfix hidden-md-up"></div>

          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-success elevation-1"><i class="fas fa-shopping-cart"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Mahasiswa</span>
                <span class="info-box-number">
                	 <?php 
                  $data_mahasiswa = mysqli_query($db, "SELECT * FROM tb_mahasiswa");
                  $jumlah_mahasiswa = mysqli_num_rows($data_mahasiswa);
                   ?>
                   <?php echo $jumlah_mahasiswa; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
          <div class="col-12 col-sm-6 col-md-3">
            <div class="info-box mb-3">
              <span class="info-box-icon bg-warning elevation-1"><i class="fas fa-users"></i></span>

              <div class="info-box-content">
                <span class="info-box-text">Data Pendaftaran</span>
                <span class="info-box-number">
                	 <?php 
                  $data_pendaftaran = mysqli_query($db, "SELECT * FROM tb_pendaftaran");
                  $jumlah_pendaftaran = mysqli_num_rows($data_pendaftaran);
                   ?>
                   <?php echo $jumlah_pendaftaran; ?>
                </span>
              </div>
              <!-- /.info-box-content -->
            </div>
            <!-- /.info-box -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->

        <div class="row">
          <div class="col-md-12">
            <div class="card">
              <div class="card-header">
                <h5 class="card-title">Grafik Pendaftaran Seluruh UKM</h5>
              </div>
              <!-- /.card-header -->
              <div class="card-body">
                <div class="row">
                  <div class="col-md-12">
                    <p class="text-center">
                      <strong>Pendaftaran: 1 Jan, 2019 - 30 Jul, 2019</strong>
                    </p>

                    <div class="chart">
                      <!-- ukm Chart Canvas -->
                     <!--  <canvas id="ukmChart" height="180" style="height: 180px;"></canvas>
                      <style type="text/css">
                      	table {
                      		margin: 0px auto;
                      	}
                      </style>
                  	</div>
                  	<table border="1">
                  		<thead>
                  			<tr>
				<th>No</th>
				<th>Nama UKM</th>
				<th>Deskripsi UKM</th>
				<th>Ketua UKM</th>
			</tr>
		</thead>
		<tbody>
			<?php 
			$no = 1;
			$data = mysqli_query($db,"select * from tb_ukm");
			while($d=mysqli_fetch_array($data)){
				?>
				<tr>
					<td><?php echo $no++; ?></td>
					<td><?php echo $d['nama_ukm']; ?></td>
					<td><?php echo $d['deskripsi_ukm']; ?></td>
					<td><?php echo $d['ketua_ukm']; ?></td>
				</tr>
				<?php 
			}
			?>
		</tbody>
                  	</table>
 -->

             <?php

$grafik = mysqli_query($db,"select * from tb_ukm");
while($row = mysqli_fetch_array($grafik)){
	$nama_grafik[] = $row['nama_ukm'];
	
	$query = mysqli_query($db,"select sum(id_ukm) as id_ukm from tb_pendaftaran where id_ukm='".$row['id_ukm']."'");
	$row = $query->fetch_array();
	$jumlah_pendaftar[] = $row['id_ukm'];
}
?>
	<div style="width: 800px;height: 800px">
		<canvas id="myChart"></canvas>
	</div>
 
 
	<script>
		var ctx = document.getElementById("myChart").getContext('2d');
		var myChart = new Chart(ctx, {
			type: 'bar',
			data: {
				labels: <?php echo json_encode($nama_ukm); ?>,
				datasets: [{
					label: 'Grafik Penjualan',
					data: <?php echo json_encode($jumlah_pendaftar); ?>,
					backgroundColor: 'rgba(255, 99, 132, 0.2)',
					borderColor: 'rgba(255,99,132,1)',
					borderWidth: 1
				}]
			},
			options: {
				scales: {
					yAxes: [{
						ticks: {
							beginAtZero:true
						}
					}]
				}
			}
		});
	</script>
                    </div>
                    <!-- /.chart-responsive -->
                  </div>
                </div>
                <!-- /.row -->
              </div>
              <!-- ./card-body -->
            </div>
            <!-- /.card -->
          </div>
          <!-- /.col -->
        </div>
        <!-- /.row -->
      </div><!--/. container-fluid -->
    </section>
    <!-- /.content -->
  </div>
  <!-- /.content-wrapper -->

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->

  <?php include '../footer.php'; ?>
</div>
<!-- ./wrapper -->

<!-- REQUIRED SCRIPTS -->
<!-- jQuery -->
<script src="../../../plugins/jquery/jquery.min.js"></script>
<!-- Bootstrap -->
<script src="../../../plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- overlayScrollbars -->
<script src="../../../plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="../../../dist/js/adminlte.js"></script>

<!-- OPTIONAL SCRIPTS -->
<script src="../../../dist/js/demo.js"></script>

<!-- PAGE ../../../PLUGINS -->
<!-- jQuery Mapael -->
<script src="../../../plugins/jquery-mousewheel/jquery.mousewheel.js"></script>
<script src="../../../plugins/raphael/raphael.min.js"></script>
<script src="../../../plugins/jquery-mapael/jquery.mapael.min.js"></script>
<script src="../../../plugins/jquery-mapael/maps/usa_states.min.js"></script>
<!-- ChartJS -->
<script src="../../../plugins/chart.js/Chart.min.js"></script>

<!-- PAGE SCRIPTS -->

</body>
</html>
