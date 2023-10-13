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
            <?= form_error('no_surat', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('no_kk', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
              <?= form_error('telepon', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('alasan_pindah_id', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('klasifikasi_pindah_id', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('jenis_kepindahan_id', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('status_tidak_pindah_id', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('status_pindah_id', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('tanggal_pindah', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('alamat_pindah', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('desa_pindah', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('kecamatan_pindah', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('kabupaten_pindah', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('provinsi_pindah', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('kodepos_pindah', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('telepon_pindah', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('nama_pindah_satu', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('nik_pindah_satu', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <!-- Simple Datatable start -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 card-box">
                        <h5 class="h4 text-blue mb-20">Form Surat Keterangan Pindah Datang</h5>
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
                                    <form action="<?= base_url('pelayanan/sk_pindah_datang_tambah'); ?>" method="POST">
                                        <div class="pd-20">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata (Kepala Keluarga)</b>
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
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kk">No KK</label>
                                                        <input type="number" class="form-control text-dark" id="no_kk" name="no_kk" value="<?= set_value('no_kk') ?>" placeholder="Nomor KK">
                                                        <?= form_error('no_kk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nonik">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nonik" name="nonik" value="<?= set_value('nonik') ?>" placeholder="Nomor NIK">
                                                        <?= form_error('nonik', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
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
                                                <div class="col-lg-3">
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
                                                <div class="col-lg-3">
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="kodepos">Kode Pos</label>
                                                        <input type="number" class="form-control text-dark" id="kodepos" name="kodepos" value="<?= set_value('kodepos') ?>" placeholder="Kode Pos">
                                                        <?= form_error('kodepos', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="telepon">Telepon</label>
                                                        <input type="number" class="form-control text-dark" id="telepon" name="telepon" value="<?= set_value('telepon') ?>" placeholder="Telepon">
                                                        <?= form_error('telepon', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr/>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Keterangan Kepindahan</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="alasan_pindah_id">Alasan Pindah</label>
                                                        <select id="alasan_pindah_id" name="alasan_pindah_id" class="form-control">
                                                            <option value="<?= set_value('alasan_pindah_id') ?>"><?= set_value('alasan_pindah_id') ?></option>
                                                            <?php foreach ($alasan_pindah as $ap) : ?>
                                                                <option value="<?= $ap['id']; ?>">
                                                                    <?= $ap['alasan_pindah']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('alasan_pindah_id', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="lainnya">Sebutkan Jika (Lainnya)</label>
                                                        <input type="text" class="form-control text-dark" id="lainnya" name="lainnya" value="<?= set_value('lainnya') ?>" placeholder="">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="klasifikasi_pindah_id">Klasifikasi Pindah</label>
                                                        <select id="klasifikasi_pindah_id" name="klasifikasi_pindah_id" class="form-control">
                                                            <option value="<?= set_value('klasifikasi_pindah_id') ?>"><?= set_value('klasifikasi_pindah_id') ?></option>
                                                            <?php foreach ($klasifikasi_pindah as $kp) : ?>
                                                                <option value="<?= $kp['id']; ?>">
                                                                    <?= $kp['klasifikasi_pindah']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('klasifikasi_pindah_id', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kepindahan_id">Jenis Kepindah</label>
                                                        <select id="jenis_kepindahan_id" name="jenis_kepindahan_id" class="form-control">
                                                            <option value="<?= set_value('jenis_kepindahan_id') ?>"><?= set_value('jenis_kepindahan_id') ?></option>
                                                            <?php foreach ($jenis_kepindahan as $jk) : ?>
                                                                <option value="<?= $jk['id']; ?>">
                                                                    <?= $jk['jenis_kepindahan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('jenis_kepindahan_id', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_tidak_pindah_id">Status Nomor KK Bagi Yang Tidak Pindah</label>
                                                        <select id="status_tidak_pindah_id" name="status_tidak_pindah_id" class="form-control">
                                                            <option value="<?= set_value('status_tidak_pindah_id') ?>"><?= set_value('status_tidak_pindah_id') ?></option>
                                                            <?php foreach ($status_tidak_pindah as $stp) : ?>
                                                                <option value="<?= $stp['id']; ?>">
                                                                    <?= $stp['status_tidak_pindah']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('status_tidak_pindah_id', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_pindah_id">Status Nomor KK Bagi Yang Pindah</label>
                                                        <select id="status_pindah_id" name="status_pindah_id" class="form-control">
                                                            <option value="<?= set_value('status_pindah_id') ?>"><?= set_value('status_pindah_id') ?></option>
                                                            <?php foreach ($status_pindah as $sp) : ?>
                                                                <option value="<?= $sp['id']; ?>">
                                                                    <?= $sp['status_pindah']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('status_pindah_id', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tanggal_pindah">Tanggal Rencana Pindah</label>
                                                        <input type="date" class="form-control text-dark" id="tanggal_pindah" name="tanggal_pindah" value="<?= set_value('tanggal_pindah') ?>" placeholder="Tanggal Pindah">
                                                        <?= form_error('tanggal_pindah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Alamat Pindah</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="alamat_pindah">Alamat Pindah</label>
                                                        <textarea type="text" class="form-control text-dark" name="alamat_pindah" id="alamat_pindah" value="<?= set_value('alamat_pindah') ?>" placeholder="Alamat Pindah"><?= set_value('alamat_pindah') ?></textarea>
                                                        <?= form_error('alamat_pindah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_rt_pindah">No RT Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="no_rt_pindah" name="no_rt_pindah" value="<?= set_value('no_rt_pindah') ?>" placeholder="No RT Pindah">
                                                        <?= form_error('no_rt_pindah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_rw_pindah">No RW Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="no_rw_pindah" name="no_rw_pindah" value="<?= set_value('no_rw_pindah') ?>" placeholder="No RW Pindah">
                                                        <?= form_error('no_rw_pindah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="desa_pindah">Desa/Kelurahan Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="desa_pindah" name="desa_pindah" value="<?= set_value('desa_pindah') ?>" placeholder="Desa Pindah">
                                                        <?= form_error('desa_pindah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="kecamatan_pindah">Kecamatan Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="kecamatan_pindah" name="kecamatan_pindah" value="<?= set_value('kecamatan_pindah') ?>" placeholder="Kecamatan Pindah">
                                                        <?= form_error('kecamatan_pindah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="kabupaten_pindah">Kabupaten Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="kabupaten_pindah" name="kabupaten_pindah" value="<?= set_value('kabupaten_pindah') ?>" placeholder="Kabupaten Pindah">
                                                        <?= form_error('kabupaten_pindah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="provinsi_pindah">Provinsi Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="provinsi_pindah" name="provinsi_pindah" value="<?= set_value('provinsi_pindah') ?>" placeholder="Provinsi Pindah">
                                                        <?= form_error('provinsi_pindah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="kodepos_pindah">Kodepos Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="kodepos_pindah" name="kodepos_pindah" value="<?= set_value('kodepos_pindah') ?>" placeholder="Kodepos Pindah">
                                                        <?= form_error('kodepos_pindah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="telepon_pindah">Telepon Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="telepon_pindah" name="telepon_pindah" value="<?= set_value('telepon_pindah') ?>" placeholder="Telepon Pindah">
                                                        <?= form_error('telepon_pindah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <hr/>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                        <strong>Informasi!</strong> Minimal 1 orang pindah.
                                                    </div>
                                                </div>
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pindah Kolom (I)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pindah_satu">Nama Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pindah_satu" name="nama_pindah_satu" value="<?= set_value('nama_pindah_satu') ?>" placeholder="Nama Pindah">
                                                        <?= form_error('nama_pindah_satu', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pindah_satu">NIK Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pindah_satu" name="nik_pindah_satu" value="<?= set_value('nik_pindah_satu') ?>" placeholder="Nik Pindah">
                                                        <?= form_error('nik_pindah_satu', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pindah Kolom (II)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pindah_dua">Nama Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pindah_dua" name="nama_pindah_dua" value="<?= set_value('nama_pindah_dua') ?>" placeholder="Nama Pindah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pindah_dua">NIK Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pindah_dua" name="nik_pindah_dua" value="<?= set_value('nik_pindah_dua') ?>" placeholder="Nik Pindah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pindah Kolom (III)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pindah_tiga">Nama Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pindah_tiga" name="nama_pindah_tiga" value="<?= set_value('nama_pindah_tiga') ?>" placeholder="Nama Pindah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pindah_tiga">NIK Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pindah_tiga" name="nik_pindah_tiga" value="<?= set_value('nik_pindah_tiga') ?>" placeholder="Nik Pindah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pindah Kolom (IV)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pindah_empat">Nama Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pindah_empat" name="nama_pindah_empat" value="<?= set_value('nama_pindah_empat') ?>" placeholder="Nama Pindah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pindah_empat">NIK Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pindah_empat" name="nik_pindah_empat" value="<?= set_value('nik_pindah_empat') ?>" placeholder="Nik Pindah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pindah Kolom (V)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pindah_lima">Nama Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pindah_lima" name="nama_pindah_lima" value="<?= set_value('nama_pindah_lima') ?>" placeholder="Nama Pindah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pindah_lima">NIK Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pindah_lima" name="nik_pindah_lima" value="<?= set_value('nik_pindah_lima') ?>" placeholder="Nik Pindah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pindah Kolom (VI)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pindah_enam">Nama Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pindah_enam" name="nama_pindah_enam" value="<?= set_value('nama_pindah_enam') ?>" placeholder="Nama Pindah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pindah_enam">NIK Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pindah_enam" name="nik_pindah_enam" value="<?= set_value('nik_pindah_enam') ?>" placeholder="Nik Pindah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pindah Kolom (VII)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pindah_tujuh">Nama Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pindah_tujuh" name="nama_pindah_tujuh" value="<?= set_value('nama_pindah_tujuh') ?>" placeholder="Nama Pindah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pindah_tujuh">NIK Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pindah_tujuh" name="nik_pindah_tujuh" value="<?= set_value('nik_pindah_tujuh') ?>" placeholder="Nik Pindah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pindah Kolom (VIII)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pindah_delapan">Nama Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pindah_delapan" name="nama_pindah_delapan" value="<?= set_value('nama_pindah_delapan') ?>" placeholder="Nama Pindah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pindah_delapan">NIK Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pindah_delapan" name="nik_pindah_delapan" value="<?= set_value('nik_pindah_delapan') ?>" placeholder="Nik Pindah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pindah Kolom (IX)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pindah_sembilan">Nama Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pindah_sembilan" name="nama_pindah_sembilan" value="<?= set_value('nama_pindah_sembilan') ?>" placeholder="Nama Pindah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pindah_sembilan">NIK Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pindah_sembilan" name="nik_pindah_sembilan" value="<?= set_value('nik_pindah_sembilan') ?>" placeholder="Nik Pindah">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pindah Kolom (X)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class=row>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pindah_sepuluh">Nama Pindah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pindah_sepuluh" name="nama_pindah_sepuluh" value="<?= set_value('nama_pindah_sepuluh') ?>" placeholder="Nama Pindah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pindah_sepuluh">NIK Pindah</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pindah_sepuluh" name="nik_pindah_sepuluh" value="<?= set_value('nik_pindah_sepuluh') ?>" placeholder="Nik Pindah">
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
                                                    <th>Tempat, Tgl Lahir</th>
                                                    <th>Nama Surat</th>
                                                    <th class="datatable-nosort">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($sk_pindah_datang as $d) : ?>
                                                    <tr class="text-center">
                                                        <td>
                                                            <?= $i ?>
                                                        </td>
                                                        <td> 
                                                            <?= $d['alasan_pindah']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $d['nama']; ?>
                                                        </td>
                                                        <td>
                                                            <?= $d['tempat_lahir']; ?>
                                                        </td>
                                                        <td class="text-green">
                                                            <b><?= $d['nama_surat']; ?></b>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                                    <i class="dw dw-more"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                                    <a class="dropdown-item" href="<?= base_url('pelayanan/sk_pindah_datang_pdf/') . $d['id']; ?>" target="_blank"><i class="dw dw-print"></i> Print/PDF</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail<?= $d['id']; ?>"><i class="dw dw-eye"></i> Detail</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubah<?= $d['kode_surat']; ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#hapus<?= $d['kode_surat']; ?>"><i class="dw dw-delete-3"></i> Hapus</a>
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
foreach ($sk_pindah_datang as $d) : $i++ ?>
    <div class="modal fade" id="detail<?= $d['id']; ?>" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLabel">Detail Data Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                    <input type="hidden" name="id" id="id" value="<?= $d['id']; ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata (Kepala Keluarga)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_surat">No Surat</label>
                                    <input class="form-control text-dark" value="<?= $d['no_surat']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">No KK</label>
                                    <input class="form-control text-dark" value="<?= $d['no_kk']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">NIK</label>
                                    <input class="form-control text-dark" value="<?= $d['nik']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input class="form-control text-dark" value="<?= $d['nama']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input class="form-control text-dark" value="<?= $d['tempat_lahir']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input class="form-control text-dark" value="<?= date('d/m/y', strtotime($d['tanggal_lahir'])); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <input class="form-control text-dark" value="<?= $d['jenis_kelamin']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama">Agama</label>
                                    <input class="form-control text-dark" value="<?= $d['agama']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="warga_negara">Warga Negara</label>
                                    <input class="form-control text-dark" value="<?= $d['warga_negara']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="pendidikanterakhir">Pendidikan Terakhir</label>
                                    <input class="form-control text-dark" value="<?= $d['pendidikan_terakhir']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="status_kawin">Status Kawin</label>
                                    <input class="form-control text-dark" value="<?= $d['status_kawin']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <input class="form-control text-dark" value="<?= $d['pekerjaan']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <textarea type="text" class="form-control text-dark" name="alamatpenduduk" id="alamatpenduduk" readonly><?= $d['alamat']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <input class="form-control text-dark" value="<?= $d['no_rt']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <input class="form-control text-dark" value="<?= $d['no_rw']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="kode_pos">Kode Pos</label>
                                    <input class="form-control text-dark" value="<?= $d['kode_pos']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="Telepon">Telepon</label>
                                    <input class="form-control text-dark" value="<?= $d['telepon']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Keterangan Pindah</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="alasan_pindah">Alasan Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['alasan_pindah']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="lainnya">Jika Lainnya</label>
                                    <input class="form-control text-dark" value="<?= $d['lainnya']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="klasifikasi_pindah">Klasifikasi Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['klasifikasi_pindah']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="alasan_pindah">Jenis Kepindahan</label>
                                    <input class="form-control text-dark" value="<?= $d['jenis_kepindahan']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="lainnya">Status Nomor KK Bagi Yang Tidak Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['status_tidak_pindah']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="alasan_pindah">Status Nomor KK Bagi Yang Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['status_pindah']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="lainnya">Tanggal Rencana Pindah</label>
                                    <input class="form-control text-dark" value="<?= date('d/m/y', strtotime($d['tanggal_pindah'])); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Alamat Pindah</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat_pindah">Alamat</label>
                                    <textarea type="text" class="form-control text-dark" name="alamat_pindah" id="alamat_pindah" readonly><?= $d['alamat_pindah']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="desa_pindah">Desa Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['desa_pindah']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kecamatan_pindah">Kecamatan Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['kecamatan_pindah']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kabupaten_pindah">Kabupaten Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['kabupaten_pindah']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="provinsi_pindah">Provinsi Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['provinsi_pindah']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt_pindah">No RT</label>
                                    <input class="form-control text-dark" value="<?= $d['no_rt_pindah']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-2">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw_pindah">No RW</label>
                                    <input class="form-control text-dark" value="<?= $d['no_rw_pindah']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="kodepos_pindah">Kode Pos</label>
                                    <input class="form-control text-dark" value="<?= $d['kodepos_pindah']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="telepon_pindah">Telepon</label>
                                    <input class="form-control text-dark" value="<?= $d['telepon_pindah']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (I)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_satu">Nama Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nama_pindah_satu']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_satu">NIK Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nik_pindah_satu']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (II)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_dua">Nama Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nama_pindah_dua']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_dua">NIK Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nik_pindah_dua']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (III)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_tiga">Nama Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nama_pindah_tiga']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_tiga">NIK Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nik_pindah_tiga']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (IV)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_empat">Nama Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nama_pindah_empat']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_empat">NIK Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nik_pindah_empat']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (V)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_lima">Nama Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nama_pindah_lima']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_lima">NIK Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nik_pindah_lima']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (VI)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_enam">Nama Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nama_pindah_enam']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_enam">NIK Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nik_pindah_enam']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (VII)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_tujuh">Nama Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nama_pindah_tujuh']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_tujuh">NIK Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nik_pindah_tujuh']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (VIII)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_delapan">Nama Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nama_pindah_delapan']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_delapan">NIK Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nik_pindah_delapan']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (IX)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_sembilan">Nama Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nama_pindah_sembilan']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_sembilan">NIK Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nik_pindah_sembilan']; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (X)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_sepuluh">Nama Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nama_pindah_sepuluh']; ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_sepuluh">NIK Pindah</label>
                                    <input class="form-control text-dark" value="<?= $d['nik_pindah_sepuluh']; ?>" readonly>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="modal-footer">
                    </div>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas detail -->

<!-- Modal ubah -->
<?php $i = 0;
foreach ($sk_pindah_datang as $d) : $i++ ?>
    <div class="modal fade" id="ubah<?= $d['kode_surat']; ?>" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahLabel">Form Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/sk_pindah_datang_ubah'); ?>" method="POST">
                    <input type="hidden" name="kode_surat" id="kode_surat" value="<?= $d['kode_surat']; ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Kepala Keluarga</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_surat">No Surat</label>
                                    <input type="number" class="form-control text-dark" id="no_surat" name="no_surat" value="<?= $d['no_surat']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_kk">No KK</label>
                                    <input type="text" class="form-control text-dark" id="no_kk" name="no_kk" value="<?= $d['no_kk']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">No NIK</label>
                                    <input type="number" class="form-control text-dark" id="nik" name="nik" value="<?= $d['nik']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input type="text" class="form-control text-dark" id="nama" name="nama" value="<?= $d['nama']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                    <input type="text" class="form-control text-dark" id="tempat_lahir" name="tempat_lahir" value="<?= $d['tempat_lahir']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_lahir" name="tanggal_lahir" value="<?= $d['tanggal_lahir']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                    <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                        <option value="<?= $d['jenis_kelamin']; ?>"><?= $d['jenis_kelamin']; ?></option>
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
                                        <option value="<?= $d['agama']; ?>"><?= $d['agama']; ?></option>
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
                                        <option value="<?= $d['pendidikan_terakhir']; ?>"><?= $d['pendidikan_terakhir']; ?></option>
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
                                        <option value="<?= $d['warga_negara']; ?>"><?= $d['warga_negara']; ?></option>
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
                                        <option value="<?= $d['status_kawin']; ?>"><?= $d['status_kawin']; ?></option>
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
                                        <option value="<?= $d['pekerjaan']; ?>"><?= $d['pekerjaan']; ?></option>
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
                                    <textarea class="form-control text-dark" id="alamat" name="alamat" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')"><?= $d['alamat']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <select id="no_rt" name="no_rt" class="form-control">
                                        <option value="<?= $d['no_rt']; ?>"><?= $d['no_rt']; ?></option>
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
                                        <option value="<?= $d['no_rw']; ?>"><?= $d['no_rw']; ?></option>
                                        <?php foreach ($rw as $w) : ?>
                                            <option value="<?= $w['no_rw']; ?>">
                                                <?= $w['no_rw']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kode_pos">Kode Pos</label>
                                    <input type="number" class="form-control text-dark" id="kode_pos" name="kode_pos" value="<?= $d['kode_pos']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="telepon">Telepon</label>
                                    <input type="number" class="form-control text-dark" id="telepon" name="telepon" value="<?= $d['telepon']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Keterangan Pindah</b>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="alasan_pindah">Alasan Pindah</label>
                                    <select id="alasan_pindah_id" name="alasan_pindah_id" class="form-control">
                                        <option value="<?= $d['alasan_pindah_id']; ?>"><?= $d['alasan_pindah']; ?></option>
                                        <?php foreach ($alasan_pindah as $t) : ?>
                                            <option value="<?= $t['alasan_pindah']; ?>">
                                                <?= $t['alasan_pindah']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="lainnya">Sebutkan Jika (Lainnya)</label>
                                    <input type="text" class="form-control text-dark" id="lainnya" name="lainnya" value="<?= $d['lainnya']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_pindah">Tanggal Rencana Pindah</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_pindah" name="tanggal_pindah" value="<?= $d['tanggal_pindah']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="klasifikasi_pindah">Klasifikasi Pindah</label>
                                    <select id="klasifikasi_pindah_id" name="klasifikasi_pindah_id" class="form-control">
                                        <option value="<?= $d['klasifikasi_pindah_id']; ?>"><?= $d['klasifikasi_pindah']; ?></option>
                                        <?php foreach ($klasifikasi_pindah as $t) : ?>
                                            <option value="<?= $t['klasifikasi_pindah']; ?>">
                                                <?= $t['klasifikasi_pindah']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kepindahan">Jenis Pindah</label>
                                    <select id="jenis_kepindahan_id" name="jenis_kepindahan_id" class="form-control">
                                        <option value="<?= $d['jenis_kepindahan_id']; ?>"><?= $d['jenis_kepindahan']; ?></option>
                                        <?php foreach ($jenis_kepindahan as $t) : ?>
                                            <option value="<?= $t['jenis_kepindahan']; ?>">
                                                <?= $t['jenis_kepindahan']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="status_tidak_pindah">Status Nomor KK Bagi Yang Tidak Pindah</label>
                                    <select id="status_tidak_pindah_id" name="status_tidak_pindah_id" class="form-control">
                                        <option value="<?= $d['status_tidak_pindah_id']; ?>"><?= $d['status_tidak_pindah']; ?></option>
                                        <?php foreach ($status_tidak_pindah as $t) : ?>
                                            <option value="<?= $t['status_tidak_pindah']; ?>">
                                                <?= $t['status_tidak_pindah']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="status_pindah">Status Nomor KK Bagi Yang Pindah</label>
                                    <select id="status_pindah_id" name="status_pindah_id" class="form-control">
                                        <option value="<?= $d['status_pindah_id']; ?>"><?= $d['status_pindah']; ?></option>
                                        <?php foreach ($status_pindah as $t) : ?>
                                            <option value="<?= $t['status_pindah']; ?>">
                                                <?= $t['status_pindah']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Alamat Pindah</b>
                                </div>
                            </div>
                        </div>

                        <div class="row">
                            <div class="col-lg">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat_pindah">Alamat Pindah</label>
                                    <textarea class="form-control text-dark" id="alamat_pindah" name="alamat_pindah" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')"><?= $d['alamat_pindah']; ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="desa_pindah">Desa Pindah</label>
                                    <input type="text" class="form-control text-dark" id="desa_pindah" name="desa_pindah" value="<?= $d['desa_pindah']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kecamatan_pindah">Kecamatan Pindah</label>
                                    <input type="text" class="form-control text-dark" id="kecamatan_pindah" name="kecamatan_pindah" value="<?= $d['kecamatan_pindah']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="kabupaten_pindah">Kabupaten Pindah</label>
                                    <input type="text" class="form-control text-dark" id="kabupaten_pindah" name="kabupaten_pindah" value="<?= $d['kabupaten_pindah']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="provinsi_pindah">Provinsi Pindah</label>
                                    <input type="text" class="form-control text-dark" id="provinsi_pindah" name="provinsi_pindah" value="<?= $d['provinsi_pindah']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt_pindah">No RT</label>
                                    <input type="number" class="form-control text-dark" id="no_rt_pindah" name="no_rt_pindah" value="<?= $d['no_rt_pindah']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw_pindah">No RW</label>
                                    <input type="number" class="form-control text-dark" id="no_rw_pindah" name="no_rw_pindah" value="<?= $d['no_rw_pindah']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kodepos_pindah">Kode Pos</label>
                                    <input type="number" class="form-control text-dark" id="kodepos_pindah" name="kodepos_pindah" value="<?= $d['kodepos_pindah']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="telepon_pindah">Telepon Pindah</label>
                                    <input type="number" class="form-control text-dark" id="telepon_pindah" name="telepon_pindah" value="<?= $d['telepon_pindah']; ?>" required oninvalid="this.setCustomValidity('Data Kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (I)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_satu">Nama Pindah Satu</label>
                                    <input type="text" class="form-control text-dark" id="nama_pindah_satu" name="nama_pindah_satu" value="<?= $d['nama_pindah_satu']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_satu">NIK Pindah Satu</label>
                                    <input type="number" class="form-control text-dark" id="nik_pindah_satu" name="nik_pindah_satu" value="<?= $d['nik_pindah_satu']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (II)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_dua">Nama Pindah Dua</label>
                                    <input type="text" class="form-control text-dark" id="nama_pindah_dua" name="nama_pindah_dua" value="<?= $d['nama_pindah_dua']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_dua">NIK Pindah Dua</label>
                                    <input type="number" class="form-control text-dark" id="nik_pindah_dua" name="nik_pindah_dua" value="<?= $d['nik_pindah_dua']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (III)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_tiga">Nama Pindah Tiga</label>
                                    <input type="text" class="form-control text-dark" id="nama_pindah_tiga" name="nama_pindah_tiga" value="<?= $d['nama_pindah_tiga']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_tiga">Nama Pindah Tiga</label>
                                    <input type="number" class="form-control text-dark" id="nik_pindah_tiga" name="nik_pindah_tiga" value="<?= $d['nik_pindah_tiga']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (IV)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_empat">Nama Pindah Empat</label>
                                    <input type="text" class="form-control text-dark" id="nama_pindah_empat" name="nama_pindah_empat" value="<?= $d['nama_pindah_empat']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_empat">Nama Pindah Empat</label>
                                    <input type="number" class="form-control text-dark" id="nik_pindah_empat" name="nik_pindah_empat" value="<?= $d['nik_pindah_empat']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (V)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_lima">Nama Pindah Lima</label>
                                    <input type="text" class="form-control text-dark" id="nama_pindah_lima" name="nama_pindah_lima" value="<?= $d['nama_pindah_lima']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_lima">Nama Pindah Lima</label>
                                    <input type="number" class="form-control text-dark" id="nik_pindah_lima" name="nik_pindah_lima" value="<?= $d['nik_pindah_lima']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (VI)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_enam">Nama Pindah Enam</label>
                                    <input type="text" class="form-control text-dark" id="nama_pindah_enam" name="nama_pindah_enam" value="<?= $d['nama_pindah_enam']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_enam">Nama Pindah Enam</label>
                                    <input type="number" class="form-control text-dark" id="nik_pindah_enam" name="nik_pindah_enam" value="<?= $d['nik_pindah_enam']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (VII)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_tujuh">Nama Pindah Tujuh</label>
                                    <input type="text" class="form-control text-dark" id="nama_pindah_tujuh" name="nama_pindah_tujuh" value="<?= $d['nama_pindah_tujuh']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_tujuh">Nama Pindah Tujuh</label>
                                    <input type="number" class="form-control text-dark" id="nik_pindah_tujuh" name="nik_pindah_tujuh" value="<?= $d['nik_pindah_tujuh']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (VIII)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_delapan">Nama Pindah Delapan</label>
                                    <input type="text" class="form-control text-dark" id="nama_pindah_delapan" name="nama_pindah_delapan" value="<?= $d['nama_pindah_delapan']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_delapan">Nama Pindah Delapan</label>
                                    <input type="number" class="form-control text-dark" id="nik_pindah_delapan" name="nik_pindah_delapan" value="<?= $d['nik_pindah_delapan']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (IX)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_sembilan">Nama Pindah Sembilan</label>
                                    <input type="text" class="form-control text-dark" id="nama_pindah_sembilan" name="nama_pindah_sembilan" value="<?= $d['nama_pindah_sembilan']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_sembilan">Nama Pindah Sembilan</label>
                                    <input type="number" class="form-control text-dark" id="nik_pindah_sembilan" name="nik_pindah_sembilan" value="<?= $d['nik_pindah_sembilan']; ?>">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <b>Biodata Pindah Kolom (X)</b>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_pindah_sepuluh">Nama Pindah Sepuluh</label>
                                    <input type="text" class="form-control text-dark" id="nama_pindah_sepuluh" name="nama_pindah_sepuluh" value="<?= $d['nama_pindah_sepuluh']; ?>">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik_pindah_sepuluh">Nama Pindah Sepuluh</label>
                                    <input type="number" class="form-control text-dark" id="nik_pindah_sepuluh" name="nik_pindah_sepuluh" value="<?= $d['nik_pindah_sepuluh']; ?>">
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
foreach ($sk_pindah_datang as $d) : $i++ ?>
<form action="<?php echo site_url('pelayanan/sk_pindah_datang_hapus'); ?>" method="POST">
    <div class="modal fade" id="hapus<?= $d['kode_surat']; ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
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
                        <a type="submit" href="<?php echo site_url('pelayanan/sk_pindah_datang_hapus/') . $d['kode_surat'];; ?>" class="btn btn-danger">Hapus</a>
                    </div>
            </div>
        </div>
    </div>
</form>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->