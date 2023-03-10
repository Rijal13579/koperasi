<?php

include ("koneksi.php");

// Deklarasi variabel
 	$id_nasabah = $_POST['id_nasabah'];
    $id_petugas = $_POST['id_petugas'];
    $nama_lengkap = $_POST["nama_lengkap"];
    $tempat_lahir = $_POST["tempat_lahir"];
    $tanggal_lahir = $_POST["tanggal_lahir"];
    $alamat = $_POST["alamat"];
    $no_telepon = $_POST["no_telepon"];
    $ket = $_POST["ket"];
    
	$update = mysqli_query($koneksi, "UPDATE nasabah SET nama_lengkap = '$nama_lengkap', tempat_lahir ='$tempat_lahir', tanggal_lahir = '$tanggal_lahir', alamat='$alamat', no_telepon = '$no_telepon', ket = '$ket' WHERE id_nasabah = '$id_nasabah'");
   

	header("Location: datanasabah.php");

?>