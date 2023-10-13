<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-address-book" aria-hidden="true"></i> <?= $title; ?></h4>
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

                <!---------------------------Data Table---------------------------------------------->
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <blockquote class="blockquote mb-0 text-center">
                                <p>
                                <h6 class="mb-0">Filter Tanggal</h6>
                                </p>
                            </blockquote>
                            <?= form_open('report/filter', ['target' => '_blank']); ?>
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tanggal_awal">Tanggal Awal</label>
                                                <input type="date" name="tanggal_awal" id="tanggal_awal" class="form-control text-dark" required>
                                             </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="form-group">
                                                <label class="form-control-label" for="tanggal_akhir">Tanggal Akhir</label>
                                                <input type="date" name="tanggal_akhir" id="tanggal_akhir" class="form-control text-dark" required>
                                             </div>
                                        </div>                                        
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">
                                    <i class="fa fa-filter" aria-hidden="true"></i>
                                        Filter
                                    </button>
                                </div>
                            <?= form_close(); ?>
                        </div>
                    </div>

                </div>
                <!---------------------------Batas Data Table--------------------------------------->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>

