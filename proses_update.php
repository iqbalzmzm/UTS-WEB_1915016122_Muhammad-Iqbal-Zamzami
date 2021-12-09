<?php
session_start();
include("koneksi.php");
if ( isset($_POST["kirim"])){
    $foto = htmlspecialchars($_FILES["foto"]["name"]);
    $nama_lengkap = $_POST['nama_lengkap'];
    $alamat = $_POST['alamat'];
    $tempat_lahir = $_POST['tempat_lahir'];
    $tanggal_lahir = $_POST['tanggal_lahir'];
    $jenis_kelamin = $_POST['jenis_kelamin'];
    $nomor_telepon = $_POST['nomor_telepon'];
    $email = $_POST['email'];
    $keterangan = $_POST['keterangan'];

    $target_dir = "foto/";
    $target_file = $target_dir . basename($_FILES["foto"]["name"]);

    if(move_uploaded_file($_FILES["foto"]["tmp_name"], $target_file)){
        $sql = "INSERT INTO pesertavaksin (foto, nama_lengkap, alamat, tempat_lahir, tanggal_lahir, jenis_kelamin, nomor_telepon, email, keterangan)
                VALUES ('$foto', '$nama_lengkap', '$alamat', '$tempat_lahir', '$tanggal_lahir', '$jenis_kelamin', '$nomor_telepon', '$email', '$keterangan')";
        $result = mysqli_query($conn, $sql);

        if( $result ) {
            header('Location: baca.php');
        } else {
            die("Gagal menyimpan perubahan...");
        }
    } else {
        die("tidak ditemukan");
    }

?>