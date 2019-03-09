<?php
require_once "../_config/config.php";


if (isset($_POST['add'])) {
	$judul 		= trim(mysqli_real_escape_string($con, $_POST['judul']));
	$konten		= trim(mysqli_real_escape_string($con, $_POST['konten']));
	$tgl_terbit = trim(mysqli_real_escape_string($con, $_POST['tgl_terbit']));
	$penerbit	= trim(mysqli_real_escape_string($con, $_POST['penerbit']));
	$gambar		= trim(mysqli_real_escape_string($con, $_POST['gambar']));
	mysqli_query($con, "INSERT INTO tb_berita (judul, konten, tgl_terbit, penerbit, gambar) VALUES ('$judul', '$konten', '$tgl_terbit', '$penerbit', '$gambar')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])){
	$id			= $_POST['id'];
	$judul 		= trim(mysqli_real_escape_string($con, $_POST['judul']));
	$konten 	= trim(mysqli_real_escape_string($con, $_POST['konten']));
	$tgl_terbit = trim(mysqli_real_escape_string($con, $_POST['tgl_terbit']));
	$penerbit 	= trim(mysqli_real_escape_string($con, $_POST['penerbit']));
	$gambar		= trim(mysqli_real_escape_string($con, $_POST['gambar']));
	mysqli_query($con, "UPDATE tb_berita SET judul = '$judul', konten = '$konten', tgl_terbit = '$tgl_terbit', penerbit = '$penerbit', gambar = '$gambar' WHERE id = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	
}
?>

