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
                                <li class="breadcrumb-item">Data</li>
                                <li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?= $this->session->flashdata('message'); ?>
            <?= form_error('no_kk', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('nik', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('kode_pos', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>


            <!-- Simple Datatable start -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 card-box">
                        <h5 class="h4 text-blue mb-20">Data Penduduk</h5>
                        <!--
                        <a href="" class="btn btn-danger">
                            <i class="fa fa-file-pdf-o"></i>
                        </a>
                        -->
                        <div class="tab">
                            <ul class="nav nav-tabs customtab" role="tablist">
                                <li class="nav-item">
                                    <a class="nav-link active" data-toggle="tab" href="#tambah" role="tab" aria-selected="true">Tambah Data</a>
                                </li>
                                <li class="nav-item">
                                    <a class="nav-link" data-toggle="tab" href="#table" role="tab" aria-selected="false">Tabel Penduduk</a>
                                </li>
                            </ul>
                            <div class="tab-content">
                                <div class="tab-pane fade show active" id="tambah" role="tabpanel">
                                    <form action="<?= base_url('data/penduduk_tambah'); ?>" method="POST">
                                        <div class="pd-20">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nokk">Apakah membawa kartu keluarga ?</label> 
                                                        <select id="ddlPassport" onchange="ShowHideDiv()" class="form-control">
                                                            <option value="N">Tidak</option>
                                                            <option value="Y">Iya</option>
                                                        </select>                                                    
                                                    </div>
                                                </div>
                                                <div class="col-lg-8">
                                                    <div class="form-group" id="dvPassport" style="display: none">
                                                        <label class="form-control-label text-blue" for="nokk">Inputkan Nomor Kartu Keluarga Jika Membawa Kartu Keluarga</label>
                                                        <input type="number" class="form-control text-dark" id="nokk" name="nokk" value="<?= set_value('nokk') ?>" placeholder="Nomor KK">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik">Nik</label>
                                                        <input type="number" class="form-control text-dark" id="nik" name="nik" value="<?= set_value('nik') ?>" placeholder="Nomor Nik" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama" name="nama" value="<?= set_value('nama') ?>"  placeholder="Nama" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir" name="tempat_lahir" value="<?= set_value('tempat_lahir') ?>" placeholder="Tempat lahir" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir" name="tanggal_lahir" value="<?= set_value('tanggal_lahir') ?>" placeholder="Tanggal lahir" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin') ?>"><?= set_value('jenis_kelamin') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                        <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama">Agama</label>
                                                        <select id="agama" name="agama" class="form-control">
                                                            <option value="<?= set_value('agama') ?>"><?= set_value('agama') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara">Warga Negara</label>
                                                        <select id="warga_negara" name="warga_negara" class="form-control">
                                                            <option value="<?= set_value('warga_negara') ?>"><?= set_value('warga_negara') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                        <?= form_error('warga_negara', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir') ?>"><?= set_value('pendidikan_terakhir') ?></option>
                                                            <option>Tidak Sekolah</option>
                                                            <option>SD</option>
                                                            <option>SMP</option>
                                                            <option>SMA/SMK</option>
                                                            <option>Strata 1</option>
                                                            <option>Strata 2</option>
                                                            <option>Strata 3</option>
                                                        </select>
                                                        <?= form_error('pendidikan_terakhir', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                                        <select id="pekerjaan" name="pekerjaan" class="form-control">
                                                            <option value="<?= set_value('pekerjaan') ?>"><?= set_value('pekerjaan') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin">Status Pernikahan</label>
                                                        <select id="status_kawin" name="status_kawin" class="form-control">
                                                            <option value="<?= set_value('status_kawin') ?>"><?= set_value('status_kawin') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                        <?= form_error('status_kawin', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="alamat">Alamat</label>
                                                        <textarea class="form-control text-dark" name="alamat_penduduk" id="alamat_penduduk" placeholder="Alamat"><?= set_value('alamat_penduduk') ?></textarea>
                                                        <?= form_error('alamat_penduduk', '<small class="text-danger">', '</small>'); ?>
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
                                                        <label class="form-control-label" for="kode_pos">Kode Pos</label>
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
                                                    <th>Nik</th>
                                                    <th>Nama</th>
                                                    <th>Tempat, Tgl Lahir</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th class="datatable-nosort">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($pendudukM as $p) : ?>
                                                    <tr class="text-center">
                                                        <td>
                                                            <?= $i; ?>
                                                        </td>
                                                        <td>
                                                            <?= $p['nik']; ?>
                                                        </td>
                                                        <td>
                                                            <?= ucwords($p['nama']); ?>
                                                        </td>
                                                        <td>
                                                            <?= ucwords($p['tempat_lahir']); ?>, <?=  format_indo(date('Y-m-d', strtotime($p['tanggal_lahir'])));?>
                                                        </td>
                                                        <td>
                                                        <?= $p['jenis_kelamin']; ?>
                                                        </td>

                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                                    <i class="dw dw-more"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail<?= $p['id']; ?>"><i class="dw dw-eye"></i> Detail</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubah<?= $p['id']; ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#hapus<?= $p['id']; ?>"><i class="dw dw-delete-3"></i> Hapus</a>
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
foreach ($pendudukM as $p) : $i++ ?>
    <div class="modal fade" id="detail<?= $p['id']; ?>" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLabel">Detail Data Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('data/penduduk_detail'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_kk">No KK</label>
                                    <input class="form-control text-dark" value="<?= $p['no_kk']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">Nik</label>
                                    <input class="form-control text-dark" value="<?= $p['nik']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input class="form-control text-dark" value="<?= ucwords($p['nama']); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input class="form-control text-dark" value="<?= ucwords($p['tempat_lahir']); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal lahir</label>
                                    <input class="form-control text-dark" value="<?=  format_indo(date('Y-m-d', strtotime($p['tanggal_lahir'])));?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">jenis_kelamin</label>
                                    <input class="form-control text-dark" value="<?= $p['jenis_kelamin']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama">Agama</label>
                                    <input class="form-control text-dark" value="<?= $p['agama']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="warga_negara">Warga negara</label>
                                    <input class="form-control text-dark" value="<?= $p['warga_negara']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                    <input class="form-control text-dark" value="<?= $p['pendidikan_terakhir']; ?>" readonly>
                                </div>
                            </div>    
                        </div>
                        <div class="row">
                        <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <input class="form-control text-dark" value="<?= $p['pekerjaan']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="status_kawin">Status Pernikahan</label>
                                    <input class="form-control text-dark" value="<?= $p['status_kawin']; ?>" readonly>
                                </div>
                            </div> 
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <textarea class="form-control text-dark" readonly><?= $p['alamat']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <input class="form-control text-dark" value="<?= $p['no_rt']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <input class="form-control text-dark" value="<?= $p['no_rw']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kode_pos">Kode Pos</label>
                                    <input class="form-control text-dark" value="<?= $p['kode_pos']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button type="button" class="btn btn-danger" data-dismiss="modal">Batal</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas detail Tambah -->

<!-- Modal ubah -->
<?php $i = 0;
foreach ($pendudukM as $p) : $i++ ?>
    <div class="modal fade" id="ubah<?= $p['id']; ?>" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahLabel">Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('data/penduduk_ubah'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $p['id']; ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_kk">No KK</label>
                                    <input type="number" class="form-control text-dark" id="no_kk" name="no_kk" value="<?= $p['no_kk']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">Nik</label>
                                    <input type="number" class="form-control text-dark" id="nik" name="nik" value="<?= $p['nik']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input type="text" class="form-control text-dark" id="nama" name="nama" value="<?= ucwords($p['nama']); ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control text-dark" id="tempat_lahir" name="tempat_lahir" value="<?= ucwords($p['tempat_lahir']); ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal lahir</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_lahir" name="tanggal_lahir" value="<?= $p['tanggal_lahir']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option value="<?= $p['jenis_kelamin']; ?>">Ubah</option>
                                        <option>Laki-laki</option>
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
                                        <option value="<?= $p['agama']; ?>">Ubah</option>
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
                                    <label class="form-control-label" for="warga_negara">Warga Negara</label>
                                    <select id="warga_negara" name="warga_negara" class="form-control">
                                        <option value="<?= $p['warga_negara']; ?>">Ubah</option>
                                        <option>WNI</option>
                                        <option>WNA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                    <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                                        <option value="<?= $p['pendidikan_terakhir']; ?>">Ubah</option>
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
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <select id="pekerjaan" name="pekerjaan" class="form-control">
                                        <option value="<?= $p['pekerjaan']; ?>">Ubah</option>
                                        <?php foreach ($pekerjaan as $pk) : ?>
                                            <option value="<?= $pk['pekerjaan']; ?>">
                                                <?= $pk['pekerjaan']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="status_kawin">Status Pernikahan</label>
                                    <select id="status_kawin" name="status_kawin" class="form-control">
                                        <option value="<?= $p['status_kawin']; ?>">Ubah</option>
                                        <option>Belum Menikah</option>
                                        <option>Menikah</option>
                                        <option>Duda</option>
                                        <option>Janda</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <textarea class="form-control text-dark" id="alamat" name="alamat" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')"><?= $p['alamat']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <select id="no_rt" name="no_rt" class="form-control">
                                        <option value="<?= $p['no_rt']; ?>">Ubah</option>
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
                                        <option value="<?= $p['no_rw']; ?>">Ubah</option>
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
                                    <input type="number" class="form-control text-dark" id="kode_pos" name="kode_pos" value="<?= $p['kode_pos']; ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
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
foreach ($pendudukM as $p) : $i++ ?>
    <div class="modal fade" id="hapus<?= $p['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="hapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('data/penduduk_hapus'); ?>" method="POST">
                    <input type="hidden" name="id" class="id">
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?= base_url('data/penduduk_hapus/') . $p['id']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->