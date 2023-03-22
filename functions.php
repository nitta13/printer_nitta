<?php

$koneksi = mysqli_connect('localhost', 'root', '', 'printer');

function query($query){
    global $koneksi;

    $result = mysqli_query($koneksi, $query);
    $rows = [];

    while($row = mysqli_fetch_assoc($result)){
        $rows[] = $row;
    }

    return $rows;
}

function tambahUser($data){
    global $koneksi;

    $nama_lengkap = htmlspecialchars($data['nama_lengkap']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $roles = htmlspecialchars($data['roles']);

    $query = "INSERT INTO user VALUES(NULL, '$nama_lengkap','$username','$password','$foto','$roles')";
    move_uploaded_file($files, "image/".$foto);
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function hapusUser($id){
    global $koneksi;
    
    $query = "DELETE FROM user WHERE id_user = '$id'";
    mysqli_query($koneksi, $query);
    return mysqli_affected_rows($koneksi);
}

function editUser($data){
    global $koneksi;
    
    $id = htmlspecialchars($data['id_user']);
    $nama_lengkap = htmlspecialchars($data['nama_lengkap']);
    $username = htmlspecialchars($data['username']);
    $password = htmlspecialchars($data['password']);
    $foto = $_FILES["foto"]["name"];
    $files = $_FILES["foto"]["tmp_name"];
    $roles = htmlspecialchars($data['roles']);
    
    if(empty($foto)){
        $query = "UPDATE user SET nama_lengkap='$nama_lengkap', username='$username', password='$password', roles='$roles' WHERE id_user='$id'";
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }else{
        $query = "UPDATE user SET nama_lengkap='$nama_lengkap', username='$username', password='$password', foto='$foto', roles='$roles' WHERE id_user='$id'";
        move_uploaded_file($files, "image/".$foto);
        mysqli_query($koneksi, $query);
        return mysqli_affected_rows($koneksi);
    }
}

?>