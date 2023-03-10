<?php
require("koneksi.php");

$data = mysqli_query($koneksi, "CALL SelectDataPinjaman;");
?>

<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Pinjaman</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="des.css">
</head>

<body align="center">
    <br>
    <h2 class="fa fa-table" > Halaman Data Pinjaman </h2><br><br>
    <hr size="5px">

            <div class="container" align="center">
                <ul>
                    <button onclick="window.location.href='Home.html'" class="tombol">Home
                    </button></li>
                    <button onclick="window.location.href='dataangsuran.php'" class="tombol">Lihat Data Angsuran</button></li>
                    </li>
                    <button onclick="window.location.href='tambahpinjaman.php'" class="tombol">Tambah Data
                    </button></li>
                    </li>
                    <button onclick="self.history.back()" class="tombol">Kembali
                    </button></li>
                </ul>
                <br><br>
                <h3 align="center">Data Pinjaman</h3><br>
                <!-- membuat tabel -->
                <table border="1" width="120%" align="center">
                    <tr>
                        <th width="200px" colspan="11">Data Koperasi Pinjaman</th>
                    </tr>
                    <!-- memberikan nama pada kolom tabel -->
                    <tr>
                        <th >Id Pinjaman</th>
                        <th>Id Petugas</th>
                        <th>Id Nasabah</th>
                        <th>Nama Pinjaman</th>
                        <th>Jenis Pinjaman</th>
                        <th>Besaran Pinjaman</th>
                        <th>Tanggal Pengajuan Pinjaman</th>
                        <th>Tanggal ACC Pinjaman</th>
                        <th>Tanggal Pinjaman</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>

                    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                        <tr align="center">
                            <td width="5px"><?php echo $row['id_pinjaman'] ?></td>
                            <td><?php echo $row['id_petugas'] ?></td>
                            <td><?php echo $row['id_nasabah'] ?></td>
                            <td><?php echo $row['nama_pinjaman'] ?></td>
                            <td><?php echo $row['jenis_pinjaman'] ?></td>
                            <td><?php echo $row['besaran_pinjaman'] ?></td>
                            <td><?php echo $row['tgl_pengajuan_pinjaman'] ?></td>
                            <td><?php echo $row['tgl_acc_pinjaman'] ?></td>
                            <td><?php echo $row['tgl_pinjaman'] ?></td>
                            <td><?php echo $row['keterangan'] ?></td>
                            <td width="13%">
                                <!-- hyperlink untuk instruksi edit dan hapus -->
                                <center>
                                <a href="Editpinjaman.php?id=<?php echo $row['id_pinjaman']; ?>"><button class="blue">Edit</button></a> |
                                <a href="HapusPinjaman.php?id=<?php echo $row['id_pinjaman']; ?>"><button class="red">Hapus</button></a>
                                </center>
                            </td>
                        </tr>
                    <?php
                    }

                    // menutup koneksi
                    mysqli_close($koneksi);
                    ?>
                </table>
            </div>
        </div>
    </div>

</body>

</html>