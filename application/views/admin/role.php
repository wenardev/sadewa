<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-shield" aria-hidden="true"></i> <?= $title; ?></h4>
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
            <div class="row clearfix">
                <!-- Large modal -->
                <div class="col-md-8  col-sm-12 mb-30">
                    <?= $this->session->flashdata('message'); ?>
                    <?= form_error('role', '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>', '</div>'); ?>
                    <!-- Simple Datatable start -->
                    <div class="card-box mb-30">
                        <div class="pd-20">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#roletambah">
                                <i class="icon-copy fa fa-plus-square" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr class="text-center text-white bg-info">
                                        <th class="text-center" width="5">No</th>
                                        <th class="text-center">Status User</th>
                                        <th class="text-center" width="5">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="text-center text-white bg-info">
                                        <th class="text-center" width="5">No</th>
                                        <th class="text-center">Status User</th>
                                        <th class="text-center" width="5">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($role as $r) : ?>
                                        <tr class="text-center">
                                            <td scape="row">
                                                <?= $i; ?>
                                            </td>
                                            <td><?= ucwords($r['role']); ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                        <i class="dw dw-more"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-icon-list">
                                                        <a class="dropdown-item" href="<?= base_url('admin/roleAccess/') . $r['id']; ?>"><i class="fa fa-user-secret" aria-hidden="true"></i> Akses</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#roleubah<?= $r['id']; ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#rolehapus<?= $r['id']; ?>"><i class="dw dw-delete-3"></i> Hapus</a>
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
                <!-- Medium modal -->
                <div class="col-md-4 col-sm-12 mb-30">
                    <form>
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo">
                                <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $user['image']; ?>" alt="" class="avatar-photo">
                            </div>
                            <h5 class="text-center h5 mb-0"><?= ucwords($user['nama']); ?></h5>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Imformasi User</h5>
                                <ul>
                                    <li>
                                        <span>Email:</span>
                                        <?= $user['email']; ?>
                                    </li>
                                    <li>
                                        <span>Dibuat Sejak:</span>
                                        <?= date('d/m/y', strtotime($user['date_created'])) ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </form>
                </div>
                <!------------------>
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>


<!-- Modal Tambah Data -->
<div class="modal fade" id="roletambah" tabindex="-1" aria-labelledby="roletambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="roletambahLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/roletambah'); ?>" method="POST">
                <div class="modal-body">
                    <div class="col-lg">
                        <div class="form-group">
                            <label class="form-control-label" for="nama">Nama</label>
                            <input type="text" class="form-control" id="role" name="role" placeholder="Nama..." required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                        </div>
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

<!-- Modal ubah Data-->
<?php $i = 0;
foreach ($role as $r) : $i++ ?>
    <div class="modal fade" id="roleubah<?= $r['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="roleubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="roleubahLabel">Ubah User Level Role</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/roleubah'); ?>" method="POST">
                    <input type="hidden" name="id" class="id" value="<?= $r['id']; ?>">
                    <div class="modal-body">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="nama">Nama</label>
                                <input type="text" class="form-control" id="role" name="role" placeholder="Nama User level" value="<?= $r['role']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
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

<!-- Modal Hapus Data-->
<?php $i = 0;
foreach ($role as $r) : $i++ ?>
    <div class="modal fade" id="rolehapus<?= $r['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="rolehapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="useractivehapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/rolehapus'); ?>" method="POST">
                    <input type="hidden" name="id" class="id">
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?= base_url('admin/rolehapus/') . $r['id']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->