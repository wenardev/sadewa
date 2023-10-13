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
            <?= form_error('no_spektp', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('nonik', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('kode_pos', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <!-- Simple Datatable start -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 card-box">
                        <h5 class="h4 text-blue mb-20">Surat Pengantar EKTP</h5>
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
                                    <form action="<?= base_url('pelayanan/spektp_tambah'); ?>" method="POST">
                                        <div class="pd-20">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_spektp">No Surat</label>
                                                        <input type="number" class="form-control text-dark" id="nospektp" name="nospektp" placeholder="Nomor Surat">
                                                        <?= form_error('nospektp', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nonik">Nik</label>
                                                        <input type="number" class="form-control text-dark" id="nonik" name="nonik" placeholder="Nomor Nik">
                                                        <?= form_error('nonik', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="namapenduduk">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="namapenduduk" name="namapenduduk" placeholder="Nama">
                                                        <?= form_error('namapenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempatlahir">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempatlahir" name="tempatlahir" placeholder="Tempat lahir">
                                                        <?= form_error('tempatlahir', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggallahir">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggallahir" name="tanggallahir" placeholder="Tanggal lahir">
                                                            <?= form_error('tanggallahir', '<small class="text-danger">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jeniskelamin">Jenis Kelamin</label>
                                                        <select id="jeniskelamin" name="jeniskelamin" class="form-control">
                                                            <option value="">Jenis Kelamin</option>
                                                            <option>LAKI-LAKI</option>
                                                            <option>PEREMPUAN</option>
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
                                                            <option value="">Agama</option>
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
                                                        <label class="form-control-label" for="statuskawin">Status</label>
                                                        <select id="statuskawin" name="statuskawin" class="form-control">
                                                            <option value="">Status Kawin</option>
                                                            <option>BELUM</option>
                                                            <option>KAWIN</option>
                                                        </select>
                                                        <?= form_error('statuskawin', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaanpenduduk">Pekerjaan</label>
                                                        <select id="pekerjaanpenduduk" name="pekerjaanpenduduk" class="form-control">
                                                            <option value="">Pekerjaan</option>
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
                                                        <textarea type="text" class="form-control text-dark" name="alamatpenduduk" id="alamatpenduduk" placeholder="Alamat" style="width:940px;"></textarea>
                                                        <?= form_error('alamatpenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_rt">No RT</label>
                                                        <select id="nort" name="nort" class="form-control">
                                                            <option value="">No RT</option>
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
                                                            <option value="">No RW</option>
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
                                                        <input type="number" class="form-control text-dark" id="kodepos" name="kodepos" placeholder="Kode Pos">
                                                        <?= form_error('kodepos', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="kelurahanpenduduk">Kelurahan</label>
                                                        <select id="kelurahanpenduduk" name="kelurahanpenduduk" class="form-control">
                                                            <option value="">Kelurahan</option>
                                                            <?php foreach ($kelurahan as $kel) : ?>
                                                                <option value="<?= $kel['kelurahan']; ?>">
                                                                    <?= $kel['kelurahan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('kelurahanpenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="kecamatanpenduduk">Kecamatan</label>
                                                        <select id="kecamatanpenduduk" name="kecamatanpenduduk" class="form-control">
                                                            <option value="">Kecamatan</option>
                                                            <?php foreach ($kecamatan as $kec) : ?>
                                                                <option value="<?= $kec['kecamatan']; ?>">
                                                                    <?= $kec['kecamatan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('kecamatanpenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="kabupatenpenduduk">Kabupaten</label>
                                                        <select id="kabupatenpenduduk" name="kabupatenpenduduk" class="form-control">
                                                            <option value="">Kabupaten</option>
                                                            <?php foreach ($kabupaten as $kab) : ?>
                                                                <option value="<?= $kab['kabupaten']; ?>">
                                                                    <?= $kab['kabupaten']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('kabupatenpenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="provinsipenduduk">Provinsi</label>
                                                        <select id="provinsipenduduk" name="provinsipenduduk" class="form-control">
                                                            <option value="">Provinsi</option>
                                                            <?php foreach ($provinsi as $prov) : ?>
                                                                <option value="<?= $prov['provinsi']; ?>">
                                                                    <?= $prov['provinsi']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('provinsipenduduk', '<small class="text-danger">', '</small>'); ?>
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
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tempat Lahir</th>
                                                    <th>Tanggal Lahir</th>
                                                    <th class="datatable-nosort">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($spektp as $s) : ?>
                                                    <tr class="text-center">
                                                        <td>
                                                            <?= $i ?>
                                                        </td>
                                                        <td>
                                                            <?= $s->nik ?>
                                                        </td>
                                                        <td>
                                                            <?= $s->nama ?>
                                                        </td>
                                                        <td>
                                                            <?= $s->jenis_kelamin ?>
                                                        </td>
                                                        <td>
                                                            <?= $s->tempat_lahir ?>
                                                        </td>
                                                        <td>
                                                            <?= date('d/m/y', strtotime($s->tanggal_lahir)) ?>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                                    <i class="dw dw-more"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                                    <a class="dropdown-item" href="<?= base_url('pelayanan/spektp_print/') . $s->id ?>" target="_blank"><i class="dw dw-print"></i> Print</a>
                                                                    <a class="dropdown-item" href="<?= base_url('pelayanan/spektp_pdf/') . $s->id ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> Pdf</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail<?= $s->id ?>"><i class="dw dw-eye"></i> Detail</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubah<?= $s->id ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#hapus<?= $s->id ?>"><i class="dw dw-delete-3"></i> Hapus</a>
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
foreach ($spektp as $s) : $i++ ?>
    <div class="modal fade" id="detail<?= $s->id ?>" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLabel">Detail Data Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/spektp_detail'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $s->id ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_spektp">No Surat</label>
                                    <input class="form-control text-dark" value="<?= $s->no_spektp ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">Nik</label>
                                    <input class="form-control text-dark" value="<?= $s->nik ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input class="form-control text-dark" value="<?= $s->nama ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input class="form-control text-dark" value="<?= $s->tempat_lahir ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input class="form-control text-dark" value="<?= date('d/m/y', strtotime($s->tanggal_lahir)); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <input class="form-control text-dark" value="<?= $s->jenis_kelamin ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama">Agama</label>
                                    <input class="form-control text-dark" value="<?= $s->agama ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="status_kawin">Status Kawin</label>
                                    <input class="form-control text-dark" value="<?= $s->status_kawin ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <input class="form-control text-dark" value="<?= $s->pekerjaan ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <input class="form-control text-dark" value="<?= $s->alamat ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <input class="form-control text-dark" value="<?= $s->no_rt ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <input class="form-control text-dark" value="<?= $s->no_rw ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kode_pos">Kode Pos</label>
                                    <input class="form-control text-dark" value="<?= $s->kode_pos ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelurahan">Kelurahan</label>
                                    <input class="form-control text-dark" value="<?= $s->kelurahan ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kecamatan">Kecamatan</label>
                                    <input class="form-control text-dark" value="<?= $s->kecamatan ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kabupaten">Kabupaten</label>
                                    <input class="form-control text-dark" value="<?= $s->kabupaten ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="provinsi">Provinsi</label>
                                    <input class="form-control text-dark" value="<?= $s->provinsi ?>" readonly>
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
foreach ($spektp as $s) : $i++ ?>
    <div class="modal fade" id="ubah<?= $s->id ?>" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahLabel">Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/spektp_ubah'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $s->id ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_spektp">No Surat</label>
                                    <input type="number" class="form-control text-dark" id="no_spektp" name="no_spektp" value="<?= $s->no_spektp ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">No Nik</label>
                                    <input type="number" class="form-control text-dark" id="nik" name="nik" value="<?= $s->nik ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input type="text" class="form-control text-dark" id="nama" name="nama" value="<?= $s->nama ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control text-dark" id="tempat_lahir" name="tempat_lahir" value="<?= $s->tempat_lahir ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_lahir" name="tanggal_lahir" value="<?= $s->tanggal_lahir ?>" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option value="<?= $s->jenis_kelamin ?>"><?= $s->jenis_kelamin ?></option>
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
                                        <option value="<?= $s->agama ?>"><?= $s->agama ?></option>
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
                                    <label class="form-control-label" for="status_kawin">Status Kawin</label>
                                    <select id="status_kawin" name="status_kawin" class="form-control">
                                        <option value="<?= $s->status_kawin ?>"><?= $s->status_kawin ?></option>
                                        <option>Belum Kawin</option>
                                        <option>Kawin</option>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <select id="pekerjaan" name="pekerjaan" class="form-control">
                                        <option value="<?= $s->pekerjaan ?>"><?= $s->pekerjaan ?></option>
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
                                    <textarea class="form-control text-dark" id="alamat" name="alamat" required oninvalid="this.setCustomValidity('Data Masih Kosong')" oninput="setCustomValidity('')"><?= $s->alamat ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <select id="no_rt" name="no_rt" class="form-control">
                                        <option value="<?= $s->no_rt ?>"><?= $s->no_rt ?></option>
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
                                        <option value="<?= $s->no_rw ?>"><?= $s->no_rw ?></option>
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
                                    <input type="number" class="form-control text-dark" id="kode_pos" name="kode_pos" value="<?= $s->kode_pos ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelurahan">Kelurahan</label>
                                    <select id="kelurahan" name="kelurahan" class="form-control">
                                        <option value="<?= $s->kelurahan ?>"><?= $s->kelurahan ?></option>
                                        <?php foreach ($kelurahan as $kel) : ?>
                                            <option value="<?= $kel['kelurahan']; ?>">
                                                <?= $kel['kelurahan']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kecamatan">Kecamatan</label>
                                    <select id="kecamatan" name="kecamatan" class="form-control">
                                        <option value="<?= $s->kecamatan ?>"><?= $s->kecamatan ?></option>
                                        <?php foreach ($kecamatan as $kec) : ?>
                                            <option value="<?= $kec['kecamatan']; ?>">
                                                <?= $kec['kecamatan']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kabupaten">Kabupaten</label>
                                    <select id="kabupaten" name="kabupaten" class="form-control">
                                        <option value="<?= $s->kabupaten ?>"><?= $s->kabupaten ?></option>
                                        <?php foreach ($kabupaten as $kab) : ?>
                                            <option value="<?= $kab['kabupaten']; ?>">
                                                <?= $kab['kabupaten']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="provinsi">Provinsi</label>
                                    <select id="provinsi" name="provinsi" class="form-control">
                                        <option value="<?= $s->provinsi ?>"><?= $s->provinsi ?></option>
                                        <?php foreach ($provinsi as $prov) : ?>
                                            <option value="<?= $prov['provinsi']; ?>">
                                                <?= $prov['provinsi']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
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
foreach ($spektp as $s) : $i++ ?>
    <div class="modal fade" id="hapus<?= $s->id ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="hapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/spektp_hapus'); ?>" method="POST">
                    <input type="hidden" name="id" class="id">
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?= base_url('pelayanan/spektp_hapus/') . $s->id ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->