 <?php include_once('../_header.php'); ?>

 <div class="box">
 	<h1>Kegiatan</h1>
		<h4>
		<small>Edit Data Kegiatan</small>
		<!-- Membuat Button Tambah Data -->
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<?php
				$id = @$_GET['id'];
				$sql_lapor = mysqli_query($con, "SELECT * FROM tb_kegiatan WHERE id = '$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_lapor);
				?>
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="nama">Nama Kegiatan</label>
						<input type="hidden" name="id" value="<?=$data['id']?>">
						<input type="text" name="nama_kegiatan" id="nama_kegiatan" value="<?=$data['nama_kegiatan']?>" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="nama">Tujuan</label>
						<input type="text" name="tujuan" id="tujuan" value="<?=$data['tujuan']?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Keterangan</label>
						<textarea name="keterangan" id="keterangan" class="form-control" required><?=$data['keterangan']?></textarea>
					</div>
					<div class="form-group">
						<label for="nama">Jam</label>
						<input type="text" name="jam" id="jam" value="<?=$data['jam']?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Tanggal</label>
						<input type="date" name="tgl" id="tgl" value="<?=$data['tgl']?>"class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Lokasi</label>
						<input type="text" name="lokasi" id="lokasi" value="<?=$data['lokasi']?>"class="form-control" required>
					</div>	
					<div class="form-group">
						<label for="nama">Foto</label>
						<input type="file" name="foto" id="foto" value="<?=$data['foto']?>"class="form-control" required>
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
