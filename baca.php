<?php include("koneksi.php"); ?>

<!DOCTYPE html>
<html>
    <head>
        <link rel="stylesheet" type="text/css" href="vaksin.css">
        <title>Data Peserta Vaksin</title>
    </head>

    <body>
        <header>
            <h1 align="center">List Data</h1>
        </header>
        <hr>
        <nav>
        <a href="index.php">[+] Tambah Baru</a>
        </nav>
        <br>
            
        <table align="center" border="5">
        <thead>
            <tr>
                <th scope="col">No</th>
                <th scope="col">Foto Profil</th>
                <th scope="col">Nama Lengkap</th>
                <th scope="col">Alamat</th>
                <th scope="col">Tempat Lahir</th>
                <th scope="col">Tanggal Lahir</th>
                <th scope="col">Jenis Kelamin</th>
                <th scope="col">Nomor Telepon</th>
                <th scope="col">Email</th>
                <th scope="col">Keterangan</th>
            </tr>
        </thead> 

        <tbody>
        <?php
        $sql = "SELECT * FROM pesertavaksin";
        $query = mysqli_query($conn, $sql);
        $no = 1;
        while($pesertavaksin = mysqli_fetch_array($query)){
            ?>
            <tr>
            <td><?php echo $no++; ?></td>
            <td><img src='foto/<?=$pesertavaksin['foto']; ?>' width=100 ></td>
            <td><?php echo $pesertavaksin["nama_lengkap"]; ?></td>
            <td><?php echo $pesertavaksin["alamat"]; ?></td>
            <td><?php echo $pesertavaksin["tempat_lahir"]; ?></td>
            <td><?php echo $pesertavaksin["tanggal_lahir"]; ?></td>
            <td><?php echo $pesertavaksin["jenis_kelamin"]; ?></td>
            <td><?php echo $pesertavaksin["nomor_telepon"]; ?></td>
            <td><?php echo $pesertavaksin["email"]; ?></td>
            <td><?php echo $pesertavaksin["keterangan"]; ?></td>
            <td>
                <h1><a class="ubah" href="update.php?id=<?php echo $pesertavaksin["id"]; ?>"><button width=50px>Ubah</button></a></h1>
                <h1><a class="hapus" href="delete.php?id=<?php echo $pesertavaksin["id"]; ?>"><button width=50px>Hapus</button></a></h1>
            <td>
            </tr>
            <?php
            }
            ?>
        </tbody>
        </table>
        <p>Total : <?php echo mysqli_num_rows($query) ?></p>
    </body>
    <footer>
        <a href="index.php"><button>KEMBALI</button></a>
    </footer>
</html>