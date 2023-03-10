<?php
require("koneksi.php");

$data = mysqli_query($koneksi, "CALL SelectDataAngsuran;");
?>

<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Halaman Angsuran</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="des.css">
</head>

<body align="center">
    <br>
    <h2 class="fa fa-bookmark" > Halaman Data Angsuran </h2><br><br>
    <hr size="5px">

            <div class="container" align="center">
                <ul>
                    <button onclick="window.location.href='Home.html'" class="tombol">Home
                    </button></li>
                    <button onclick="window.location.href='datapinjaman.php'" class="tombol">Lihat Data Pinjaman</button></li>
                    </li>
                    <button onclick="window.location.href='tambahangsuran.php'" class="tombol">Tambah Data
                    </button></li>
                    </li>
                    <button onclick="self.history.back()" class="tombol">Kembali
                    </button></li>
                </ul>
                <br><br>
                <h3 align="center">Data Angsuran Koperasi</h3><br>
                <!-- membuat tabel -->
                <table border="1" width = "100%"align="center" cellpadding="0">
                    <tr>
                        <th width="400px"colspan="9">Data Koperasi Angsuran</th>
                    </tr>
                    <!-- memberikan nama pada kolom tabel -->
                    <tr>
                        <th>Id Angsuran</th>
                        <th>Id Pinjaman</th>
                        <th>Besaran Angsuran</th>
                        <th>Tanggal Pinjaman</th>
                        <th>Tanggal Jatuh Tempo</th>
                        <th>Angsuran Ke</th>
                        <th>Sisa Pembayaran</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>

                    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                        <tr align="center">
                            <td><?php echo $row['id_angsuran'] ?></td>
                            <td><?php echo $row['id_pinjaman'] ?></td>
                            <td><?php echo $row['besaran_angsuran'] ?></td>
                            <td><?php echo $row['tgl_pinjaman'] ?></td>
                            <td><?php echo $row['tgl_jatuh_tempo'] ?></td>
                            <td><?php echo $row['angsuran_ke'] ?></td>
                            <td><?php echo $row['sisa_pembayaran'] ?></td>
                            <td><?php echo $row['keterangan'] ?></td>
                            <td>

                                <a href="Editangsuran.php?id=<?php echo $row['id_angsuran']; ?>"><button class="blue">Edit</button></a> |
                                <a href="hapusangsuran.php?id=<?php echo $row['id_angsuran']; ?>"><button class="red">Hapus</button></a>

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