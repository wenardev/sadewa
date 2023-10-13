<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="dw dw-group" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">User</li>
                                <li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <div class="row">

                <?php foreach ($user as $u) : ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo">
                                <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $u['image']; ?>" alt="" class="avatar-photo">
                            </div>
                            <h5 class="text-center h5 mb-0"><?= ucwords($u['nama']); ?></h5>
                            <p class="text-center text-muted font-14"> <?= ucwords($u['role']); ?></p>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Imformasi User</h5>
                                <ul>
                                    <li>
                                        <span>Email:</span>
                                        <?= $u['email']; ?>
                                    </li>
                                    <li>
                                        <span>Bergabung Sejak:</span>
                                        <?= date('d/m/y', strtotime($u['date_created'])) ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>