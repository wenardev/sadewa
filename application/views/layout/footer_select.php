</body>

<!-- js -->
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

<!--ini adalah script nya select search tail-->
<script src="<?= base_url(); ?>/assets/tail/js/tail.select-full.min.js"></script>
<script>
    tail.select("#makanan", {
        search: true
    });
</script>
<!--ini adalah script nya select search tail-->

<script>
    $(document).ready(function() {
        $('#example').DataTable({
            select: true
        });
    });
</script>

</body>
</body>

</html>