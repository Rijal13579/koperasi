<?php
include("koneksi.php");
// Mengecek setiap inputan dalam setiap variabel yang dideklarasikan
if (isset($_POST['submit'])) { //Jika inputan berisi data maka inputan akan dikirimkan ketika menekan tombol

    $id_nasabah = $_POST['id_nasabah'];
    $nama_lengkap = $_POST["nama_lengkap"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $no_telepon = $_POST["no_telepon"];
    $ket = $_POST["ket"];

    // Memasukan query mysql ke dalam variabel yang berisi untuk melakukan insert data ke database dalam tabel
    $sqlquer = "CALL InsertDataNasabah ('$id_nasabah', '$nama_lengkap', '$tempat_lahir', 
        '$tanggal_lahir', '$alamat', '$no_telepon', '$ket')";



    if (mysqli_query($koneksi, $sqlquer)) {
        header("Location:datanasabah.php");

        // Jika query tidak sesuai atau gagal maka akan menampilkan tulisan "Gagal Menambahkan Data"
    } else {
        echo "Gagal Menambahkan Data";
    }
}

mysqli_close($koneksi); // Menutup koneksi ke database
?>

<!DOCTYPE html>
<html>

<head>
    <title>Input Data</title>
    <link rel="stylesheet" href="des.css">
</head>

<body>
    <div class="grid-container" align="center">
        <div class="header">
            <center>
        </div>
        <div class="middle" style="background-color: lightgray;" align="center">
            <div class="container" align="center">
                <h3>Tambah Data Nasabah</h3>

                <form action="tambahnasabah.php" method="post">
                    <table  border="4" cellpadding='5'>
                        <th colspan="2">Tambah Data Nasabah</th>
                        <tr>
                            <td>Id Nasabah</td>
                            <td><input type="number" name="id_nasabah"></td>
                        </tr>

                        <tr>
                            <td>Nama Lengkap</td>
                            <td><input type="text" name="nama_lengkap"></td>
                        </tr>
                        <tr>
                            <td>Tempat Lahir</td>
                            <td><textarea name="tempat_lahir" rows="2" cols="20"></textarea></td>
                        </tr>
                        <tr>
                            <td>Tanggal Lahir</td>
                            <td><input type="date" name="tanggal_lahir"></td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><textarea name="alamat" rows="2" cols="20"></textarea></td>
                        </tr>
                        <tr>
                            <td>No Telepon</td>
                            <td><input type="text" name="no_telepon"></td>
                        </tr>
                        <tr>
                            <td>Keterangan</td>
                            <td>
                                <select name="ket">
                                    <option value="Aktif">Aktif</option>
                                    <option value="Tidak Aktif">Tidak Aktif</option>
                                </select>
                            </td>
                        </tr>

                    </table>
                    <br>
                    <!-- Tombol untuk submit atau mengirimkan data yang telah diinputkan pada form di atas -->
                    <input type="submit" name="submit" value="Tambah Data" class="tombol">
                    <!-- Tombol untuk kembali ke halaman sebelumnya -->
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