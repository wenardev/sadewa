<div class="main-container">
    <div class="pd-ltr-20 xs-pd-20-10">
        <div class="min-height-200px">
            <div class="page-header">
                <div class="row">
                    <div class="col-md-6 col-sm-12">
                        <div class="title">
                            <h4><?= $title; ?></h4>
                        </div>
                        <nav aria-label="breadcrumb" role="navigation">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item">Admin</li>
                                <li class="breadcrumb-item"><a href="<?= base_url('admin/role') ?>" class="text-primary"><?= $title; ?></a></li>
                                <li class="breadcrumb-item"><a>User Access</i></a></li>
                            </ol>
                        </nav>
                    </div>
                </div>
            </div>
            <div class="row clearfix">
                <!-- Large modal -->
                <div class="col-md-8 col-sm-12 mb-30">
                    <div class="pd-20 card-box height-100-p">
                        <?= $this->session->flashdata('message'); ?>
                        <nav aria-label="breadcrumb" class="d-none d-md-inline-block">
                            <ol class="breadcrumb breadcrumb-links breadcrumb-dark">
                                <h4 class="text-primary">User Level : <?= $role['role']; ?></h4>
                            </ol>
                        </nav>
                        <!-- Simple Datatable start -->
                        <div class="table-responsive table-hover">
                            <table class="table table-bordered" id="dataTable" width="100%" cellspacing="0">
                                <thead>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Menu</th>
                                        <th>Access</th>
                                    </tr>
                                </thead>
                                <tfoot>
                                    <tr class="text-center">
                                        <th>No</th>
                                        <th>Menu</th>
                                        <th>Access</th>
                                    </tr>
                                </tfoot>
                                <tbody>
                                    <?php $i = 1; ?>
                                    <?php foreach ($menu as $m) : ?>
                                        <tr class="text-center">
                                            <td scape="row"><?= $i; ?></td>
                                            <td><?= $m['menu']; ?></td>
                                            <td>
                                                <div class="form-check">
                                                    <input class="form-check-input" type="checkbox" <?= check_access($role['id'], $m['id']); ?> data-role="<?= $role['id']; ?>" data-menu="<?= $m['id']; ?>">
                                                </div>
                                            </td>
                                        </tr>
                                        <?php $i++ ?>
                                    <?php endforeach; ?>
                                </tbody>
                            </table>
                        </div>
                        <!-- Simple Datatable End -->
                    </div>
                </div>
                <!-- Medium modal -->

            </div>
        </div>
        <div class="footer-wrap pd-20 mb-20 card-box">
            <?php echo "Copyright © " . (int)date('Y') . " SADEWA"; ?> By Wendi Abdul Rohim
        </div>
    </div>
</div>