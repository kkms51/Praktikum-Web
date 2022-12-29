<?php

include("config.php");

if(isset($_POST['daftar'])){
	
	$nama = $_POST['nama'];
	$alamat = $_POST['alamat'];
	$jk = $_POST['jenis_kelamin'];
	$agama = $_POST['agama'];
	$pengalaman = $_POST['pengalaman'];
	
	$sql = "INSERT INTO calon_karyawan(nama, alamat, jenis_kelamin, agama, pengalaman) VALUE ('$nama', '$alamat', '$jk', '$agama', '$pengalaman')";
	$query = mysqli_query($db, $sql);
	
	if( $query ) {
		header('Location: index.php?status=sukses');
	} else {
		header('Location: index.php?status=gagal');
	}
	
	
} else {
	die("Akses dilarang...");
}

?>
