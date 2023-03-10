<?php
include("koneksi.php");

if (isset($_POST['submit'])) {

    $id_pinjaman = $_POST['id_pinjaman'];
    $id_petugas = $_POST['id_petugas'];
    $id_nasabah = $_POST['id_nasabah'];
    $nama_pinjaman = $_POST["nama_pinjaman"];
    $jenis_pinjaman = $_POST["jenis_pinjaman"];
    $besaran_pinjaman = $_POST["besaran_pinjaman"];
    $tgl_pengajuan_pinjaman = $_POST["tgl_pengajuan_pinjaman"];
    $tgl_acc_pinjaman = $_POST["tgl_acc_pinjaman"];
    $tgl_pinjaman = $_POST["tgl_pinjaman"];
    $keterangan = $_POST["keterangan"];


    //insert data ke database dalam tabel
    $sqlquer = "CALL InsertDataPinjaman ('$id_pinjaman', '$id_nasabah', '$nama_pinjaman', '$jenis_pinjaman',
    '$besaran_pinjaman', '$tgl_pengajuan_pinjaman', '$tgl_acc_pinjaman',  '$tgl_pinjaman','$keterangan', 
    '$id_petugas')";
    // kondisi masukan data
    if (mysqli_query($koneksi, $sqlquer)) {
        // lokasi penyimpanan
        header("Location:datapinjaman.php");
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
                <h3>Tambah Data Pinjaman</h3>
                <!-- aksi ke tambah data untuk inputan, pembuatan form dan tabel di dalamnya -->
                <form action="tambahpinjaman.php" method="post">
                    <table border="4" align="center" cellpadding='5'>
                        <tr>
                            <th colspan="2">Data Pinjaman</th>
                        </tr>
                        <tr>
                            <td>ID Pinjaman</td>
                            <td><input type="number" name="id_pinjaman"></td>
                        </tr>
                        <tr>
                            <td>ID Petugas</td>
                            <td><input type="number" name="id_petugas"></td>
                        </tr>
                        <tr>
                            <td>ID Nasabah</td>
                            <td><input type="number" name="id_nasabah"></td>
                        </tr>
                        <tr>
                            <td>Nama Pinjaman</td>
                            <td><input type="text" name="nama_pinjaman"></td>
                        </tr>

                        <tr>
                            <td>Jenis_Pinjaman</td>
                            <td><input name="jenis_pinjaman" rows="2" cols="20"></td>
                        </tr>
                        <tr>
                            <td>Besaran_Pinjaman</td>
                            <td><input type="number" name="besaran_pinjaman"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pengajuan Pinjaman</td>
                            <td><input type="date" name="tgl_pengajuan_pinjaman"></td>
                        </tr>
                        <tr>
                            <td>Tanggal ACC Pinjaman</td>
                            <td><input type="date" name="tgl_acc_pinjaman"></td>
                        </tr>
                        <tr>
                            <td>Tanggal Pinjaman</td>
                            <td><input type="date" name="tgl_pinjaman"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>
                                <select name="keterangan">
                                    <option value="Lunas">Lunas</option>
                                    <option value="Belum Lunas">Belum Lunas</option>
                                </select>
                            </td>
                        </tr>
                    </table>
                    <br>
                    <!-- tombol aksi -->
                    <input type="submit" name="submit" value="Tambah Data" class="tombol">
                    <input type="button" name="kembali" value="Kembali" onclick="self.history.back()" class="tombol">
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