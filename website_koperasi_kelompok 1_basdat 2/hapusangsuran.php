<?php

require_once("koneksi.php");

// Deklarasi variabel 
$id = $_GET['id']; 
$sqlquer = "DELETE FROM angsuran WHERE id_angsuran = $id"; 

if (mysqli_query($koneksi, $sqlquer)) {
    header("Location: dataangsuran.php");

// Jika hapus data gagal maka akan menapilkan tulisan seperti dibawah ini
} else {
    echo "Gagal Menghapus Data";
}
