<?php
require 'koneksi.php';
$user = mysqli_query($koneksi, "SELECT * FROM user");
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h1>Data User</h1>
    <a href="tambah_user.php">Tambah</a>
    <a href="login.php">Login</a>
    <table border="1" cellpadding="10" cellspacing="0">
        <tr>
            <th>No</th>
            <th>Nama Lengkap</th>
            <th>Username</th>
            <th>Foto</th>
            <th>Roles</th>
            <th>Aksi</th>
        </tr>

    <?php $i = 1; ?>
    <?php foreach($user as $data) : ?>
        <tr>
            <td><?= $i; ?></td>
            <td><?= $data["nama_lengkap"]; ?></td>
            <td><?= $data["username"]; ?></td>
            <td><img src="image/<?= $data["foto"]; ?>" alt="" width="70"></td>
            <td><?= $data["roles"]; ?></td>
            <td>
                <a href="edit_user.php?id=<?= $data["id_user"]; ?>">Edit</a>
                <a href="hapus_user.php?id=<?= $data["id_user"]; ?>" onclick="return confirm('Apakah anda yakin ingin menghapus data?');">Hapus</a>
            </td>
        </tr>
        <?php $i++; ?>
        <?php endforeach; ?>
    </table>
</body>
</html>