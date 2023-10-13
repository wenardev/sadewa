<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->

    <title>403 Access Blocked</title>

    <!-- Google font -->
    <link href="https://fonts.googleapis.com/css?family=Quicksand:700" rel="stylesheet">

    <!-- Font Awesome Icon -->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>/assets/error404/css/font-awesome.min.css" />

    <!-- Custom stlylesheet -->
    <link type="text/css" rel="stylesheet" href="<?= base_url(); ?>/assets/error404/css/style.css" />

    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
		  <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
		  <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
		<![endif]-->

</head>

<body>

    <div id="notfound">
        <div class="notfound">
            <div class="notfound-bg">
                <div></div>
                <div></div>
                <div></div>
            </div>
            <h1>oops!</h1>
            <h2>Error 403 : Page Not Found</h2>
            <a onclick="goBack()">go back</a>
        </div>
    </div>

</body><!-- This templates was made by Colorlib (https://colorlib.com) -->
<script>
    function goBack() {
        window.history.back();
    }
</script>

</html>