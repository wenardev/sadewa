<!-- js -->
<script src="<?= base_url(); ?>/assets/deskapp/vendors/scripts/core.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/vendors/scripts/script.min.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/vendors/scripts/process.js"></script>
<script src="<?= base_url(); ?>/assets/deskapp/vendors/scripts/layout-settings.js"></script>


<!-- Script untuk rotasi 360 gambar -->
<script src="<?= base_url(); ?>/assets/deskapp/vendors/mode/mode.js"></script>

<!--hide show password -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script src="<?= base_url(); ?>/assets/hideShowPassword/hideShowPassword.min.js"></script>
<script>
    // Example 1:
    // - Password hidden by default
    // - Inner toggle shown
    $('#password-1').hidePassword(true);

    // Example 2:
    // - Password shown by default
    // - Toggle shown on 'focus' of element
    // - Custom toggle class
    $('#password-2').showPassword('focus', {
        toggle: {
            className: 'my-toggle'
        }
    });

    // Example 3:
    // - When checkbox changes, toggle password
    //   visibility based on its 'checked' property
    $('#show-password').change(function() {
        $('#password-3').hideShowPassword($(this).prop('checked'));
    });
</script>
<!-- and hide show password -->


</body>

</html>