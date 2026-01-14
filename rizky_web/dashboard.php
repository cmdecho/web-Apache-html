<?php
include 'config.php';

// Cek gembok: Jika status_login tidak ada, tendang balik ke login.php
if ($_SESSION['status_login'] != "sudah_masuk") {
    header("Location: login.php");
    exit;
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Halaman Utama - <?php echo $nama_pembuat; ?></title>
    <style>
        body { font-family: sans-serif; padding: 40px; }
        .container { border: 2px solid #2196F3; padding: 20px; border-radius: 10px; }
        .menu-atas { display: flex; justify-content: space-between; align-items: center; }
        .logout-btn { color: red; text-decoration: none; font-weight: bold; border: 1px solid red; padding: 5px 10px; border-radius: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <div class="menu-atas">
            <h2>Dashboard Admin</h2>
            <a href="logout.php" class="logout-btn">Keluar / Logout</a>
        </div>
        <hr>
        <h3>Selamat Datang, Admin!</h3>
        <p>Sekarang Anda berada di dalam sistem yang aman.</p>
        <br><br>
        <p style="text-align: center; color: #888;">
            Hak Cipta © 2026 - <b><?php echo $nama_pembuat; ?></b>
        </p>
    </div>
</body>
</html>
