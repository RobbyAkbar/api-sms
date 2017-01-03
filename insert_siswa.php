<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {
	require 'con.php';
	createSiswa();
}

function createSiswa() {
	global $connect;
	$nis = $_POST["nis"];
	$nama_siswa = $_POST["nama_siswa"];
	$kode_kelas = $_POST["kode_kelas"];
	$password = $_POST["password"];
	$query = "Insert into tbl_siswa
	(nis,nama_siswa,kode_kelas,password) values ('$nis','$nama_siswa','$kode_kelas','$password');";

	mysqli_query($connect, $query) or die(mysqli_error($connect));
	mysqli_close($connect);

}
?>