 <?php include_once('../_header.php'); ?>

 <div class="box">
 	<h1>Laporan</h1>
		<h4>
		<small>Edit Data Laporan</small>
		<!-- Membuat Button Tambah Data -->
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<?php
				$id = @$_GET['id'];
				$sql_lapor = mysqli_query($con, "SELECT * FROM tb_laporan WHERE id = '$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_lapor);
				?>
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="nama">Nama Siswa</label>
						<input type="hidden" name="id" value="<?=$data['id']?>">
						<input type="text" name="nama" id="nama" value="<?=$data['nama']?>" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="nama">Kelas</label>
						<input type="text" name="kelas" id="kelas" value="<?=$data['kelas']?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Wali</label>
						<input type="text" name="wali" id="wali" value="<?=$data['wali']?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Poin</label>
						<input type="text" name="poin" id="poin" value="<?=$data['poin']?>"class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Jenis Pelanggaran</label>
						<input type="text" name="melanggar" id="melanggar" value="<?=$data['melanggar']?>"class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Keterangan</label>
						<textarea name="keterangan" id="keterangan" class="form-control" required><?=$data['keterangan']?></textarea>
					</div>
					<div class="form-group">
						<label for="nama">Tanggal Lapor</label>
						<input type="date" name="tgl_lapor" id="tgl_lapor" value="<?=$data['tgl_lapor']?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Pelapor</label>
						<input type="text" name="pelapor" id="pelapor" value="<?=$data['pelapor']?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Foto</label>
						<input type="file" name="foto" id="foto" value="<?=$data['foto']?>" class="form-control" required>
					</div>
					<div class="form-group pull-right">
						<input type="submit" name="edit" class="btn btn-success" required>
					</div>
				</form>
			</div>
		</div>
	</h4> 
 </div>

  <?php include_once('../_footer.php'); ?>
