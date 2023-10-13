<html>
<head>
  <title>Cetak PDF</title>
  <style>
    .table {
        border-collapse:collapse;
        table-layout:fixed;width: 630px;
    }
    .table th {
        padding: 5px;
    }
    .table td {
        word-wrap:break-word;
        width: 20%;
        padding: 5px;
    }
  </style>
</head>
<body>
    <h5 align="center">
      DATA LAPORAN 
      <br>
      PEMERINTAH KABUPATEN HALMAHERA UTARA
      <br>
      KECAMATAN TOBELO UTARA 
      <br>      
      DESA POPILO
    </h5>
    <div class="h6" align="center">
      <?php echo $label ?>
    </div>

  <table class="table" border="1" width="100%" style="margin-top: 10px;">
    <thead>
        <tr align=center>
            <th>No</th> 
            <th>Nama</th>
            <th>NIK</th>                                                    
            <th>Nama Surat</th>
            <th>Tanggal Dibuat</th>
        </tr>
    </thead>
    <tbody>
            <?php  
                $nomor = 1; 
                if(empty($pemohon)){ 
                // Jika data tidak ada                        
                echo "<tr><td colspan='5' align=center >Data tidak ada</td></tr>";                    
                }else{ 
                // Jika jumlah data lebih dari 0 (Berarti jika data ada)                        
                foreach($pemohon as $data) { 
                // Looping hasil data transaksi                            
                $date_created = date('d-m-Y', strtotime($data->date_created)); 
                // Ubah format tanggal jadi dd-mm-yyyy                            
                echo "<tr align=center >"; 
                echo "<td>".$nomor++."</td>"; 
                echo "<td>".$data->nama."</td>";
                echo "<td>".$data->nik."</td>";
                echo "<td>".$data->nama_surat."</td>";
                echo "<td>".$date_created."</td>";
                echo "</tr>";              
            } }  
            ?>
    </tbody>
  </table>
</body>
</html>