<?php
session_start();
include("koneksi.php");
if ( isset($_POST["kirim2"])){
    $id = $_POST['id'];
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
        $sql = "UPDATE pesertavaksin SET foto='$foto', nama_lengkap='$nama_lengkap', alamat='$alamat', tempat_lahir='$tempat_lahir', tanggal_lahir='$tanggal_lahir', jenis_kelamin='$jenis_kelamin', nomor_telepon='$nomor_telepon', email='$email', keterangan='$keterangan' WHERE id=$id";
        $result = mysqli_query($conn, $sql);

        if( $result ) {
            header('Location: baca.php');
        } else {
            die("Gagal menyimpan perubahan...");
        }
    } else {
        die("tidak ditemukan");
    }
}
?>