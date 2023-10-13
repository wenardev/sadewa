</body><!-- js -->
<script src="<?= base_url(); ?>/assets/deskapp/vendors/scripts/core.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/vendors/scripts/script.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/vendors/scripts/process.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/scripts/layout-settings.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/jquery.dataTables.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/dataTables.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/dataTables.responsive.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/responsive.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/vendors/scripts/dashboard.js"></script>
<!-- buttons for Export datatable -->
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/dataTables.buttons.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/buttons.bootstrap4.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/buttons.print.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/buttons.html5.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/buttons.flash.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/pdfmake.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/src/plugins/datatables/js/vfs_fonts.js"></script>
<!-- Datatable Setting js -->
<script src="<?= base_url(); ?>/assets/deskapp/vendors/scripts/datatable-setting.js"></script>
<!--role access-->
<script>
    $('.form-check-input').on('click', function() {
        const menuId = $(this).data('menu');
        const roleId = $(this).data('role');

        $.ajax({
            url: "<?= base_url('admin/changeaccess'); ?>",
            type: 'post',
            data: {
                menuId: menuId,
                roleId: roleId
            },
            success: function() {
                document.location.href = "<?= base_url('admin/roleaccess/'); ?>" + roleId;
            }
        });

    });
</script>

<!--Autocomplete-->
<!--<script src="<?= base_url(); ?>/assets/deskapp/complete/js/jquery-ui.js" type="text/javascript"></script>
    <script type="text/javascript">
    $(document).ready(function() {
        $('#nonik').autocomplete({
            source: "<?php echo site_url('pelayanan/autocomplete'); ?>",

            select: function(event, ui) {
                $('[name="nonik"]').val(ui.item.label);
                $('[name="namapenduduk"]').val(ui.item.namapenduduk);
                $('[name="tempatlahir"]').val(ui.item.tempatlahir);
                $('[name="tanggallahir"]').val(ui.item.tanggallahir);
                $('[name="jeniskelamin"]').val(ui.item.jeniskelamin);
                $('[name="agamapenduduk"]').val(ui.item.agamapenduduk);
                $('[name="pendidikanterakhir"]').val(ui.item.pendidikanterakhir);
                $('[name="statuskawin"]').val(ui.item.statuskawin);
                $('[name="warganegara"]').val(ui.item.warganegara);
                $('[name="pekerjaanpenduduk"]').val(ui.item.pekerjaanpenduduk);
                $('[name="alamatpenduduk"]').val(ui.item.alamatpenduduk);
                $('[name="nort"]').val(ui.item.nort);
                $('[name="norw"]').val(ui.item.norw);
                $('[name="kodepos"]').val(ui.item.kodepos);
            }
        });
    });
</script>-->

<!-- Jika Membawa Kartu Keluarga Maka Muncul Option Input No Kartu Keluarga -->
<script type="text/javascript">
$(function () {
        $("#Button1").on('click', function () {
            $("#Button2").show();
        });
    });
</script>

</body>
</body>

</html>