<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-vcard-o" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Penduduk</li>
                                <li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <?= $this->session->flashdata('message'); ?>
            <!-- Simple Datatable start -->
            <div class="card-box mb-30">
                <div class="pd-20 text">
                    <a href="" class="btn btn-primary" data-toggle="modal" data-target="#tambah">
                        <i class="icon-copy fa fa-plus-square" aria-hidden="true"></i>
                    </a>
                </div>
                <div class="pb-20">
                    <table class="data-table table stripe hover nowrap">
                        <thead>
                            <tr class="text-center text-white bg-info">
                                <th class="table-plus datatable-nosort">No</th>
                                <th>Nik</th>
                                <th>Nama</th>
                                <th>Tempat Lahir</th>
                                <th>Tanggal Lahir</th>
                                <th>Alamat</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            <?php $i = 1; ?>
                            <?php foreach ($data_perektp as $ektp) : ?>
                                <tr class="text-center">
                                    <td>
                                        <?= $i; ?>
                                    </td>
                                    <td>
                                        <?= $ektp->nik ?>
                                    </td>
                                    <td>
                                        <?= $ektp->nama ?>
                                    </td>
                                    <td>
                                        <?= $ektp->tempat_lahir ?>
                                    </td>
                                    <td>
                                        <?= $ektp->tanggal_lahir ?>
                                    </td>
                                    <td>
                                        <?= $ektp->alamat ?>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail<?= $ektp->id ?>"><i class="dw dw-eye"></i> Detail</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubah<?= $ektp->id ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#hapus<?= $ektp->id ?>"><i class="dw dw-delete-3"></i> Hapus</a>
                                            </div>
                                        </div>
                                    </td>
                                </tr>
                                <?php $i++ ?>
                            <?php endforeach; ?>
                        </tbody>
                        <tfoot>
                            <tr>
                                <td class="table-plus datatable-nosort" colspan="2">Jumlah EKTP</td>
                                <td colspan="5"><?= $count_ektp; ?></td>
                            </tr>
                        </tfoot>
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

