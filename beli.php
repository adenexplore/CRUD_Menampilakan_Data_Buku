<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css">
</head>
<body>
 	<div class="container">
 		<h3 class="text-center"> BELI BUKU</h3>
	<?php
	require 'koneksi.php';
	$id = $_GET['id'];
	$data = mysqli_query($koneksi,"select * from bukubuku where id='$id'");
	while($d = mysqli_fetch_array($data)){
		?>
		<div class=" card-body">
			<div class="card" mt-5>
		<div class="card-header bg-primary text-white">
			tambahkan buku
		</div>
		<div class=" card-body">
		<form method="post" action="ngelag.php">
			<div class="form-group">
					<label>username</label>
					<input type="hidden" name="id" value="<?php echo $d['id']; ?>">
					<input type="text" name="username" class="form-control" value="<?php echo $d['username']; ?>">
				</div>
				<div class="form-group">
					<label>judul</label>
					<input type="text" name="judul" class="form-control"value="<?php echo $d['judul']; ?>">
				</div>
				<div class="form-group">
					<label>harga</label>
					<input type="number" name="harga" class="form-control" value="<?php echo $d['harga']; ?>">
				</div>
				<div class="form-group">
					<label>jumlah</label>
					<input type="number" name="jumlah" class="form-control" value="<?php echo $d['jumlah']; ?>">
				</div>
				<div class="form-group">
					<label>uang</label>
					<input type="number" name="uang" class="form-control" value="<?php echo $d['uang']; ?>">
				</div>
				<button type="submit" class="btn btn-danger" name="beli">beli</button>
				<a href="index.php" class="btn btn-info">kembali</a>
				
		</form>
		<?php 
	}
	?>
</div>
<script type="text/javascript" src="js/bootstrap.min.js"></script>
	</div>
</div>
</body>
</html>




