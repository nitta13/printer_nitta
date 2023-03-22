<?php
session_start();
include 'koneksi.php';

$username = $_POST['username'];
$password = $_POST['password'];

$login = mysqli_query($koneksi, "select * from user where username='$username' and password='$password'");
// menghitung jumlah data yang ditemukan
$cek = mysqli_num_rows($login);

if($cek > 0){
$_SESSION['username']=$username;
$_SESSION['status']='login';
while($data=mysqli_fetch_array($login)){
    if($data['roles']=='admin'){
        header("location:admin/index.php");
    }else if($data['roles']=='customer'){
        header("location:customer/index.php");
    }
}
}else{
header("location:login.php?pesan=gagal");
}
?>
