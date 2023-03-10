<?php

include ("koneksi.php");

    $id_angsuran = $_POST['id_angsuran'];
    $id_pinjaman = $_POST["id_pinjaman"];
    $besaran_angsuran = $_POST['besaran_angsuran'];
    $tgl_pinjaman = $_POST['tgl_pinjaman'];
    $tgl_jatuh_tempo = $_POST["tgl_jatuh_tempo"];
    $angsuran_ke = $_POST["angsuran_ke"];
    $sisa_pembayaran = $_POST["sisa_pembayaran"];
    $keterangan = $_POST["keterangan"];
    
	$update = mysqli_query($koneksi, "UPDATE angsuran SET  besaran_angsuran='$besaran_angsuran',
    tgl_pinjaman='$tgl_pinjaman',tgl_jatuh_tempo='$tgl_jatuh_tempo', angsuran_ke='$angsuran_ke', sisa_pembayaran='$sisa_pembayaran', keterangan='$keterangan'
    WHERE id_angsuran ='$id_angsuran'");
   

	header("Location: dataangsuran.php");

?>











