<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-address-card" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Pelayanan</li>
                                <li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <?= form_error('no_nik', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('nonik', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('namapenduduk', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('tempatlahir', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('tanggallahir', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('jeniskelamin', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('agamapenduduk', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('pendidikanterakhir', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('statuskawin', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('warganegara', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('pekerjaanpenduduk', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('alamatpenduduk', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('nort', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('norw', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('kodepos', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <!-- Simple Datatable start -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 card-box">
                        <h5 class="h4 text-blue mb-20">Form Surat Keterangan Domisili</h5>
                        <div class="tab">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tambah" role="tab" aria-selected="true">Tambah Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#table" role="tab" aria-selected="false">Daftar Pemohon</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tambah" role="tabpanel">
                                    <form action="<?= base_url('pelayanan/domisili_tambah'); ?>" method="POST">
                                        <div class="pd-20">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pemohon</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_surat">No Surat</label>
                                                        <input type="number" class="form-control text-dark" id="no_surat" name="no_surat" value="<?= set_value('no_surat') ?>" placeholder="Nomor Surat">
                                                        <?= form_error('no_surat', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nonik">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nonik" name="nonik" value="<?= set_value('nonik') ?>" placeholder="Nomor NIK">
                                                        <?= form_error('nonik', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="namapenduduk">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="namapenduduk" name="namapenduduk" value="<?= set_value('namapenduduk') ?>" placeholder="Nama">
                                                        <?= form_error('namapenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempatlahir">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempatlahir" name="tempatlahir" value="<?= set_value('tempatlahir') ?>" placeholder="Tempat lahir">
                                                        <?= form_error('tempatlahir', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggallahir">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggallahir" name="tanggallahir" value="<?= set_value('tanggallahir') ?>" placeholder="Tanggal lahir">
                                                            <?= form_error('tanggallahir', '<small class="text-danger">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jeniskelamin">Jenis Kelamin</label>
                                                        <select id="jeniskelamin" name="jeniskelamin" class="form-control">
                                                            <option value="<?= set_value('jeniskelamin') ?>"><?= set_value('jeniskelamin') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                        <?= form_error('jeniskelamin', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agamapenduduk">Agama</label>
                                                        <select id="agamapenduduk" name="agamapenduduk" class="form-control">
                                                            <option value="<?= set_value('agamapenduduk') ?>"><?= set_value('agamapenduduk') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('agamapenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="statuskawin">Status Pernikahan</label>
                                                        <select id="statuskawin" name="statuskawin" class="form-control">
                                                            <option value="<?= set_value('statuskawin') ?>"><?= set_value('statuskawin') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                        <?= form_error('statuskawin', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warganegara">Warga Negara</label>
                                                        <select id="warganegara" name="warganegara" class="form-control">
                                                            <option value="<?= set_value('warganegara') ?>"><?= set_value('warganegara') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                        <?= form_error('warganegara', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikanterakhir">Pendidikan Terakhir</label>
                                                        <select id="pendidikanterakhir" name="pendidikanterakhir" class="form-control">
                                                            <option value="<?= set_value('pendidikanterakhir') ?>"><?= set_value('pendidikanterakhir') ?></option>
                                                            <option>Tidak Sekolah</option>
                                                            <option>SD</option>
                                                            <option>SMP</option>
                                                            <option>SMA/SMK</option>
                                                            <option>Strata 1</option>
                                                            <option>Strata 2</option>
                                                            <option>Strata 3</option>
                                                        </select>
                                                        <?= form_error('pendidikanterakhir', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaanpenduduk">Pekerjaan</label>
                                                        <select id="pekerjaanpenduduk" name="pekerjaanpenduduk" class="form-control">
                                                            <option value="<?= set_value('pekerjaanpenduduk') ?>"><?= set_value('pekerjaanpenduduk') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('pekerjaanpenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="alamatpenduudk">Alamat</label>
                                                        <textarea type="text" class="form-control text-dark" name="alamatpenduduk" id="alamatpenduduk" value="<?= set_value('alamatpenduduk') ?>" placeholder="Alamat"><?= set_value('alamatpenduduk') ?></textarea>
                                                        <?= form_error('alamatpenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_rt">No RT</label>
                                                        <select id="nort" name="nort" class="form-control">
                                                            <option value="<?= set_value('nort') ?>"><?= set_value('nort') ?></option>
                                                            <?php foreach ($rt as $t) : ?>
                                                                <option value="<?= $t['no_rt']; ?>">
                                                                    <?= $t['no_rt']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('nort', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_rw">No RW</label>
                                                        <select id="norw" name="norw" class="form-control">
                                                            <option value="<?= set_value('norw') ?>"><?= set_value('norw') ?></option>
                                                            <?php foreach ($rw as $w) : ?>
                                                                <option value="<?= $w['no_rw']; ?>">
                                                                    <?= $w['no_rw']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('norw', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="kodepos">Kode Pos</label>
                                                        <input type="number" class="form-control text-dark" id="kodepos" name="kodepos" value="<?= set_value('kodepos') ?>" placeholder="Kode Pos">
                                                        <?= form_error('kodepos', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button type="submit" class="btn btn-primary">Tambah</button>
                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="table" role="tabpanel">
                                    <div class="pd-20">
                                        <table class="data-table table stripe hover nowrap">
                                            <thead>
                                                <tr class="text-center text-white bg-info">
                                                    <th class="table-plus datatable-nosort">No</th>
                                                    <th>NIK</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tempat, Tgl Lahir</th>
                                                    <th>Nama Surat</th>
                                                    <th class="datatable-nosort">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($domisili as $d) : ?>
                                                    <tr class="text-center">
                                                        <td>
                                                            <?= $i ?>
                                                        </td>
                                                        <td>
                                                            <?= $d->nik ?>
                                                        </td>
                                                        <td>
                                                            <?= ucwords($d->nama); ?>
                                                        </td>
                                                        <td>
                                                            <?= $d->jenis_kelamin ?>
                                                        </td>
                                                        <td>
                                                            <?= $d->tempat_lahir ?>, <?= date('d/m/y', strtotime($d->tanggal_lahir)) ?>
                                                        </td>
                                                        <td class="text-green">
                                                            <b><?= $d->nama_surat ?></b>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                                    <i class="dw dw-more"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                                    <a class="dropdown-item" href="<?= base_url('pelayanan/domisili_pdf/') . $d->id; ?>" target="_blank"><i class="dw dw-print"></i> Print/PDF</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail<?= $d->id; ?>"><i class="dw dw-eye"></i> Detail</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubah<?= $d->kode_surat; ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#hapus<?= $d->kode_surat; ?>"><i class="dw dw-delete-3"></i> Hapus</a>
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- Simple Datatable End -->
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>

<!-- Modal detail -->
<?php $i = 0;
foreach ($domisili as $d) : $i++ ?>
    <div class="modal fade" id="detail<?= $d->id ?>" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLabel">Detail Data Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/domisili_detail'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $d->id ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_surat">No Surat</label>
                                    <input type="number" class="form-control text-dark" id="no_surat" name="no_surat" value="<?= $d->no_surat; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">Nik</label>
                                    <input class="form-control text-dark" value="<?= $d->nik ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input class="form-control text-dark" value="<?= $d->nama ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input class="form-control text-dark" value="<?= $d->tempat_lahir ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input class="form-control text-dark" value="<?= date('d/m/y', strtotime($d->tanggal_lahir)); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <input class="form-control text-dark" value="<?= $d->jenis_kelamin ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama">Agama</label>
                                    <input class="form-control text-dark" value="<?= $d->agama ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="warga_negara">Warga Negara</label>
                                    <input class="form-control text-dark" value="<?= $d->warga_negara ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="pendidikanterakhir">Pendidikan Terakhir</label>
                                    <input class="form-control text-dark" value="<?= $d->pendidikan_terakhir ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="status_kawin">Status Kawin</label>
                                    <input class="form-control text-dark" value="<?= $d->status_kawin ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <input class="form-control text-dark" value="<?= $d->pekerjaan ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <textarea type="text" class="form-control text-dark" name="alamatpenduduk" id="alamatpenduduk" readonly><?= $d->alamat ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <input class="form-control text-dark" value="<?= $d->no_rt ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <input class="form-control text-dark" value="<?= $d->no_rw ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kode_pos">Kode Pos</label>
                                    <input class="form-control text-dark" value="<?= $d->kode_pos ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas detail -->

<!-- Modal ubah -->
<?php $i = 0;
foreach ($domisili as $d) : $i++ ?>
    <div class="modal fade" id="ubah<?= $d->kode_surat ?>" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahLabel">Form Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/domisili_ubah'); ?>" method="POST">
                    <input type="hidden" name="kode_surat" id="kode_surat" value="<?= $d->kode_surat ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_surat">No Surat</label>
                                    <input type="number" class="form-control text-dark" id="no_surat" name="no_surat" value="<?= $d->no_surat ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">No NIK</label>
                                    <input type="number" class="form-control text-dark" id="nik" name="nik" value="<?= $d->nik ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-5">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input type="text" class="form-control text-dark" id="nama" name="nama" value="<?= $d->nama ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control text-dark" id="tempat_lahir" name="tempat_lahir" value="<?= $d->tempat_lahir ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_lahir" name="tanggal_lahir" value="<?= $d->tanggal_lahir ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option value="<?= $d->jenis_kelamin ?>"><?= $d->jenis_kelamin ?></option>
                                        <option>Laki - laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama">Agama</label>
                                    <select id="agama" name="agama" class="form-control">
                                        <option value="<?= $d->agama ?>"><?= $d->agama ?></option>
                                        <?php foreach ($agama as $aga) : ?>
                                            <option value="<?= $aga['agama']; ?>">
                                                <?= $aga['agama']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                    <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                                        <option value="<?= $d->pendidikan_terakhir ?>"><?= $d->pendidikan_terakhir ?></option>
                                        <option>Tidak Sekolah</option>
                                        <option>SD</option>
                                        <option>SMP</option>
                                        <option>SMA/SMK</option>
                                        <option>Strata 1</option>
                                        <option>Strata 2</option>
                                        <option>Strata 3</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="warga_negara">Warga Negara</label>
                                    <select id="warga_negara" name="warga_negara" class="form-control">
                                        <option value="<?= $d->warga_negara ?>"><?= $d->warga_negara ?></option>
                                        <option>WNI</option>
                                        <option>WNA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="status_kawin">Status Pernikahan</label>
                                    <select id="status_kawin" name="status_kawin" class="form-control">
                                        <option value="<?= $d->status_kawin ?>"><?= $d->status_kawin ?></option>
                                        <option>Belum Menikah</option>
                                        <option>Menikah</option>
                                        <option>Duda</option>
                                        <option>Janda</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <select id="pekerjaan" name="pekerjaan" class="form-control">
                                        <option value="<?= $d->pekerjaan ?>"><?= $d->pekerjaan ?></option>
                                        <?php foreach ($pekerjaan as $pk) : ?>
                                            <option value="<?= $pk['pekerjaan']; ?>">
                                                <?= $pk['pekerjaan']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <textarea class="form-control text-dark" id="alamat" name="alamat" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')"><?= $d->alamat ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <select id="no_rt" name="no_rt" class="form-control">
                                        <option value="<?= $d->no_rt ?>"><?= $d->no_rt ?></option>
                                        <?php foreach ($rt as $t) : ?>
                                            <option value="<?= $t['no_rt']; ?>">
                                                <?= $t['no_rt']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <select id="no_rw" name="no_rw" class="form-control">
                                        <option value="<?= $d->no_rw ?>"><?= $d->no_rw ?></option>
                                        <?php foreach ($rw as $w) : ?>
                                            <option value="<?= $w['no_rw']; ?>">
                                                <?= $w['no_rw']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kode_pos">Kode Pos</label>
                                    <input type="number" class="form-control text-dark" id="kode_pos" name="kode_pos" value="<?= $d->kode_pos ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
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
<!-- Batas ubah Tambah -->

<!-- Modal Hapus Data-->
<?php $i = 0;
foreach ($domisili as $d) : $i++ ?>
<form action="<?php echo site_url('pelayanan/domisili_hapus'); ?>" method="POST">
    <div class="modal fade" id="hapus<?= $d->kode_surat ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="hapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                    <input type="hidden" name="nik" class="nik" required>
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?php echo site_url('pelayanan/domisili_hapus/') . $d->kode_surat; ?>" class="btn btn-danger">Hapus</a>
                    </div>
            </div>
        </div>
    </div>
</form>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->