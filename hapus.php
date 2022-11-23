<?php 
require 'functions.php';

$npm = $_GET["npm"];

if ( hapus($npm) > 0 ){
	echo "
		<script>
			alert('Data BERHASIL dihapus');
			document.location.href = 'dashboard.php';
		</script>
		";
	} else {
	echo "
		<script>
			alert('Data GAGAL dihapus');
			document.location.href = 'dashboard.php';
		</script>
	";
	}
?>