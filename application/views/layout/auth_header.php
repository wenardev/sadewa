<!DOCTYPE html>
<html>

<head>
    <!-- Basic Page Info -->
    <meta charset="utf-8">
    <title>SADEWA - Sistem Administrasi Desa Untuk Warga</title>

    <!-- Site favicon -->
    <link rel="apple-touch-icon" sizes="180x180" href="vendors/images/apple-touch-icon.png">
    <link rel="icon" type="<?= base_url(); ?>/assets/deskapp/image/png" sizes="32x32" href="vendors/images/favicon-32x32.png">
    <link rel="icon" type="<?= base_url(); ?>/assets/deskapp/image/png" sizes="16x16" href="vendors/images/favicon-16x16.png">

    <!-- Mobile Specific Metas -->
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <!-- Google Font -->
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@300;400;500;600;700;800&display=swap" rel="stylesheet">
    <!-- CSS -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/deskapp/vendors/styles/core.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/deskapp/vendors/styles/icon-font.min.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/deskapp/vendors/styles/style.css">

    <!-- Global site tag (gtag.js) - Google Analytics -->
    <script async src="https://www.googletagmanager.com/gtag/js?id=UA-119386393-1"></script>
    <script>
        window.dataLayer = window.dataLayer || [];

        function gtag() {
            dataLayer.push(arguments);
        }
        gtag('js', new Date());

        gtag('config', 'UA-119386393-1');
    </script>

    <!-- Rotasi Gambar 360 -->
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/deskapp/vendors/styles/floating.css">
    <link rel="stylesheet" type="text/css" href="<?= base_url(); ?>/assets/deskapp/vendors/styles/rotation.css">

    <!-- Show/Hide Password -->
    <link rel="stylesheet" href="<?= base_url(); ?>/assets/hideShowPassword/css/example.wink.css">
    <script src="https://cdnjs.cloudflare.com/ajax/libs/modernizr/2.8.3/modernizr.min.js"></script>
    <script>
        if (Modernizr.input.placeholder) document.getElementsByTagName('html')[0].className += ' inputplaceholder';
    </script>
    <!-- show/hide password -->
</head>

<body class="login-page">