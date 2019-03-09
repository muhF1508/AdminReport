<?php
require_once "../_config/config.php";


if (isset($_POST['add'])) {
	$nama 		= trim(mysqli_real_escape_string($con, $_POST['nama']));
	$kelas 		= trim(mysqli_real_escape_string($con, $_POST['kelas']));
	$wali 		= trim(mysqli_real_escape_string($con, $_POST['wali']));
	$poin 		= trim(mysqli_real_escape_string($con, $_POST['poin']));
	$melanggar	= trim(mysqli_real_escape_string($con, $_POST['melanggar']));
	$keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
	$tgl_lapor 	= trim(mysqli_real_escape_string($con, $_POST['tgl_lapor']));
	$pelapor 	= trim(mysqli_real_escape_string($con, $_POST['pelapor']));
	$foto 		= trim(mysqli_real_escape_string($con, $_POST['foto']));
	mysqli_query($con, "INSERT INTO tb_laporan (nama, kelas, wali, poin, melanggar, keterangan, tgl_lapor, pelapor, foto) VALUES ('$nama', '$kelas', '$wali', '$poin', '$melanggar', '$keterangan', '$tgl_lapor', '$pelapor', '$foto')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])){
	$id			= $_POST['id'];
	$nama 		= trim(mysqli_real_escape_string($con, $_POST['nama']));
	$kelas 		= trim(mysqli_real_escape_string($con, $_POST['kelas']));
	$wali 		= trim(mysqli_real_escape_string($con, $_POST['wali']));
	$poin 		= trim(mysqli_real_escape_string($con, $_POST['poin']));
	$melanggar	= trim(mysqli_real_escape_string($con, $_POST['melanggar']));
	$keterangan = trim(mysqli_real_escape_string($con, $_POST['keterangan']));
	$tgl_lapor 	= trim(mysqli_real_escape_string($con, $_POST['tgl_lapor']));
	$pelapor 	= trim(mysqli_real_escape_string($con, $_POST['pelapor']));
	$foto 		= trim(mysqli_real_escape_string($con, $_POST['foto']));
	mysqli_query($con, "UPDATE tb_laporan SET nama = '$nama', kelas = '$kelas', wali = '$wali', poin = '$poin', melanggar = '$melanggar', keterangan = '$keterangan', tgl_lapor = '$tgl_lapor', pelapor = '$pelapor', foto = '$foto' WHERE id = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	
}
?>

