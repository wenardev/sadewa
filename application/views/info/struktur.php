<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-sitemap" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Info</li>
                                <li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?= $this->session->flashdata('message'); ?>
            <div class="row">

                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="text-center">
                            <img src="<?= base_url('assets/deskapp/vendors/images/kelurahan/struktur.png'); ?>" style="height: 500px;" alt="image">
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