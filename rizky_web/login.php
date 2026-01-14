<?php
include 'config.php';

// Jika tombol login ditekan
if (isset($_POST['submit_login'])) {
    $user_input = $_POST['user_form'];
    $pass_input = $_POST['pass_form'];

    // Cek apakah input cocok dengan data di config.php
    if ($user_input == $admin_user && $pass_input == $admin_pass) {
        $_SESSION['status_login'] = "sudah_masuk"; // Memberi tanda "sudah login"
        header("Location: dashboard.php"); // Pindah ke dashboard
    } else {
        $pesan_error = "Maaf, Password salah!";
    }
}
?>

<!DOCTYPE html>
<html>
<head>
    <title>Login - <?php echo $nama_pembuat; ?></title>
    <style>
        body { font-family: sans-serif; background: #eceff1; display: flex; justify-content: center; padding-top: 100px; }
        .kotak-login { background: white; padding: 30px; border-radius: 10px; box-shadow: 0 5px 15px rgba(0,0,0,0.1); width: 300px; text-align: center; }
        input { width: 100%; padding: 10px; margin: 10px 0; border: 1px solid #ccc; border-radius: 5px; box-sizing: border-box; }
        button { width: 100%; padding: 10px; background: #2196F3; color: white; border: none; border-radius: 5px; cursor: pointer; }
        .credit { margin-top: 20px; font-size: 11px; color: grey; }
    </style>
</head>
<body>
    <div class="kotak-login">
        <h3>Admin Login</h3>
        <?php if(isset($pesan_error)) echo "<p style='color:red;'>$pesan_error</p>"; ?>
        
        <form method="POST">
            <input type="text" name="user_form" placeholder="Username" required>
            <input type="password" name="pass_form" placeholder="Password" required>
            <button type="submit" name="submit_login">Masuk</button>
        </form>

        <div class="credit">Developed by <b><?php echo $nama_pembuat; ?></b></div>
    </div>
</body>
</html>
