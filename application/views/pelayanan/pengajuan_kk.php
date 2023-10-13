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
              <?= form_error('status_keluarga', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('nama_ayah', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
              <?= form_error('nama_ibu', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
                        <h5 class="h4 text-blue mb-20">Form Pengajuan Kartu Keluarga Baru</h5>
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
                                    <form action="<?= base_url('pelayanan/pengajuan_kk_tambah'); ?>" method="POST">
                                        <div class="pd-20">
                                           <div class="row">
                                               <div class="col-lg">
                                                    <div class="alert alert-info alert-dismissible fade show" role="alert">
                                                        <strong>Informasi!</strong> Bagi janda dan istri kedua input pada <b> Biodata Kepala Keluarga </b> untuk <b> Jenis Kelamin </b> dan <b> Status Pernikahan </b> serta <b> Status Keluarga </b> menyesuaikan.
                                                    </div>
                                                </div>
                                           </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Kepala Keluarga</b> <button type="submit" class="btn btn-primary">Tambah</button>
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
                                                        <label class="form-control-label" for="nonik">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nonik" name="nonik" value="<?= set_value('nonik') ?>" placeholder="Nomor NIK">
                                                        <?= form_error('nonik', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="namapenduduk">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="namapenduduk" name="namapenduduk" value="<?= set_value('namapenduduk') ?>" placeholder="Nama">
                                                        <?= form_error('namapenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempatlahir">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempatlahir" name="tempatlahir" value="<?= set_value('tempatlahir') ?>" placeholder="Tempat lahir">
                                                        <?= form_error('tempatlahir', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggallahir">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggallahir" name="tanggallahir" value="<?= set_value('tanggallahir') ?>" placeholder="Tanggal lahir">
                                                            <?= form_error('tanggallahir', '<small class="text-danger">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
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
                                                <div class="col-lg-3">
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
                                                <div class="col-lg-2">
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
                                                <div class="col-lg-3">
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
                                                <div class="col-lg-4">
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga">Status Keluarga</label>
                                                        <select id="status_keluarga" name="status_keluarga" class="form-control">
                                                            <option value="<?= set_value('status_keluarga') ?>"><?= set_value('status_keluarga') ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                        <?= form_error('status_keluarga', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor" name="no_paspor" value="<?= set_value('no_paspor') ?>" placeholder="Nomor Paspor">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab" name="no_kitab" value="<?= set_value('no_kitab') ?>" placeholder="Nomor Kitab">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah" name="nama_ayah" value="<?= set_value('nama_ayah') ?>" placeholder="Nama Ayah">
                                                        <?= form_error('nama_ayah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu" name="nama_ibu" value="<?= set_value('nama_ibu') ?>" placeholder="Nama Ibu">
                                                        <?= form_error('nama_ibu', '<small class="text-danger">', '</small>'); ?>
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

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (1)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pasangan">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pasangan" name="nik_pasangan" value="<?= set_value('nik_pasangan') ?>" placeholder="Nomor NIK Pasangan">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pasangan">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pasangan" name="nama_pasangan" value="<?= set_value('nama_pasangan') ?>" placeholder="Nama Pasangan">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_pasangan">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_pasangan" name="tempat_lahir_pasangan" value="<?= set_value('tempat_lahir_pasangan') ?>" placeholder="Tempat lahir Pasangan">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_pasangan">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_pasangan" name="tanggal_lahir_pasangan" value="<?= set_value('tanggal_lahir_pasangan') ?>" placeholder="Tanggal lahir Pasangan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_pasangan">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_pasangan" name="jenis_kelamin_pasangan" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin_pasangan') ?>"><?= set_value('jenis_kelamin_pasangan') ?></option>
                                                            <option>Laki - Laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_pasangan">Agama</label>
                                                        <select id="agama_pasangan" name="agama_pasangan" class="form-control">
                                                            <option value="<?= set_value('agama_pasangan') ?>"><?= set_value('agama_pasangan') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_pasangan">Warga Negara</label>
                                                        <select id="warga_negara_pasangan" name="warga_negara_pasangan" class="form-control">
                                                            <option value="<?= set_value('warga_negara_pasangan') ?>"><?= set_value('warga_negara_pasangan') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_pasangan">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_pasangan" name="pendidikan_terakhir_pasangan" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir_pasangan') ?>"><?= set_value('pendidikan_terakhir_pasangan') ?></option>
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_pasangan">Pekerjaan</label>
                                                        <select id="pekerjaan_pasangan" name="pekerjaan_pasangan" class="form-control">
                                                            <option value="<?= set_value('pekerjaan_pasangan') ?>"><?= set_value('pekerjaan_pasangan') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_pasangan">Status Pernikahan</label>
                                                        <select id="status_kawin_pasangan" name="status_kawin_pasangan" class="form-control">
                                                            <option value="<?= set_value('status_kawin_pasangan') ?>"><?= set_value('status_kawin_pasangan') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_pasangan">Status Keluarga</label>
                                                        <select id="status_keluarga_pasangan" name="status_keluarga_pasangan" class="form-control">
                                                            <option value="<?= set_value('status_keluarga_pasangan') ?>"><?= set_value('status_keluarga_pasangan') ?></option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_pasangan">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_pasangan" name="no_paspor_pasangan" value="<?= set_value('no_paspor_pasangan') ?>" placeholder="Nomor Paspor Pasangan">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_pasangan">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_pasangan" name="no_kitab_pasangan" value="<?= set_value('no_kitab_pasangan') ?>" placeholder="Nomor Kitab Pasangan">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_pasangan">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_pasangan" name="nama_ayah_pasangan" value="<?= set_value('nama_ayah_pasangan') ?>" placeholder="Nama Ayah Pasangan">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_pasangan">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_pasangan" name="nama_ibu_pasangan" value="<?= set_value('nama_ibu_pasangan') ?>" placeholder="Nama Ibu Pasangan">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (2)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_satu">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_satu" name="nik_anak_satu" value="<?= set_value('nik_anak_satu') ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_satu">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_satu" name="nama_anak_satu" value="<?= set_value('nama_anak_satu') ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_satu">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_satu" name="tempat_lahir_anak_satu" value="<?= set_value('tempat_lahir_anak_satu') ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_satu">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_satu" name="tanggal_lahir_anak_satu" value="<?= set_value('tanggal_lahir_anak_satu') ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_satu">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_satu" name="jenis_kelamin_anak_satu" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin_anak_satu') ?>"><?= set_value('jenis_kelamin_anak_satu') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_satu">Agama</label>
                                                        <select id="agama_anak_satu" name="agama_anak_satu" class="form-control">
                                                            <option value="<?= set_value('agama_anak_satu') ?>"><?= set_value('agama_anak_satu') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_satu">Warga Negara</label>
                                                        <select id="warga_negara_anak_satu" name="warga_negara_anak_satu" class="form-control">
                                                            <option value="<?= set_value('warga_negara_anak_satu') ?>"><?= set_value('warga_negara_anak_satu') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_satu">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_satu" name="pendidikan_terakhir_anak_satu" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir_anak_satu') ?>"><?= set_value('pendidikan_terakhir_anak_satu') ?></option>
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_satu">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_satu" name="pekerjaan_anak_satu" class="form-control">
                                                            <option value="<?= set_value('pekerjaan_anak_satu') ?>"><?= set_value('pekerjaan_anak_satu') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_satu">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_satu" name="status_kawin_anak_satu" class="form-control">
                                                            <option value="<?= set_value('status_kawin_anak_satu') ?>"><?= set_value('status_kawin_anak_satu') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_satu">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_satu" name="status_keluarga_anak_satu" class="form-control">
                                                            <option value="<?= set_value('status_keluarga_anak_satu') ?>"><?= set_value('status_keluarga_anak_satu') ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_satu">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_satu" name="no_paspor_anak_satu" value="<?= set_value('no_paspor_anak_satu') ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_satu">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_satu" name="no_kitab_anak_satu" value="<?= set_value('no_kitab_anak_satu') ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_satu">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_satu" name="nama_ayah_anak_satu" value="<?= set_value('nama_ayah_anak_satu') ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_satu">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_satu" name="nama_ibu_anak_satu" value="<?= set_value('nama_ibu_anak_satu') ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (3)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_dua">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_dua" name="nik_anak_dua" value="<?= set_value('nik_anak_dua') ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_dua">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_dua" name="nama_anak_dua" value="<?= set_value('nama_anak_dua') ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_dua">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_dua" name="tempat_lahir_anak_dua" value="<?= set_value('tempat_lahir_anak_dua') ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_dua">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_dua" name="tanggal_lahir_anak_dua" value="<?= set_value('tanggal_lahir_anak_dua') ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_dua">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_dua" name="jenis_kelamin_anak_dua" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin_anak_dua') ?>"><?= set_value('jenis_kelamin_anak_dua') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_dua">Agama</label>
                                                        <select id="agama_anak_dua" name="agama_anak_dua" class="form-control">
                                                            <option value="<?= set_value('agama_anak_dua') ?>"><?= set_value('agama_anak_dua') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_dua">Warga Negara</label>
                                                        <select id="warga_negara_anak_dua" name="warga_negara_anak_dua" class="form-control">
                                                            <option value="<?= set_value('warga_negara_anak_dua') ?>"><?= set_value('warga_negara_anak_dua') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_dua">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_dua" name="pendidikan_terakhir_anak_dua" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir_anak_dua') ?>"><?= set_value('pendidikan_terakhir_anak_dua') ?></option>
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_dua">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_dua" name="pekerjaan_anak_dua" class="form-control">
                                                            <option value="<?= set_value('pekerjaan_anak_dua') ?>"><?= set_value('pekerjaan_anak_dua') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_dua">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_dua" name="status_kawin_anak_dua" class="form-control">
                                                            <option value="<?= set_value('status_kawin_anak_dua') ?>"><?= set_value('status_kawin_anak_dua') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_dua">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_dua" name="status_keluarga_anak_dua" class="form-control">
                                                            <option value="<?= set_value('status_keluarga_anak_dua') ?>"><?= set_value('status_keluarga_anak_dua') ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_dua">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_dua" name="no_paspor_anak_dua" value="<?= set_value('no_paspor_anak_dua') ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_dua">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_dua" name="no_kitab_anak_dua" value="<?= set_value('no_kitab_anak_dua') ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_dua">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_dua" name="nama_ayah_anak_dua" value="<?= set_value('nama_ayah_anak_dua') ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_dua">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_dua" name="nama_ibu_anak_dua" value="<?= set_value('nama_ibu_anak_dua') ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (4)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_tiga">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_tiga" name="nik_anak_tiga" value="<?= set_value('nik_anak_tiga') ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_tiga">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_tiga" name="nama_anak_tiga" value="<?= set_value('nama_anak_tiga') ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_tiga">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_tiga" name="tempat_lahir_anak_tiga" value="<?= set_value('tempat_lahir_anak_tiga') ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_tiga">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_tiga" name="tanggal_lahir_anak_tiga" value="<?= set_value('tanggal_lahir_anak_tiga') ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_tiga">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_tiga" name="jenis_kelamin_anak_tiga" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin_anak_tiga') ?>"><?= set_value('jenis_kelamin_anak_tiga') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_tiga">Agama</label>
                                                        <select id="agama_anak_tiga" name="agama_anak_tiga" class="form-control">
                                                            <option value="<?= set_value('agama_anak_tiga') ?>"><?= set_value('agama_anak_tiga') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_tiga">Warga Negara</label>
                                                        <select id="warga_negara_anak_tiga" name="warga_negara_anak_tiga" class="form-control">
                                                            <option value="<?= set_value('warga_negara_anak_tiga') ?>"><?= set_value('warga_negara_anak_tiga') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_tiga">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_tiga" name="pendidikan_terakhir_anak_tiga" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir_anak_tiga') ?>"><?= set_value('pendidikan_terakhir_anak_tiga') ?></option>
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_tiga">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_tiga" name="pekerjaan_anak_tiga" class="form-control">
                                                            <option value="<?= set_value('pekerjaan_anak_tiga') ?>"><?= set_value('pekerjaan_anak_tiga') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_tiga">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_tiga" name="status_kawin_anak_tiga" class="form-control">
                                                            <option value="<?= set_value('status_kawin_anak_tiga') ?>"><?= set_value('status_kawin_anak_tiga') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_tiga">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_tiga" name="status_keluarga_anak_tiga" class="form-control">
                                                            <option value="<?= set_value('status_keluarga_anak_tiga') ?>"><?= set_value('status_keluarga_anak_tiga') ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_tiga">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_tiga" name="no_paspor_anak_tiga" value="<?= set_value('no_paspor_anak_tiga') ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_tiga">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_tiga" name="no_kitab_anak_tiga" value="<?= set_value('no_kitab_anak_tiga') ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_tiga">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_tiga" name="nama_ayah_anak_tiga" value="<?= set_value('nama_ayah_anak_tiga') ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_tiga">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_tiga" name="nama_ibu_anak_tiga" value="<?= set_value('nama_ibu_anak_tiga') ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (5)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_empat">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_empat" name="nik_anak_empat" value="<?= set_value('nik_anak_empat') ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_empat">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_empat" name="nama_anak_empat" value="<?= set_value('nama_anak_empat') ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_empat">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_empat" name="tempat_lahir_anak_empat" value="<?= set_value('tempat_lahir_anak_empat') ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_empat">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_empat" name="tanggal_lahir_anak_empat" value="<?= set_value('tanggal_lahir_anak_empat') ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_empat">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_empat" name="jenis_kelamin_anak_empat" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin_anak_empat') ?>"><?= set_value('jenis_kelamin_anak_empat') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_empat">Agama</label>
                                                        <select id="agama_anak_empat" name="agama_anak_empat" class="form-control">
                                                            <option value="<?= set_value('agama_anak_empat') ?>"><?= set_value('agama_anak_empat') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_empat">Warga Negara</label>
                                                        <select id="warga_negara_anak_empat" name="warga_negara_anak_empat" class="form-control">
                                                            <option value="<?= set_value('warga_negara_anak_empat') ?>"><?= set_value('warga_negara_anak_empat') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_empat">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_empat" name="pendidikan_terakhir_anak_empat" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir_anak_empat') ?>"><?= set_value('pendidikan_terakhir_anak_empat') ?></option>
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_empat">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_empat" name="pekerjaan_anak_empat" class="form-control">
                                                            <option value="<?= set_value('pekerjaan_anak_empat') ?>"><?= set_value('pekerjaan_anak_empat') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_empat">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_empat" name="status_kawin_anak_empat" class="form-control">
                                                            <option value="<?= set_value('status_kawin_anak_empat') ?>"><?= set_value('status_kawin_anak_empat') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_empat">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_empat" name="status_keluarga_anak_empat" class="form-control">
                                                            <option value="<?= set_value('status_keluarga_anak_empat') ?>"><?= set_value('status_keluarga_anak_empat') ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_empat">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_empat" name="no_paspor_anak_empat" value="<?= set_value('no_paspor_anak_empat') ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_empat">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_empat" name="no_kitab_anak_empat" value="<?= set_value('no_kitab_anak_empat') ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_empat">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_empat" name="nama_ayah_anak_empat" value="<?= set_value('nama_ayah_anak_empat') ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_empat">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_empat" name="nama_ibu_anak_empat" value="<?= set_value('nama_ibu_anak_empat') ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (6)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_lima">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_lima" name="nik_anak_lima" value="<?= set_value('nik_anak_lima') ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_lima">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_lima" name="nama_anak_lima" value="<?= set_value('nama_anak_lima') ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_lima">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_lima" name="tempat_lahir_anak_lima" value="<?= set_value('tempat_lahir_anak_lima') ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_lima">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_lima" name="tanggal_lahir_anak_lima" value="<?= set_value('tanggal_lahir_anak_lima') ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_lima">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_lima" name="jenis_kelamin_anak_lima" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin_anak_lima') ?>"><?= set_value('jenis_kelamin_anak_lima') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_lima">Agama</label>
                                                        <select id="agama_anak_lima" name="agama_anak_lima" class="form-control">
                                                            <option value="<?= set_value('agama_anak_lima') ?>"><?= set_value('agama_anak_lima') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_lima">Warga Negara</label>
                                                        <select id="warga_negara_anak_lima" name="warga_negara_anak_lima" class="form-control">
                                                            <option value="<?= set_value('warga_negara_anak_lima') ?>"><?= set_value('warga_negara_anak_lima') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_lima">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_lima" name="pendidikan_terakhir_anak_lima" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir_anak_lima') ?>"><?= set_value('pendidikan_terakhir_anak_lima') ?></option>
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_lima">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_lima" name="pekerjaan_anak_lima" class="form-control">
                                                            <option value="<?= set_value('pekerjaan_anak_lima') ?>"><?= set_value('pekerjaan_anak_lima') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_lima">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_lima" name="status_kawin_anak_lima" class="form-control">
                                                            <option value="<?= set_value('status_kawin_anak_lima') ?>"><?= set_value('status_kawin_anak_lima') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_lima">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_lima" name="status_keluarga_anak_lima" class="form-control">
                                                            <option value="<?= set_value('status_keluarga_anak_lima') ?>"><?= set_value('status_keluarga_anak_lima') ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_lima">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_lima" name="no_paspor_anak_lima" value="<?= set_value('no_paspor_anak_lima') ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_lima">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_lima" name="no_kitab_anak_lima" value="<?= set_value('no_kitab_anak_lima') ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_lima">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_lima" name="nama_ayah_anak_lima" value="<?= set_value('nama_ayah_anak_lima') ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_lima">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_lima" name="nama_ibu_anak_lima" value="<?= set_value('nama_ibu_anak_lima') ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (7)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_enam">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_enam" name="nik_anak_enam" value="<?= set_value('nik_anak_enam') ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_enam">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_enam" name="nama_anak_enam" value="<?= set_value('nama_anak_enam') ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_enam">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_enam" name="tempat_lahir_anak_enam" value="<?= set_value('tempat_lahir_anak_enam') ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_enam">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_enam" name="tanggal_lahir_anak_enam" value="<?= set_value('tanggal_lahir_anak_enam') ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_enam">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_enam" name="jenis_kelamin_anak_enam" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin_anak_enam') ?>"><?= set_value('jenis_kelamin_anak_enam') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_enam">Agama</label>
                                                        <select id="agama_anak_enam" name="agama_anak_enam" class="form-control">
                                                            <option value="<?= set_value('agama_anak_enam') ?>"><?= set_value('agama_anak_enam') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_enam">Warga Negara</label>
                                                        <select id="warga_negara_anak_enam" name="warga_negara_anak_enam" class="form-control">
                                                            <option value="<?= set_value('warga_negara_anak_enam') ?>"><?= set_value('warga_negara_anak_enam') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_enam">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_enam" name="pendidikan_terakhir_anak_enam" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir_anak_enam') ?>"><?= set_value('pendidikan_terakhir_anak_enam') ?></option>
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_enam">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_enam" name="pekerjaan_anak_enam" class="form-control">
                                                            <option value="<?= set_value('pekerjaan_anak_enam') ?>"><?= set_value('pekerjaan_anak_enam') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_enam">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_enam" name="status_kawin_anak_enam" class="form-control">
                                                            <option value="<?= set_value('status_kawin_anak_enam') ?>"><?= set_value('status_kawin_anak_enam') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_enam">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_enam" name="status_keluarga_anak_enam" class="form-control">
                                                            <option value="<?= set_value('status_keluarga_anak_enam') ?>"><?= set_value('status_keluarga_anak_enam') ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_enam">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_enam" name="no_paspor_anak_enam" value="<?= set_value('no_paspor_anak_enam') ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_enam">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_enam" name="no_kitab_anak_enam" value="<?= set_value('no_kitab_anak_enam') ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_enam">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_enam" name="nama_ayah_anak_enam" value="<?= set_value('nama_ayah_anak_enam') ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_enam">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_enam" name="nama_ibu_anak_enam" value="<?= set_value('nama_ibu_anak_enam') ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (8)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_tujuh">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_tujuh" name="nik_anak_tujuh" value="<?= set_value('nik_anak_tujuh') ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_tujuh">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_tujuh" name="nama_anak_tujuh" value="<?= set_value('nama_anak_tujuh') ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_tujuh">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_tujuh" name="tempat_lahir_anak_tujuh" value="<?= set_value('tempat_lahir_anak_tujuh') ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_tujuh">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_tujuh" name="tanggal_lahir_anak_tujuh" value="<?= set_value('tanggal_lahir_anak_tujuh') ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_tujuh">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_tujuh" name="jenis_kelamin_anak_tujuh" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin_anak_tujuh') ?>"><?= set_value('jenis_kelamin_anak_tujuh') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_tujuh">Agama</label>
                                                        <select id="agama_anak_tujuh" name="agama_anak_tujuh" class="form-control">
                                                            <option value="<?= set_value('agama_anak_tujuh') ?>"><?= set_value('agama_anak_tujuh') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_tujuh">Warga Negara</label>
                                                        <select id="warga_negara_anak_tujuh" name="warga_negara_anak_tujuh" class="form-control">
                                                            <option value="<?= set_value('warga_negara_anak_tujuh') ?>"><?= set_value('warga_negara_anak_tujuh') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_tujuh">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_tujuh" name="pendidikan_terakhir_anak_tujuh" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir_anak_tujuh') ?>"><?= set_value('pendidikan_terakhir_anak_tujuh') ?></option>
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_tujuh">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_tujuh" name="pekerjaan_anak_tujuh" class="form-control">
                                                            <option value="<?= set_value('pekerjaan_anak_tujuh') ?>"><?= set_value('pekerjaan_anak_tujuh') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_tujuh">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_tujuh" name="status_kawin_anak_tujuh" class="form-control">
                                                            <option value="<?= set_value('status_kawin_anak_tujuh') ?>"><?= set_value('status_kawin_anak_tujuh') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_tujuh">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_tujuh" name="status_keluarga_anak_tujuh" class="form-control">
                                                            <option value="<?= set_value('status_keluarga_anak_tujuh') ?>"><?= set_value('status_keluarga_anak_tujuh') ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_tujuh">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_tujuh" name="no_paspor_anak_tujuh" value="<?= set_value('no_paspor_anak_tujuh') ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_tujuh">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_tujuh" name="no_kitab_anak_tujuh" value="<?= set_value('no_kitab_anak_tujuh') ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_tujuh">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_tujuh" name="nama_ayah_anak_tujuh" value="<?= set_value('nama_ayah_anak_tujuh') ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_tujuh">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_tujuh" name="nama_ibu_anak_tujuh" value="<?= set_value('nama_ibu_anak_tujuh') ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (9)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_delapan">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_delapan" name="nik_anak_delapan" value="<?= set_value('nik_anak_delapan') ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_delapan">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_delapan" name="nama_anak_delapan" value="<?= set_value('nama_anak_delapan') ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_delapan">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_delapan" name="tempat_lahir_anak_delapan" value="<?= set_value('tempat_lahir_anak_delapan') ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_delapan">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_delapan" name="tanggal_lahir_anak_delapan" value="<?= set_value('tanggal_lahir_anak_delapan') ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_delapan">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_delapan" name="jenis_kelamin_anak_delapan" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin_anak_delapan') ?>"><?= set_value('jenis_kelamin_anak_delapan') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_delapan">Agama</label>
                                                        <select id="agama_anak_delapan" name="agama_anak_delapan" class="form-control">
                                                            <option value="<?= set_value('agama_anak_delapan') ?>"><?= set_value('agama_anak_delapan') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_delapan">Warga Negara</label>
                                                        <select id="warga_negara_anak_delapan" name="warga_negara_anak_delapan" class="form-control">
                                                            <option value="<?= set_value('warga_negara_anak_delapan') ?>"><?= set_value('warga_negara_anak_delapan') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_delapan">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_delapan" name="pendidikan_terakhir_anak_delapan" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir_anak_delapan') ?>"><?= set_value('pendidikan_terakhir_anak_delapan') ?></option>
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_delapan">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_delapan" name="pekerjaan_anak_delapan" class="form-control">
                                                            <option value="<?= set_value('pekerjaan_anak_delapan') ?>"><?= set_value('pekerjaan_anak_delapan') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_delapan">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_delapan" name="status_kawin_anak_delapan" class="form-control">
                                                            <option value="<?= set_value('status_kawin_anak_delapan') ?>"><?= set_value('status_kawin_anak_delapan') ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_delapan">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_delapan" name="status_keluarga_anak_delapan" class="form-control">
                                                            <option value="<?= set_value('status_keluarga_anak_delapan') ?>"><?= set_value('status_keluarga_anak_delapan') ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_delapan">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_delapan" name="no_paspor_anak_delapan" value="<?= set_value('no_paspor_anak_delapan') ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_delapan">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_delapan" name="no_kitab_anak_delapan" value="<?= set_value('no_kitab_anak_delapan') ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_delapan">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_delapan" name="nama_ayah_anak_delapan" value="<?= set_value('nama_ayah_anak_delapan') ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_delapan">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_delapan" name="nama_ibu_anak_delapan" value="<?= set_value('nama_ibu_anak_delapan') ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                        </div>
                                    </form>
                                </div>
                                <div class="tab-pane fade" id="table" role="tabpanel">
                                    <div class="pd-20">
                                        <table class="data-table table stripe hover nowrap">
                                            <thead>
                                                <tr class="text-center text-white bg-info">
                                                    <th class="table-plus datatable-nosort">No</th>
                                                    <th>NIK Kepala Keluarga</th>
                                                    <th>Nama</th>
                                                    <th>Jenis Kelamin</th>
                                                    <th>Tempat, Tgl Lahir</th>
                                                    <th>Nama Surat</th>
                                                    <th class="datatable-nosort">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($pengajuan_kk as $d) : ?>
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
                                                                    <a class="dropdown-item" href="<?= base_url('pelayanan/pengajuan_kk_pdf/') . $d->id; ?>" target="_blank"><i class="dw dw-print"></i> Print/PDF</a>
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
foreach ($pengajuan_kk as $d) : $i++ ?>
    <div class="modal fade" id="detail<?= $d->id ?>" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLabel">Detail Data Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/pengajuan_kk_detail'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $d->id ?>">
                    <div class="modal-body">
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pemohon (Kepala Keluarga)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_surat">No Surat</label>
                                                        <input type="number" class="form-control text-dark" id="no_surat" name="no_surat" value="<?= $d->no_surat; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nonik">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nonik" name="nonik" value="<?= $d->nik; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="namapenduduk">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="namapenduduk" name="namapenduduk" value="<?= ucwords($d->nama); ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempatlahir">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempatlahir" name="tempatlahir" value="<?= ucwords($d->tempat_lahir); ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggallahir">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggallahir" name="tanggallahir" value="<?=  date('Y-m-d', strtotime($d->tanggal_lahir));?>" readonly>
                                                            <?= form_error('tanggallahir', '<small class="text-danger">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin; ?>"><?= $d->jenis_kelamin; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama">Agama</label>
                                                        <select id="agama" name="agama" class="form-control">
                                                            <option value="<?= $d->agama; ?>"><?= $d->agama; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin">Status Pernikahan</label>
                                                        <select id="status_kawin" name="status_kawin" class="form-control">
                                                            <option value="<?= $d->status_kawin ?>"><?= $d->status_kawin ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warganegara">Warga Negara</label>
                                                        <select id="warganegara" name="warganegara" class="form-control">
                                                            <option value="<?= $d->warga_negara ?>"><?= $d->warga_negara ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikanterakhir">Pendidikan Terakhir</label>
                                                        <select id="pendidikanterakhir" name="pendidikanterakhir" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir ?>"><?= $d->pendidikan_terakhir ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaanpenduduk">Pekerjaan</label>
                                                        <select id="pekerjaanpenduduk" name="pekerjaanpenduduk" class="form-control">
                                                            <option value="<?= $d->pekerjaan ?>"><?= $d->pekerjaan ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga">Status Keluarga</label>
                                                        <select id="status_keluarga" name="status_keluarga" class="form-control">
                                                            <option value="<?= $d->status_keluarga ?>"><?= $d->status_keluarga ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor" name="no_paspor" value="<?= $d->no_paspor ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab" name="no_kitab" value="<?= $d->no_kitab ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah" name="nama_ayah" value="<?= $d->nama_ayah ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu" name="nama_ibu" value="<?= $d->nama_ibu ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="alamatpenduudk">Alamat</label>
                                                        <textarea type="text" class="form-control text-dark" name="alamatpenduduk" id="alamatpenduduk" value="<?= $d->alamat ?>" readonly><?= ucwords($d->alamat); ?></textarea>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_rt">No RT</label>
                                                        <select id="nort" name="nort" class="form-control">
                                                            <option value="<?= $d->no_rt ?>"><?= $d->no_rt ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_rw">No RW</label>
                                                        <select id="norw" name="norw" class="form-control">
                                                            <option value="<?= $d->no_rw ?>"><?= $d->no_rw ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="kodepos">Kode Pos</label>
                                                        <input type="number" class="form-control text-dark" id="kodepos" name="kodepos" value="<?= $d->kode_pos ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (1)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pasangan">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pasangan" name="nik_pasangan" value="<?= $d->nik_pasangan ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pasangan">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pasangan" name="nama_pasangan" value="<?= $d->nama_pasangan ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_pasangan">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_pasangan" name="tempat_lahir_pasangan" value="<?= $d->tempat_lahir_pasangan ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_pasangan">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_pasangan" name="tanggal_lahir_pasangan" value="<?= date($d->tanggal_lahir_pasangan); ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_pasangan">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_pasangan" name="jenis_kelamin_pasangan" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_pasangan ?>"><?= $d->jenis_kelamin_pasangan ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_pasangan">Agama</label>
                                                        <select id="agama_pasangan" name="agama_pasangan" class="form-control">
                                                            <option value="<?= $d->agama_pasangan ?>"><?= $d->agama_pasangan ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_pasangan">Warga Negara</label>
                                                        <select id="warga_negara_pasangan" name="warga_negara_pasangan" class="form-control">
                                                            <option value="<?= $d->warga_negara_pasangan ?>"><?= $d->warga_negara_pasangan ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_pasangan">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_pasangan" name="pendidikan_terakhir_pasangan" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_pasangan ?>"><?= $d->pendidikan_terakhir_pasangan ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_pasangan">Pekerjaan</label>
                                                        <select id="pekerjaan_pasangan" name="pekerjaan_pasangan" class="form-control">
                                                            <option value="<?= $d->pekerjaan_pasangan ?>"><?= $d->pekerjaan_pasangan ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_pasangan">Status Pernikahan</label>
                                                        <select id="status_kawin_pasangan" name="status_kawin_pasangan" class="form-control">
                                                            <option value="<?= $d->status_kawin_pasangan ?>"><?= $d->status_kawin_pasangan ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_pasangan">Status Keluarga</label>
                                                        <select id="status_keluarga_pasangan" name="status_keluarga_pasangan" class="form-control">
                                                            <option value="<?= $d->status_keluarga_pasangan ?>"><?= $d->status_keluarga_pasangan ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_pasangan">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_pasangan" name="no_paspor_pasangan" value="<?= $d->no_paspor ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_pasangan">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_pasangan" name="no_kitab_pasangan" value="<?= $d->no_kitab ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_pasangan">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_pasangan" name="nama_ayah_pasangan" value="<?= $d->nama_ayah_pasangan ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_pasangan">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_pasangan" name="nama_ibu_pasangan" value="<?= $d->nama_ibu_pasangan ?>" readonly>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (2)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_satu">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_satu" name="nik_anak_satu" value="<?= $d->nik_anak_satu ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_satu">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_satu" name="nama_anak_satu" value="<?= $d->nama_anak_satu ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_satu">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_satu" name="tempat_lahir_anak_satu" value="<?= $d->tempat_lahir_anak_satu ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_satu">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_satu" name="tanggal_lahir_anak_satu" value="<?= date($d->tanggal_lahir_anak_satu) ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_satu">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_satu" name="jenis_kelamin_anak_satu" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_satu ?>"><?= $d->jenis_kelamin_anak_satu ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_satu">Agama</label>
                                                        <select id="agama_anak_satu" name="agama_anak_satu" class="form-control">
                                                            <option value="<?= $d->agama_anak_satu ?>"><?= $d->agama_anak_satu ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_satu">Warga Negara</label>
                                                        <select id="warga_negara_anak_satu" name="warga_negara_anak_satu" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_satu ?>"><?= $d->warga_negara_anak_satu ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_satu">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_satu" name="pendidikan_terakhir_anak_satu" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_satu ?>"><?= $d->pendidikan_terakhir_anak_satu ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_satu">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_satu" name="pekerjaan_anak_satu" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_satu ?>"><?= $d->pekerjaan_anak_satu ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_satu">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_satu" name="status_kawin_anak_satu" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_satu ?>"><?= $d->status_kawin_anak_satu ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_satu">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_satu" name="status_keluarga_anak_satu" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_satu ?>"><?= $d->status_keluarga_anak_satu ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_satu">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_satu" name="no_paspor_anak_satu" value="<?= $d->no_paspor_anak_satu; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_satu">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_satu" name="no_kitab_anak_satu" value="<?= $d->no_kitab_anak_satu; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_satu">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_satu" name="nama_ayah_anak_satu" value="<?= $d->nama_ayah_anak_satu; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_satu">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_satu" name="nama_ibu_anak_satu" value="<?= $d->nama_ibu_anak_satu; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (3)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_dua">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_dua" name="nik_anak_dua" value="<?= $d->nik_anak_dua; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_dua">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_dua" name="nama_anak_dua" value="<?= $d->nama_anak_dua; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_dua">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_dua" name="tempat_lahir_anak_dua" value="<?= $d->tempat_lahir_anak_dua; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_dua">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_dua" name="tanggal_lahir_anak_dua" value="<?= date($d->tanggal_lahir_anak_dua); ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_dua">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_dua" name="jenis_kelamin_anak_dua" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_dua; ?>"><?= $d->jenis_kelamin_anak_dua; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_dua">Agama</label>
                                                        <select id="agama_anak_dua" name="agama_anak_dua" class="form-control">
                                                            <option value="<?= $d->agama_anak_dua; ?>"><?= $d->agama_anak_dua; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_dua">Warga Negara</label>
                                                        <select id="warga_negara_anak_dua" name="warga_negara_anak_dua" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_dua; ?>"><?= $d->warga_negara_anak_dua; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_dua">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_dua" name="pendidikan_terakhir_anak_dua" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_dua; ?>"><?= $d->pendidikan_terakhir_anak_dua; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_dua">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_dua" name="pekerjaan_anak_dua" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_dua; ?>"><?= $d->pekerjaan_anak_dua; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_dua">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_dua" name="status_kawin_anak_dua" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_dua; ?>"><?= $d->status_kawin_anak_dua; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_dua">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_dua" name="status_keluarga_anak_dua" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_dua; ?>"><?= $d->status_keluarga_anak_dua; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_dua">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_dua" name="no_paspor_anak_dua" value="<?= $d->no_paspor_anak_dua; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_dua">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_dua" name="no_kitab_anak_dua" value="<?= $d->no_kitab_anak_dua; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_dua">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_dua" name="nama_ayah_anak_dua" value="<?= $d->nama_ayah_anak_dua; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_dua">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_dua" name="nama_ibu_anak_dua" value="<?= $d->nama_ibu_anak_dua; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (4)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_tiga">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_tiga" name="nik_anak_tiga" value="<?= $d->nik_anak_tiga; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_tiga">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_tiga" name="nama_anak_tiga" value="<?= $d->nama_anak_tiga; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_tiga">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_tiga" name="tempat_lahir_anak_tiga" value="<?= $d->tempat_lahir_anak_tiga; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_tiga">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_tiga" name="tanggal_lahir_anak_tiga" value="<?= $d->tanggal_lahir_anak_tiga; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_tiga">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_tiga" name="jenis_kelamin_anak_tiga" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_tiga; ?>"><?= $d->jenis_kelamin_anak_tiga; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_tiga">Agama</label>
                                                        <select id="agama_anak_tiga" name="agama_anak_tiga" class="form-control">
                                                            <option value="<?= $d->agama_anak_tiga; ?>"><?= $d->agama_anak_tiga; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_tiga">Warga Negara</label>
                                                        <select id="warga_negara_anak_tiga" name="warga_negara_anak_tiga" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_tiga; ?>"><?= $d->warga_negara_anak_tiga; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_tiga">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_tiga" name="pendidikan_terakhir_anak_tiga" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_tiga; ?>"><?= $d->pendidikan_terakhir_anak_tiga; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_tiga">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_tiga" name="pekerjaan_anak_tiga" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_tiga; ?>"><?= $d->pekerjaan_anak_tiga; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_tiga">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_tiga" name="status_kawin_anak_tiga" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_tiga; ?>"><?= $d->status_kawin_anak_tiga; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_tiga">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_tiga" name="status_keluarga_anak_tiga" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_tiga; ?>"><?= $d->status_keluarga_anak_tiga; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_tiga">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_tiga" name="no_paspor_anak_tiga" value="<?= $d->no_paspor_anak_tiga; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_tiga">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_tiga" name="no_kitab_anak_tiga" value="<?= $d->no_kitab_anak_tiga; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_tiga">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_tiga" name="nama_ayah_anak_tiga" value="<?= $d->nama_ayah_anak_tiga; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_tiga">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_tiga" name="nama_ibu_anak_tiga" value="<?= $d->nama_ibu_anak_tiga; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (5)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_empat">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_empat" name="nik_anak_empat" value="<?= $d->nik_anak_empat; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_empat">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_empat" name="nama_anak_empat" value="<?= $d->nama_anak_empat; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_empat">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_empat" name="tempat_lahir_anak_empat" value="<?= $d->tempat_lahir_anak_empat; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_empat">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_empat" name="tanggal_lahir_anak_empat" value="<?= $d->tanggal_lahir_anak_empat; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_empat">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_empat" name="jenis_kelamin_anak_empat" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_empat; ?>"><?= $d->jenis_kelamin_anak_empat; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_empat">Agama</label>
                                                        <select id="agama_anak_empat" name="agama_anak_empat" class="form-control">
                                                            <option value="<?= $d->agama_anak_empat; ?>"><?= $d->agama_anak_empat; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_empat">Warga Negara</label>
                                                        <select id="warga_negara_anak_empat" name="warga_negara_anak_empat" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_empat; ?>"><?= $d->warga_negara_anak_empat; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_empat">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_empat" name="pendidikan_terakhir_anak_empat" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_empat; ?>"><?= $d->pendidikan_terakhir_anak_empat; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_empat">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_empat" name="pekerjaan_anak_empat" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_empat; ?>"><?= $d->pekerjaan_anak_empat; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_empat">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_empat" name="status_kawin_anak_empat" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_empat; ?>"><?= $d->status_kawin_anak_empat; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_empat">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_empat" name="status_keluarga_anak_empat" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_empat; ?>"><?= $d->status_keluarga_anak_empat; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_empat">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_empat" name="no_paspor_anak_empat" value="<?= $d->no_paspor_anak_empat; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_empat">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_empat" name="no_kitab_anak_empat" value="<?= $d->no_kitab_anak_empat; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_empat">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_empat" name="nama_ayah_anak_empat" value="<?= $d->nama_ayah_anak_empat; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_empat">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_empat" name="nama_ibu_anak_empat" value="<?= $d->nama_ibu_anak_empat; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (6)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_lima">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_lima" name="nik_anak_lima" value="<?= $d->nik_anak_lima; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_lima">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_lima" name="nama_anak_lima" value="<?= $d->nama_anak_lima; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_lima">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_lima" name="tempat_lahir_anak_lima" value="<?= $d->tempat_lahir_anak_lima; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_lima">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_lima" name="tanggal_lahir_anak_lima" value="<?= $d->tanggal_lahir_anak_lima; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_lima">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_lima" name="jenis_kelamin_anak_lima" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_lima; ?>"><?= $d->jenis_kelamin_anak_lima; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_lima">Agama</label>
                                                        <select id="agama_anak_lima" name="agama_anak_lima" class="form-control">
                                                            <option value="<?= $d->agama_anak_lima; ?>"><?= $d->agama_anak_lima; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_lima">Warga Negara</label>
                                                        <select id="warga_negara_anak_lima" name="warga_negara_anak_lima" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_lima; ?>"><?= $d->warga_negara_anak_lima; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_lima">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_lima" name="pendidikan_terakhir_anak_lima" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_lima; ?>"><?= $d->pendidikan_terakhir_anak_lima; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_lima">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_lima" name="pekerjaan_anak_lima" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_lima; ?>"><?= $d->pekerjaan_anak_lima; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_lima">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_lima" name="status_kawin_anak_lima" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_lima; ?>"><?= $d->status_kawin_anak_lima; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_lima">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_lima" name="status_keluarga_anak_lima" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_lima; ?>"><?= $d->status_keluarga_anak_lima; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_lima">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_lima" name="no_paspor_anak_lima" value="<?= $d->no_paspor_anak_lima; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_lima">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_lima" name="no_kitab_anak_lima" value="<?= $d->no_kitab_anak_lima; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_lima">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_lima" name="nama_ayah_anak_lima" value="<?= $d->nama_ayah_anak_lima; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_lima">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_lima" name="nama_ibu_anak_lima" value="<?= $d->nama_ibu_anak_lima; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (7)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_enam">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_enam" name="nik_anak_enam" value="<?= $d->nik_anak_enam; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_enam">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_enam" name="nama_anak_enam" value="<?= $d->nama_anak_enam; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_enam">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_enam" name="tempat_lahir_anak_enam" value="<?= $d->tempat_lahir_anak_enam; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_enam">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_enam" name="tanggal_lahir_anak_enam" value="<?= $d->tanggal_lahir_anak_enam; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_enam">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_enam" name="jenis_kelamin_anak_enam" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_enam; ?>"><?= $d->jenis_kelamin_anak_enam; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_enam">Agama</label>
                                                        <select id="agama_anak_enam" name="agama_anak_enam" class="form-control">
                                                            <option value="<?= $d->agama_anak_enam; ?>"><?= $d->agama_anak_enam; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_enam">Warga Negara</label>
                                                        <select id="warga_negara_anak_enam" name="warga_negara_anak_enam" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_enam; ?>"><?= $d->warga_negara_anak_enam; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_enam">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_enam" name="pendidikan_terakhir_anak_enam" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_enam; ?>"><?= $d->pendidikan_terakhir_anak_enam; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_enam">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_enam" name="pekerjaan_anak_enam" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_enam; ?>"><?= $d->pekerjaan_anak_enam; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_enam">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_enam" name="status_kawin_anak_enam" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_enam; ?>"><?= $d->status_kawin_anak_enam; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_enam">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_enam" name="status_keluarga_anak_enam" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_enam; ?>"><?= $d->status_keluarga_anak_enam; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_enam">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_enam" name="no_paspor_anak_enam" value="<?= $d->no_paspor_anak_enam; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_enam">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_enam" name="no_kitab_anak_enam" value="<?= $d->no_kitab_anak_enam; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_enam">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_enam" name="nama_ayah_anak_enam" value="<?= $d->nama_ayah_anak_enam; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_enam">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_enam" name="nama_ibu_anak_enam" value="<?= $d->nama_ibu_anak_enam; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (8)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_tujuh">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_tujuh" name="nik_anak_tujuh" value="<?= $d->nik_anak_tujuh; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_tujuh">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_tujuh" name="nama_anak_tujuh" value="<?= $d->nama_anak_tujuh; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_tujuh">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_tujuh" name="tempat_lahir_anak_tujuh" value="<?= $d->tempat_lahir_anak_tujuh; ?>">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_tujuh">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_tujuh" name="tanggal_lahir_anak_tujuh" value="<?= $d->tanggal_lahir_anak_tujuh; ?>">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_tujuh">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_tujuh" name="jenis_kelamin_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_tujuh; ?>"><?= $d->jenis_kelamin_anak_tujuh; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_tujuh">Agama</label>
                                                        <select id="agama_anak_tujuh" name="agama_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->agama_anak_tujuh; ?>"><?= $d->agama_anak_tujuh; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_tujuh">Warga Negara</label>
                                                        <select id="warga_negara_anak_tujuh" name="warga_negara_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_tujuh; ?>"><?= $d->warga_negara_anak_tujuh; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_tujuh">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_tujuh" name="pendidikan_terakhir_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_tujuh; ?>"><?= $d->pendidikan_terakhir_anak_tujuh; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_tujuh">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_tujuh" name="pekerjaan_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_tujuh; ?>"><?= $d->pekerjaan_anak_tujuh; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_tujuh">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_tujuh" name="status_kawin_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_tujuh; ?>"><?= $d->status_kawin_anak_tujuh; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_tujuh">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_tujuh" name="status_keluarga_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_tujuh; ?>"><?= $d->status_keluarga_anak_tujuh; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_tujuh">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_tujuh" name="no_paspor_anak_tujuh" value="<?= $d->no_paspor_anak_tujuh; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_tujuh">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_tujuh" name="no_kitab_anak_tujuh" value="<?= $d->no_kitab_anak_tujuh; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_tujuh">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_tujuh" name="nama_ayah_anak_tujuh" value="<?= $d->nama_ayah_anak_tujuh; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_tujuh">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_tujuh" name="nama_ibu_anak_tujuh" value="<?= $d->nama_ibu_anak_tujuh; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (9)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_delapan">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_delapan" name="nik_anak_delapan" value="<?= $d->nik_anak_delapan; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_delapan">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_delapan" name="nama_anak_delapan" value="<?= $d->nama_anak_delapan; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_delapan">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_delapan" name="tempat_lahir_anak_delapan" value="<?= $d->tempat_lahir_anak_delapan; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_delapan">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_delapan" name="tanggal_lahir_anak_delapan" value="<?= $d->tanggal_lahir_anak_delapan; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_delapan">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_delapan" name="jenis_kelamin_anak_delapan" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_delapan; ?>"><?= $d->jenis_kelamin_anak_delapan; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_delapan">Agama</label>
                                                        <select id="agama_anak_delapan" name="agama_anak_delapan" class="form-control">
                                                            <option value="<?= $d->agama_anak_delapan; ?>"><?= $d->agama_anak_delapan; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_delapan">Warga Negara</label>
                                                        <select id="warga_negara_anak_delapan" name="warga_negara_anak_delapan" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_delapan; ?>"><?= $d->warga_negara_anak_delapan; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_delapan">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_delapan" name="pendidikan_terakhir_anak_delapan" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_delapan; ?>"><?= $d->pendidikan_terakhir_anak_delapan; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_anak_delapan">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_delapan" name="pekerjaan_anak_delapan" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_delapan; ?>"><?= $d->pekerjaan_anak_delapan; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_delapan">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_delapan" name="status_kawin_anak_delapan" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_delapan; ?>"><?= $d->status_kawin_anak_delapan; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_delapan">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_delapan" name="status_keluarga_anak_delapan" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_delapan; ?>"><?= $d->status_keluarga_anak_delapan; ?></option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_delapan">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_delapan" name="no_paspor_anak_delapan" value="<?= $d->no_paspor_anak_delapan; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_delapan">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_delapan" name="no_kitab_anak_delapan" value="<?= $d->no_kitab_anak_delapan; ?>" readonly>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_delapan">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_delapan" name="nama_ayah_anak_delapan" value="<?= $d->nama_ayah_anak_delapan; ?>" readonly>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_delapan">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_delapan" name="nama_ibu_anak_delapan" value="<?= $d->nama_ibu_anak_delapan; ?>" readonly>
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
foreach ($pengajuan_kk as $d) : $i++ ?>
    <div class="modal fade" id="ubah<?= $d->kode_surat ?>" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahLabel">Form Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/pengajuan_kk_ubah'); ?>" method="POST">
                    <input type="hidden" name="kode_surat" id="kode_surat" value="<?= $d->kode_surat ?>">
                    <div class="modal-body">
                    <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pemohon (Kepala Keluarga)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_surat">No Surat</label>
                                                        <input type="number" class="form-control text-dark" id="no_surat" name="no_surat" value="<?= $d->no_surat; ?>" placeholder="Nomor Surat">
                                                        <?= form_error('no_surat', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik" name="nik" value="<?= $d->nik; ?>" placeholder="Nomor NIK">
                                                        <?= form_error('nik', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-5">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama" name="nama" value="<?= $d->nama; ?>" placeholder="Nama">
                                                        <?= form_error('nama', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir" name="tempat_lahir" value="<?= $d->tempat_lahir; ?>" placeholder="Tempat lahir">
                                                        <?= form_error('tempat_lahir', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir" name="tanggal_lahir" value="<?= $d->tanggal_lahir; ?>" placeholder="Tanggal lahir">
                                                            <?= form_error('tanggal_lahir', '<small class="text-danger">', '</small>'); ?>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin" name="jenis_kelamin" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin; ?>"><?= $d->jenis_kelamin; ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                        <?= form_error('jenis_kelamin', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama">Agama</label>
                                                        <select id="agama" name="agama" class="form-control">
                                                            <option value="<?= $d->agama; ?>"><?= $d->agama; ?></option>
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
                                                        <label class="form-control-label" for="status_kawin">Status Pernikahan</label>
                                                        <select id="status_kawin" name="status_kawin" class="form-control">
                                                            <option value="<?= $d->status_kawin; ?>"><?= $d->status_kawin; ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                        <?= form_error('status_kawin', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara">Warga Negara</label>
                                                        <select id="warga_negara" name="warga_negara" class="form-control">
                                                            <option value="<?= $d->warga_negara; ?>"><?= $d->warga_negara; ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                        <?= form_error('warga_negara', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir; ?>"><?= $d->pendidikan_terakhir; ?></option>
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
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                                        <select id="pekerjaan" name="pekerjaan" class="form-control">
                                                            <option value="<?= $d->pekerjaan; ?>"><?= $d->pekerjaan; ?></option>
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
                                                        <label class="form-control-label" for="status_keluarga">Status Keluarga</label>
                                                        <select id="status_keluarga" name="status_keluarga" class="form-control">
                                                            <option value="<?= $d->status_keluarga; ?>"><?= $d->status_keluarga; ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                        <?= form_error('status_keluarga', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor" name="no_paspor" value="<?= $d->no_paspor; ?>" placeholder="Nomor Paspor">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab" name="no_kitab" value="<?= $d->no_kitab; ?>" placeholder="Nomor Kitab">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah" name="nama_ayah" value="<?= $d->nama_ayah; ?>" placeholder="Nama Ayah">
                                                        <?= form_error('nama_ayah', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu" name="nama_ibu" value="<?= $d->nama_ibu; ?>" placeholder="Nama Ibu">
                                                        <?= form_error('nama_ibu', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="alamat">Alamat</label>
                                                        <textarea type="text" class="form-control text-dark" name="alamat" id="alamat" value="<?= $d->alamat; ?>" placeholder="Alamat"><?= $d->alamat; ?></textarea>
                                                        <?= form_error('alamat', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_rt">No RT</label>
                                                        <select id="no_rt" name="no_rt" class="form-control">
                                                            <option value="<?= $d->no_rt; ?>"><?= $d->no_rt; ?></option>
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
                                                            <option value="<?= $d->no_rw; ?>"><?= $d->no_rw; ?></option>
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
                                                        <input type="number" class="form-control text-dark" id="kode_pos" name="kode_pos" value="<?= $d->kode_pos; ?>" placeholder="Kode Pos">
                                                        <?= form_error('kode_pos', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (1)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_pasangan">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_pasangan" name="nik_pasangan" value="<?= $d->nik_pasangan; ?>" placeholder="Nomor NIK Pasangan">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_pasangan">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_pasangan" name="nama_pasangan" value="<?= $d->nama_pasangan; ?>" placeholder="Nama Pasangan">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_pasangan">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_pasangan" name="tempat_lahir_pasangan" value="<?= $d->tempat_lahir_pasangan; ?>" placeholder="Tempat lahir Pasangan">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_pasangan">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_pasangan" name="tanggal_lahir_pasangan" value="<?= date($d->tanggal_lahir_pasangan); ?>" placeholder="Tanggal lahir Pasangan">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_pasangan">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_pasangan" name="jenis_kelamin_pasangan" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_pasangan; ?>"><?= $d->jenis_kelamin_pasangan; ?></option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_pasangan">Agama</label>
                                                        <select id="agama_pasangan" name="agama_pasangan" class="form-control">
                                                            <option value="<?= $d->agama_pasangan; ?>"><?= $d->agama_pasangan; ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_pasangan">Warga Negara</label>
                                                        <select id="warga_negara_pasangan" name="warga_negara_pasangan" class="form-control">
                                                            <option value="<?= $d->warga_negara_pasangan; ?>"><?= $d->warga_negara_pasangan; ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_pasangan">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_pasangan" name="pendidikan_terakhir_pasangan" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_pasangan; ?>"><?= $d->pendidikan_terakhir_pasangan; ?></option>
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
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_pasangan">Pekerjaan</label>
                                                        <select id="pekerjaan_pasangan" name="pekerjaan_pasangan" class="form-control">
                                                            <option value="<?= $d->pekerjaan_pasangan; ?>"><?= $d->pekerjaan_pasangan; ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_pasangan">Status Pernikahan</label>
                                                        <select id="status_kawin_pasangan" name="status_kawin_pasangan" class="form-control" readonly>
                                                            <option value="<?= $d->status_kawin_pasangan; ?>"><?= $d->status_kawin_pasangan; ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_pasangan">Status Keluarga</label>
                                                        <select id="status_keluarga_pasangan" name="status_keluarga_pasangan" class="form-control" readonly>
                                                            <option value="<?= $d->status_keluarga_pasangan; ?>"><?= $d->status_keluarga_pasangan; ?></option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_pasangan">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_pasangan" name="no_paspor_pasangan" value="<?= $d->no_paspor_pasangan; ?>" placeholder="Nomor Paspor Pasangan">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_pasangan">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_pasangan" name="no_kitab_pasangan" value="<?= $d->no_kitab_pasangan; ?>" placeholder="Nomor Kitab Pasangan">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_pasangan">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_pasangan" name="nama_ayah_pasangan" value="<?= $d->nama_ayah_pasangan; ?>" placeholder="Nama Ayah Pasangan">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_pasangan">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_pasangan" name="nama_ibu_pasangan" value="<?= $d->nama_ibu_pasangan; ?>" placeholder="Nama Ibu Pasangan">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (2)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_satu">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_satu" name="nik_anak_satu" value="<?= $d->nik_anak_satu; ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_satu">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_satu" name="nama_anak_satu" value="<?= $d->nama_anak_satu; ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_satu">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_satu" name="tempat_lahir_anak_satu" value="<?= $d->tempat_lahir_anak_satu; ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_satu">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_satu" name="tanggal_lahir_anak_satu" value="<?= $d->tanggal_lahir_anak_satu; ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_satu">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_satu" name="jenis_kelamin_anak_satu" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_satu; ?>"><?= $d->jenis_kelamin_anak_satu; ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_satu">Agama</label>
                                                        <select id="agama_anak_satu" name="agama_anak_satu" class="form-control">
                                                            <option value="<?= $d->agama_anak_satu; ?>"><?= $d->agama_anak_satu; ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_satu">Warga Negara</label>
                                                        <select id="warga_negara_anak_satu" name="warga_negara_anak_satu" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_satu; ?>"><?= $d->warga_negara_anak_satu; ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_satu">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_satu" name="pendidikan_terakhir_anak_satu" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_satu; ?>"><?= $d->pendidikan_terakhir_anak_satu; ?></option>
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
                                                        <label class="form-control-label" for="pekerjaan_anak_satu">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_satu" name="pekerjaan_anak_satu" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_satu; ?>"><?= $d->pekerjaan_anak_satu; ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_satu">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_satu" name="status_kawin_anak_satu" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_satu; ?>"><?= $d->status_kawin_anak_satu; ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_satu">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_satu" name="status_keluarga_anak_satu" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_satu; ?>"><?= $d->status_keluarga_anak_satu; ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_satu">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_satu" name="no_paspor_anak_satu" value="<?= $d->no_paspor_anak_satu; ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_satu">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_satu" name="no_kitab_anak_satu" value="<?= $d->no_kitab_anak_satu; ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_satu">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_satu" name="nama_ayah_anak_satu" value="<?= $d->nama_ayah_anak_satu; ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_satu">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_satu" name="nama_ibu_anak_satu" value="<?= $d->nama_ibu_anak_satu; ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (3)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_dua">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_dua" name="nik_anak_dua" value="<?= $d->nik_anak_dua; ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_dua">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_dua" name="nama_anak_dua" value="<?= $d->nama_anak_dua; ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_dua">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_dua" name="tempat_lahir_anak_dua" value="<?= $d->tempat_lahir_anak_dua; ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_dua">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_dua" name="tanggal_lahir_anak_dua" value="<?= date($d->tanggal_lahir_anak_dua); ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_dua">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_dua" name="jenis_kelamin_anak_dua" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_dua; ?>"><?= $d->jenis_kelamin_anak_dua; ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_dua">Agama</label>
                                                        <select id="agama_anak_dua" name="agama_anak_dua" class="form-control">
                                                            <option value="<?= $d->agama_anak_dua; ?>"><?= $d->agama_anak_dua; ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_dua">Warga Negara</label>
                                                        <select id="warga_negara_anak_dua" name="warga_negara_anak_dua" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_dua; ?>"><?= $d->warga_negara_anak_dua; ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_dua">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_dua" name="pendidikan_terakhir_anak_dua" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_dua; ?>"><?= $d->pendidikan_terakhir_anak_dua; ?></option>
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
                                                        <label class="form-control-label" for="pekerjaan_anak_dua">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_dua" name="pekerjaan_anak_dua" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_dua; ?>"><?= $d->pekerjaan_anak_dua; ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_dua">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_dua" name="status_kawin_anak_dua" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_dua; ?>"><?= $d->status_kawin_anak_dua; ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_dua">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_dua" name="status_keluarga_anak_dua" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_dua; ?>"><?= $d->status_keluarga_anak_dua; ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_dua">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_dua" name="no_paspor_anak_dua" value="<?= $d->no_paspor_anak_dua; ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_dua">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_dua" name="no_kitab_anak_dua" value="<?= $d->no_kitab_anak_dua; ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_dua">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_dua" name="nama_ayah_anak_dua" value="<?= $d->nama_ayah_anak_dua; ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_dua">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_dua" name="nama_ibu_anak_dua" value="<?= $d->nama_ibu_anak_dua; ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (4)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_tiga">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_tiga" name="nik_anak_tiga" value="<?= $d->nik_anak_tiga; ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_tiga">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_tiga" name="nama_anak_tiga" value="<?= $d->nama_anak_tiga; ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_tiga">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_tiga" name="tempat_lahir_anak_tiga" value="<?= $d->tempat_lahir_anak_tiga; ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_tiga">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_tiga" name="tanggal_lahir_anak_tiga" value="<?= date($d->tanggal_lahir_anak_tiga); ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_tiga">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_tiga" name="jenis_kelamin_anak_tiga" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_tiga; ?>"><?= $d->jenis_kelamin_anak_tiga; ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_tiga">Agama</label>
                                                        <select id="agama_anak_tiga" name="agama_anak_tiga" class="form-control">
                                                            <option value="<?= $d->agama_anak_tiga; ?>"><?= $d->agama_anak_tiga; ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_tiga">Warga Negara</label>
                                                        <select id="warga_negara_anak_tiga" name="warga_negara_anak_tiga" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_tiga; ?>"><?= $d->warga_negara_anak_tiga; ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_tiga">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_tiga" name="pendidikan_terakhir_anak_tiga" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_tiga; ?>"><?= $d->pendidikan_terakhir_anak_tiga; ?></option>
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
                                                        <label class="form-control-label" for="pekerjaan_anak_tiga">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_tiga" name="pekerjaan_anak_tiga" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_tiga; ?>"><?= $d->pekerjaan_anak_tiga; ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_tiga">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_tiga" name="status_kawin_anak_tiga" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_tiga; ?>"><?= $d->status_kawin_anak_tiga; ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_tiga">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_tiga" name="status_keluarga_anak_tiga" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_tiga; ?>"><?= $d->status_keluarga_anak_tiga; ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_tiga">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_tiga" name="no_paspor_anak_tiga" value="<?= $d->no_paspor_anak_tiga; ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_tiga">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_tiga" name="no_kitab_anak_tiga" value="<?= $d->no_kitab_anak_tiga; ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_tiga">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_tiga" name="nama_ayah_anak_tiga" value="<?= $d->nama_ayah_anak_tiga; ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_tiga">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_tiga" name="nama_ibu_anak_tiga" value="<?= $d->nama_ibu_anak_tiga; ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (5)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_empat">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_empat" name="nik_anak_empat" value="<?= $d->nik_anak_empat; ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_empat">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_empat" name="nama_anak_empat" value="<?= $d->nama_anak_empat; ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_empat">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_empat" name="tempat_lahir_anak_empat" value="<?= $d->tempat_lahir_anak_empat; ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_empat">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_empat" name="tanggal_lahir_anak_empat" value="<?= date($d->tanggal_lahir_anak_empat); ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_empat">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_empat" name="jenis_kelamin_anak_empat" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_empat; ?>"><?= $d->jenis_kelamin_anak_empat; ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_empat">Agama</label>
                                                        <select id="agama_anak_empat" name="agama_anak_empat" class="form-control">
                                                            <option value="<?= $d->agama_anak_empat; ?>"><?= $d->agama_anak_empat; ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_empat">Warga Negara</label>
                                                        <select id="warga_negara_anak_empat" name="warga_negara_anak_empat" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_empat; ?>"><?= $d->warga_negara_anak_empat; ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_empat">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_empat" name="pendidikan_terakhir_anak_empat" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_empat; ?>"><?= $d->pendidikan_terakhir_anak_empat; ?></option>
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
                                                        <label class="form-control-label" for="pekerjaan_anak_empat">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_empat" name="pekerjaan_anak_empat" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_empat; ?>"><?= $d->pekerjaan_anak_empat; ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_empat">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_empat" name="status_kawin_anak_empat" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_empat; ?>"><?= $d->status_kawin_anak_empat; ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_empat">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_empat" name="status_keluarga_anak_empat" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_empat; ?>"><?= $d->status_keluarga_anak_empat; ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_empat">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_empat" name="no_paspor_anak_empat" value="<?= $d->no_paspor_anak_empat; ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_empat">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_empat" name="no_kitab_anak_empat" value="<?= $d->no_kitab_anak_empat; ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_empat">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_empat" name="nama_ayah_anak_empat" value="<?= $d->nama_ayah_anak_empat; ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_empat">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_empat" name="nama_ibu_anak_empat" value="<?= $d->nama_ibu_anak_empat; ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (6)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_lima">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_lima" name="nik_anak_lima" value="<?= $d->nik_anak_lima; ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_lima">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_lima" name="nama_anak_lima" value="<?= $d->nama_anak_lima; ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_lima">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_lima" name="tempat_lahir_anak_lima" value="<?= $d->tempat_lahir_anak_lima; ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_lima">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_lima" name="tanggal_lahir_anak_lima" value="<?= date($d->tanggal_lahir_anak_lima); ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_lima">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_lima" name="jenis_kelamin_anak_lima" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_lima; ?>"><?= $d->jenis_kelamin_anak_lima; ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_lima">Agama</label>
                                                        <select id="agama_anak_lima" name="agama_anak_lima" class="form-control">
                                                            <option value="<?= $d->agama_anak_lima; ?>"><?= $d->agama_anak_lima; ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_lima">Warga Negara</label>
                                                        <select id="warga_negara_anak_lima" name="warga_negara_anak_lima" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_lima; ?>"><?= $d->warga_negara_anak_lima; ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_lima">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_lima" name="pendidikan_terakhir_anak_lima" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_lima; ?>"><?= $d->pendidikan_terakhir_anak_lima; ?></option>
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
                                                        <label class="form-control-label" for="pekerjaan_anak_lima">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_lima" name="pekerjaan_anak_lima" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_lima; ?>"><?= $d->pekerjaan_anak_lima; ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_lima">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_lima" name="status_kawin_anak_lima" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_lima; ?>"><?= $d->status_kawin_anak_lima; ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_lima">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_lima" name="status_keluarga_anak_lima" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_lima; ?>"><?= $d->status_keluarga_anak_lima; ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_lima">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_lima" name="no_paspor_anak_lima" value="<?= $d->no_paspor_anak_lima; ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_lima">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_lima" name="no_kitab_anak_lima" value="<?= $d->no_kitab_anak_lima; ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_lima">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_lima" name="nama_ayah_anak_lima" value="<?= $d->nama_ayah_anak_lima; ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_lima">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_lima" name="nama_ibu_anak_lima" value="<?= $d->nama_ibu_anak_lima; ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (7)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_enam">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_enam" name="nik_anak_enam" value="<?= $d->nik_anak_enam; ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_enam">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_enam" name="nama_anak_enam" value="<?= $d->nama_anak_enam; ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_enam">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_enam" name="tempat_lahir_anak_enam" value="<?= $d->tempat_lahir_anak_enam; ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_enam">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_enam" name="tanggal_lahir_anak_enam" value="<?= date($d->tanggal_lahir_anak_enam); ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_enam">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_enam" name="jenis_kelamin_anak_enam" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_enam; ?>"><?= $d->jenis_kelamin_anak_enam; ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_enam">Agama</label>
                                                        <select id="agama_anak_enam" name="agama_anak_enam" class="form-control">
                                                            <option value="<?= $d->agama_anak_enam; ?>"><?= $d->agama_anak_enam; ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_enam">Warga Negara</label>
                                                        <select id="warga_negara_anak_enam" name="warga_negara_anak_enam" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_enam; ?>"><?= $d->warga_negara_anak_enam; ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_enam">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_enam" name="pendidikan_terakhir_anak_enam" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_enam; ?>"><?= $d->pendidikan_terakhir_anak_enam; ?></option>
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
                                                        <label class="form-control-label" for="pekerjaan_anak_enam">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_enam" name="pekerjaan_anak_enam" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_enam; ?>"><?= $d->pekerjaan_anak_enam; ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_enam">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_enam" name="status_kawin_anak_enam" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_enam; ?>"><?= $d->status_kawin_anak_enam; ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_enam">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_enam" name="status_keluarga_anak_enam" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_enam; ?>"><?= $d->status_keluarga_anak_enam; ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_enam">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_enam" name="no_paspor_anak_enam" value="<?= $d->no_paspor_anak_enam; ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_enam">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_enam" name="no_kitab_anak_enam" value="<?= $d->no_kitab_anak_enam; ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_enam">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_enam" name="nama_ayah_anak_enam" value="<?= $d->nama_ayah_anak_enam; ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_enam">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_enam" name="nama_ibu_anak_enam" value="<?= $d->nama_ibu_anak_enam; ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (8)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_tujuh">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_tujuh" name="nik_anak_tujuh" value="<?= $d->nik_anak_tujuh; ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_tujuh">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_tujuh" name="nama_anak_tujuh" value="<?= $d->nama_anak_tujuh; ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_tujuh">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_tujuh" name="tempat_lahir_anak_tujuh" value="<?= $d->tempat_lahir_anak_tujuh; ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_tujuh">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_tujuh" name="tanggal_lahir_anak_tujuh" value="<?= $d->tanggal_lahir_anak_tujuh; ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_tujuh">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_tujuh" name="jenis_kelamin_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_tujuh; ?>"><?= $d->jenis_kelamin_anak_tujuh; ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_tujuh">Agama</label>
                                                        <select id="agama_anak_tujuh" name="agama_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->agama_anak_tujuh; ?>"><?= $d->agama_anak_tujuh; ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_tujuh">Warga Negara</label>
                                                        <select id="warga_negara_anak_tujuh" name="warga_negara_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_tujuh; ?>"><?= $d->warga_negara_anak_tujuh; ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_tujuh">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_tujuh" name="pendidikan_terakhir_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_tujuh; ?>"><?= $d->pendidikan_terakhir_anak_tujuh; ?></option>
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
                                                        <label class="form-control-label" for="pekerjaan_anak_tujuh">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_tujuh" name="pekerjaan_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_tujuh; ?>"><?= $d->pekerjaan_anak_tujuh; ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_tujuh">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_tujuh" name="status_kawin_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_tujuh; ?>"><?= $d->status_kawin_anak_tujuh; ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_tujuh">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_tujuh" name="status_keluarga_anak_tujuh" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_tujuh; ?>"><?= $d->status_keluarga_anak_tujuh; ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_tujuh">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_tujuh" name="no_paspor_anak_tujuh" value="<?= $d->no_paspor_anak_tujuh; ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_tujuh">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_tujuh" name="no_kitab_anak_tujuh" value="<?= $d->no_kitab_anak_tujuh; ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_tujuh">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_tujuh" name="nama_ayah_anak_tujuh" value="<?= $d->nama_ayah_anak_tujuh; ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_tujuh">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_tujuh" name="nama_ibu_anak_tujuh" value="<?= $d->nama_ibu_anak_tujuh; ?>" placeholder="Nama Ibu">
                                                    </div>
                                                </div>
                                            </div> 

                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anggota Keluarga (9)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nik_anak_delapan">NIK</label>
                                                        <input type="number" class="form-control text-dark" id="nik_anak_delapan" name="nik_anak_delapan" value="<?= $d->nik_anak_delapan; ?>" placeholder="Nomor NIK Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak_delapan">Nama</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak_delapan" name="nama_anak_delapan" value="<?= $d->nama_anak_delapan; ?>" placeholder="Nama Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak_delapan">Tempat Lahir</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak_delapan" name="tempat_lahir_anak_delapan" value="<?= $d->tempat_lahir_anak_delapan; ?>" placeholder="Tempat lahir Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <div class="form-group">
                                                            <label class="form-control-label" for="tanggal_lahir_anak_delapan">Tanggal Lahir</label>
                                                            <input type="date" class="form-control text-dark" id="tanggal_lahir_anak_delapan" name="tanggal_lahir_anak_delapan" value="<?= $d->tanggal_lahir_anak_delapan; ?>" placeholder="Tanggal lahir Anak">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak_delapan">Jenis Kelamin</label>
                                                        <select id="jenis_kelamin_anak_delapan" name="jenis_kelamin_anak_delapan" class="form-control">
                                                            <option value="<?= $d->jenis_kelamin_anak_delapan; ?>"><?= $d->jenis_kelamin_anak_delapan; ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_anak_delapan">Agama</label>
                                                        <select id="agama_anak_delapan" name="agama_anak_delapan" class="form-control">
                                                            <option value="<?= $d->agama_anak_delapan; ?>"><?= $d->agama_anak_delapan; ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-2">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_anak_delapan">Warga Negara</label>
                                                        <select id="warga_negara_anak_delapan" name="warga_negara_anak_delapan" class="form-control">
                                                            <option value="<?= $d->warga_negara_anak_delapan; ?>"><?= $d->warga_negara_anak_delapan; ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_anak_delapan">Pendidikan Terakhir</label>
                                                        <select id="pendidikan_terakhir_anak_delapan" name="pendidikan_terakhir_anak_delapan" class="form-control">
                                                            <option value="<?= $d->pendidikan_terakhir_anak_delapan; ?>"><?= $d->pendidikan_terakhir_anak_delapan; ?></option>
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
                                                        <label class="form-control-label" for="pekerjaan_anak_delapan">Pekerjaan</label>
                                                        <select id="pekerjaan_anak_delapan" name="pekerjaan_anak_delapan" class="form-control">
                                                            <option value="<?= $d->pekerjaan_anak_delapan; ?>"><?= $d->pekerjaan_anak_delapan; ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div> 
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_kawin_anak_delapan">Status Pernikahan</label>
                                                        <select id="status_kawin_anak_delapan" name="status_kawin_anak_delapan" class="form-control">
                                                            <option value="<?= $d->status_kawin_anak_delapan; ?>"><?= $d->status_kawin_anak_delapan; ?></option>
                                                            <option>Belum Menikah</option>
                                                            <option>Menikah</option>
                                                            <option>Duda</option>
                                                            <option>Janda</option>
                                                        </select>
                                                    </div>
                                                </div>
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="status_keluarga_anak_delapan">Status Keluarga</label>
                                                        <select id="status_keluarga_anak_delapan" name="status_keluarga_anak_delapan" class="form-control">
                                                            <option value="<?= $d->status_keluarga_anak_delapan; ?>"><?= $d->status_keluarga_anak_delapan; ?></option>
                                                            <option>Kepala Keluarga</option>
                                                            <option>Istri</option>
                                                            <option>Anak</option>
                                                            <option>Famili Lain</option>
                                                        </select>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_paspor_anak_delapan">No Paspor</label>
                                                        <input type="number" class="form-control text-dark" id="no_paspor_anak_delapan" name="no_paspor_anak_delapan" value="<?= $d->no_paspor_anak_delapan; ?>" placeholder="Nomor Paspor Anak">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_kitab_anak_delapan">No Kitab</label>
                                                        <input type="number" class="form-control text-dark" id="no_kitab_anak_delapan" name="no_kitab_anak_delapan" value="<?= $d->no_kitab_anak_delapan; ?>" placeholder="Nomor Kitab Anak">
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ayah_anak_delapan">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ayah_anak_delapan" name="nama_ayah_anak_delapan" value="<?= $d->nama_ayah_anak_delapan; ?>" placeholder="Nama Ayah">
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu_anak_delapan">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu_anak_delapan" name="nama_ibu_anak_delapan" value="<?= $d->nama_ibu_anak_delapan; ?>" placeholder="Nama Ibu">
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
foreach ($pengajuan_kk as $d) : $i++ ?>
<form action="<?php echo site_url('pelayanan/pengajuan_kk_hapus'); ?>" method="POST">
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
                        <a type="submit" href="<?php echo site_url('pelayanan/pengajuan_kk_hapus/') . $d->kode_surat; ?>" class="btn btn-danger">Hapus</a>
                    </div>
            </div>
        </div>
    </div>
</form>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->