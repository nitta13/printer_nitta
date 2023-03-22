<?php

session_start();

// menghapus semua sesi
session_destroy();

// mengarahkan halaman dan memberikan pesan logout
echo "
    <script type = 'text/javascript'>
        alert('Anda Telah Logout');
        window.location = 'index.php';
    </script>
    ";

?>