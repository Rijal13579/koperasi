<?php

require("koneksi.php");
$output = '';
$kosong = "Masukan Data Yang Ingin Dicari";
$Notfound ="Data Tidak Ditemukan";
if (isset($_POST["query"])) {
   $search = mysqli_real_escape_string($koneksi, $_POST["query"]);
   $query = "CALL Searching('%$search%')" ;
} else {
   $query = "SELECT DISTINCT nasabah.id_nasabah, nasabah.nama_lengkap, petugas.id_petugas, petugas.nama, pinjaman.id_pinjaman, pinjaman.nama_pinjaman, pinjaman.jenis_pinjaman, pinjaman.besaran_pinjaman FROM petugas JOIN pinjaman USING (id_petugas) JOIN nasabah USING (id_nasabah) ORDER BY id_nasabah LIMIT 0,0 ";
}
$result = mysqli_query($koneksi, $query);

if (mysqli_num_rows($result) > 0) {
   $output .= '
   <table border="1px" align="center" cellpadding="10">
    <tr>
         <th>Id Nasabah</th>
         <th>Nama Nasabah</th>
         <th>Id Petugas</th>
         <th>Nama Petugas</th> 
         <th>Id Pinjaman</th>
         <th>Nama Pinjaman</th>  
         <th>Jenis Pinjaman</th>
         <th>Besar Pinjaman</th>
    </tr>
 ';
   while ($row = mysqli_fetch_array($result)) {
      $output .= '
      <br>
   <tr align="center">
   <td>'.$row["id_nasabah"].'</td>  
   <td>'.$row["nama_lengkap"].'</td>  
   <td>'.$row["id_petugas"].'</td>  
   <td>'.$row["nama"].'</td>  
   <td>'.$row["id_pinjaman"].'</td>  
   <td>'.$row["nama_pinjaman"].'</td>
   <td>'.$row["jenis_pinjaman"].'</td>
   <td>'.$row["besaran_pinjaman"].'</td>
   </tr>
  ';
   }
   echo $output;

}else if (mysqli_num_rows($result) < 0) {
   echo $kosong;
}
