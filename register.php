<?php
require 'koneksi.php';

if (isset($_POST['register'])) {
    $username = $_POST['username'];
    $password = $_POST['password'];
    $cpassword = $_POST['cpassword'];

    if ($password === $cpassword) {
        $password = password_hash($password, PASSWORD_DEFAULT);
        $result = mysqli_query($conn, "SELECT username from users WHERE username = '$username'");
        if (mysqli_fetch_assoc($result)) {
            echo
            "<script>
                alert('Username telah digunakan!');
                document.location.href = 'register.php';
            </script>";
        } else {
            $sql = "INSERT INTO  users VALUES ('','$username','$password','user')";
            $result = mysqli_query($conn, $sql);
            if (mysqli_affected_rows($conn) > 0) {
                echo "
                <script>
                    alert('Registrasi Telah Berhasil');
                    document.location.href = 'login.php';
                </script>";
            } else {
                echo "
                <script>
                    alert('Registrasi Gagal');
                    document.location.href = 'register.php';
                </script>";
            }
        }
    }else{
        echo
        "<script>
            alert('Masukkan Password dengan Benar!');
            document.location.href = 'register.php';
        </script>";
    }
}
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <link rel="stylesheet" href="regis.css">
    <title>Membuat Akun</title>
</head>

<body>
    <div class="row">
        <div class="side">
            <form action="" method="POST">
                <h2 class="tittle">Daftar Akun</h2>
                <label for="username">Username</label><br><br>
                <input type="text" class="form_login" name="username" id="username" placeholder="Username" required>
                <label for="password">Password</label><br><br>
                <input type="password" class="form_login" name="password" id="password" placeholder="Password" required>
                <label for="cpassword">Confirm Password</label><br><br>
                <input type="password" class="form_login" name="cpassword" id="cpassword" placeholder="Confirm Password" required>
                <center>
                <button type="submit" class="btn_regis" name="register" id="register">Register</button>
                </center>
                <p>Sudah Memiliki Akun?</p>
                <a class="link" href="login.php">Sign In</a>
            </form>
        </div>
    </div>
</body>

</html>