<?php

include("koneksi.php");

// Deklarasi variabel
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM pinjaman WHERE id_pinjaman='$id'");

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
                    <h3>Edit Data Pinjaman</h3>
                    <form action="updatepinjaman.php" method="post">
                        <table border="1" cellpadding="5">
                        <th colspan="2">Data Pinjaman</th>
                            <tr>
                                <td>Nama Pinjaman</td>
                                <td><input type="text" name="nama_pinjaman" value="<?php echo $tampil['nama_pinjaman']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Jenis Pinjaman</td>
                                <td><input name="jenis_pinjaman" rows="2" cols="20" value="<?php echo $tampil['jenis_pinjaman']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Besaran Pinjaman</td>
                                <td><input name="besaran_pinjaman" rows="2" cols="20" value="<?php echo $tampil['besaran_pinjaman']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pengajuan Pinjaman</td>
                                <td><input type="date" name="tgl_pengajuan_pinjaman" value="<?php echo $tampil['tgl_pengajuan_pinjaman']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal ACC Pinjaman</td>
                                <td><input type="date" name="tgl_acc_pinjaman" value="<?php echo $tampil['tgl_acc_pinjaman']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pinjaman</td>
                                <td><input type="date" name="tgl_pinjaman" value="<?php echo $tampil['tgl_pinjaman']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>
                                    <!-- Opsi pilihan -->
                                    <select name="keterangan">
                                        <option value="<?php echo $tampil['keterangan']; ?>">
                                            <?php echo $tampil['keterangan']; ?></option>
                                        <option value="Lunas">Lunas</option>
                                        <option value="Belum Lunas">Belum Lunas</option>
                                    </select>
                                </td>
                            </tr>
                            <input type="hidden" name="id_pinjaman" value="<?php echo $tampil['id_pinjaman']; ?>">
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