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
<script src="<?= base_url(); ?>/assets/deskapp/complete/js/jquery-ui.js" type="text/javascript"></script>
<script type="text/javascript">
    $(document).ready(function() {
        $('#nokk').autocomplete({
            source: "<?php echo site_url('data/autocomplete'); ?>",

            select: function(event, ui) {
                $('[name="nokk"]').val(ui.item.label);
                $('[name="alamat_penduduk"]').val(ui.item.alamat_penduduk);
                $('[name="nort"]').val(ui.item.nort);
                $('[name="norw"]').val(ui.item.norw);
                $('[name="kodepos"]').val(ui.item.kodepos);
                $('[name="kelurahan_penduduk"]').val(ui.item.kelurahan_penduduk);
                $('[name="kecamatan_penduduk"]').val(ui.item.kecamatan_penduduk);
                $('[name="kabupaten_penduduk"]').val(ui.item.kabupaten_penduduk);
                $('[name="provinsi_penduduk"]').val(ui.item.provinsi_penduduk);
            }
        });
    });
</script>

<!-- Jika Membawa Kartu Keluarga Maka Muncul Option Input No Kartu Keluarga -->
<script type="text/javascript">
        function ShowHideDiv() {
            var ddlPassport = document.getElementById("ddlPassport");
            var dvPassport = document.getElementById("dvPassport");
            dvPassport.style.display = ddlPassport.value == "Y" ? "block" : "none";
        }
    </script>
</body>
</body>

</html>