<!-- Modal Tambah -->
<div class="modal fade" id="tambah" tabindex="-1" aria-labelledby="tambahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="tambahLabel">Tambah Data Baru</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('penduduk/ktp_tambah'); ?>" method="POST">
                <div class="modal-body">

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nik">Nik</label>
                                <input type="number" class="form-control text-dark" id="nik" name="nik" placeholder="Nomor Nik">
                                <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nama">Nama</label>
                                <input type="text" class="form-control text-dark" id="nama" name="nama" placeholder="Nama">
                                <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>


                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                <input type="text" class="form-control text-dark" id="tempat_lahir" name="tempat_lahir" placeholder="Tempat lahir">
                                <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                <input type="date" class="form-control text-dark" id="tanggal_lahir" name="tanggal_lahir">
                                <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                    <option value="">Jenis Kelamin</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                                <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg">
                            <div class="form-group">
                                <label class="form-control-label" for="alamat">Alamat</label>
                                <textarea class="form-control text-dark" id="alamat" name="alamat"></textarea>
                                <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-2">
                            <div class="form-group">
                                <label class="form-control-label" for="no_rt">No RT</label>
                                <select id="no_rt" name="no_rt" class="form-control">
                                    <option value="">No RT</option>
                                    <?php foreach ($rt as $t) : ?>
                                        <option value="<?= $t['no_rt']; ?>">
                                            <?= $t['no_rt']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('no_rt', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>

                        <div class="col-lg-2">
                            <div class="form-group">
                                <label class="form-control-label" for="no_rw">No RW</label>
                                <select id="no_rw" name="no_rw" class="form-control">
                                    <option value="">No RW</option>
                                    <?php foreach ($rw as $w) : ?>
                                        <option value="<?= $w['no_rw']; ?>">
                                            <?= $w['no_rw']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('no_rw', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="kelurahan">Kelurahan</label>
                                <select id="kelurahan" name="kelurahan" class="form-control">
                                    <option value="">Kelurahan</option>
                                    <?php foreach ($kelurahan as $kel) : ?>
                                        <option value="<?= $kel['kelurahan']; ?>">
                                            <?= $kel['kelurahan']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kelurahan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="kecamatan">Kecamatan</label>
                                <select id="kecamatan" name="kecamatan" class="form-control">
                                    <option value="">Kecamatan</option>
                                    <?php foreach ($kecamatan as $kec) : ?>
                                        <option value="<?= $kec['kecamatan']; ?>">
                                            <?= $kec['kecamatan']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kecamatan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="kabupaten">Kabupaten</label>
                                <select id="kabupaten" name="kabupaten" class="form-control">
                                    <option value="">Kabupaten</option>
                                    <?php foreach ($kabupaten as $kab) : ?>
                                        <option value="<?= $kab['kabupaten']; ?>">
                                            <?= $kab['kabupaten']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('kabupaten', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="provinsi">Provinsi</label>
                                <select id="provinsi" name="provinsi" class="form-control">
                                    <option value="">Provinsi</option>
                                    <?php foreach ($provinsi as $prov) : ?>
                                        <option value="<?= $prov['provinsi']; ?>">
                                            <?= $prov['provinsi']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('provinsi', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>

                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label" for="agama">Agama</label>
                                <select id="agama" name="agama" class="form-control">
                                    <option value="">Agama</option>
                                    <?php foreach ($agama as $aga) : ?>
                                        <option value="<?= $aga['agama']; ?>">
                                            <?= $aga['agama']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label" for="status">Status</label>
                                <select id="status" name="status" class="form-control">
                                    <option value="">Status</option>
                                    <option>Belum Kawin</option>
                                    <option>Kawin</option>
                                </select>
                                <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                <select id="pekerjaan" name="pekerjaan" class="form-control">
                                    <option value="">Pekerjaan</option>
                                    <?php foreach ($pekerjaan as $pek) : ?>
                                        <option value="<?= $pek['pekerjaan']; ?>">
                                            <?= $pek['pekerjaan']; ?>
                                        </option>
                                    <?php endforeach; ?>
                                </select>
                                <?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label" for="warga_negara">Warga Negara</label>
                                <select id="warga_negara" name="warga_negara" class="form-control">
                                    <option value="">Warga Negara</option>
                                    <option>WNI</option>
                                    <option>WNA</option>
                                </select>
                                <?= form_error('warga_negara', '<small class="text-danger">', '</small>'); ?>
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
<!-- Batas Modal Tambah -->

<!-- Modal detail -->
<?php $i = 0;
foreach ($data_perektp as $ektp) : $i++ ?>
    <div class="modal fade" id="detail<?= $ektp->id ?>" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLabel">Detail Data Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('penduduk/ktp_detail'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $ektp->id ?>">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">Nik</label>
                                    <input class="form-control text-dark" value="<?= $ektp->nik ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input class="form-control text-dark" value="<?= $ektp->nama ?>" readonly>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input class="form-control text-dark" value="<?= $ektp->tempat_lahir ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input class="form-control text-dark" value="<?= $ektp->tanggal_lahir ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <input class="form-control text-dark" value="<?= $ektp->jenis_kelamin ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <input class="form-control text-dark" value="<?= $ektp->alamat ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <input class="form-control text-dark" value="<?= $ektp->no_rt ?>" readonly>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <input class="form-control text-dark" value="<?= $ektp->no_rw ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelurahan">Kelurahan</label>
                                    <input class="form-control text-dark" value="<?= $ektp->kelurahan ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kecamatan">Kecamatan</label>
                                    <input class="form-control text-dark" value="<?= $ektp->kecamatan ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kabupaten">Kabupaten</label>
                                    <input class="form-control text-dark" value="<?= $ektp->kabupaten ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="provinsi">Provinsi</label>
                                    <input class="form-control text-dark" value="<?= $ektp->provinsi ?>" readonly>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama">Agama</label>
                                    <input class="form-control text-dark" value="<?= $ektp->agama ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="status">Status</label>
                                    <input class="form-control text-dark" value="<?= $ektp->status ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <input class="form-control text-dark" value="<?= $ektp->pekerjaan ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="warga_negara">Warga Negara</label>
                                    <input class="form-control text-dark" value="<?= $ektp->warga_negara ?>" readonly>
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
foreach ($data_perektp as $ektp) : $i++ ?>
    <div class="modal fade" id="ubah<?= $ektp->id ?>" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahLabel">Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('penduduk/ktp_ubah'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $ektp->id ?>">
                    <div class="modal-body">

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">Nik</label>
                                    <input type="number" class="form-control text-dark" id="nik" name="nik" value="<?= $ektp->nik ?>">
                                    <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input type="text" class="form-control text-dark" id="nama" name="nama" value="<?= $ektp->nama ?>">
                                    <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>


                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control text-dark" id="tempat_lahir" name="tempat_lahir" value="<?= $ektp->tempat_lahir ?>">
                                    <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_lahir" name="tanggal_lahir" value="<?= $ektp->tanggal_lahir ?>">
                                    <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option value="<?= $ektp->jenis_kelamin ?>"><?= $ektp->nik ?></option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                    <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <textarea class="form-control text-dark" id="alamat" name="alamat"><?= $ektp->alamat ?></textarea>
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <select id="no_rt" name="no_rt" class="form-control">
                                        <option value="<?= $ektp->no_rt ?>"><?= $ektp->no_rt ?></option>
                                        <?php foreach ($rt as $t) : ?>
                                            <option value="<?= $t['no_rt']; ?>">
                                                <?= $t['no_rt']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('no_rt', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>

                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <select id="no_rw" name="no_rw" class="form-control">
                                        <option value="<?= $ektp->no_rw ?>"><?= $ektp->no_rw ?></option>
                                        <?php foreach ($rw as $w) : ?>
                                            <option value="<?= $w['no_rw']; ?>">
                                                <?= $w['no_rw']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('no_rw', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelurahan">Kelurahan</label>
                                    <select id="kelurahan" name="kelurahan" class="form-control">
                                        <option value="<?= $ektp->kelurahan ?>"><?= $ektp->kelurahan ?></option>
                                        <?php foreach ($kelurahan as $kel) : ?>
                                            <option value="<?= $kel['kelurahan']; ?>">
                                                <?= $kel['kelurahan']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kelurahan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kecamatan">Kecamatan</label>
                                    <select id="kecamatan" name="kecamatan" class="form-control">
                                        <option value="<?= $ektp->kecamatan ?>"><?= $ektp->kecamatan ?></option>
                                        <?php foreach ($kecamatan as $kec) : ?>
                                            <option value="<?= $kec['kecamatan']; ?>">
                                                <?= $kec['kecamatan']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kecamatan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kabupaten">Kabupaten</label>
                                    <select id="kabupaten" name="kabupaten" class="form-control">
                                        <option value="<?= $ektp->kabupaten ?>"><?= $ektp->kabupaten ?></option>
                                        <?php foreach ($kabupaten as $kab) : ?>
                                            <option value="<?= $kab['kabupaten']; ?>">
                                                <?= $kab['kabupaten']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kabupaten', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="provinsi">Provinsi</label>
                                    <select id="provinsi" name="provinsi" class="form-control">
                                        <option value="<?= $ektp->provinsi ?>"><?= $ektp->provinsi ?></option>
                                        <?php foreach ($provinsi as $prov) : ?>
                                            <option value="<?= $prov['provinsi']; ?>">
                                                <?= $prov['provinsi']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('provinsi', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama">Agama</label>
                                    <select id="agama" name="agama" class="form-control">
                                        <option value="<?= $ektp->agama ?>"><?= $ektp->agama ?></option>
                                        <?php foreach ($agama as $aga) : ?>
                                            <option value="<?= $aga['agama']; ?>">
                                                <?= $aga['agama']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('agama', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="status">Status</label>
                                    <select id="status" name="status" class="form-control">
                                        <option value="<?= $ektp->status ?>"><?= $ektp->status ?></option>
                                        <option>Belum Kawin</option>
                                        <option>Kawin</option>
                                    </select>
                                    <?= form_error('status', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <select id="pekerjaan" name="pekerjaan" class="form-control">
                                        <option value="<?= $ektp->pekerjaan ?>"><?= $ektp->pekerjaan ?></option>
                                        <?php foreach ($pekerjaan as $pek) : ?>
                                            <option value="<?= $pek['pekerjaan']; ?>">
                                                <?= $pek['pekerjaan']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('pekerjaan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="warga_negara">Warga Negara</label>
                                    <select id="warga_negara" name="warga_negara" class="form-control">
                                        <option value="<?= $ektp->warga_negara ?>"><?= $ektp->warga_negara ?></option>
                                        <option>WNI</option>
                                        <option>WNA</option>
                                    </select>
                                    <?= form_error('warga_negara', '<small class="text-danger">', '</small>'); ?>
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
foreach ($data_perektp as $ektp) : $i++ ?>
    <div class="modal fade" id="hapus<?= $ektp->id ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="hapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('penduduk/ktp_hapus'); ?>" method="POST">
                    <input type="hidden" name="id" class="id">
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?= base_url('penduduk/ktp_hapus/') . $ektp->id ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->