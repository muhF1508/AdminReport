 <?php include_once('../_header.php'); ?>

 <div class="box">
 	<h1>Berita</h1>
		<h4>
		<small>Tambah Data Berita</small>
		<!-- Membuat Button Tambah Data -->
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="nama">Judul</label>
						<input type="text" name="judul" id="judul" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="nama">Konten</label>
						<textarea name="konten" id="konten" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label for="nama">Tanggal Terbit</label>
						<input type="date" name="tgl_terbit" id="tgl_terbit" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Penerbit</label>
						<input type="text" name="penerbit" id="penerbit" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Gambar</label>
						<input type="file" name="gambar" id="gambar" class="form-control" required>
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
