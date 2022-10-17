<?php 
require 'koneksi.php';
 
if (isset($_POST['update'])){
$id = $_POST['id'];
$username= $_POST['username'];
$judul= $_POST['judul'];
$pengarang = $_POST['pengarang'];
$harga = $_POST['harga'];


mysqli_query($koneksi,"update bukubuku set username='$username',judul='$judul', pengarang ='$pengarang', harga ='$harga' where id='$id'");
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