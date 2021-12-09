<?php
include("koneksi.php");

if( isset($_GET['id']) ){

    $id = $_GET['id'];

    $sql = "DELETE FROM pesertavaksin WHERE id=$id";
    $query = mysqli_query($conn, $sql);

    if( $query ){
        header('Location: baca.php');
    } else {
        die("Data gagal dihapus");
    }

} else {
    die("akses tidak ditemukan");
}

?>