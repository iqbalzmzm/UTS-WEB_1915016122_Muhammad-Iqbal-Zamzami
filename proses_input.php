<?php
session_start();
include "koneksi.php";

if (isset($_POST["kirim"])) {
    $foto = htmlspecialchars($_FILES["foto"]["name"]);
    $nama_lengkap = htmlspecialchars($_POST["nama_lengkap"]);
    $alamat = htmlspecialchars($_POST["alamat"]);
    $tempat_lahir = htmlspecialchars($_POST["tempat_lahir"]);
    $tanggal_lahir = htmlspecialchars($_POST["tanggal_lahir"]);
    $jenis_kelamin = htmlspecialchars($_POST["jenis_kelamin"]);
    $nomor_telepon = htmlspecialchars($_POST["nomor_telepon"]);
    $email = htmlspecialchars($_POST["email"]);
    $keterangan = htmlspecialchars($_POST["keterangan"]);

    $target_dir = "foto/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);

    if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)){
        $sql = "INSERT INTO pesertavaksin (foto, nama_lengkap, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, nomor_telepon, email, keterangan)
        VALUES ('$foto', '$nama_lengkap', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$nomor_telepon', '$email', '$keterangan')";

        $result = mysqli_query($conn, $sql);

        if ($result) {
            echo "
            <script>
                alert ('Input Data Complete');
                document.location.href = 'baca.php'
            </script>";
        } else {
            echo "
            <script>
                confirm ('Input Data Failed');
                document.location.href = 'index.php'
            </script>";
        }
    }
    else {
        echo "Upload File Failed!";
    }
}
?>