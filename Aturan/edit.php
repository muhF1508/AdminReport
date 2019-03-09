 <?php include_once('../_header.php'); ?>

 <div class="box">
 	<h1>Tata Tertib</h1>
		<h4>
		<small>Edit Susunan Tata Tertib</small>
		<!-- Membuat Button Tambah Data -->
		<div class="pull-right">
			<a href="data.php" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-chevron-left"></i> Kembali</a>
		</div>
		<div class="row">
			<div class="col-lg-6 col-lg-offset-3">
				<?php
				$id = @$_GET['id'];
				$sql_lapor = mysqli_query($con, "SELECT * FROM tb_peraturan WHERE id = '$id'") or die(mysqli_error($con));
				$data = mysqli_fetch_array($sql_lapor);
				?>
				<form action="proses.php" method="post">
					<div class="form-group">
						<label for="judul">Nama Peraturan</label>
						<input type="hidden" name="id" value="<?=$data['id']?>">
						<input type="text" name="judul" id="judul" value="<?=$data['judul']?>" class="form-control" required autofocus>
					</div>
					<div class="form-group">
						<label for="isi">Isi Aturan</label>
						<input type="text" name="isi" id="isi" value="<?=$data['isi']?>" class="form-control" required>
					</div>
					<div class="form-group">
						<label for="penulis">Penulis</label>
						<input type="text" name="penulis" id="penulis" value="<?=$data['penulis']?>" class="form-control" required>
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
