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
?>