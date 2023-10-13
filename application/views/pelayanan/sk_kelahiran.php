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
            <?= form_error('agamapenduduk', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('pendidikanterakhir', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
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
            <?= form_error('nama_ibu', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('agama_ibu', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('pendidikan_terakhir_ibu', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('warga_negara_ibu', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('pekerjaan_ibu', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('nama_anak', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('jenis_kelamin_anak', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <?= form_error('tempat_lahir_anak', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
             <?= form_error('tanggal_lahir_anak', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
             <?= form_error('jam', '<div class="alert alert-danger" role="alert"><button type="button" class="close" data-dismiss="alert" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>', '</div>'); ?>
            <!-- Simple Datatable start -->
            <div class="row">
                <div class="col-lg-12 col-md-12 col-sm-12 mb-30">
                    <div class="pd-20 card-box">
                        <h5 class="h4 text-blue mb-20">Form Surat Keterangan Kelahiran</h5>
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
                                    <form action="<?= base_url('pelayanan/sk_kelahiran_tambah'); ?>" method="POST">
                                        <div class="pd-20">
                                            <div class="row">
                                                <div class="col-lg-3">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="no_surat">No Surat</label>
                                                        <input type="number" class="form-control text-dark" id="no_surat" name="no_surat"value="<?= set_value('no_surat') ?>" placeholder="Nomor Surat">
                                                        <?= form_error('no_surat', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Pemohon (AYAH)</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nonik">NIK Ayah</label>
                                                        <input type="number" class="form-control text-dark" id="nonik" name="nonik"value="<?= set_value('nonik') ?>" placeholder="Nomor NIK">
                                                        <?= form_error('nonik', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="namapenduduk">Nama Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="namapenduduk" name="namapenduduk" value="<?= set_value('namapenduduk') ?>" placeholder="Nama">
                                                        <?= form_error('namapenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempatlahir">Tempat Lahir Ayah</label>
                                                        <input type="text" class="form-control text-dark" id="tempatlahir" name="tempatlahir"value="<?= set_value('tempatlahir') ?>" placeholder="Tempat Lahir Ayah">
                                                        <?= form_error('tempatlahir', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tanggallahir">Tanggal Lahir Ayah</label>
                                                        <input type="date" class="form-control text-dark" id="tanggallahir" name="tanggallahir" value="<?= set_value('tanggallahir') ?>" placeholder="Tanggal Lahir Ayah">
                                                        <?= form_error('tanggallahir', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agamapenduduk">Agama Ayah</label>
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
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikanterakhir">Pendidikan Terakhir Ayah</label>
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
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warganegara">Warga Negara Ayah</label>
                                                        <select id="warganegara" name="warganegara" class="form-control">
                                                            <option value="<?= set_value('warganegara') ?>"><?= set_value('warganegara') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                        <?= form_error('warganegara', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaanpenduduk">Pekerjaan Ayah</label>
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
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Ibu</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="nama_ibu" name="nama_ibu" value="<?= set_value('nama_ibu') ?>" placeholder="Nama Ibu">
                                                        <?= form_error('nama_ibu', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                                        <select id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control">
                                                            <option value="<?= set_value('pekerjaan_ibu') ?>"><?= set_value('pekerjaan_ibu') ?></option>
                                                            <?php foreach ($pekerjaan as $pek) : ?>
                                                                <option value="<?= $pek['pekerjaan']; ?>">
                                                                    <?= $pek['pekerjaan']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('pekerjaan_ibu', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_ibu" name="tempat_lahir_ibu" value="<?= set_value('tempat_lahir_ibu') ?>" placeholder="Tempat Lahir Ibu">
                                                        <?= form_error('tempat_lahir_ibu', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-6">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                                                        <input type="date" class="form-control text-dark" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" value="<?= set_value('tanggal_lahir_ibu') ?>" placeholder="Tanggal Lahir Ibu">
                                                        <?= form_error('tanggal_lahir_ibu', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="agama_ibu">Agama Ibu</label>
                                                        <select id="agama_ibu" name="agama_ibu" class="form-control">
                                                            <option value="<?= set_value('agama_ibu') ?>"><?= set_value('agama_ibu') ?></option>
                                                            <?php foreach ($agama as $aga) : ?>
                                                                <option value="<?= $aga['agama']; ?>">
                                                                    <?= $aga['agama']; ?>
                                                                </option>
                                                            <?php endforeach; ?>
                                                        </select>
                                                        <?= form_error('agama_ibu', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="pendidikan_terakhir_ibu">Pendidikan Terakhir Ibu</label>
                                                        <select id="pendidikan_terakhir_ibu" name="pendidikan_terakhir_ibu" class="form-control">
                                                            <option value="<?= set_value('pendidikan_terakhir_ibu') ?>"><?= set_value('pendidikan_terakhir_ibu') ?></option>
                                                            <option>Tidak Sekolah</option>
                                                            <option>SD</option>
                                                            <option>SMP</option>
                                                            <option>SMA/SMK</option>
                                                            <option>Strata 1</option>
                                                            <option>Strata 2</option>
                                                            <option>Strata 3</option>
                                                        </select>
                                                        <?= form_error('pendidikan_terakhir_ibu', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="warga_negara_ibu">Warga Negara Ibu</label>
                                                        <select id="warga_negara_ibu" name="warga_negara_ibu" class="form-control">
                                                            <option value="<?= set_value('warga_negara_ibu') ?>"><?= set_value('warga_negara_ibu') ?></option>
                                                            <option>WNI</option>
                                                            <option>WNA</option>
                                                        </select>
                                                        <?= form_error('warga_negara_ibu', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="alamatpenduudk">Alamat</label>
                                                        <textarea type="text" class="form-control text-dark" name="alamatpenduduk" id="alamatpenduduk"  placeholder="Alamat"><?= set_value('alamatpenduduk') ?></textarea>
                                                        <?= form_error('alamatpenduduk', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nort">No RT</label>
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
                                                        <label class="form-control-label" for="norw">No RW</label>
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
                                            <hr>
                                            <div class="row">
                                                <div class="col-lg-12">
                                                    <div class="form-group">
                                                        <b>Biodata Anak</b>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-8">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="nama_anak">Nama Anak</label>
                                                        <input type="text" class="form-control text-dark" id="nama_anak" name="nama_anak" value="<?= set_value('nama_anak') ?>" placeholder="Nama anak">
                                                        <?= form_error('nama_anak', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jenis_kelamin_anak">Jenis Kelamin Anak</label>
                                                        <select id="jenis_kelamin_anak" name="jenis_kelamin_anak" class="form-control">
                                                            <option value="<?= set_value('jenis_kelamin_anak') ?>"><?= set_value('jenis_kelamin_anak') ?></option>
                                                            <option>Laki - laki</option>
                                                            <option>Perempuan</option>
                                                        </select>
                                                        <?= form_error('jenis_kelamin_anak', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="row">
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tempat_lahir_anak">Tempat Lahir Anak</label>
                                                        <input type="text" class="form-control text-dark" id="tempat_lahir_anak" name="tempat_lahir_anak" value="<?= set_value('tempat_lahir_anak') ?>" placeholder="Tempat lahir anak">
                                                        <?= form_error('tempat_lahir_anak', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="tanggal_lahir_anak">Tanggal Lahir Anak</label>
                                                        <input type="date" class="form-control text-dark" id="tanggal_lahir_anak" name="tanggal_lahir_anak" value="<?= set_value('tanggal_lahir_anak') ?>" placeholder="Tanggal lahir anak">
                                                        <?= form_error('tanggal_lahir_anak', '<small class="text-danger">', '</small>'); ?>
                                                    </div>
                                                </div>
                                                <div class="col-lg-4">
                                                    <div class="form-group">
                                                        <label class="form-control-label" for="jam">Jam Lahir Anak (Jenis Jam 24)</label>
                                                        <input type="time" class="form-control text-dark" id="jam" name="jam" value="<?= set_value('jam') ?>">
                                                        <?= form_error('jam', '<small class="text-danger">', '</small>'); ?>
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
                                                    <th>Nama Pemohon</th>
                                                    <th>Tanggal Buat</th>
                                                    <th>Nama Surat</th>
                                                    <th class="datatable-nosort">Action</th>
                                                </tr>
                                            </thead>
                                            <tbody>
                                                <?php $i = 1; ?>
                                                <?php foreach ($sk_kelahiran as $skk) : ?>
                                                    <tr class="text-center">
                                                        <td>
                                                            <?= $i ?>
                                                        </td>
                                                        <td>
                                                            <?= $skk->nik ?>
                                                        </td>
                                                        <td>
                                                            <?= ucwords($skk->nama); ?>
                                                        </td>
                                                        <td>
                                                            <?= date('d-m-Y', strtotime($skk->date_created)); ?>
                                                        </td>
                                                        <td class="text-green">
                                                            <b><?= $skk->nama_surat ?></b>
                                                        </td>
                                                        <td>
                                                            <div class="dropdown">
                                                                <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                                    <i class="dw dw-more"></i>
                                                                </a>
                                                                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                                    <a class="dropdown-item" href="<?= base_url('pelayanan/sk_kelahiran_pdf/') . $skk->id; ?>" target="_blank"><i class="dw dw-print"></i> Print/PDF</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#detail<?= $skk->id; ?>"><i class="dw dw-eye"></i> Detail</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#ubah<?= $skk->kode_surat; ?>"><i class="dw dw-edit2"></i> Ubah</a>
                                                                    <a class="dropdown-item" href="#" data-toggle="modal" data-target="#hapus<?= $skk->kode_surat; ?>"><i class="dw dw-delete-3"></i> Hapus</a>
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
foreach ($sk_kelahiran as $skk) : $i++ ?>
    <div class="modal fade" id="detail<?= $skk->id ?>" tabindex="-1" aria-labelledby="detailLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="detailLabel">Detail Data Baru</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/sk_kelahiran_detail'); ?>" method="POST">
                    <input type="hidden" name="id" id="id" value="<?= $skk->id ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_surat">No Surat</label>
                                    <input class="form-control text-dark" value="<?= $skk->no_surat ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label"><b>Biodata Pemohon (AYAH)</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">Nik</label>
                                    <input class="form-control text-dark" value="<?= $skk->nik ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->nama); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir Ayah</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->tempat_lahir); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir Ayah</label>
                                    <input class="form-control text-dark" type="date" value="<?= $skk->tanggal_lahir; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama">Agama</label>
                                    <input class="form-control text-dark" value="<?= $skk->agama ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="warga_negara">Warga Negara</label>
                                    <input class="form-control text-dark" value="<?= $skk->warga_negara ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pendidikanterakhir">Pendidikan Terakhir</label>
                                    <input class="form-control text-dark" value="<?= $skk->pendidikan_terakhir ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan</label>
                                    <input class="form-control text-dark" value="<?= $skk->pekerjaan ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <textarea type="text" class="form-control text-dark" name="alamatpenduduk" id="alamatpenduduk" readonly><?= ucwords($skk->alamat); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <input class="form-control text-dark" value="<?= $skk->no_rt ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rw">No RW</label>
                                    <input class="form-control text-dark" value="<?= $skk->no_rw ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="kode_pos">Kode Pos</label>
                                    <input class="form-control text-dark" value="<?= $skk->kode_pos ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label"><b>Biodata Pemohon (IBU)</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->nama_ibu); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->pekerjaan_ibu); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->tempat_lahir_ibu); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir_ibu">Tanggal Lahir Ibu</label>
                                    <input class="form-control text-dark" type="date" value="<?= $skk->tanggal_lahir_ibu; ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama_ibu">Agama Ibu</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->agama_ibu); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="pendidikan_terakhir_ibu">Pendidikan Terakhir Ibu</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->pendidikan_terakhir_ibu); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="warga_negara_ibu">Warga Negara Ibu</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->warga_negara_ibu); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label"><b>Biodata Anak</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_anak">Nama Anak</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->nama_anak); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin_anak">Jenis Kelamin Anak</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->jenis_kelamin_anak); ?>" readonly>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir_anak">Tempat Lahir Anak</label>
                                    <input class="form-control text-dark" value="<?= ucwords($skk->tempat_lahir_anak); ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir_anak">Tanggal Lahir Anak</label>
                                    <input class="form-control text-dark" type="date" value="<?= $skk->tanggal_lahir_anak ?>" readonly>
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jam_lahir_anak">Jam Lahir Anak</label>
                                    <input class="form-control text-dark" type="time" value="<?=  date('H:i', strtotime($skk->jam));?>" readonly>
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
foreach ($sk_kelahiran as $skk) : $i++ ?>
    <div class="modal fade" id="ubah<?= $skk->kode_surat ?>" tabindex="-1" aria-labelledby="ubahLabel" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="ubahLabel">Form Ubah Data</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('pelayanan/sk_kelahiran_ubah'); ?>" method="POST">
                    <input type="hidden" name="kode_surat" id="kode_surat" value="<?= $skk->kode_surat ?>">
                    <div class="modal-body">
                        <div class="row">
                            <div class="col-lg-3">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_surat">Nomor Surat</label>
                                    <input type="number" class="form-control text-dark" id="no_surat" name="no_surat" value="<?= $skk->no_surat ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label"><b>Biodata Pemohon (AYAH)</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nik">Nik Ayah</label>
                                    <input type="number" class="form-control text-dark" id="nik" name="nik" value="<?= $skk->nik ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama">Nama Ayah</label>
                                    <input type="text" class="form-control text-dark" id="nama" name="nama" value="<?= $skk->nama ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir">Tempat Lahir Ayah</label>
                                    <input type="text" class="form-control text-dark" id="tempat_lahir" name="tempat_lahir" value="<?= $skk->tempat_lahir ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir">Tanggal Lahir Ayah</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_lahir" name="tanggal_lahir" value="<?= $skk->tanggal_lahir ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama">Agama Ayah</label>
                                    <select id="agama" name="agama" class="form-control">
                                        <option value="<?= $skk->agama ?>"><?= $skk->agama ?></option>
                                        <?php foreach ($agama as $aga) : ?>
                                            <option value="<?= $aga['agama']; ?>">
                                                <?= $aga['agama']; ?>
                                            </option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="warga_negara">Warga Negara Ayah</label>
                                    <select id="warga_negara" name="warga_negara" class="form-control">
                                        <option value="<?= $skk->warga_negara ?>"><?= $skk->warga_negara ?></option>
                                        <option>WNI</option>
                                        <option>WNA</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pendidikanterakhir">Pendidikan Terakhir Ayah</label>
                                    <select id="pendidikan_terakhir" name="pendidikan_terakhir" class="form-control">
                                        <option value="<?= $skk->pendidikan_terakhir ?>"><?= $skk->pendidikan_terakhir ?></option>
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
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan">Pekerjaan Ayah</label>
                                    <select id="pekerjaan" name="pekerjaan" class="form-control">
                                        <option value="<?= $skk->pekerjaan ?>"><?= $skk->pekerjaan ?></option>
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
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label" for="alamat">Alamat</label>
                                    <textarea class="form-control text-dark" id="alamat" name="alamat" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')"><?= ucwords($skk->alamat); ?></textarea>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="no_rt">No RT</label>
                                    <select id="no_rt" name="no_rt" class="form-control">
                                        <option value="<?= $skk->no_rt ?>"><?= $skk->no_rt ?></option>
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
                                        <option value="<?= $skk->no_rw ?>"><?= $skk->no_rw ?></option>
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
                                    <input type="number" class="form-control text-dark" id="kode_pos" name="kode_pos" value="<?= $skk->kode_pos ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <hr>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label"><b>Biodata Ibu</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_ibu">Nama Ibu</label>
                                    <input type="text" class="form-control text-dark" id="nama_ibu" name="nama_ibu" value="<?= $skk->nama_ibu ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="pekerjaan_ibu">Pekerjaan Ibu</label>
                                    <select id="pekerjaan_ibu" name="pekerjaan_ibu" class="form-control">
                                        <option value="<?= $skk->pekerjaan ?>"><?= $skk->pekerjaan ?></option>
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
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir_ibu">Tempat Lahir Ibu</label>
                                    <input type="text" class="form-control text-dark" id="tempat_lahir_ibu" name="tempat_lahir_ibu" value="<?= $skk->tempat_lahir_ibu ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_ibu">Tanggal Lahir Ibu</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_lahir_ibu" name="tanggal_lahir_ibu" value="<?= $skk->tanggal_lahir_ibu ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="agama_ibu">Agama Ibu</label>
                                        <select id="agama_ibu" name="agama_ibu" class="form-control">
                                            <option value="<?= $skk->agama_ibu; ?>"><?= $skk->agama_ibu; ?></option>
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
                                    <label class="form-control-label" for="pendidikan_terakhir_ibu">Pendidikan Terakhir Ibu</label>
                                        <select id="pendidikan_terakhir_ibu" name="pendidikan_terakhir_ibu" class="form-control">
                                            <option value="<?= $skk->pendidikan_terakhir_ibu; ?>"><?= $skk->pendidikan_terakhir_ibu; ?></option>
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
                                    <label class="form-control-label" for="warga_negara_ibu">Warga Negara Ibu</label>
                                        <select id="warga_negara_ibu" name="warga_negara_ibu" class="form-control">
                                            <option value="<?= $skk->warga_negara_ibu; ?>"><?= $skk->warga_negara_ibu; ?></option>
                                            <option>WNI</option>
                                            <option>WNA</option>
                                        </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="form-group">
                                    <label class="form-control-label"><b>Biodata Anak</b></label>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-8">
                                <div class="form-group">
                                    <label class="form-control-label" for="nama_anak">Nama Anak</label>
                                    <input type="text" class="form-control text-dark" id="nama_anak" name="nama_anak" value="<?= ucwords($skk->nama_anak); ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jenis_kelamin_anak">Jenis Kelamin Anak</label>
                                    <select id="jenis_kelamin_anak" name="jenis_kelamin_anak" class="form-control">
                                            <option value="<?= $skk->jenis_kelamin_anak; ?>"><?= $skk->jenis_kelamin_anak; ?></option>
                                            <option>Laki - laki</option>
                                            <option>Perempuan</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tempat_lahir_anak">Tempat Lahir Anak</label>
                                    <input type="text" class="form-control text-dark" id="tempat_lahir_anak" name="tempat_lahir_anak" value="<?= ucwords($skk->tempat_lahir_anak); ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="tanggal_lahir_anak">Tanggal Lahir Anak</label>
                                    <input type="date" class="form-control text-dark" id="tanggal_lahir_anak" name="tanggal_lahir_anak" value="<?= ucwords($skk->tanggal_lahir_anak); ?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
                                </div>
                            </div>
                            <div class="col-lg-4">
                                <div class="form-group">
                                    <label class="form-control-label" for="jam">Jam Lahir Anak</label>
                                    <input type="time" class="form-control text-dark" id="jam" name="jam" value="<?=  date('H:i', strtotime($skk->jam));?>" required oninvalid="this.setCustomValidity('Data masih kosong')" oninput="setCustomValidity('')">
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
<!-- Batas ubah data-->

<!-- Modal Hapus Data-->
<?php $i = 0;
foreach ($sk_kelahiran as $skk) : $i++ ?>
<form action="<?php echo site_url('pelayanan/sk_kelahiran_hapus'); ?>" method="POST">
    <div class="modal fade" id="hapus<?= $skk->kode_surat ?>" tabindex="-1" role="dialog" aria-labelledby="hapusLabel" aria-hidden="true">
        <div class="modal-dialog modal-dialog-centered" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="hapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                    <input type="hidden" name="id" class="id" required>
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?php echo site_url('pelayanan/sk_kelahiran_hapus/') . $skk->kode_surat; ?>" class="btn btn-danger">Hapus</a>
                    </div>
            </div>
        </div>
    </div>
</form>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->