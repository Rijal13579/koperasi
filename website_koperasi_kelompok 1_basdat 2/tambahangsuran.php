<?php
include("koneksi.php");

if (isset($_POST['submit'])) {

    $id_angsuran = $_POST['id_angsuran'];
    $id_pinjaman = $_POST['id_pinjaman'];
    $besaran_angsuran = $_POST['besaran_angsuran'];
    $tgl_pinjaman = $_POST["tgl_pinjaman"];
    $tgl_jatuh_tempo = $_POST["tgl_jatuh_tempo"];
    $angsuran_ke = $_POST["angsuran_ke"];
    $sisa_pembayaran = $_POST["sisa_pembayaran"];
    $keterangan = $_POST["keterangan"];


    //insert data ke database dalam tabel
    $sqlquer = "CALL InsertDataAngsuran ('$id_angsuran', '$besaran_angsuran', '$tgl_pinjaman', '$tgl_jatuh_tempo', 
    '$angsuran_ke', '$sisa_pembayaran','$keterangan', '$id_pinjaman')";
    // kondisi masukan data
    if (mysqli_query($koneksi, $sqlquer)) {
        // lokasi penyimpanan
        header("Location:dataangsuran.php");
    } else {
        echo "Gagal Menambahkan Data";
    }
}

mysqli_close($koneksi); // menutup koneksi ke database
?>

<!DOCTYPE html>
<html>

<head>
    <title>Input Data</title>
    <link rel="stylesheet" href="des.css">
</head>

<body align="center">
    <div class="grid-container" align="center">
        <div class="header">
            <center>
        </div>
        <div class="middle" style="background-color: lightgray;" align="center">
            <div class="container" align="center">
                <h3>Tambah Data Angsuran</h3>
                <!-- aksi ke tambah data untuk inputan, pembuatan form dan tabel di dalamnya -->
                <form action="tambahangsuran.php" method="post">
                    <table border="4" align="center">
                        <tr>
                            <th colspan="2">Data Pinjaman</th>
                        </tr>
                        <tr>
                            <td>ID Angsuran</td>
                            <td><input type="number" name="id_angsuran"></td>
                        </tr>
                        <tr>
                            <td>ID Pinjaman</td>
                            <td><input type="number" name="id_pinjaman"></td>
                        </tr>
                        <tr>
                            <td>Besaran Angsuran</td>
                            <td><input type="number" name="besaran_angsuran"></td>
                        </tr>
                        <tr>
                            <td>Tanggal_Pinjaman</td>
                            <td><input type="date" name="tgl_pinjaman" rows="2" cols="20"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Jatuh Tempo</td>
                            <td><input type="date" name="tgl_jatuh_tempo"></td>
                        </tr>
                        <tr>
                            <td>Angsuran Ke</td>
                            <td><input type="number" name="angsuran_ke"></td>
                        </tr>
                        <tr>
                            <td>Sisa Pembayaran</td>
                            <td><input type="number" name="sisa_pembayaran"></td>
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
                    </table>
                    <br>
                    <!-- tombol aksi -->
                    <input type="submit" name="submit" value="Tambah Data" class="tombol">
                    <input type="button" name="kembali" value="Kembali" class="tombol" onclick="self.history.back()">
                </form>
            </div>
        </div>
    </div>
    <div class="footer" align="center">
        <br><br><br>
        <p style="color: lightyellow;" align="center">&emsp; &emsp; &emsp; &emsp;| © Copyright 2022. Kelompok 1 |</p>
    </div>
</body>

</html>