<div class="header">

    <div class="header-left">
        <div class="menu-icon dw dw-menu">
            <!-- isi bida ada tambahan -->
            <div id="msg"></div>
        </div>
    </div>

    <div class="header-right">
        <div class="user-info-dropdown">
            <div class="dropdown">
                <a class="dropdown-toggle" href="#" role="button" data-toggle="dropdown">
                    <span class="user-icon">
                        <img src="<?= base_url('assets/deskapp/vendors/images/profile/') . $user['image']; ?>">
                    </span>
                    <span class="user-name"><?= $user['nama']; ?></span>
                </a>
                <div class="dropdown-menu dropdown-menu-right dropdown-menu-icon-list">
                    <a class="dropdown-item" href="<?= base_url('user'); ?>"><i class="dw dw-user1"></i> Profile</a>
                    <a class="dropdown-item" href="#"><i class="dw dw-help"></i> Bantuan</a>
                    <a class="dropdown-item" href="<?= base_url('auth/logout'); ?>"><i class="dw dw-logout"></i> Keluar</a>
                </div>
            </div>
        </div>
    </div>

</div>