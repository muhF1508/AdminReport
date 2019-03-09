 <?php include_once('../_header.php'); ?>

 <div class="box">
 	<h1>Laporan</h1>
		<h4>
		<small>Tambah Data Laporan</small>
		<!-- Membuat Button Tambah Data -->
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="nama">Nama Siswa</label>
						<input type="text" name="nama" id="nama" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="nama">Kelas</label>
						<input type="text" name="kelas" id="kelas" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Wali</label>
						<input type="text" name="wali" id="wali" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Poin</label>
						<input type="text" name="poin" id="poin" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Jenis Pelanggaran</label>
						<input type="text" name="melanggar" id="melanggar" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Keterangan</label>
						<textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label for="nama">Tanggal Lapor</label>
						<input type="date" name="tgl_lapor" id="tgl_lapor" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Pelapor</label>
						<input type="text" name="pelapor" id="pelapor" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Foto</label>
						<input type="file" name="foto" id="foto" class="form-control" required>
					</div>
					<div class="form-group pull-right">
						<input type="submit" name="add" class="btn btn-success" required>
					</div>
				</form>
			</div>
		</div>
	</h4> 
 </div>

  <?php include_once('../_footer.php'); ?>
