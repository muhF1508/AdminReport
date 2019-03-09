<?php
require_once "../_config/config.php";


if (isset($_POST['add'])) {
	$nama_kegiatan 		= trim(mysqli_real_escape_string($con, $_POST['nama_kegiatan']));
	$tujuan				= trim(mysqli_real_escape_string($con, $_POST['tujuan']));
	$keterangan			= trim(mysqli_real_escape_string($con, $_POST['keterangan']));
	$jam		 		= trim(mysqli_real_escape_string($con, $_POST['jam']));
	$tgl 				= trim(mysqli_real_escape_string($con, $_POST['tgl']));
	$lokasi				= trim(mysqli_real_escape_string($con, $_POST['lokasi']));
	$foto				= trim(mysqli_real_escape_string($con, $_POST['foto']));
	mysqli_query($con, "INSERT INTO tb_kegiatan (nama_kegiatan, tujuan, keterangan, jam, tgl, lokasi, foto) VALUES ('$nama_kegiatan', '$tujuan', '$keterangan', '$jam', '$tgl', '$lokasi', '$foto')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])){
	$id			= $_POST['id'];
	$nama_kegiatan 		= trim(mysqli_real_escape_string($con, $_POST['nama_kegiatan']));
	$tujuan			 	= trim(mysqli_real_escape_string($con, $_POST['tujuan']));
	$keterangan			= trim(mysqli_real_escape_string($con, $_POST['keterangan']));
	$jam 				= trim(mysqli_real_escape_string($con, $_POST['jam']));
	$tgl 				= trim(mysqli_real_escape_string($con, $_POST['tgl']));
	$lokasi				= trim(mysqli_real_escape_string($con, $_POST['lokasi']));
	$foto				= trim(mysqli_real_escape_string($con, $_POST['foto']));
	mysqli_query($con, "UPDATE tb_kegiatan SET nama_kegiatan = '$nama_kegiatan', tujuan = '$tujuan', keterangan = '$keterangan', jam = '$jam', tgl = '$tgl', lokasi = '$lokasi', foto = '$foto' WHERE id = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	
}
?>

