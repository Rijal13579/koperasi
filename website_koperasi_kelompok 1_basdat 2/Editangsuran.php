<?php

include("koneksi.php");

// Deklarasi variabel
$id = $_GET['id'];
$data = mysqli_query($koneksi, "SELECT * FROM angsuran WHERE id_angsuran='$id'");

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
                    <h3>Edit Data Angsuran</h3>
                    <form action="updateangsuran.php" method="post">
                        <table border="1" cellpadding="5">
                            <th colspan="2">Data Angsuran</th>
                            <tr>
                                <td>Besaran Pinjaman</td>
                                <td><input type="text" name="besaran_angsuran" rows="2" cols="20" value="<?php echo $tampil['besaran_angsuran']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Pinjaman</td>
                                <td><input type="date" name="tgl_pinjaman" value="<?php echo $tampil['tgl_pinjaman']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Tanggal Jatuh Tempo</td>
                                <td><input type="date" name="tgl_jatuh_tempo" value="<?php echo $tampil['tgl_jatuh_tempo']; ?>"></td>
                            </tr>
                            <tr>
                                <td>angsuran_ke</td>
                                <td><input type="number" name="angsuran_ke" value="<?php echo $tampil['angsuran_ke']; ?>"></td>
                            </tr>
                            <tr>
                                <td>sisa_pembayaran</td>
                                <td><input type="number" name="sisa_pembayaran" value="<?php echo $tampil['sisa_pembayaran']; ?>"></td>
                            </tr>
                            <tr>
                                <td>Keterangan</td>
                                <td>
                                    <select name="keterangan">
                                        <option value="Terbayar">Terbayar</option>
                                        <option value="Tagihan">Tagihan</option>
                                    </select>
                                </td>
                            </tr>
                            <input type="hidden" name="id_angsuran" value="<?php echo $tampil['id_angsuran']; ?>">
                            <input type="hidden" name="id_pinjaman" value="<?php echo $tampil['id_pinjaman']; ?>">
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