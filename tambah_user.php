<?php

require 'functions.php';

if(isset($_POST["submit"])){
    if(tambahUser($_POST) > 0){
        echo "
    <script type = 'text/javascript'>
        alert('Data berhasil ditambahkan');
        window.location = 'index.php';
    </script>
    ";
}else{
    echo "
    <script type = 'text/javascript'>
        alert('Data gagal ditambahkan');
        window.location = 'tambah_user.php';
    </script>
    ";
    }
}

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Tambah User</title>
</head>
<body>
    <h2>Tambah Data User</h2>
    <form action="" method="post" enctype="multipart/form-data">
        <label for="nama_lengkap">Nama Lengkap</label><br>
        <input type="text" name="nama_lengkap" id="nama_lengkap" required>
        <br><br>
        <label for="username">Username</label><br>
        <input type="text" name="username" id="username" required>
        <br><br>
        <label for="password">Password</label><br>
        <input type="text" name="password" id="password" required>
        <br><br>
        <label for="foto">Foto</label><br>
        <input type="file" name="foto" id="foto" required>
        <br>
        <input type="hidden" name="roles" value="customer">
        <br>
        <button type="submit" name="submit">Submit</button>
    </form>
</body>
</html>