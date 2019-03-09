 <?php include_once('../_header.php'); ?>

 <div class="box">
 	<h1>Data Guru</h1>
		<h4>
		<small>Edit Data Guru</small>
		<!-- Membuat Button Tambah Data -->
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<?php
				$id = @$_GET['id'];
				$sql_lapor = mysqli_query($con, "SELECT * FROM tb_guru WHERE id = '$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_lapor);
				?>
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="nama">Nama</label>
						<input type="hidden" name="id" value="<?=$data['id']?>">
						<input type="text" name="nama" id="nama" value="<?=$data['nama']?>" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="nama">Umur</label>
						<input type="text" name="umur" id="umur" value="<?=$data['umur']?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Tanggal Lahir</label>
						<input type="date" name="tgl_lahir" id="tgl_lahir" value="<?=$data['tgl_lahir']?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Nomor Telepon</label>
						<input type="number" name="no_telp" id="no_telp" value="<?=$data['no_telp']?>"class="form-control" required>
					</div>
					<div class="form-group">
						<label for="nama">Alamat</label>
						<input type="text" name="alamat" id="alamat" value="<?=$data['alamat']?>"class="form-control" required>
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
