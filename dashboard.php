<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>Dashboard | Open Recruitment</title>
	<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-Zenh87qX5JnK2Jl0vWa8Ck2rdkQ2Bzep5IDxbcnCeuOxjzrPF/et3URy9Bv1WTRi" crossorigin="anonymous">
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-OERcA2EqjJCMA+/3y+gxIOqMEjwtxJY7qPCqsdltbNJuaOe923+mo//f6V8Qbsw3" crossorigin="anonymous"></script>
</head>
<body>
<!-- Ini Bagian Navbar -->	
<nav class="navbar navbar-dark navbar-expand-lg bg-dark">
  <div class="container-fluid">
  	<img class="float-md-start mb-0 me-2" src="image/bemlogo.png" width="30" height="30">
    <a class="navbar-brand" href="#">Open Recruitment BEM</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li>
      </ul>

      <form action="" method="post">

        <input type="text" name="keywoard" size="20" autofocus placeholder="Cari Disini..." autocomplete="off" >
        <button type="submit" name="cari">Search</button>

      </form>
    </div>
  </div>
</nav>
<!-- Ini Akhir Bagian Navbar -->

<!-- Masukkin tampilan lain mulai dari sini! -->
<a href="register_mhs.php">
  <button class="btn btn-success">Daftar</button>
</a>
<?php
require 'functions.php';

$pendaftar = query("SELECT * FROM tb_pendaftar");

//CARI
if (isset($_POST["cari"]) ){
  $pendaftar = cari($_POST["keywoard"]);
}

?>

<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
  <title>Halaman Data Pendaftar</title>
</head>
<body>
  <h1 align="center">DATA MAHASISWA</h1>
  <table border=2 cellpadding=3 class="table table-striped-columns">
    <tr style="text-align:center;">
      <th>No.</th>
      <th>NPM</th>
      <th>Nama</th>
      <th>Jenis Kelamin</th>
      <th>Tanggal Lahir</th>
      <th>Jurusan</th>
      <th>Prodi</th>
      <th>Berkas</th>
      <th>Gambar</th>
      <th>Aksi</th>
    </tr>

    <tr style="text-align:center;">
      <?php $i = 1; ?>
      <?php foreach($pendaftar as $row) : ?>
      <td><?= $i; ?></td>
      <td><?= $row['npm']; ?></td>
      <td><?= $row['nama']; ?></td>
      <td><?= $row['jenis_kelamin']; ?></td>
      <td><?= $row['tanggal_lahir']; ?></td>
      <td><?= $row['jurusan']; ?></td>
      <td><?= $row['prodi']; ?></td>
      <td><?= $row['berkas']; ?></td>
      <td>
        <img src="image/<?php echo $row["gambar"]; ?>" width="50">
      </td>
      <td>
        <a href="edit.php?npm=<?= $row['npm']; ?>"><button class="btn btn-success">EDIT</button></a>
        <a href="hapus.php?npm=<?= $row['npm']; ?>"
        onclick="return confirm('Apakah Anda Yakin Akan Menghapus Data Ini?')" class="btn btn-danger">Hapus</a></td>
    </tr>
    <?php $i++; ?>
    <?php endforeach; ?>
    </table>
</body>
</html>

</body>
</html>