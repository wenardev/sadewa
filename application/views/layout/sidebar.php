<div class="left-side-bar bg-info">
    <div class="brand-logo">
        <a href="<?= base_url('info'); ?>" class="text-center">
            <div id="logo">
                <img src="<?= base_url(); ?>/assets/deskapp/vendors/images/logo/halmaherautara.png" style="height: 60px;" alt="image">
            </div>
            <img src="<?= base_url(); ?>/assets/deskapp/vendors/images/logo/sadewa.png" alt="image" class="light-logo" style="height: 60px;">
        </a>
        <div class="close-sidebar" data-toggle="left-sidebar-close">
            <i class="ion-close-round"></i>
        </div>
    </div>


    <div class="menu-block customscroll">

        <!-- Divider -->
        <div class="sidebar-menu">
            <ul id="accordion-menu">
                
                <!-- QUERY MENU -->
                <?php
                $role_id = $this->session->userdata('role_id');
                $queryMenu = "SELECT `user_menu`.`id`, `menu`
                FROM `user_menu` JOIN `user_access_menu` 
                ON `user_menu`.`id` = `user_access_menu`.`menu_id`
                WHERE `user_access_menu`.`role_id` = $role_id 
                ORDER BY `user_access_menu`.`menu_id` ASC
                ";

                $menu = $this->db->query($queryMenu)->result_array();
                ?>

                <?php foreach ($menu as $m) : ?>

                <li class="dropdown">
						<a href="javascript:;" class="dropdown-toggle">
							<span class="micon icon-copy dw dw-menu"></span>
                                <span class="mtext"><?= $m['menu']; ?>
                            </span>
						</a>

                        <?php
                        $menuId = $m['id'];
                        $querySubMenu = "SELECT *
                            FROM `user_sub_menu` JOIN `user_menu` 
                            ON `user_sub_menu`.`menu_id` = `user_menu`.`id`
                            WHERE `user_sub_menu`.`menu_id` = $menuId 
                            AND `user_sub_menu`.`is_active` = 1
                            ";

                        $subMenu = $this->db->query($querySubMenu)->result_array();
                        ?>


						<ul class="submenu">
                        <?php foreach ($subMenu as $sm) : ?>
                        <?php if ($title == $sm['title']) : ?>
							
                            <li>
                                <a href="<?= base_url($sm['url']); ?>" class="dropdown-toggle no-arrow active">
                                    <span class="mtext"><?= $sm['title']; ?></span> <span class="<?= $sm['icon']; ?>"></span>
                                </a>
                                <?php else : ?>
                            <li>
                                <a href="<?= base_url($sm['url']); ?>" class="dropdown-toggle no-arrow">
                                    <span class="mtext"><?= $sm['title']; ?></span> <span class="<?= $sm['icon']; ?>"></span>
                                </a>
                                <?php endif; ?>
                            </li>
                            
                        <?php endforeach; ?>
						</ul>

                    </li>

                <?php endforeach; ?>

                <li>
                    <a href="<?= base_url('auth/logout'); ?>" class="dropdown-toggle no-arrow">
                        <span class="micon dw dw-logout"></span><span class="mtext">Keluar</span>
                    </a>
                </li>

            </ul>
        </div>
    </div>

</div>
<div class="mobile-menu-overlay"></div>