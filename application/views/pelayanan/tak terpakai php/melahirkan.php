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
            <?= form_error('nomelahirkan', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('nokk', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('kodepos', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <!-- Simple Datatable start -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 card-box">
                        <h5 class="h4 text-blue mb-20">Surat Keterangan Melahirkan</h5>
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
                                    <form action="<?= base_url('pelayanan/melahirkan_tambah'); ?>" method="POST">
                                        <div class="pd-20">
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_melahirkan">No Surat</label>
                                                        <input type="number" class="form-control text-dark" id="nomelahirkan" name="nomelahirkan" placeholder="Nomor Surat">
                                                        <?= form_error('nomelahirkan', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nokk">No KK</label>
                                                        <input type="number" class="form-control text-dark" id="nokk" name="nokk" placeholder="Nomor KK">
                                                        <?= form_error('nokk', '<small class="text-danger">', '</small>'); ?>
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
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak">Tempat Lahir Anak</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak" name="tempat_lahir_anak" placeholder="Tempat lahir">
                                                        <?= form_error('tempat_lahir_anak', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir Anak</label>
                                                            <input type="time" class="form-control text-dark" id="tanggal_lahir_anak" name="tanggal_lahir_anak" placeholder="Tanggal lahir">
                                                            <?= form_error('tanggal_lahir_anak', '<small class="text-danger">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak">Jenis Kelamin Anak</label>
                                                        <select id="jenis_kelamin_anak" name="jenis_kelamin_anak" class="form-control">
                                                            <option value="">Jenis Kelamin</option>
                                                            <option>LAKI-LAKI</option>
                                                            <option>PEREMPUAN</option>
                                                        </select>
                                                        <?= form_error('jenis_kelamin_anak', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah" name="nama_ayah" placeholder="Nama Ayah">
                                                        <?= form_error('nama_ayah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu" name="nama_ibu" placeholder="Nama Ibu">
                                                        <?= form_error('nama_ibu', '<small class="text-danger">', '</small>'); ?>
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
                                                    <th>No KK</th>
                                                    <th>Nama Anak</th>
                                                    <th>Nama Ayah</th>
                                                    <th>Nama Ibu</th>
                                                    <th class="datatable-nosort">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($melahirkan as $m) : ?>
                                                    <tr class="text-center">
                                                        <td>
                                                            <?= $i ?>
                                                        </td>
                                                        <td>
                                                            <?= $m->no_kk ?>
                                                        </td>
                                                        <td>
                                                            <?= $m->nama_anak ?>
                                                        </td>
                                                        <td>
                                                            <?= $m->nama_ayah ?>
                                                        </td>
                                                        <td>
                                                            <?= $m->nama_ibu ?>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                                    <i class="dw dw-more"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                                    <a class="dropdown-item" href="<?= base_url('pelayanan/melahirkan_print/') . $m->id ?>" target="_blank"><i class="dw dw-print"></i> Print</a>
                                                                    <a class="dropdown-item" href="<?= base_url('pelayanan/melahirkan_pdf/') . $m->id ?>" target="_blank"><i class="fa fa-file-pdf-o"></i> Pdf</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail<?= $m->id ?>"><i class="dw dw-eye"></i> Detail</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubah<?= $m->id ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#hapus<?= $m->id ?>"><i class="dw dw-delete-3"></i> Hapus</a>
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
foreach ($melahirkan as $m) : $i++ ?>
    <div class="modal fade" id="detail<?= $m->id ?>" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLabel">Detail Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/melahirkan_detail'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $m->id ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_melahirkan">No Surat</label>
                                    <input class="form-control text-dark" value="<?= $m->no_melahirkan ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">No KK</label>
                                    <input class="form-control text-dark" value="<?= $m->no_kk ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama Anak</label>
                                    <input class="form-control text-dark" value="<?= $m->nama_anak ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir_anak">Tempat Lahir Anak</label>
                                    <input class="form-control text-dark" value="<?= $m->tempat_lahir_anak ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir_anak">Tanggal Lahir Anak</label>
                                    <input class="form-control text-dark" value="<?= date('d/m/y', strtotime($m->tanggal_lahir_anak)); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin_anak">Jenis Kelamin Anak</label>
                                    <input class="form-control text-dark" value="<?= $m->jenis_kelamin_anak ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama Ayah</label>
                                    <input class="form-control text-dark" value="<?= $m->nama_ayah ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama Ibu</label>
                                    <input class="form-control text-dark" value="<?= $m->nama_ibu ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <input class="form-control text-dark" value="<?= $m->alamat ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <input class="form-control text-dark" value="<?= $m->no_rt ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <input class="form-control text-dark" value="<?= $m->no_rw ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kode_pos">Kode Pos</label>
                                    <input class="form-control text-dark" value="<?= $m->kode_pos ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelurahan">Kelurahan</label>
                                    <input class="form-control text-dark" value="<?= $m->kelurahan ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kecamatan">Kecamatan</label>
                                    <input class="form-control text-dark" value="<?= $m->kecamatan ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kabupaten">Kabupaten</label>
                                    <input class="form-control text-dark" value="<?= $m->kabupaten ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="provinsi">Provinsi</label>
                                    <input class="form-control text-dark" value="<?= $m->provinsi ?>" readonly>
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
foreach ($melahirkan as $m) : $i++ ?>
    <div class="modal fade" id="ubah<?= $m->id ?>" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahLabel">Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/melahirkan_ubah'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $m->id ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nomelahirkan">No Surat</label>
                                    <input type="number" class="form-control text-dark" id="nomelahirkan" name="nomelahirkan" value="<?= $m->no_melahirkan ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nokk">No KK</label>
                                    <input type="number" class="form-control text-dark" id="nokk" name="nokk" value="<?= $m->no_kk ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_anak">Nama Anak</label>
                                    <input type="text" class="form-control text-dark" id="nama_anak" name="nama_anak" value="<?= $m->nama_anak ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir_anak">Tempat Lahir Anak</label>
                                    <input type="text" class="form-control text-dark" id="tempat_lahir_anak" name="tempat_lahir_anak" value="<?= $m->tempat_lahir_anak ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir_anak">Tanggal Lahir Anak</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_lahir_anak" name="tanggal_lahir_anak" value="<?= $m->tanggal_lahir_anak ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin_anak">Jenis Kelamin Anak</label>
                                    <select id="jenis_kelamin_anak" name="jenis_kelamin_anak" class="form-control">
                                        <option value="<?= $m->jenis_kelamin_anak ?>"><?= $m->jenis_kelamin_anak ?></option>
                                        <option>LAKI-LAKI</option>
                                        <option>PEREMPUAN</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_ayah">Nama Ayah</label>
                                    <input type="text" class="form-control text-dark" id="nama_ayah" name="nama_ayah" value="<?= $m->nama_ayah ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                                    <input type="text" class="form-control text-dark" id="nama_ibu" name="nama_ibu" value="<?= $m->nama_ibu ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamatpenduduk">Alamat</label>
                                    <textarea class="form-control text-dark" id="alamatpenduduk" name="alamatpenduduk" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')"><?= $m->alamat ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="nort">No RT</label>
                                    <select id="nort" name="nort" class="form-control">
                                        <option value="<?= $m->no_rt ?>"><?= $m->no_rt ?></option>
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
                                    <label class="form-control-label" for="norw">No RW</label>
                                    <select id="norw" name="norw" class="form-control">
                                        <option value="<?= $m->no_rw ?>"><?= $m->no_rw ?></option>
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
                                    <label class="form-control-label" for="kodepos">Kode Pos</label>
                                    <input type="number" class="form-control text-dark" id="kodepos" name="kodepos" value="<?= $m->kode_pos ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kelurahanpenduduk">Kelurahan</label>
                                    <select id="kelurahanpenduduk" name="kelurahanpenduduk" class="form-control">
                                        <option value="<?= $m->kelurahan ?>"><?= $m->kelurahan ?></option>
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
                                    <label class="form-control-label" for="kecamatanpenduduk">Kecamatan</label>
                                    <select id="kecamatanpenduduk" name="kecamatanpenduduk" class="form-control">
                                        <option value="<?= $m->kecamatan ?>"><?= $m->kecamatan ?></option>
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
                                    <label class="form-control-label" for="kabupatenpenduduk">Kabupaten</label>
                                    <select id="kabupatenpenduduk" name="kabupatenpenduduk" class="form-control">
                                        <option value="<?= $m->kabupaten ?>"><?= $m->kabupaten ?></option>
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
                                    <label class="form-control-label" for="provinsipenduduk">Provinsi</label>
                                    <select id="provinsipenduduk" name="provinsipenduduk" class="form-control">
                                        <option value="<?= $m->provinsi ?>"><?= $m->provinsi ?></option>
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
<!-- Batas ubah data -->

<!-- Modal Hapus Data-->
<?php $i = 0;
foreach ($melahirkan as $m) : $i++ ?>
    <div class="modal fade" id="hapus<?= $m->id ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="hapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/melahirkan_hapus'); ?>" method="POST">
                    <input type="hidden" name="id" class="id">
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?= base_url('pelayanan/melahirkan_hapus/') . $m->id ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->