
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> مسکن آرال | <?php echo $current_prop->post_title?></title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="https://maskanaral.com/wp-content/uploads/2019/09/IMG_20190130_175554_952-150x150.png"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/bundle.css'?>" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/datepicker/daterangepicker.css'?>">
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'assets/Datepiker/persian-datepicker.css'?>">


    <!-- Fullcalendar -->
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/fullcalendar/fullcalendar.min.css'?>" type="text/css">
    <link href="<?php echo $dash_assets_url.'assets/Cal/fullcalendar.css'?>" rel='stylesheet' />
    <link href="<?php echo $dash_assets_url.'assets/Cal/fullcalendar.print.css'?>" rel='stylesheet' media='print' />

    <!-- Vmap -->
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/vmap/jqvmap.min.css'?>">

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'assets/css/app.min.css'?>" type="text/css">

    <link rel="stylesheet" href=<?php echo $dash_assets_url.'vendors/swiper/swiper.min.css'?>" type="text/css"/>

    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/lightbox/magnific-popup.css'?>" type="text/css">

    <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
          integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
          crossorigin=""/>
    <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"
            integrity="sha512-XQoYMqMTK8LvdxXYG3nZ448hOEQiglfqkJs1NOQV44cWnUrBc8PkAOcXy20w0vlaXaVUearIOBhiXZ5V3ynxwA=="
            crossorigin=""></script>

    <style type="text/css" rel="stylesheet">
        #mapid { height: 280px; }
        .separator {
            display: flex;
            align-items: center;
            text-align: center;
        }
        .separator::before, .separator::after {
            content: '';
            flex: 1;
            border-bottom: 1px solid #000;
        }
        .separator::before {
            margin-right: 2.25em;
            margin-left: 1.25em;
        }
        .separator::after {
            margin-right: 1.25em;
            margin-left: 2.25em;
        }
    </style>

</head>
<body class="navigation-toggle-two sticky-header">