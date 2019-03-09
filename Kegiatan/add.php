 <?php include_once('../_header.php'); ?>

 <div class="box">
 	<h1>Kegiatan</h1>
		<h4>
		<small>Tambah Data Kegiatan</small>
		<!-- Membuat Button Tambah Data -->
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="nama">Nama Kegiatan</label>
						<input type="text" name="nama_kegiatan" id="nama_kegiatan" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="nama">Tujuan</label>
						<input type="text" name="tujuan" id="tujuan" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Keterangan</label>
						<textarea name="keterangan" id="keterangan" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label for="nama">Jam</label>
						<input type="text" name="jam" id="jam" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Tanggal</label>
						<input type="date" name="tgl" id="tgl" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Lokasi</label>
						<input type="text" name="lokasi" id="lokasi" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Foto</label>
						<input type="file" name="foto" id="foto" class="form-control" required>
					</div>
					<div class="form-group pull-right" style="margin-top: 20px;">
						<input type="submit" name="add" class="btn btn-success" required>
					</div>
					</div>
				</form>
			</div>
		</div>
	</h4> 
 </div>

  <?php include_once('../_footer.php'); ?>
