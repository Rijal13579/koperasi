
<?php

require_once("koneksi.php");

// Deklarasi variabel 
$id = $_GET['id']; 
$sqlquer = "DELETE FROM petugas WHERE id_petugas = $id"; 

if (mysqli_query($koneksi, $sqlquer)) {
    header("Location: datapetugas.php");

// Jika hapus data gagal maka akan menapilkan tulisan seperti dibawah ini
} else {
    echo "Gagal Menghapus Data";
}
