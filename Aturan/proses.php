<?php
require_once "../_config/config.php";


if (isset($_POST['add'])) {
	$judul 				= trim(mysqli_real_escape_string($con, $_POST['judul']));
	$isi				= trim(mysqli_real_escape_string($con, $_POST['isi']));
	$penulis		 	= trim(mysqli_real_escape_string($con, $_POST['penulis']));
	mysqli_query($con, "INSERT INTO tb_peraturan (judul, isi, penulis) VALUES ('$judul', '$isi', '$penulis')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])){
	$id					= $_POST['id'];
	$judul 		 		= trim(mysqli_real_escape_string($con, $_POST['judul']));
	$isi			 	= trim(mysqli_real_escape_string($con, $_POST['isi']));
	$penulis 			= trim(mysqli_real_escape_string($con, $_POST['penulis']));
	mysqli_query($con, "UPDATE tb_peraturan SET judul = '$judul', isi = '$isi', penulis = '$penulis' WHERE id = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	
}
?>

