<?php include_once('../_header.php');?>
<?php error_reporting(0); ?>

	<div class="box">
		<h1>Data Guru</h1>
		<h4>
		<small>Data Guru</small>
		<!-- Membuat Button Tambah Data -->
		<div class="pull-right">
			<a href="" class="btn btn-default btn-xs"><i class="glyphicon glyphicon-refresh"></i></a>
			<a href="add.php" class="btn btn-success btn-xs"><i class="glyphicon glyphicon-plus"></i>Tambah Siswa</a>
		</div>
	</h4> 
	<!-- Membuat Button Pencarian -->
	<div style="margin-bottom: 20px;">
		<form class="form-inline" action="" method="post">
			<div class="form-group">
				<input type="text" name="pencarian" class="form-control" placeholder="Pencarian">
			</div>
			<div class="form-group">
				<button type="submit" class="btn btn-primary"><span class="glyphicon glyphicon-search" aria-hidden="true"></span></button>
			</div>
		</form>
	</div>
	<!-- Membuat Table beserta fungsinya -->
	<div class="table-responsive">
		<table class="table table-striped table-bordered table-hover">
			<tread>
				<tr>
					<th>No.</th>
					<th>Nama</th>
					<th>Umur</th>
					<th>Tanggal Lahir</th>
					<th>Nomor Telepon</th>
					<th>Alamat</th>
					<th>Foto</th>
					<th><i class="glyphicon glyphicon-cog"></i></th>
				</tr>
			</tread>
			<tbody>
				<!-- membuat fungsi dari search bar -->
				<?php
				$batas = 10;
				$hal = @$_GET['hal'];
				if (empty($hal)) {
					$posisi = 0;
					$hal = 1;
				} else {
					$posisi = ($hal - 1) * $batas;
				}
				$no = 1;
				if ($_SERVER['REQUEST_METHOD'] == "POST" ) {
					$pencarian = trim(mysqli_real_escape_string($con, $_POST['pencarian']));
					if ($pencarian != '') {
						$sql = "SELECT * FROM tb_guru WHERE nama LIKE '%$pencarian%'";
						$query = $sql;
						$queryJml = $sql;
					} else {
						$query = "SELECT * FROM tb_guru LIMIT $posisi, $batas";
						$queryJml = "SELECT * FROM tb_guru";
						$no = $posisi + 1;
					}
				} else {
					$query = "SELECT * FROM tb_guru LIMIT $posisi, $batas";
					$queryJml = "SELECT * FROM tb_guru";
					$no = $posisi + 1;
				}
				// untuk menampilkan data dari database ke web tersebut
				$sql_lapor = mysqli_query($con, $query) or die (mysqli_error($con));
				if (mysqli_num_rows($sql_lapor) > 0) {
					while ($data = mysqli_fetch_array($sql_lapor)) { ?>
						<tr>
							<td><?=$no++?>.</td>
							<td><?=$data['nama']?></td>
							<td><?=$data['umur']?></td>
							<td><?=$data['tgl_lahir']?></td>
							<td><?=$data['no_telp']?></td>
							<td><?=$data['alamat']?></td>
							<td><?=$data['foto']?></td>
							<td class="text-center">
								<a href="edit.php?id=<?=$data['id']?>" class="btn btn-warning btn-xs"><i class="glyphicon glyphicon-edit"></i></a>
								<a href="del.php?id=<?=$data['id']?>" onclick="return confirm('Anda yakin akan menghapus Data ?')" class="btn btn-danger btn-xs"><i class="glyphicon glyphicon-trash"></i></a>
							</td>
						</tr>
					<?php
					}
				} else {
					echo "<tr><td colspan=\"4\" align=\"center\"> Data Tidak Ditemukan</td></tr>";
				}
				?>
			</tbody>
		</table>
	</div>
	<!-- Membuat jumlah data yang ada dalam Web kita -->
	<?php
	if($_POST['pencarian'] == '') { ?>
		<div style="float:left;">
			<?php
			$jml = mysqli_num_rows(mysqli_query($con, $queryJml));
			echo "Jumlah Data : <b>$jml</b>";
			?>
		</div>
		<div style="float:right;">
			<ul class="pagination pagination-sm" style="margin: 0">
				<?php
				$jml_hal = ceil($jml / $batas);
				for ($i=1; $i <= $jml_hal; $i++) { 
					if ($i != $hal) {
						echo "<li><a href=\"?hal=$i\">$i</a></li>";
					} else {
						echo "<li class=\"active\"><a>$i</a></li>";
					}
				}
				?>
			</ul>
		</div>
		<?php
	} else {
		echo "<div style=\"float:left;\">";
		$jml = mysqli_num_rows(mysqli_query($con, $queryJml)); 
		echo "Data Hasil Pencarian : <b>$jml</b>";
		echo "</div>";  
	}
	?>
	</div>


<?php include_once('../_footer.php');?>

