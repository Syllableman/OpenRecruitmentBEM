<?php
$conn = mysqli_connect("localhost","root","","db_oprec");

function tambah($data)
{
	global $conn;
	$username = $_POST['username'];
	$password = $_POST['password'];
	$level = $_POST['level'];
	$query = "INSERT INTO `user` (`username`, `password`, `nama_petugas`, `level`) VALUES ('$username','$password','$nama_petugas','$level')";
	mysqli_query($kon,$query);
	return mysqli_affected_rows($conn);
}

function query($query) {
	global $conn;
	$result = mysqli_query($conn, $query);
	$rows = [];
	while ($row = mysqli_fetch_assoc($result)) {
		$rows[] = $row;
	}
	return $rows;
}

function hapus($npm){
	global $conn;
	mysqli_query($conn, "DELETE FROM tb_pendaftar WHERE npm = $npm");
	return mysqli_affected_rows($conn);
}

function cari($keywoard){
	$query = "SELECT * FROM tb_pendaftar WHERE nama ='$keywoard'";
	return query($query);
}
?>