<?php
session_start();
session_destroy(); // Menghapus semua catatan login
header("Location: login.php"); // Pulang ke halaman login
exit;
?>
