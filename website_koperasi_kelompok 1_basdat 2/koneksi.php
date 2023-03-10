<!-- Bagian untuk membuat koneksi antara php dengan mysql -->
<?php
//Deklarasi variabel untuk koneksi
$host="localhost"; //Nama localhost tempat menyimpan database
$user="root"; //Nama pengguna
$pass=""; //Password
$database="dbkoperasi"; //Nama database

//Memasukan variabel yang berisi argumen  ke dalam syntax mysqli
$koneksi= new mysqli($host, $user, $pass, $database);
//cek kondisi 
if ($koneksi->connect_error){ 
    die("Connection failed: " . $koneksi->connect_error); //Jika koneksi error maka koneksi database gagal
}
// echo "Connected successfully"; //Jika kondisi tidak error maka koneksi berhasil
// Ketika berhasil maka akan menjalankan database yang dimasukan ke dalam variabel
$hasil=mysqli_select_db($koneksi,$database); 
?>