<div class="login-header box-shadow">
    <div class="container-fluid d-flex justify-content-between align-items-center">
        <div class="brand-logo">
            <a href="<?= base_url('auth'); ?>">
                <div id="logo">
                    <img src="<?= base_url(); ?>/assets/deskapp/vendors/images/logo/halmaherautara.png" style="height: 65px;" alt="image">
                </div>
                &nbsp;&nbsp;
                <div class="text-info">
                    <b>
                        SISTEM ADMINISTRASI DESA UNTUK WARGA
                    </b>
                </div>
            </a>
        </div>
    </div>
</div>
<div class="login-wrap d-flex align-items-center flex-wrap justify-content-center">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-md-7 col-lg-7 text-center">
                <img class="image" src="<?= base_url(); ?>/assets/deskapp/vendors/images/logo/halmaherautara.png" alt="image">
            </div>
            <div class="col-md-5 col-lg-5">
                <div class="login-box bg-white box-shadow border-radius-10">
                    <div class="login-title">
                        <h2 class="text-center text-primary">SADEWA</h2>
                        <h2 class="text-center text-primary">Silakan Masuk</h2>         
                        
                    </div>
                    <?= $this->session->flashdata('message'); ?>
                    <form class="user" method="POST" action="<?= base_url('auth'); ?>">
                        <div class="form-group">
                            <input type="text" class="form-control form-control-user" id="email" name="email" placeholder="Masukan Email..." value="<?= set_value('email'); ?>">
                            <?= form_error('email', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="form-group">
                            <input type="password" class="form-control form-control-user" id="password-1" name="password" placeholder="Masukan Password...">
                            <?= form_error('password', '<small class="text-danger pl-3">', '</small>'); ?>
                        </div>
                        <div class="row">
                            <div class="col-sm-12">
                                <div class="input-group mb-0">
                                    <!--
											use code for form submit
											<input class="btn btn-primary btn-lg btn-block" type="submit" value="Sign In">
										-->
                                    <button class="btn btn-primary btn-lg btn-block" type="submit">Masuk</button>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>