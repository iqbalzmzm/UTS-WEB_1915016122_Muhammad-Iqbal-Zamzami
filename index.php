<!DOCTYPE html>
<html?>
<head>
    <title>form pendataan</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <header>
        <div class="judul-header">
            Data Vaksinasi
        </div>
        <div class="judul-kanan">
            <button><a href="login.php">Logout</a></button>
        </div>
    </header>
    <div class="back-form">
        <hr><hr>
        <a href="baca.php"><h1>Melihat Data</h1></a>
        <hr><hr>
    </div>
    <div class="bg-form">
        <h1>Form Pendataan</h1>
        <form action="proses_input.php" method="post" enctype="multipart/form-data" target="_blank">
            <table>
                <tr>
                    <td>Foto Profil</td>
                    <td>:</td>
                    <td><input type="file" name="foto" style="width: 100% ; box-sizing: border-box"></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td>:</td>
                    <td><input type="text" name="nama_lengkap" required></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td>:</td>
                    <td><textarea name="alamat" id="" cols="30" rows="10" required></textarea></td>
                </tr>
                <tr>
                    <td>Tempat Lahir</td>
                    <td>:</td>
                    <td><input type="text" name="tempat_lahir" required></td>
                </tr>
                <tr>
                    <td>Tanggal Lahir</td>
                    <td>:</td>
                    <td><input type="date" name="tanggal_lahir" required></td>
                </tr>
                <tr>
                    <td>Jenis Kelamin</td>
                    <td>:</td>
                    <td>
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki" required>Laki-Laki
                        <input type="radio" name="jenis_kelamin" value="Perempuan" required>Perempuan
                    </td>
                </tr>
                <tr>
                    <td>No. Telepon</td>
                    <td>:</td>
                    <td><input type="text" name="nomor_telepon" required></td>
                </tr>
                <tr>
                    <td>email</td>
                    <td>:</td>
                    <td><input type="text" name="email" required></td>
                </tr>
                <tr>
                    <td>Keterangan</td>
                    <td>:</td>
                    <td>
                        <select name="keterangan" id="" required>
                            <option value="">--Pilih Keterangan--</option>
                            <option value="Vaksin Dosis 1">Vaksin Dosis 1</option>
                            <option value="Vaksin Dosis 2">Vaksin Dosis 2</option>
                            <option value="Belum Vaksin">Belum Vaksin</option>
                        </select>
                    </td>
                </tr>
                <tr>
                    <td></td>
                    <td></td>
                    <td>
                        <button type="submit" name="kirim">Kirim</a></button>
                        <button type="reset" name="reset">Batal</button>
                    </td>
                </tr>
            </table>
        </form>
    </div>
    <br>
</body>
<footer>
	<h1>ABOUT</h1>
	<br>
	<a href="https://www.instagram.com/pedulilindungi.id/" target="_blank" class="btn instagram"><img src="https://www.logo.wine/a/logo/Instagram/Instagram-Glyph-Color-Logo.wine.svg" style="width: 50px">Informasi Vaksin</a>
</footer>
</html>