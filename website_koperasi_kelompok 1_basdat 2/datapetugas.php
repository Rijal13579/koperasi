<?php

require("koneksi.php");

$data = mysqli_query($koneksi, "CALL SelectDataPetugas;");
?>

<!DOCTYPE html>
<html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Data Petugas</title>
    <script src="https://kit.fontawesome.com/a076d05399.js"></script>
    <link rel="stylesheet" href="des.css">
</head>

<body align="center">
    <br>
    <h2 class="fa fa-male" > Halaman Data Petugas </h2><br><br>
    <hr size="5px">

            <div class="container" align="center">
                <ul>
                    <button onclick="window.location.href='Home.html'" class="tombol">Home
                    </button></li>
                    <button onclick="window.location.href='datanasabah.php'" class="tombol">Lihat Data Nasabah</button></li>
                    </li>
                    <button onclick="window.location.href='tambahpetugas.php'" class="tombol">Tambah Data
                    </button></li>
                    </li>
                    <button onclick="self.history.back()" class="tombol">Kembali
                    </button></li>
                </ul>
                <br><br>
                <h3 align="center">Data Petugas Koperasi</h3><br>
                <!-- Menampilkan data dalam tabel -->
                <table border="1px" align="center" cellpadding="10">

                    <tr>
                        <!-- Nama kolom yang akan ditampilkan -->
                        <th>Id Petugas</th>
                        <th>Nama</th>
                        <th>Tempat Lahir</th>
                        <th>Tanggal Lahir</th>
                        <th>No Telepon</th>
                        <th>Keterangan</th>
                        <th>Action</th>
                    </tr>

                    <!-- Untuk mengambil baris variabel $data sebagai array asosiatif dengan melakukan kondisi perulangan -->
                    <?php while ($row = mysqli_fetch_assoc($data)) { ?>
                        <tr align="center">
                            <!-- Memasukan atribut atau nama kolom berdasarkan database ke dalam kolom yang akan ditampilkan -->
                            <td><?php echo $row['id_petugas'] ?></td>
                            <td><?php echo $row['nama'] ?></td>
                            <td><?php echo $row['tempat_lahir'] ?></td>
                            <td><?php echo $row['tanggal_lahir'] ?></td>
                            <td><?php echo $row['no_telepon'] ?></td>
                            <td><?php echo $row['keterangan'] ?></td>
                            <td>
                                <!-- Tombol yang berisi link untuk menuju ke halaman Edit dan Hapus data petugas -->
                                <a href="Editpetugas.php?id=<?php echo $row['id_petugas']; ?>"><button class="blue">Edit</button></a> |
                                <a href="Hapuspetugas.php?id=<?php echo $row['id_petugas']; ?>"><button class="red">Hapus</button></a>
                            </td>
                        </tr>
                    <?php

                    } // Perulangan selesai

                    // Menutup koneksi
                    mysqli_close($koneksi);
                    ?>
                </table>
            </div>
      
</body>

</html>