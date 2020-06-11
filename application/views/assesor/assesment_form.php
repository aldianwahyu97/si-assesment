<!DOCTYPE html>
<html>
<?php 
	require_once("head.php");
?>
<body class="hold-transition sidebar-mini layout-fixed">
<div class="wrapper">
  <!-- Navbar -->
  <?php 
	require_once("navbar.php");
  ?>
  <!-- /.navbar -->

  <!-- Main Sidebar Container -->
  <?php 
	require_once('sidebar.php');
  ?>

  <!-- Content Wrapper. Contains page content -->
  <div class="content-wrapper">
    <!-- Content Header (Page header) -->
    <div class="content-header">
      <div class="container-fluid">
        <div class="row mb-2">
          <div class="col-sm-6">
            <h1 class="m-0 text-dark">Form Assesment</h1>
          </div><!-- /.col -->
          <div class="col-sm-6">
			<ol class="breadcrumb float-sm-right">
				<li class="breadcrumb-item"><a href="<?php echo base_url()?>Assesor/assesment">Assesment</a></li>
				<li class="breadcrumb-item active">Form Assesment</li>
            </ol>
          </div><!-- /.col -->
        </div><!-- /.row -->
      </div><!-- /.container-fluid -->
    </div>
    <!-- /.content-header -->

    <!-- Main content -->
    <section class="content">
      <div class="container-fluid">
		
        <!-- Small boxes (Stat box) -->
        <div class="row">
          <div class="col-6">
		  	<div class="card">
				<div class="card-body">
					<form action="/action_page.php">
						<div class="form-group">
							<label for="date">Tanggal dan Waktu Assesment</label>
							<div class="input-group date" id="reservationdate" data-target-input="nearest">
									<input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
									<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
											<div class="input-group-text"><i class="fa fa-calendar"></i></div>
									</div>
							</div>
						</div>
						<div class="form-group">
							<label for="assesor">Nama Assesor</label>
							<input type="text" class="form-control" id="nama_assesor">
						</div>
						<div class="form-group">
							<label for="tahanan">Nama Tahanan</label>
							<select class="form-control" id="nama_tahanan">
								<option>Anggin Risna Widianingsih</option>
								<option>Anggin Risna Widianingsih</option>
								<option>Anggin Risna Widianingsih</option>
								<option>Anggin Risna Widianingsih</option>
								<option>Anggin Risna Widianingsih</option>
							</select>
						</div>
						<div class="form-group">
							<label for="pendidikan">Pendidikan Terakhir</label>
							<select class="form-control" id="pendidikan_terakhir">
								<option>Tidak Sekolah</option>
								<option>SD</option>
								<option>SMP</option>
								<option>SMA</option>
								<option>Lainnya</option>
							</select>
						</div>
						<div class="form-group">
							<label for="pekerjaan">Pekerjaan Terakhir</label>
							<input type="text" class="form-control" id="pekerjaan_terakhir">
						</div>
						<div class="form-group">
							<label for="penghasilan">Penghasilan (Per Bulan)</label>
							<select class="form-control" id="penghasilan">
								<option>Tidak dapat ditentukan</option>
								<option><= 500.000</option>
								<option>> 500.000, <= 1.000.000</option>
								<option>> 1.000.000, <= 5.000.000</option>
								<option>> 5.000.000</option>
							</select>
						</div>
						<div class="form-group">
							<label for="hobby">Hobby</label>
							<input type="text" class="form-control" id="hobby">
						</div>
					</form>
				</div>
			</div>
		  </div>
		  <div class="col-6">
		  	<div class="card">
				<div class="card-body">
					<form action="/action_page.php">
						<div class="form-group">
							<label for="date">Tanggal dan Waktu Assesment</label>
							<div class="input-group date" id="reservationdate" data-target-input="nearest">
									<input type="text" class="form-control datetimepicker-input" data-target="#reservationdate"/>
									<div class="input-group-append" data-target="#reservationdate" data-toggle="datetimepicker">
											<div class="input-group-text"><i class="fa fa-calendar"></i></div>
									</div>
							</div>
						</div>
						<div class="form-group">
							<label for="assesor">Nama Assesor</label>
							<input type="text" class="form-control" id="nama_assesor">
						</div>
						<div class="form-group">
							<label for="tahanan">Nama Tahanan</label>
							<select class="form-control" id="nama_tahanan">
								<option>Anggin Risna Widianingsih</option>
								<option>Anggin Risna Widianingsih</option>
								<option>Anggin Risna Widianingsih</option>
								<option>Anggin Risna Widianingsih</option>
								<option>Anggin Risna Widianingsih</option>
							</select>
						</div>
						<div class="form-group">
							<label for="pendidikan">Pendidikan Terakhir</label>
							<select class="form-control" id="pendidikan_terakhir">
								<option>Tidak Sekolah</option>
								<option>SD</option>
								<option>SMP</option>
								<option>SMA</option>
								<option>Lainnya</option>
							</select>
						</div>
						<div class="form-group">
							<label for="pekerjaan">Pekerjaan Terakhir</label>
							<input type="text" class="form-control" id="pekerjaan_terakhir">
						</div>
						<div class="form-group">
							<label for="penghasilan">Penghasilan (Per Bulan)</label>
							<select class="form-control" id="penghasilan">
								<option>Tidak dapat ditentukan</option>
								<option><= 500.000</option>
								<option>> 500.000, <= 1.000.000</option>
								<option>> 1.000.000, <= 5.000.000</option>
								<option>> 5.000.000</option>
							</select>
						</div>
						<div class="form-group">
							<label for="hobby">Hobby</label>
							<input type="text" class="form-control" id="hobby">
						</div>
					</form>
				</div>
			</div>
		  </div>
        </div>
		<div class="row" style="padding-bottom: 15px; text-align:right">
			<div class="col-12">
				<button class="btn btn-danger">Batal</button>
				<a href="<?php echo base_url()?>Assesor/assesment_result"><button class="btn btn-success">Simpan</button></a>
			</div>
        </div>
      </div><!-- /.container-fluid -->
    </section>
    <!-- /.content -->
	</div>
  <!-- /.content-wrapper -->
  <?php 
	require_once("footer.php");
  ?>

  <!-- Control Sidebar -->
  <aside class="control-sidebar control-sidebar-dark">
    <!-- Control sidebar content goes here -->
  </aside>
  <!-- /.control-sidebar -->
