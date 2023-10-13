<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-address-book-o" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Report</li>
                                <li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="pd-20 bg-white border-radius-4 box-shadow mb-30">
                <!-- Export Datatable start -->
                <div class="pd-20">
                    <form method="get" action="<?php echo base_url('report') ?>">            
                    
                    <div class="row">                
                        <div class="col-sm-5 col-md-6">                    
                            <div class="form-group">                        
                                <label>Filter Tanggal</label>                        
                                <div class="row">
                                    <div class="col-lg-5">                            
                                        <input type="date" name="tgl_awal" value="<?= @$_GET['tgl_awal'] ?>" class="form-control tgl_awal" autocomplete="off">
                                    </div>
                                    <div >
                                        <span class="input-group-addon"> s/d </span>
                                    </div>
                                    <div class="col-lg-5"> 
                                        <input type="date" name="tgl_akhir" value="<?= @$_GET['tgl_akhir'] ?>" class="form-control tgl_akhir" autocomplete="off">                        
                                    </div>
                                </div>                                        
                            </div>                
                        </div>
                    </div>  
                    
                    <button type="submit" name="filter" value="true" class="btn btn-primary">Cari</button>            
                    <?php if(isset($_GET['filter'])) echo '<a href="'.base_url('report').'" class="btn btn-default">RESET</a>'; ?>        
                    </form>
                    
                    <br />        
                    <div style="margin-top: 5px;">            
                        <a href="<?= $url_cetak ?>">Cetak PDF</a>        
                    </div>
                </div>
                <div class="pb-20">
                    <table class="table table-bordered">
                        <thead>
                            <tr align=center>
                                <th>Nama</th>                        
                                <th>NIK</th>                        
                                <th>Jenis Kelamin</th>                                              
                                <th>Nama Surat</th>
                                <th>Tanggal Dibuat</th>
                            </tr>
                        </thead>
                        <tbody>
                        <?php                    
                            if(empty($pemohon)){ 
                                // Jika data tidak ada                        
                                echo "<tr><td colspan='5' align=center >Data tidak ada</td></tr>";                    
                                }else{ 
                                // Jika jumlah data lebih dari 0 (Berarti jika data ada)                        
                                foreach($pemohon as $data){ 
                                    // Looping hasil data transaksi                            
                                    $date_created = date('d-m-Y', strtotime($data->date_created));
                                    // Ubah format tanggal jadi dd-mm-yyyy                            
                                    echo "<tr align=center >";                                                       
                                        echo "<td>".$data->nama."</td>";                            
                                        echo "<td>".$data->nik."</td>";
                                        echo "<td>".$data->jenis_kelamin."</td>";
                                        echo "<td>".$data->nama_surat."</td>";  
                                        echo "<td>".$date_created."</td>";                                                    
                                    echo "</tr>";                        
                                    }                    
                                    }                   
                                ?>
                        </tbody>
                        <tfoot>
                            <tr align=center >
                                <td class="table-plus datatable-nosort">Nama</td>                        
                                <td>NIK</td>                        
                                <td>Jenis Kelamin</td>
                                <td>Nama Surat</td>                                              
                                <td class="datatable-nosort">Tanggal Dibuat</td>
                            </tr>
                        </tfoot>
                    </table>
                </div>

                <!-- Export Datatable End -->
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>