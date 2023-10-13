<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-tasks" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Menu</li>
                                <li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?= $this->session->flashdata('message'); ?>
            <div class="row">

                <!---------------------------Data Table---------------------------------------------->
                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <!-- Simple Datatable start -->
                    <div class="card-box mb-30">
                        <div class="pd-20 text">
                            <h5 class="h4">
                                <a class="text-primary">
                                    <i class="fa fa-tasks" aria-hidden="true"></i> Tabel Data Menu
                                </a>
                            </h5>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahmenu">
                                <i class="icon-copy fa fa-plus-square" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr class="text-center">
                                        <th class="table-plus datatable-nosort">No</th>
                                        <th>Menu</th>
                                        <th class="datatable-nosort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($menu as $m) : ?>
                                        <tr class="text-center">
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $m['menu']; ?>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                        <i class="dw dw-more"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#menuubah<?= $m['id']; ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#menuhapus<?= $m['id']; ?>"><i class="dw dw-delete-3"></i> Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                    </div>
                    <!-- Simple Datatable End -->
                </div>
                <!---------------------------Batas Data Table--------------------------------------->

                <!------------------------------------------------------------------------------------->

                <div class="col-md-4 col-sm-12 mb-30">
                    <form>
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo">
                                <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $user['image']; ?>" alt="" class="avatar-photo">
                            </div>
                            <h5 class="text-center h5 mb-0"><?= $user['nama']; ?></h5>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Imformasi User</h5>
                                <ul>
                                    <li>
                                        <span>Email:</span>
                                        <?= $user['email']; ?>
                                    </li>
                                    <li>
                                        <span>Bergabung Sejak:</span>
                                        <?= date('d/m/y', strtotime($user['date_created'])) ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>

            </div>
            
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>


<!----------------------------------Modal------------------------------------------------->

<!-- Modal Tambah -->
<div class="modal fade" id="tambahmenu" tabindex="-1" aria-labelledby="tambahmenuLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahmenuLabel">Tambah Menu Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-control-label" for="menu">Nama Menu</label>
                        <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu...">
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    <button type="submit" class="btn btn-primary">Tambah</button>
                </div>
            </form>
        </div>
    </div>
</div>
<!-- Batas Modal Tambah -->

<!-- Modal ubah Data -->
<?php $i = 0;
foreach ($menu as $m) : $i++ ?>
    <div class="modal fade" id="menuubah<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="menuubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="menuubahLabel">Ubah Data Menu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('menu/menuubah'); ?>" method="POST">
                    <input type="hidden" name="id" class="id" value="<?= $m['id']; ?>">
                    <div class="modal-body">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="menu">Nama Menu</label>
                                <input type="text" class="form-control" id="menu" name="menu" placeholder="Nama Menu" value="<?= $m['menu']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal ubah -->

<!-- Modal Hapus Data -->
<?php $i = 0;
foreach ($menu as $m) : $i++ ?>
    <div class="modal fade" id="menuhapus<?= $m['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="menuhapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="useractivehapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('menu/menuhapus'); ?>" method="POST">
                    <input type="hidden" name="id" class="id">
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?= base_url('menu/menuhapus/') . $m['id']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->

<!---------------------------------Batas Modal ---------------------------------------------->