</div>
<!-- ./wrapper -->

<!-- jQuery -->
<script src="<?php echo base_url();?>assets/plugins/jquery/jquery.min.js"></script>
<!-- jQuery UI 1.11.4 -->
<script src="<?php echo base_url();?>assets/plugins/jquery-ui/jquery-ui.min.js"></script>
<!-- Resolve conflict in jQuery UI tooltip with Bootstrap tooltip -->
<script>
  $.widget.bridge('uibutton', $.ui.button)
</script>
<!-- Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/bootstrap/js/bootstrap.bundle.min.js"></script>
<!-- ChartJS -->
<script src="<?php echo base_url();?>assets/plugins/chart.js/Chart.min.js"></script>
<!-- Sparkline -->
<script src="<?php echo base_url();?>assets/plugins/sparklines/sparkline.js"></script>
<!-- JQVMap -->
<script src="<?php echo base_url();?>assets/plugins/jqvmap/jquery.vmap.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/jqvmap/maps/jquery.vmap.usa.js"></script>
<!-- jQuery Knob Chart -->
<script src="<?php echo base_url();?>assets/plugins/jquery-knob/jquery.knob.min.js"></script>
<!-- daterangepicker -->
<script src="<?php echo base_url();?>assets/plugins/moment/moment.min.js"></script>
<script src="<?php echo base_url();?>assets/plugins/daterangepicker/daterangepicker.js"></script>
<!-- Tempusdominus Bootstrap 4 -->
<script src="<?php echo base_url();?>assets/plugins/tempusdominus-bootstrap-4/js/tempusdominus-bootstrap-4.min.js"></script>
<!-- Summernote -->
<script src="<?php echo base_url();?>assets/plugins/summernote/summernote-bs4.min.js"></script>
<!-- overlayScrollbars -->
<script src="<?php echo base_url();?>assets/plugins/overlayScrollbars/js/jquery.overlayScrollbars.min.js"></script>
<!-- AdminLTE App -->
<script src="<?php echo base_url();?>assets/dist/js/adminlte.js"></script>
<!-- AdminLTE dashboard demo (This is only for demo purposes) -->
<script src="<?php echo base_url();?>assets/dist/js/pages/dashboard.js"></script>
<!-- AdminLTE for demo purposes -->
<script src="<?php echo base_url();?>assets/dist/js/demo.js"></script>
</body>
</html>
