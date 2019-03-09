 <?php include_once('../_header.php'); ?>

 <div class="box">
 	<h1>Peraturan</h1>
		<h4>
		<small>Tambah Susunan Peraturan</small>
		<!-- Membuat Button Tambah Data -->
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="judul">Nama Peraturan</label>
						<input type="text" name="judul" id="judul" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="isi">Isi Aturan</label>
						<textarea name="isi" id="isi" class="form-control" required></textarea>
					</div>
					<div class="form-group">
						<label for="penulis">Penulis</label>
						<input type="text" name="penulis" id="penulis" class="form-control" required>
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
