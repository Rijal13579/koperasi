<?php

include ("koneksi.php");

// Deklarasi variabel
 	$id_petugas = $_POST['id_petugas']; 
    $nama = $_POST["nama"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $no_telepon = $_POST["no_telepon"];
    $keterangan = $_POST["keterangan"];
    
	$update = mysqli_query($koneksi, "UPDATE petugas SET nama = '$nama', tempat_lahir ='$tempat_lahir', 
    tanggal_lahir = '$tanggal_lahir', no_telepon = '$no_telepon', keterangan = '$keterangan' WHERE id_petugas = '$id_petugas'");
   

	header("Location: datapetugas.php");

?>