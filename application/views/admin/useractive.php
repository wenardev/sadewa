<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="dw dw-user-13" aria-hidden="true"></i> <?= $title; ?></h4>
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
            <?= $this->session->flashdata('message'); ?>
            <?= form_error('nama', '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>', '</div>'); ?>
            <?= form_error('email', '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>', '</div>'); ?>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20 text">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambahuser">
                        <i class="icon-copy fa fa-plus-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr class="text-center text-white bg-info">
                                <th class="table-plus datatable-nosort">No</th>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Status User</th>
                                <th>Status Active</th>
                                <th>Tanggal Dibuat</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="text-center text-white bg-info">
                                <th class="table-plus datatable-nosort">No</th>
                                <th>Nama User</th>
                                <th>Email</th>
                                <th>Status User</th>
                                <th>Status Active</th>
                                <th>Tanggal Dibuat</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($user as $u) : ?>
                                <tr class="text-center">
                                    <td>
                                        <?= $i; ?>
                                    </td>
                                    <td>
                                        <?= ucwords($u['nama']); ?>
                                    </td>
                                    <td>
                                        <?= $u['email']; ?>
                                    </td>
                                    <td>
                                        <?= ucwords($u['role']); ?>
                                    </td>
                                    <td>
                                        <?= $u['active']; ?>
                                    </td>
                                    <td>
                                        <?= date('d/m/y', strtotime($u['date_created'])) ?>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#useractivedetail<?= $u['id']; ?>"><i class="dw dw-eye"></i> Detail</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#useractiveubah<?= $u['id']; ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#useractivehapus<?= $u['id']; ?>"><i class="dw dw-delete-3"></i> Hapus</a>
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
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>


<!-- Modal Tambah User -->
<div class="modal fade" id="tambahuser" tabindex="-1" aria-labelledby="tambahuserLabel" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahuserLabel">Tambah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('admin/useractivetambah'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <label class="form-control-label" for="nama">Nama User</label>
                        <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="<?= set_value('nama'); ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="nama">Email User</label>
                        <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?= set_value('email'); ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                    </div>
                    <div class="form-group">
                        <label class="form-control-label" for="nama">Password</label>
                        <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" value="" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
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
<!-- Batas Modal Tambah Data -->

<!-- Modal Ubah User -->
<?php $i = 0;
foreach ($user as $u) : $i++ ?>
    <div class="modal fade" id="useractiveubah<?= $u['id']; ?>" tabindex="-1" aria-labelledby="useractiveubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="useractiveubahLabel">Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/useractiveubah'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $u['id']; ?>">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="<?= $u['nama']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="email">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?= $u['email']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="password">Password</label>
                                    <input type="password" class="form-control" id="password" name="password" placeholder="Masukan Password" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="role_id">Status User</label>
                                    <select id="role_id" name="role_id" class="form-control">
                                        <option value="<?= $u['role_id']; ?>"><?= $u['role']; ?></option>
                                        <?php foreach ($role as $r) : ?>
                                            <option value="<?= $r['id']; ?>">
                                                <?= $r['role']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>

                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="is_active">Status Active</label>
                                    <select id="is_active" name="is_active" class="form-control">
                                        <option value="<?= $u['is_active']; ?>"> <?= $u['active']; ?></option>
                                        <?php foreach ($active as $a) : ?>
                                            <option value="<?= $a['id']; ?>">
                                                <?= $a['active']; ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>

                        </div>

                    </div>
                    <div class="modal-footer">
                        <div class="col-lg">
                            <div class="alert alert-warning alert-dismissible fade show" role="alert">
                                <strong>Peringatan!</strong> Update User level & Status Active dapat mempengaruhi akses user.
                            </div>
                        </div>
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Ubah user -->


<!-- Modal Detail User -->
<?php $i = 0;
foreach ($user as $u) : $i++ ?>
    <div class="modal fade" id="useractivedetail<?= $u['id']; ?>" tabindex="-1" aria-labelledby="useractivedetailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="useractivedetailLabel">Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" name="id" id="id" value="<?= $u['id']; ?>">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-12">
                            <div class="form-group text-center">
                                <h3>
                                    <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $u['image']; ?>" class="rounded-circle" style="height: 200px;">
                                </h3>
                                <label class="form-control-label" for="image">Photo Profile</label>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nama">Nama</label>
                                <input class="form-control text-dark" value="<?= $u['nama']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="email">Email</label>
                                <input class="form-control text-dark" value="<?= $u['email']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="role_id">Status User</label>
                                <input class="form-control text-dark" value="<?= $u['role']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="is_active">Status Active</label>
                                <input class="form-control text-dark" value="<?= $u['active']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Detail user -->

<!-- Modal Hapus Data-->
<?php $i = 0;
foreach ($user as $u) : $i++ ?>
    <div class="modal fade" id="useractivehapus<?= $u['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="useractivehapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="useractivehapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('admin/useractivehapus'); ?>" method="POST">
                    <input type="hidden" name="id" class="id">
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?= base_url('admin//useractivehapus/') . $u['id']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->