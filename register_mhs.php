<?php
require 'functions.php';
if (isset($_POST["submit"])) {

	if (tambahmhs($_POST)> 0) {

		
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

<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Aplikasi Open Recruitment | BEM POLINELA </title>
     <script src="http://ajax.aspnetcdn.com/ajax/jQuery/jquery-3.2.1.min.js"></script>
    <link rel="canonical" href="https://getbootstrap.com/docs/5.0/examples/sign-in/">

    

   <!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">

    <style>
      .bd-placeholder-img {
        font-size: 1.125rem;
        text-anchor: middle;
        -webkit-user-select: none;
        -moz-user-select: none;
        user-select: none;
      }

      @media (min-width: 768px) {
        .bd-placeholder-img-lg {
          font-size: 3.5rem;
        }
      }
    </style>

    
    <!-- Custom styles for this template -->
    <link href="css/signin.css" rel="stylesheet">
  </head>

  <body class="text-center">
<main class="form-signin">
  <form method="post" action="">
    <img class="mb-4" src="image/bemlogo.png" alt="" width="60" height="60">
    <h1 class="h3 mb-3 fw-normal">Register!</h1>
    <p><small>Daftar Open Recruitment BEM.</small></p>
    <div class="form-floating">
      <input type="text" name="npm" class="form-control" id="floatingInput" placeholder="NPM" autocomplete="off">
      <label for="floatingInput">NPM</label>
    </div>
    <br>
     <div class="form-floating">
      <input type="text" name="nama" class="form-control" id="floatingInput" placeholder="Nama Lengkap" autocomplete="off">
      <label for="floatingInput">Nama Lengkap</label>
    </div>
    <br>
    <div class="form-floating">
  <select class="form-select" id="floatingSelect" aria-label="Floating label select example" name="jenis_kelamin">
    <option selected>--Pilih Jenis Kelamin--</option>
    <option value="1">Laki-laki</option>
    <option value="2">Perempuan</option>
  </select>
  <label for="floatingSelect">Jenis Kelamin</label>
</div>
    <br>
    <div class="form-floating">
      <input type="date" name="tanggal_lahir" class="form-control" id="floatingInput" placeholder="Tanggal Lahir" autocomplete="off">
      <label for="floatingInput">Tanggal Lahir</label>
    </div>
    <br>
                                <div class="form-floating">
                                	<select id="jurusan" name="jurusan" class="form-select" aria-label="Floating label select example">
                                    <option value="ekonomi dan bisnis">Ekonomi dan Bisnis</option>
                                    <option value="budidaya tanaman pangan">Budidaya Tanaman Pangan</option>
                                    <option value="budidaya tanaman perkebunan">Budidaya Tanaman Perkebunan</option>
                                    <option value="peternakan">Peternakan</option>
                                    <option selected>--Pilih Jurusan--</option>
                                </select>
                               		<label for="jurusan">Jurusan</label> 
                            	</div>
                    
                        <br>
                                    <div id="ekobis">
                                    	<div class="form-floating">
                                    	<select id="ekonomi dan bisnis" name="prodi" class="form-select" aria-label="Floating label select example">
                                        <option value="terapan pengelolaan agribisnis">S1 Terapan Pengelolaan Agribisnis</option>
                                        <option value="terapan akuntansi bisnis digital">S1 Terapan Akuntansi Bisnis Digital</option>
                                        <option value="manajemen informatika">D3 Manajemen Informatika</option>
                                        <option value="4">S1 Terapan Akuntansi Perpajakan</option>
                                        <option value="1">S1 Terapan Agribisnis Pangan</option>
                                        <option value="2">D3 Perjalanan Wisata</option>
                                        <option value="3">S1 Terapan Pengelolaan Perhotelan</option>
                                        <option value="4">D2 Administrasi Perpajakan</option>
                                    </select>
                                    <label for="ekonomi dan bisnis">Program Studi</label>
                                </div>
                            </div>

                                    <div id="bdp">
                            <div class="form-floating">
                                    	<select id="budidaya tanaman pangan" name="prodi" class="form-select" aria-label="Floating label select example">
                                        <option value="1">Rangers</option>
                                        <option value="2">Blazers</option>
                                        <option value="3">Mystics</option>
                                        <option value="4">United</option>
                                        <option value="5">Power</option>
                                        <option value="6">Kings</option>
                                    </select>
                                    <label for="budidaya tanaman pangan">Program Studi</label>
                                </div>
                            </div>
                                    <div id="tkp">
                            <div class="form-floating">
                                    	<select id="teknologi pertanian" name="prodi" class="form-select" aria-label="Floating label select example">
                                        <option value="1">18-20</option>
                                        <option value="2">20-25</option>
                                        <option value="3">25-28</option>
                                        <option value="4">28+</option>
                                    </select>
                                    <label for="teknologi pertanian">Program Studi</label>
                                	</div>
                                </div>

                                	 <div id="ternak">
                                	<div class="form-floating">
                                	 	<select id="peternakan" name="prodi" class="form-select" aria-label="Floating label select example">
                                        <option value="1">18-20</option>
                                        <option value="2">20-25</option>
                                        <option value="3">25-28</option>
                                        <option value="4">28+</option>
                                    </select>
                                    <label for="peternakan">Program Studi</label>
                                	</div>
                                		</div>

                                	 <div id="btp">
                                		<div class="form-floating">
                                	 	<select id="budidaya tanaman perkebunan" name="prodi" class="form-select" aria-label="Floating label select example">
                                        <option value="1">18-20</option>
                                        <option value="2">20-25</option>
                                        <option value="3">25-28</option>
                                        <option value="4">28+</option>
                                    </select>
                                    <label for="budidaya tanaman perkebunan">Program Studi</label>
                                	</div>
                                </div>
                               
   <br>
  <div class="form-floating"> 
<div class="mb-3">
  <label for="formFile" class="form-label">Masukkan Berkas Pendaftaran Disini</label>
  <input class="form-control" type="file" id="formFile">
</div>
</div>
    <br>
    <button class="w-100 btn btn-lg btn-primary" type="submit" name="submit">Daftar</button>
    <p class="mt-5 mb-3 text-muted">&copy; 2022–2023</p>
  </form>
</main>
</body>
</html>

<script type="text/javascript">
	$(document).ready(function () {
    toggleInput();
    $("#jurusan").change(function () {
        toggleInput();
    });
});
function toggleInput() {
    if ($("#jurusan").val() === "ekonomi dan bisnis") {
        $("#ekobis").show();
    } else {
        $("#ekobis").hide();
    }
    if ($("#jurusan").val() === "budidaya tanaman pangan") {
        $("#bdp").show();
    } else {
        $("#bdp").hide();
    }
    if ($("#jurusan").val() === "teknologi pertanian") {
        $("#tkp").show();
    } else {
        $("#tkp").hide();
    }
    if ($("#jurusan").val() === "peternakan") {
        $("#ternak").show();
    } else {
        $("#ternak").hide();
    }
        if ($("#jurusan").val() === "budidaya tanaman perkebunan") {
        $("#btp").show();
    } else {
        $("#btp").hide();
    }
} 
</script>
    
  
=======
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
