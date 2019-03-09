<?php
require_once "../_config/config.php";


if (isset($_POST['add'])) {
	$nama 				= trim(mysqli_real_escape_string($con, $_POST['nama']));
	$kelas				= trim(mysqli_real_escape_string($con, $_POST['kelas']));
	$alamat		 		= trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$umur 				= trim(mysqli_real_escape_string($con, $_POST['umur']));
	$tgl_lahir			= trim(mysqli_real_escape_string($con, $_POST['tgl_lahir']));
	$foto				= trim(mysqli_real_escape_string($con, $_POST['foto']));
	mysqli_query($con, "INSERT INTO tb_siswa (nama, kelas, alamat, umur, tgl_lahir, foto) VALUES ('$nama', '$kelas', '$alamat', '$umur', '$tgl_lahir', '$foto')") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
} else if (isset($_POST['edit'])){
	$id					= $_POST['id'];
	$nama 		 		= trim(mysqli_real_escape_string($con, $_POST['nama']));
	$kelas			 	= trim(mysqli_real_escape_string($con, $_POST['kelas']));
	$alamat 			= trim(mysqli_real_escape_string($con, $_POST['alamat']));
	$umur 				= trim(mysqli_real_escape_string($con, $_POST['umur']));
	$tgl_lahir			= trim(mysqli_real_escape_string($con, $_POST['tgl_lahir']));
	$foto				= trim(mysqli_real_escape_string($con, $_POST['foto']));
	mysqli_query($con, "UPDATE tb_siswa SET nama = '$nama', kelas = '$kelas', alamat = '$alamat', umur = '$umur', tgl_lahir = '$tgl_lahir', foto = '$foto' WHERE id = '$id'") or die (mysqli_error($con));
	echo "<script>window.location='data.php';</script>";
	
}
?>

