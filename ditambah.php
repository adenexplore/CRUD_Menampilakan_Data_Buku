<?php
require 'koneksi.php';

if (isset($_POST['simpan'])){
  $username = $_POST['username'];
  $judul = $_POST['judul'];
  $pengarang = $_POST['pengarang'];
  $harga = $_POST['harga'];
  mysqli_query($koneksi,"insert into bukubuku (id,username,judul,pengarang,harga) values('','$username','$judul','$pengarang','$harga')");
	echo "<script>
	alert('simpan data sukses!');
	document.location='index.php';
	</script>";
}
else{
	echo "<script>
	alert('simpan data gagal!');
	document.location='index.php';
	</script>";
}


?>

