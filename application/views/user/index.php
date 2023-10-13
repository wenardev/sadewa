<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-user-o" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.html">User</a></li>
                                <li class="breadcrumb-item active" aria-current="page"><?= $title; ?></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?= $this->session->flashdata('message'); ?>

            <div class="row">
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <div class="profile-photo">
                            <a href="modal" data-toggle="modal" data-target="#ubah" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                            <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $user['image']; ?>" alt="image" class="avatar-photo">
                            <div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
                                <?= form_open_multipart('user/edit'); ?>
                                <div class="modal-dialog modal-dialog-centered" role="document">
                                    <div class="modal-content">
                                        <div class="modal-header">
                                            <h5 class="modal-title" id="ubahLabel">Ubah Data</h5>
                                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                                <span aria-hidden="true">&times;</span>
                                            </button>
                                        </div>
                                        <div class="modal-body">
                                            <div class="col-lg">
                                                <div class="row">
                                                    <div class="col-md-12 col-sm-12 text-center">
                                                        <div class="form-group">
                                                            <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $user['image']; ?>" alt="image" class="avatar-photo" style="height: 100px;">
                                                            <br /><br />
                                                            <label class="form-control-label" for="background">Photo</label>
                                                            <input type="file" id="image" name="image" class="form-control text-dark" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Nama</label>
                                                            <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama..." value="<?= $user['nama']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6 col-sm-12">
                                                        <div class="form-group">
                                                            <label>Email</label>
                                                            <input type="email" class="form-control" name="email" id="email" placeholder="Email..." value="<?= $user['email']; ?>" readonly>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                        <div class="modal-footer">
                                            <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                                            <button type="submit" class="btn btn-primary">Ubah</button>
                                        </div>
                                    </div>
                                </div>
                                </form>
                            </div>
                        </div>
                        <h5 class="text-center h5 mb-0"> <?= ucwords($user['nama']); ?></h5>
                        <div class="profile-info">
                            <h5 class="mb-20 h5 text-blue">Imformasi User</h5>
                            <ul>
                                <li>
                                    <span>Email:</span>
                                    <?= $user['email']; ?>
                                </li>
                                <li>
                                    <span>Tanggal Dibuat:</span>
                                    <?= date('d/m/y', strtotime($user['date_created'])) ?>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>

                <div class="col-xl-8 col-lg-8 col-md-8 col-sm-12 mb-30">
                    <div class="card card-box">
                        <div class="card-body">
                            <blockquote class="blockquote mb-0 text-center">
                                <p>
                                <h6 class="mb-0">FORM UBAH PASSWORD</h6>
                                </p>
                            </blockquote>
                            <form action="<?= base_url('user/editpassword'); ?>" method="POST">
                                <div class="form-group">
                                    <div class="row">
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="password">Password Lama</label>
                                                <input type="password" name="password_lama" id="password_lama" class="form-control text-dark" value="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                <?= form_error('password_lama', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="password">Masukan Password Baru</label>
                                                <input type="password" name="password_baru" id="password_baru" class="form-control text-dark" value="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                <?= form_error('password_baru', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                        <div class="col-lg-4">
                                            <div class="form-group">
                                                <label class="form-control-label" for="password">Masukan Kembali Password</label>
                                                <input type="password" name="password_konfirmasi" id="password_konfirmasi" class="form-control text-dark" value="" required oninvalid="this.setCustomValidity('Data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                <?= form_error('password_konfirmasi', '<small class="text-danger">', '</small>'); ?>
                                            </div>
                                        </div>
                                    </div>
                                    <button type="submit" class="btn btn-sm btn-primary">Ubah Password</button>
                                </div>
                            </form>
                        </div>
                    </div>

                </div>

            </div>

        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>

<div class="modal fade" id="ubah" tabindex="-1" role="dialog" aria-labelledby="ubahLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="ubahLabel">Ubah Data</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="col-lg">
                    <div class="row">
                        <div class="col-md-6 col-sm-12 text-center">
                            <div class="form-group">
                                <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $user['image']; ?>" alt="" class="avatar-photo" style="height: 100px;">
                                <br /><br />
                                <label class="form-control-label" for="background">Photo</label>
                                <input type="file" id="image" name="image" class="form-control text-dark">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12 text-center">
                            <div class="form-group">
                                <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $user['background']; ?>" alt="" class="avatar-photo" style="height: 100px;">
                                <br /><br />
                                <label class="form-control-label" for="background">Background</label>
                                <input type="file" id="background" name="background" class="form-control text-dark">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Nama</label>
                                <input type="text" class="form-control" name="nama" id="nama" placeholder="Nama..." value="<?= $user['nama']; ?>">
                            </div>
                        </div>
                        <div class="col-md-6 col-sm-12">
                            <div class="form-group">
                                <label>Email</label>
                                <input type="email" class="form-control" name="email" id="email" placeholder="Email..." value="<?= $user['email']; ?>" readonly>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                <button type="submit" class="btn btn-primary">Ubah</button>
            </div>
        </div>
        </form>
    </div>
</div>