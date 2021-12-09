<?php
session_start();
require 'koneksi.php';

if (isset($_POST['login'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $result = mysqli_query($conn, "SELECT * from users WHERE username = '$username'");
    if (mysqli_num_rows($result) === 1) {
        $row = mysqli_fetch_assoc($result);
        if (password_verify($password, $row['password'])) {
            $_SESSION['login'] = true;
            if ($row['pengguna'] === 'admin') {
                header("Location: admin.php");
            } else {
                header("Location: index.php");
            }
            echo "
            <script>
                alert('Gagal');
            </script>";
            exit;
        }
        $error = true;
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="login.css">
    <title>Login</title>
</head>
<body>
    <div class="main">
        <div class="form">
            <h2 class="tittle">Login</h2>
            <p align="center">Lakukan Vaksin Sekarang!</p><br>
            <?php if (isset($error)) {
                echo "<p style='color:red;'> Username or Password wrong!</p>";
            } ?>
            <form action="" method="POST">
                <label for="username">Username</label><br><br>
                <input type="text" class="form_login" name="username" id="username" placeholder="Username" required>
                <label for="password">Password</label><br><br>
                <input type="password" class="form_login" name="password" id="password" placeholder="Password" required>
                <center>
                    <button type="submit" class="btn_login" name="login" id="login">Login</button>
                </center>
                <p>Belum punya akun?</p>
                <a class="link" href="register.php">Buat Akun</a>
        </div>
    </div>
</body>
</html>