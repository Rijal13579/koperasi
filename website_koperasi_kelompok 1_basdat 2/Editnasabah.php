
<?php

include("koneksi.php");

// Deklarasi variabel
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM nasabah WHERE id_nasabah='$id'");

while ($tampil = mysqli_fetch_array($data)) {

?>

    <!DOCTYPE html>
    <html>

    <head>
        <title>Edit Data</title>
        <link rel="stylesheet" href="des.css">
    </head>

    <body>
        <div class="grid-container" align="center">
            <div class="header">
                <center>
            </div>
            <div class="middle" style="background-color: lightgray;" align="center">
                <div class="container" align="center">
                    <h3>Edit Data Nasabah</h3>
                    <form action="updatenasabah.php" method="post">
                        <table border="1" cellpadding="5">
                            <th colspan="2">Data Nasabah</th>
                            <tr>
                                <td>Nama Lengkap</td>
                                <td><input type="text" name="nama_lengkap" value="<?php echo $tampil['nama_lengkap']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tempat Lahir</td>
                                <td><textarea name="tempat_lahir" rows="2" cols="20" value="<?php echo $tampil['tempat_lahir']; ?>"><?php echo $tampil['tempat_lahir']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>Tanggal Lahir</td>
                                <td><input type="date" name="tanggal_lahir" value="<?php echo $tampil['tanggal_lahir']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Alamat</td>
                                <td><textarea name="alamat" rows="2" cols="20" value="<?php echo $tampil['alamat']; ?>"><?php echo $tampil['alamat']; ?></textarea></td>
                            </tr>
                            <tr>
                                <td>No Telepon</td>
                                <td><input type="text" name="no_telepon" value="<?php echo $tampil['no_telepon']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>
                                    <!-- Opsi pilihan -->
                                    <select name="ket">
                                        <option value="<?php echo $tampil['ket']; ?>">
                                            <?php echo $tampil['ket']; ?></option>
                                        <option value="Aktif">Aktif</option>
                                        <option value="Tidak Aktif">Tidak Aktif</option>
                                    </select>
                                </td>
                            </tr>
                            <input type="hidden" name="id_nasabah" value="<?php echo $tampil['id_nasabah']; ?>">
                            <input type="hidden" name="id_petugas" value="<?php echo $tampil['id_petugas']; ?>">
                        </table>
                        <br>
                        <!-- Tombol untuk submit atau mengirimkan data yang telah diubah pada form di atas -->
                        <input type="submit" name="submit" value="Ubah Data" class="tombol">
                        <!-- Tombol untuk kembali ke halaman sebelumnya -->
                        <input type="button" name="kembali" value="Kembali" onclick="self.history.back()" class="tombol">
                    </form>
                </div>
            </div>
        </div>
    <?php
} //Perulangan selesai
    ?>
    <div class="footer" align="center">
        <br><br><br>
        <p style="color: lightyellow;" align="center">&emsp; &emsp; &emsp; &emsp;| © Copyright 2022. Kelompok 1 |</p>
    </div>
    </body>

    </html>