<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Customer</title>
</head>
<body>
<?php 
session_start();
if($_SESSION['status']!='login'){
    header('location:../index.php?pesan=belum_login');
}
?>
    <h1>Selamat Datang di Halaman Customer</h1>
    <h3>
        Halo
        <?php
        include '../koneksi.php';

        $user= $_SESSION['username'];
        $data = mysqli_query($koneksi,"select * from user where username = '$user'" );
        foreach($data as $nama){
            echo $nama['nama_lengkap'];
        }
        ?>
        anda telah login!
    </h3>
    <a href="../logout.php" onclick="return confirm('Anda Ingin Logout?');">Logout</a>
</body>
</html>