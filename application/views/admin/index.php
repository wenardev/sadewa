<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-tachometer" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="card-box pd-20 height-100-p mb-30">
                <div class="row align-items-center">
                    <div class="col-md-4">
                        <img src="<?= base_url(); ?>/assets/deskapp/vendors/images/banner-img.png" alt="image">
                    </div>
                    <div class="col-md-8">
                        <h4 class="font-20 weight-500 mb-10 text-capitalize">
                            Selamat Datang Kembali, <div class="weight-600 font-30 text-blue"><?= $user['nama']; ?></div>
                        </h4>
                        <p class="font-18 max-width-600">"Sistem Administratis Desa untuk Warga"</p>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <i class="fa fa-vcard-o fa-5x text-info"></i>
                            </div>
                            <div class="widget-data text-center">
                                <div class="h4 mb-0 text-danger"><?= $count_pemohon; ?></div>
                                <div class="weight-600 font-14 text-primary">Jumlah Pemohon</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <i class="fa fa-address-card fa-5x text-info"></i>
                            </div>
                            <div class="widget-data text-center">
                                <div class="h4 mb-0 text-danger"><?= $count_kk; ?></div>
                                <div class="weight-600 font-14 text-blue">Jumlah Kepala Keluarga</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <i class="fa fa-users fa-5x text-info"></i>
                            </div>
                            <div class="widget-data text-center">
                                <div class="h4 mb-0 text-danger"><?= $count_rt; ?>/<?= $count_rw; ?></div>
                                <div class="weight-600 font-14 text-blue">Jumlah Rt/Rw</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-xl-3 mb-30">
                    <div class="card-box height-100-p widget-style1">
                        <div class="d-flex flex-wrap align-items-center">
                            <div class="progress-data">
                                <i class="dw dw-group fa-5x text-info"></i>
                            </div>
                            <div class="widget-data text-center">
                                <div class="h4 mb-0 text-danger"><?= $count_user; ?></div>
                                <div class="weight-600 font-14 text-blue">Jumlah Pengguna</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>