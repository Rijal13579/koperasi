<?php

include ("koneksi.php");

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
    
	$update = mysqli_query($koneksi, "UPDATE pinjaman SET nama_pinjaman='$nama_pinjaman', jenis_pinjaman='$jenis_pinjaman', besaran_pinjaman='$besaran_pinjaman',
        tgl_pengajuan_pinjaman='$tgl_pengajuan_pinjaman',tgl_acc_pinjaman='$tgl_acc_pinjaman', tgl_pinjaman='$tgl_pinjaman',keterangan ='$keterangan' WHERE id_pinjaman ='$id_pinjaman'");
   

	header("Location: datapinjaman.php");

?>











