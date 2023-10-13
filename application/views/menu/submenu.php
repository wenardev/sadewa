<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4 class="text-primary"><i class="fa fa-list-alt" aria-hidden="true"></i> <?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Menu</li>
                                <li class="breadcrumb-item" aria-current="page"><a><?= $title; ?></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>

            <?= $this->session->flashdata('message'); ?>
            <div class="row">

                <!---------------------------Data Table---------------------------------------------->
                <div class="col-xl-12 col-lg-12 col-md-12 col-sm-12 mb-30">
                    <!-- Simple Datatable start -->
                    <div class="card-box mb-30">
                        <div class="pd-20 text">
                            <h5 class="h4">
                                <a class="text-primary">
                                    <i class="fa fa-list-alt" aria-hidden="true"></i> Tabel Judul SubMenu
                                </a>
                            </h5>
                            <a href="" class="btn btn-primary" data-toggle="modal" data-target="#submenutambah">
                                <i class="icon-copy fa fa-plus-square" aria-hidden="true"></i>
                            </a>
                        </div>
                        <div class="pb-20">
                            <table class="data-table table stripe hover nowrap">
                                <thead>
                                    <tr class="text-center">
                                        <th class="table-plus datatable-nosort">No</th>
                                        <th>Title Submenu</th>
                                        <th>Menu</th>
                                        <th>Url</th>
                                        <th>Active</th>
                                        <th class="datatable-nosort">Action</th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($subMenu as $sm) : ?>
                                        <tr class="text-center">
                                            <td>
                                                <?= $i; ?>
                                            </td>
                                            <td><?= $sm['title']; ?></td>
                                            <td><?= $sm['menu']; ?></td>
                                            <td><?= $sm['url']; ?></td>
                                            <td><?= $sm['active']; ?></td>
                                            <td>
                                                <div class="dropdown">
                                                    <a class="btn btn-link font-24 p-0 line-height-1 no-arrow dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                                                        <i class="dw dw-more"></i>
                                                    </a>
                                                    <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#submenuubah<?= $sm['id']; ?>"><i class="dw dw-edit2"></i> Edit</a>
                                                        <a class="dropdown-item" href="#" data-toggle="modal" data-target="#submenuhapus<?= $sm['id']; ?>"><i class="dw dw-delete-3"></i> Delete</a>
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
                <!---------------------------Batas Data Table--------------------------------------->

            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>


<!----------------------------------Modal------------------------------------------------->

<!-- Modal Tambah-->
<div class="modal fade" id="submenutambah" tabindex="-1" aria-labelledby="submenutambahLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="submenutambahLabel">Tambah SubMenu</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form action="<?= base_url('menu/submenu'); ?>" method="POST">
                <div class="modal-body">
                    <div class="form-group">
                        <input type="text" class="form-control" id="title" name="title" placeholder="Nama SubMenu">
                    </div>
                    <div class="form-group">
                        <select id="menu_id" name="menu_id" class="form-control">
                            <option value="">Pilih Menu</option>
                            <?php foreach ($menu as $m) : ?>
                                <option value="<?= $m['id']; ?>">
                                    <?= $m['menu']; ?>
                                </option>
                            <?php endforeach; ?>
                        </select>
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="url" name="url" placeholder="Nama Url">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" id="icon" name="icon" placeholder="Inputkan Kode Icon">
                    </div>

                    <div class="form-group">
                        <div class="form-check">
                            <input class="form-check-input" type="checkbox" value="1" name="is_active" id="is_active" checked>
                            <label class="form-check-label" for="is_active">
                                Active?
                            </label>
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
<!-- Modal Batas Tambah -->

<!-- Modal ubah Data -->
<?php $i = 0;
foreach ($subMenu as $sm) : $i++ ?>
    <div class="modal fade" id="submenuubah<?= $sm['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="menuubahLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="menuubahLabel">Ubah Data SubMenu</h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <form action="<?= base_url('menu/submenuubah'); ?>" method="POST">
                    <input type="hidden" name="id" class="id" value="<?= $sm['id']; ?>">
                    <div class="modal-body">
                        <div class="form-group">
                            <input type="text" class="form-control" id="title" name="title" placeholder="Nama SubMenu" value="<?= $sm['title']; ?>">
                        </div>
                        <div class="form-group">
                            <select id="menu_id" name="menu_id" class="form-control">
                                <option value="<?= $sm['menu_id']; ?>"><?= $sm['menu']; ?></option>
                                <?php foreach ($menu as $m) : ?>
                                    <option value="<?= $m['id']; ?>"><?= $m['menu']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="url" name="url" placeholder="Nama Url" value="<?= $sm['url']; ?>">
                        </div>
                        <div class="form-group">
                            <input type="text" class="form-control" id="icon" name="icon" placeholder="Inputkan Kode Icon" value="<?= $sm['icon']; ?>">
                        </div>
                        <div class="form-group">
                            <select id="is_active" name="is_active" class="form-control">
                                <option value="<?= $sm['is_active']; ?>"><?= $sm['active']; ?></option>
                                <?php foreach ($active as $a) : ?>
                                    <option value="<?= $a['id']; ?>"><?= $a['active']; ?></option>
                                <?php endforeach; ?>
                            </select>
                        </div>
                    </div>
                    <div class="modal-footer">
                        <button class="btn btn-danger" type="button" data-dismiss="modal">Batal</button>
                        <button type="submit" class="btn btn-primary">Ubah</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal ubah -->


<!-- Modal Hapus Data -->
<?php $i = 0;
foreach ($subMenu as $sm) : $i++ ?>
    <div class="modal fade" id="submenuhapus<?= $sm['id']; ?>" tabindex="-1" role="dialog" aria-labelledby="submenuhapusLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h4 class="modal-title text-danger" id="useractivehapusLabel">Peringatan <i class="ion-information-circled"></i></h4>
                    <button class="close" type="button" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">×</span>
                    </button>
                </div>
                <form action="<?= base_url('menu/submenuhapus'); ?>" method="POST">
                    <input type="hidden" name="id" class="id">
                    <div class="modal-body">Yakin ingin menghapus data?</div>
                    <div class="modal-footer">
                        <button class="btn btn-primary" type="button" data-dismiss="modal">Batal</button>
                        <a type="submit" href="<?= base_url('menu/submenuhapus/') . $sm['id']; ?>" class="btn btn-danger">Hapus</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
<?php endforeach; ?>
<!-- Batas Modal Hapus -->

<!---------------------------------Batas Modal ---------------------------------------------->