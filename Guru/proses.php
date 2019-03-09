<?php
require_once "../_config/config.php";


if (isset($_POST['add'])) {
	$nama 				= trim(mysqli_real_escape_string($con, $_POST['nama']));
	$umur				= trim(mysqli_real_escape_string($con, $_POST['umur']));
	$tgl_lahir		 	= trim(mysqli_real_escape_string($con, $_POST['tgl_lahir']));
	$no_telp 			= trim(mysqli_real_escape_string($con, $_POST['no_telp']));
	$alamat 			= trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$foto				= trim(mysqli_real_escape_string($con, $_POST['foto']));
	mysqli_query($con, "INSERT INTO tb_guru (nama, umur, tgl_lahir, no_telp, alamat, foto) VALUES ('$nama', '$umur', '$tgl_lahir', '$no_telp', '$alamat', '$foto')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])){
	$id					= $_POST['id'];
	$nama 		 		= trim(mysqli_real_escape_string($con, $_POST['nama']));
	$umur			 	= trim(mysqli_real_escape_string($con, $_POST['umur']));
	$tgl_lahir 			= trim(mysqli_real_escape_string($con, $_POST['tgl_lahir']));
	$no_telp 			= trim(mysqli_real_escape_string($con, $_POST['no_telp']));
	$alamat				= trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$foto				= trim(mysqli_real_escape_string($con, $_POST['foto']));
	mysqli_query($con, "UPDATE tb_guru SET nama = '$nama', umur = '$umur', tgl_lahir = '$tgl_lahir', no_telp = '$no_telp', alamat = '$alamat', foto = '$foto' WHERE id = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	
}
?>

