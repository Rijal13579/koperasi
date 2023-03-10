<?php  
 //pagination.php  
 require("koneksi.php");
 $record_per_page = 5;  
 $page = '';  
 $output = '';  
 if(isset($_POST["page"]))  
 {  
      $page = $_POST["page"];  
 }  
 else  
 {  
      $page = 1;  
 }  
 $start_from = ($page - 1)*$record_per_page;  
 $query = "SELECT DISTINCT nasabah.id_nasabah, nasabah.nama_lengkap, petugas.id_petugas, petugas.nama, pinjaman.id_pinjaman, pinjaman.nama_pinjaman, pinjaman.jenis_pinjaman, pinjaman.besaran_pinjaman FROM petugas JOIN pinjaman USING (id_petugas) JOIN nasabah USING (id_nasabah) ORDER BY id_nasabah ASC LIMIT $start_from, $record_per_page";
 
 $result = mysqli_query($koneksi, $query);  
 $output .= "
      <table border='1px' align='center' cellpadding='10'> 
          <tr align='center'>  
                <th>Id Nasabah</th>
                <th>Nama Nasabah</th>
                <th>Id Petugas</th>
                <th>Nama Petugas</th> 
                <th>Id Pinjaman</th>
                <th>Nama Pinjaman</th>  
                <th>Jenis Pinjaman</th>
                <th>Besar Pinjaman</th>
          </tr>  
 ";  
 while($row = mysqli_fetch_array($result))  
 {  
      $output .= '  
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
 $output .= '</table><br /><div align="center">';  
 $page_query = "SELECT * FROM pinjaman ORDER BY id_pinjaman DESC";  
 $page_result = mysqli_query($koneksi, $page_query);  
 $total_records = mysqli_num_rows($page_result);  
 $total_pages = ceil($total_records/$record_per_page);  
 for($i=1; $i<=$total_pages; $i++)  
 {  
      $output .= "<span class='pagination_link' style='cursor:pointer; padding:6px; 
      border:1px solid #ccc;' id='".$i."'>".$i."</span>";  
 }  
 $output .= '</div><br /><br />';  
 echo $output;  
 ?> 