
<?php

// session_start();
    
if(isset($_POST['login'])){
    $username = $_POST['username'];
    $password = md5($_POST['password']);

    
include "koneksi.php";

$login = mysqli_query($koneksi, "select * from loginlogin where username='$username'");

$cek = mysqli_num_rows($login);

// echo $cek;

if( $cek > 0 ) {
    $row = mysqli_fetch_array($login);
    session_start();
    $_SESSION['fullname'] = $row['fullname'];
    echo "
        <script>
            alert('Selamat Datang!');
            document.location.href = 'index.php';
        </script>
        ";
} else {
    echo "
        <script>
            alert('Username/Password yang anda masukan salah!');
            document.location.href = 'login.php';
        </script>
        ";
}

}

?>