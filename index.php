<!DOCTYPE html>
<html>
<head>
	<title>CRUD PHP dan MySQLi</title>
	<link rel="stylesheet" type="text/css" href="css/bootstrap.min.css"> 
</head>
<body>
	<div class="container">
	<h2 class="text-center">CRUD DATA BUKU</h2>
	<div class="card" mt-5>
		<div class="card-header bg-primary text-white">
			tambahkan buku
		</div>
		<div class=" card-body">
			<form method="post" action="ditambah.php">
				<div class="form-group">
					<label>username</label>
					<input type="text" name="username" class="form-control">
				</div>
				<div class="form-group">
					<label>judul buku</label>
					<input type="text" name="judul" class="form-control">
				</div>
				<div class="form-group">
					<label>pengarang</label>
					<input type="text" name="pengarang" class="form-control">
				</div>
				<div class="form-group">
					<label>harga</label>
					<input type="number" name="harga" class="form-control">
				</div>
				<button type="submit" class="btn btn-danger" name="simpan">simpan</button>
				<button type="reset" class="btn btn-info" name="reset">reset</button>

			</form>
		</div>
	</div>
	<div class="card" mt-5>
		<div class="card-header bg-primary text-white">
			data buku
		</div>
		<div class=" card-body">
			<table class="table table-bordered table-striped">
				<tr>
					<th>No.</th>
					<th>username</th>
					<th>Judul</th>
					<th>pengarang</th>
					<th>Alat</th>
					<th>harga</th>	
					<th>beli</th>
					<th>total</th>
				</tr>
				<?php 
			require 'koneksi.php';
			$no = 1;
			$data = mysqli_query($koneksi, "SELECT * FROM bukubuku");
			while($d = mysqli_fetch_array($data)) :
		?>
		<tr>
			<td><?= $no++; ?></td>
			<td><?= $d['username']; ?></td>
			<td><?= $d['judul']; ?></td>
			<td><?= $d['pengarang']; ?></td>
			<td>
				<a href="edit.php?id=<?= $d['id']; ?>" class="btn btn-danger">EDIT</a>
				<a href="hapus.php?id=<?= $d['id']; ?>"class="btn btn-info">HAPUS</a>
			</td>
			<td><?= $d['harga']; ?></td>
			

			
			<td>
				<a href="beli.php?id=<?= $d['id']; ?>">beli</a>
				</td>
			<td><?= $d['total']; ?></td>

		</tr>
		<?php endwhile; ?>
			</table>
			
		</div>
	
	</div>
</div>
		<script type="text/javascript" src="js/bootstrap.min.js"></script>
</body>
</html>