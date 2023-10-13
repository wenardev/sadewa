<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-id-badge" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Info</li>
                                <li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?= $this->session->flashdata('message'); ?>
            <div class="row">


                <?php foreach ($user as $u) : ?>
                    <div class="col-xl-4 col-lg-4 col-md-4 col-sm-12 mb-30">
                        <?= form_open_multipart('admin/edit'); ?>
                        <div class="pd-20 card-box height-100-p">
                            <div class="profile-photo">
                                <a href="modal" data-toggle="modal" data-target="#ubah" class="edit-avatar"><i class="fa fa-pencil"></i></a>
                                <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $u['image']; ?>" alt="" class="avatar-photo">

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
                                                        <div class="col-lg-12">
                                                            <div class="form-group text-center">
                                                                <h3>
                                                                    <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $u['image']; ?>" class="rounded-circle" style="height: 100px;">
                                                                </h3>
                                                                <label class="form-control-label" for="image">Photo Profile</label>
                                                                <input type="file" id="image" name="image" class="form-control text-dark">
                                                            </div>
                                                        </div>
                                                    </div>

                                                    <div class="row">
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-control-label" for="nama">Nama</label>
                                                                <input type="text" class="form-control" id="nama" name="nama" placeholder="Masukan Nama" value="<?= $u['nama']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
                                                            </div>
                                                        </div>
                                                        <div class="col-lg-6">
                                                            <div class="form-group">
                                                                <label class="form-control-label" for="email">Email</label>
                                                                <input type="email" class="form-control" id="email" name="email" placeholder="Masukan Email" value="<?= $u['email']; ?>" required oninvalid="this.setCustomValidity('data tidak boleh kosong')" oninput="setCustomValidity('')">
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
                                </div>

                            </div>
                            <h5 class="text-center h5 mb-0"><?= $u['nama']; ?></h5>
                            <p class="text-center text-muted font-14"> <?= $u['role']; ?></p>
                            <div class="profile-info">
                                <h5 class="mb-20 h5 text-blue">Imformasi User</h5>
                                <ul>
                                    <li>
                                        <span>Email:</span>
                                        <?= $u['email']; ?>
                                    </li>
                                    <li>
                                        <span>Bergabung Sejak:</span>
                                        <?= date('d F Y', $u['date_created']); ?>
                                    </li>
                                </ul>
                            </div>
                        </div>
                        </form>
                    </div>
                <?php endforeach; ?>

            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>