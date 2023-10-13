<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-users" aria-hidden="true"></i> <?= $title; ?></h4>
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
            <?= form_error('no_rt', '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>', '</div>'); ?>
            <?= form_error('no_rw_id', '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>', '</div>'); ?>
            <?= form_error('jenis_kelamin', '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>', '</div>'); ?>
            <?= form_error('pendidikan_id', '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>', '</div>'); ?>
            <?= form_error('no_telephone', '<div class="alert alert-danger" role="alert">
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                        </button>', '</div>'); ?>


                <!---------------------------Data Table RT---------------------------------------------->
            <div class="row">
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <!-- Simple Datatable start -->
                    <div class="card-box mb-30">
                        <div class="pd-20 text">
                            <h5 class="h4">
                                <a class="text-primary">
                                    <i class="fa fa-users" aria-hidden="true"></i> Tabel Data RT
                                </a>
                            </h5>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#rttambah">
                                <i class="icon-copy fa fa-plus-square" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr class="text-center text-white bg-info">
                                        <th class="table-plus datatable-nosort">No</th>
                                        <th>Nama RT</th>
                                        <th>No RT</th>
                                        <th>No RW</th>
                                        <th class="datatable-nosort">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="text-center text-white bg-info">
                                        <th class="table-plus datatable-nosort">No</th>
                                        <th>Nama RT</th>
                                        <th>No RT</th>
                                        <th>No RW</th>
                                        <th class="datatable-nosort">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($rt as $t) : ?>
                                        <tr class="text-center">
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td>
                                                <?= $t['nama_rt']; ?>
                                            </td>
                                            <td>
                                                <?= $t['no_rt']; ?>
                                            </td>
                                            <td>
                                                <?= $t['no_rw']; ?>
                                            </td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                        <i class="dw dw-more"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#rtdetail<?= $t['id']; ?>"><i class="dw dw-eye"></i> Detail</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#rtubah<?= $t['id']; ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#rthapus<?= $t['id']; ?>"><i class="dw dw-delete-3"></i> Hapus</a>
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
            </div>
                <!---------------------------Batas Data Table RT--------------------------------------->

                <!------------------------------------------------------------------------------------->
            <div class="row">
                <!--------------------------Data Tabel RW---------------------------------------------->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-50-p">
                        <h5 class="h4">
                            <a class="text-primary">
                                <i class="fa fa-users" aria-hidden="true"></i> Tabel Data RW
                            </a>
                        </h5>
                        <h5 class="h4">
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#rwtambah">
                                <i class="icon-copy fa fa-plus-square" aria-hidden="true"></i>
                            </a>
                        </h5>
                        <!-- Simple Datatable start -->
                        <div class="table-responsive table-hover">
                            <table class="table table-bordered " id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center text-white bg-info">
                                        <th class="text-center" width="5">No</th>
                                        <th class="text-center">Nama RW</th>
                                        <th class="text-center">No RW</th>
                                        <th class="text-center" width="5">Action</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="text-center text-white bg-info">
                                        <th class="text-center" width="5">No</th>
                                        <th class="text-center">Nama RW</th>
                                        <th class="text-center">No RW</th>
                                        <th class="text-center" width="5">Action</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($rw as $w) : ?>
                                        <tr class="text-center">
                                            <td scape="row">
                                                <?= $i; ?>
                                            </td>
                                            <td><?= $w['nama_rw']; ?></td>
                                            <td><?= $w['no_rw']; ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                        <i class="dw dw-more"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-left dropdown-menu-icon-list">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#rwdetail<?= $w['id']; ?>"><i class="dw dw-eye"></i> Detail</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#rwubah<?= $w['id']; ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#rwhapus<?= $w['id']; ?>"><i class="dw dw-delete-3"></i> Hapus</a>
                                                    </div>
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Simple Datatable End -->
                    </div>
                </div>
                <!------------------------------Batas Tabel RW ---------------------------------------->
            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>


<!----------------Modal RT-------------------------------------------------------------------------------------------------->

<!-- Modal tambah RT-->
<div class="modal fade" id="rttambah" tabindex="-1" aria-labelledby="rttambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rttambahLabel">Tambah Data RT</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('info/rttambah'); ?>" method="POST">
                <div class="modal-body modal-lg">
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="nama_rt">Nama Rt</label>
                                <input type="text" class="form-control" id="nama_rt" name="nama_rt" placeholder="Nama Rt" value="<?= set_value('nama_rt'); ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="no_rt">No Rt</label>
                                <input type="number" class="form-control" id="no_rt" name="no_rt" placeholder="No Rt" value="<?= set_value('no_rt'); ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="no_rw_id">No RW</label>
                                <select id="no_rw_id" name="no_rw_id" class="form-control">
                                    <option value="">No RW</option>
                                    <?php foreach ($rw as $w) : ?>
                                        <option value="<?= $w['id']; ?>">
                                            <?= $w['no_rw']; ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                    <option value="">Pilih Jenis Kelamin</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="pendidikan_id">Pendidikan</label>
                                <select id="pendidikan_id" name="pendidikan_id" class="form-control">
                                    <option value="">Pilih Pendidikan</option>
                                    <?php foreach ($pendidikan as $p) : ?>
                                        <option value="<?= $p['id']; ?>">
                                            <?= $p['pendidikan']; ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="no_telephone">No Telephone</label>
                                <input type="number" class="form-control" id="no_telephone" name="no_telephone" placeholder="No Telephone" value="<?= set_value('no_telephone'); ?>" required oninvalid="this.setCustomValidity('daata tidak boleh kosong!')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat" value="<?= set_value('alamat'); ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')"></textarea>
                            </div>
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
<!-- Bata Modal Tambah RT -->

<!-- Modal Ubah RT-->
<?php $i = 0;
foreach ($rt as $t) : $i++ ?>
    <div class="modal fade" id="rtubah<?= $t['id']; ?>" tabindex="-1" aria-labelledby="rtubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtubahLabel">Ubah Data RT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('info/rtubah'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $t['id']; ?>">
                    <div class="modal-body modal-lg">
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_rt">Nama Rt</label>
                                    <input type="text" class="form-control" id="nama_rt" name="nama_rt" placeholder="Nama Rt" value="<?= $t['nama_rt']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No Rt</label>
                                    <input type="number" class="form-control" id="no_rt" name="no_rt" placeholder="No Rt" value="<?= $t['no_rt']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw_id">No RW</label>
                                    <select id="no_rw_id" name="no_rw_id" class="form-control">
                                        <option value="<?= $t['no_rw_id']; ?>"><?= $t['no_rw']; ?></option>
                                        <?php foreach ($rw as $w) : ?>
                                            <option value="<?= $w['id']; ?>">
                                                <?= $w['no_rw']; ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option value="<?= $t['jenis_kelamin']; ?>"><?= $t['jenis_kelamin']; ?></option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pendidikan_id">Pendidikan</label>
                                    <select id="pendidikan_id" name="pendidikan_id" class="form-control">
                                        <option value="<?= $t['pendidikan_id']; ?>"><?= $t['pendidikan']; ?></option>
                                        <?php foreach ($pendidikan as $p) : ?>
                                            <option value="<?= $p['id']; ?>">
                                                <?= $p['pendidikan']; ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_telephone">No Telephone</label>
                                    <input type="number" class="form-control" id="no_telephone" name="no_telephone" placeholder="no_telephone" value="<?= $t['no_telephone']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?= $t['alamat']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- batasan Ubah RT -->

<!-- Modal detail RT-->
<?php $i = 0;
foreach ($rt as $t) : $i++ ?>
    <div class="modal fade" id="rtdetail<?= $t['id']; ?>" tabindex="-1" aria-labelledby="rtdetailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rtdetailLabel">Detail Data RT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <input type="hidden" name="id" id="id" value="<?= $t['id']; ?>">
                <div class="modal-body modal-lg">
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="nama_rt">Nama Rt</label>
                                <input type="text" class="form-control" value="<?= $t['nama_rt']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="no_rt">No Rt</label>
                                <input type="number" class="form-control" value="<?= $t['no_rt']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="no_rw">No Rw</label>
                                <input type="number" class="form-control" value="<?= $t['no_rw']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                <input type="text" class="form-control" value="<?= $t['jenis_kelamin']; ?>" readonly>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="pendidikan_id">Pendidikan</label>
                                <input type="text" class="form-control" value="<?= $t['pendidikan']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="no_telephone">No Telephone</label>
                                <input type="number" class="form-control" value="<?= $t['no_telephone']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="alamat">Alamat</label>
                                <input type="text" class="form-control" value="<?= $t['alamat']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- batasan detail RT -->

<!-- Modal Hapus RT Data-->
<?php $i = 0;
foreach ($rt as $t) : $i++ ?>
    <div class="modal fade" id="rthapus<?= $t['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="rthapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="useractivehapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('info/rthapus'); ?>" method="POST">
                    <input type="hidden" name="id" class="id">
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?= base_url('info/rthapus/') . $t['id']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal RT Hapus -->



<!------------------Batas Modal RT---------------------------------------------------------------------------------------------------->

<!----------------Modal RW-------------------------------------------------------------------------------------------------->

<!-- Modal tambah RW-->
<div class="modal fade" id="rwtambah" tabindex="-1" aria-labelledby="rwtambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="rwtambahLabel">Tambah Data RW</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('info/rwtambah'); ?>" method="POST">
                <div class="modal-body modal-lg">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nama_rw">Nama Rw</label>
                                <input type="text" class="form-control" id="nama_rw" name="nama_rw" placeholder="Nama Rw" value="<?= set_value('nama_rw'); ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="no_rw">No Rw</label>
                                <input type="number" class="form-control" id="no_rw" name="no_rw" placeholder="No Rw" value="<?= set_value('no_rw'); ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                    <option value="">Jenis Kelamin</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="pendidikan_id">Pendidikan</label>
                                <select id="pendidikan_id" name="pendidikan_id" class="form-control">
                                    <option value="">Pilih Pendidikan</option>
                                    <?php foreach ($pendidikan as $p) : ?>
                                        <option value="<?= $p['id']; ?>">
                                            <?= $p['pendidikan']; ?>
                                        </option>
                                    <?php endforeach ?>
                                </select>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="no_telephone">No Telephone</label>
                                <input type="number" class="form-control" id="no_telephone" name="no_telephone" placeholder="No telephone" value="<?= set_value('no_telephone'); ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')">
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="alamat">Alamat</label>
                                <textarea class="form-control" id="alamat" name="alamat" placeholder="Masukan alamat" value="<?= set_value('alamat'); ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')"></textarea>
                            </div>
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
<!-- Bata Modal Tambah RW -->

<!-- Modal Ubah RW-->
<?php $i = 0;
foreach ($rw as $w) : $i++ ?>
    <div class="modal fade" id="rwubah<?= $w['id']; ?>" tabindex="-1" aria-labelledby="rwubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="rwubahLabel">Ubah Data RT</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('info/rwubah'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $w['id']; ?>">
                    <div class="modal-body modal-lg">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_rw">Nama RW</label>
                                    <input type="text" class="form-control" id="nama_rw" name="nama_rw" placeholder="Nama RW" value="<?= $w['nama_rw']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <input type="number" class="form-control" id="no_rw" name="no_rw" placeholder="No RW" value="<?= $w['no_rw']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option value="<?= $w['jenis_kelamin']; ?>"><?= $w['jenis_kelamin']; ?></option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pendidikan_id">Pendidikan</label>
                                    <select id="pendidikan_id" name="pendidikan_id" class="form-control">
                                        <option value="<?= $w['pendidikan_id']; ?>">Ubah</option>
                                        <?php foreach ($pendidikan as $p) : ?>
                                            <option value="<?= $p['id']; ?>">
                                                <?= $p['pendidikan']; ?>
                                            </option>
                                        <?php endforeach ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_telephone">No Telephone</label>
                                    <input type="number" class="form-control" id="no_telephone" name="no_telephone" placeholder="no_telephone" value="<?= $w['no_telephone']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <input type="text" class="form-control" id="alamat" name="alamat" placeholder="alamat" value="<?= $w['alamat']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong!')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- batasan Ubah RT -->

<!------------------Batas Modal RW---------------------------------------------------------------------------------------------------->