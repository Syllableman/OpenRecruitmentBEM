<?php
$conn = mysqli_connect("localhost","root","","db_oprec");

function tambahuser($data)
{
	global $conn;

	$username = $data['username'];
	$password = $data['password'];
	$level = $data['level'];
	$query = "INSERT INTO `user` VALUES ('','$username','$password','$level')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}

function tambahmhs($data)
{
	global $conn;

	$npm = $data['npm'];
	$nama = $data['nama'];
	$jenis_kelamin = $data['jenis_kelamin'];
	$tgl_lahir = $data['tgl_lahir'];
	$jurusan = $data['jurusan'];
	$prodi = $data['prodi'];
	$berkas = $data['berkas'];
	$query = "INSERT INTO `tb_pendaftar` VALUES ('$npm','$nama','$jenis_kelamin',,'$tgl_lahir',
		,'$jurusan','$prodi','$berkas')";
	mysqli_query($conn,$query);
	return mysqli_affected_rows($conn);
}
?>