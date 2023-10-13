<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">

            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-envelope" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Layanan</li>
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
                                <th>No KK</th>
                                <th>Nik</th>
                                <th>Kepala Keluarga</th>
                                <th>Alamat</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </thead>
                        <tfoot>
                            <tr class="text-center text-white bg-info">
                                <th class="table-plus datatable-nosort">No</th>
                                <th>No KK</th>
                                <th>Nik</th>
                                <th>Kepala Keluarga</th>
                                <th>Alamat</th>
                                <th class="datatable-nosort">Action</th>
                            </tr>
                        </tfoot>
                        <tbody>

                            <?php $i = 1; ?>
                            <?php foreach ($data_perkk as $kk) : ?>
                                <tr class="text-center">
                                    <td>
                                        <?= $i; ?>
                                    </td>
                                    <td>
                                        <?= $kk->no_kk ?>
                                    </td>
                                    <td>
                                        <?= $kk->nik_kepala_keluarga ?>
                                    </td>
                                    <td>
                                        <?= $kk->nama_kepala_keluarga ?>
                                    </td>
                                    <td>
                                        <?= $kk->alamat ?>
                                    </td>
                                    <td>
                                        <div class="dropdown">
                                            <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                <i class="dw dw-more"></i>
                                            </a>
                                            <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                <a class="dropdown-item" href="<?= base_url('layanan/kelahiran_print/') . $kk->id ?>" target="_blank"><i class="dw dw-print"></i> Print</a>
                                                <a class="dropdown-item" href="<?= base_url('layanan/kelahiran_pdf/') . $kk->id ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> Pdf</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail<?= $kk->id ?>"><i class="dw dw-eye"></i> Detail</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubah<?= $kk->id ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                <a class="dropdown-item" href="#" data-toggle="modal" data-target="#hapus<?= $kk->id ?>"><i class="dw dw-delete-3"></i> Hapus</a>
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
            <form action="<?= base_url('layanan/kelahiran_tambah'); ?>" method="POST">
                <div class="modal-body">
                    <div class="row">
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="no_kk">No KK</label>
                                <input type="number" class="form-control text-dark" id="no_kk" name="no_kk" placeholder="Nomor KK">
                                <?= form_error('no_kk', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-6">
                            <div class="form-group">
                                <label class="form-control-label" for="nik_kepala_keluarga">Nik Ayah</label>
                                <input type="number" class="form-control text-dark" id="nik_kepala_keluarga" name="nik_kepala_keluarga" placeholder="Nik Ayah">
                                <?= form_error('nik_kepala_keluarga', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="nama_kepala_keluarga">Nama Ayah</label>
                                <input type="text" class="form-control text-dark" id="nama_kepala_keluarga" name="nama_kepala_keluarga" placeholder="Nama Ayah">
                                <?= form_error('nama_kepala_keluarga', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="nama_istri">Nama Ibu</label>
                                <input type="text" class="form-control text-dark" id="nama_istri" name="nama_istri" placeholder="Nama Ibu">
                                <?= form_error('nama_istri', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="form-group">
                                <label class="form-control-label" for="nama_anak">Nama Anak</label>
                                <input type="text" class="form-control text-dark" id="nama_anak" name="nama_anak" placeholder="Nama Anak">
                                <?= form_error('nama_anak', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label" for="tempat_lahir_anak">Tempat Lahir Anak</label>
                                <input type="text" class="form-control text-dark" id="tempat_lahir_anak" name="tempat_lahir_anak" placeholder="Tempat Lahir">
                                <?= form_error('tempat_lahir_anak', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label" for="tanggal_lahir_anak">Tanggal Lahir Anak</label>
                                <input type="date" class="form-control text-dark" id="tanggal_lahir_anak" name="tanggal_lahir_anak">
                                <?= form_error('tanggal_lahir_anak', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label" for="jenis_kelamin_anak">Jenis Kelamin</label>
                                <select id="jenis_kelamin_anak" name="jenis_kelamin_anak" class="form-control">
                                    <option value="">Jenis Kelamin</option>
                                    <option>Laki-laki</option>
                                    <option>Perempuan</option>
                                </select>
                                <?= form_error('jenis_kelamin_anak', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                        <div class="col-lg-3">
                            <div class="form-group">
                                <label class="form-control-label" for="anak_ke">Anak Ke</label>
                                <input type="number" class="form-control text-dark" id="anak_ke" name="anak_ke" placeholder="Anak Ke">
                                <?= form_error('anak_ke', '<small class="text-danger">', '</small>'); ?>
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
                        <div class="col-lg-4">
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
                        <div class="col-lg-4">
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
                                <label class="form-control-label" for="no_kk">Kode Pos</label>
                                <input type="number" class="form-control text-dark" id="kode_pos" name="kode_pos" placeholder="Kode Pos">
                                <?= form_error('kode_pos', '<small class="text-danger">', '</small>'); ?>
                            </div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-lg-6">
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
                        <div class="col-lg-6">
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
foreach ($data_perkk as $kk) : $i++ ?>
    <div class="modal fade" id="detail<?= $kk->id ?>" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLabel">Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('layanan/kelahiran_detail'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $kk->id ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_kk">No KK</label>
                                    <input class="form-control text-dark" value="<?= $kk->no_kk ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_kepala_keluarga">Nik</label>
                                    <input class="form-control text-dark" value="<?= $kk->nik_kepala_keluarga ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_kepala_keluarga">Nama Ayah</label>
                                    <input class="form-control text-dark" value="<?= $kk->nama_kepala_keluarga ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_istri">Nama Ibu</label>
                                    <input class="form-control text-dark" value="<?= $kk->nama_istri ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_anak">Nama Anak</label>
                                    <input class="form-control text-dark" value="<?= $kk->nama_anak ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir_anak">Tempat Lahir Anak</label>
                                    <input class="form-control text-dark" value="<?= $kk->tempat_lahir_anak ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir_anak">Tanggal Lahir Anak</label>
                                    <input type="date" class="form-control text-dark" value="<?= $kk->tanggal_lahir_anak ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin_anak">Jenis Kelamin Anak</label>
                                    <input class="form-control text-dark" value="<?= $kk->jenis_kelamin_anak ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="anak_ke">Anak Ke</label>
                                    <input class="form-control text-dark" value="<?= $kk->anak_ke ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <input class="form-control text-dark" value="<?= $kk->alamat ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <input class="form-control text-dark" value="<?= $kk->no_rt ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <input class="form-control text-dark" value="<?= $kk->no_rw ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kode_pos">Kode Pos</label>
                                    <input class="form-control text-dark" value="<?= $kk->kode_pos ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelurahan">Kelurahan</label>
                                    <input class="form-control text-dark" value="<?= $kk->kelurahan ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kecamatan">Kecamatan</label>
                                    <input class="form-control text-dark" value="<?= $kk->kecamatan ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kabupaten">Kabupaten</label>
                                    <input class="form-control text-dark" value="<?= $kk->kabupaten ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="provinsi">Provinsi</label>
                                    <input class="form-control text-dark" value="<?= $kk->provinsi ?>" readonly>
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
foreach ($data_perkk as $kk) : $i++ ?>
    <div class="modal fade" id="ubah<?= $kk->id ?>" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahLabel">Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('layanan/kelahiran_ubah'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $kk->id ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_kk">No KK</label>
                                    <input type="number" class="form-control text-dark" id="no_kk" name="no_kk" value="<?= $kk->no_kk ?>">
                                    <?= form_error('no_kk', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_kepala_keluarga">Nik Ayah</label>
                                    <input type="number" class="form-control text-dark" id="nik_kepala_keluarga" name="nik_kepala_keluarga" value="<?= $kk->nik_kepala_keluarga ?>">
                                    <?= form_error('nik_kepala_keluarga', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_kepala_keluarga">Nama Ayah</label>
                                    <input type="text" class="form-control text-dark" id="nama_kepala_keluarga" name="nama_kepala_keluarga" value="<?= $kk->nama_kepala_keluarga ?>">
                                    <?= form_error('nama_kepala_keluarga', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_istri">Nama Ibu</label>
                                    <input type="text" class="form-control text-dark" id="nama_istri" name="nama_istri" value="<?= $kk->nama_istri ?>">
                                    <?= form_error('nama_istri', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_anak">Nama Anak</label>
                                    <input type="text" class="form-control text-dark" id="nama_anak" name="nama_anak" value="<?= $kk->nama_anak ?>">
                                    <?= form_error('nama_anak', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir_anak">Tempat Lahir Anak</label>
                                    <input type="text" class="form-control text-dark" id="tempat_lahir_anak" name="tempat_lahir_anak" value="<?= $kk->tempat_lahir_anak ?>">
                                    <?= form_error('tempat_lahir_anak', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir_anak">Tanggal Lahir Anak</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_lahir_anak" name="tanggal_lahir_anak" value="<?= $kk->tanggal_lahir_anak ?>">
                                    <?= form_error('tanggal_lahir_anak', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin_anak">Jenis Kelamin Anak</label>
                                    <select id="jenis_kelamin_anak" name="jenis_kelamin_anak" class="form-control">
                                        <option value="<?= $kk->jenis_kelamin_anak ?>"><?= $kk->jenis_kelamin_anak ?></option>
                                        <option>Laki-laki</option>
                                        <option>Perempuan</option>
                                    </select>
                                    <?= form_error('jenis_kelamin_anak', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="anak_ke">Anak Ke</label>
                                    <input type="text" class="form-control text-dark" id="anak_ke" name="anak_ke" value="<?= $kk->anak_ke ?>">
                                    <?= form_error('anak_ke', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <textarea class="form-control text-dark" id="alamat" name="alamat"><?= $kk->alamat ?></textarea>
                                    <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <select id="no_rt" name="no_rt" class="form-control">
                                        <option value="<?= $kk->no_rt ?>"><?= $kk->no_rt ?></option>
                                        <?php foreach ($rt as $t) : ?>
                                            <option value="<?= $t['no_rt']; ?>">
                                                <?= $t['no_rt']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('no_rt', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <select id="no_rw" name="no_rw" class="form-control">
                                        <option value="<?= $kk->no_rw ?>"><?= $kk->no_rw ?></option>
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
                                    <label class="form-control-label" for="kode_pos">Kode Pos</label>
                                    <input type="number" class="form-control text-dark" id="kode_pos" name="kode_pos" value="<?= $kk->kode_pos ?>">
                                    <?= form_error('kode_pos', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelurahan">Kelurahan</label>
                                    <select id="kelurahan" name="kelurahan" class="form-control">
                                        <option value="<?= $kk->kelurahan ?>"><?= $kk->kelurahan ?></option>
                                        <?php foreach ($kelurahan as $kel) : ?>
                                            <option value="<?= $kel['kelurahan']; ?>">
                                                <?= $kel['kelurahan']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                    <?= form_error('kelurahan', '<small class="text-danger">', '</small>'); ?>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kecamatan">Kecamatan</label>
                                    <select id="kecamatan" name="kecamatan" class="form-control">
                                        <option value="<?= $kk->kecamatan ?>"><?= $kk->kecamatan ?></option>
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
                                        <option value="<?= $kk->kabupaten ?>"><?= $kk->kabupaten ?></option>
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
                                        <option value="<?= $kk->provinsi ?>"><?= $kk->provinsi ?></option>
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
foreach ($data_perkk as $kk) : $i++ ?>
    <div class="modal fade" id="hapus<?= $kk->id ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="hapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('layanan/kelahiran_hapus'); ?>" method="POST">
                    <input type="hidden" name="id" class="id">
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?= base_url('layanan/kelahiran_hapus/') . $kk->id ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->