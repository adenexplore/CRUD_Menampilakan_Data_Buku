<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Akhir</title>
</head>
<body>
	<a href="index.php">KEMBALI</a> <br> <br>
	<?php 
	require 'koneksi.php';
		if(isset($_POST['beli'])) {
			$id = $_POST['id'];
			$judul = $_POST['judul'];
			$harga = $_POST['harga'];
			$jumlah = $_POST['jumlah'];
			$uang = $_POST['uang'];
			$hargaakhir = $jumlah * $harga;
			$kembali = $uang - $hargaakhir;

			mysqli_query($koneksi,"update bukubuku set total='$hargaakhir' where id='$id'");

			
			echo "Judul : " . $judul;

			echo "<br>Harga : " . $harga;
			echo "<br>Jumlah : " . $jumlah;
			echo "<br>Uang : " . $uang;
			echo "<br>Harga Akhir : " . $hargaakhir;
			echo "<br>Uang Kembali : " . $kembali;
				
			}
		?>
	
</body>
</html>