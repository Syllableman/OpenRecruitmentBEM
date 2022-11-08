<?php
require 'functions.php';
if (isset($_POST["submit"])) {
	if (tambah($_POST)> 0) {
		
		echo "<script>
		alert('Insert data success!');
		document.location.href = 'dashboard.php';
		</script>";
	} else{
		echo "<script>
		alert('Insert data failed!');
		document.location.href = 'register_mhs.php';
		</script>";
	
	}	
}
?>

<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Register Page | Open Recruitment BEM</title>
</head>
<body>
<form>
	<h3>Halaman Daftar</h3>
	<label>NPM</label>
	<input type="text" name="npm" maxlength="8">
	<br><br>
	<label>Nama</label>
	<input type="text" name="nama">
	<br><br>
	<label>Jenis Kelamin</label>
	<br><br>
	<input type="radio" id="laki" name="jenis_kelamin" value="Laki-laki">
  	<label for="laki">Laki-laki</label><br>
  	<input type="radio" id="perempuan" name="jenis_kelamin" value="Perempuan">
  	<label for="perempuan">Perempuan</label>
	<br><br>
  	<label for="tanggal">Tanggal Lahir</label>
  	<input type="date" id="tanggal" name="tanggal_lahir">
  	<br><br>
  	

</form>
</body>
</html>