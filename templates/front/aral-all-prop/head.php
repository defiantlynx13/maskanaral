

<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title> مسکن آرال | خانه</title>

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

    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/swiper/swiper.min.css'?>" type="text/css">

    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/lightbox/magnific-popup.css'?>" type="text/css">


    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/slick/slick.css'?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/slick/slick-theme.css'?>" type="text/css">

    <link rel="stylesheet" href="<?php echo $dash_assets_url.'assets/fonts/b-yekan/css/fontiran.css'?>" type="text/css">

    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/tail/css/modern/tail.select-light-feather.min.css'?>" type="text/css">



    <style type="text/css" rel="stylesheet">

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

        .card-img-top {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px 8px 0px 0px;
        }



        .middle {
            border-radius:5px ;
            background-color:  rgb(253 213 79);
            transition: .5s ease;
            opacity: 0;
            position: absolute;
            top: 30%;
            left: 50%;
            transform: translate(-50%, -50%);
            -ms-transform: translate(-50%, -50%);
            text-align: center;
        }

        hr.style9 {
            border-top: 1px dashed #8c8b8b;
            border-bottom: 1px dashed #fff;
        }

        /*.card:hover .card-img-top {*/
            /*opacity: 0.3;*/
        /*}*/

        /*.card:hover .middle {*/
            /*opacity: 1;*/
        /*}*/

        /*.hover-content {*/
            /*color: white;*/
            /*font-size: 15px;*/
            /*font-weight: bolder;*/
            /*padding: 10px 8px;*/
            /*opacity: 1;*/
            /*width: 100%;*/
        /*}*/

        .city-page-title {
            font-size: 1.7em!important;
            margin-bottom: 16px!important;
            font-weight: 600!important;
            font-family: 'iranyekan' !important;
        }
        h1, h2, h3, h4, h5, h6,input, textarea,a {
            font-family: iranyekan ,roboto ,Arial !important;
        }

        .pulse {
            overflow: visible;
            position: relative;
        }
        .pulse:before {
            content: '';
            display: block;
            position: absolute;
            width: 100%;
            height: 100%;
            top: 0;
            left: 0;
            background-color: inherit;
            border-radius: inherit;
            transition: opacity .3s, transform .3s;
            animation: pulse-animation 1s cubic-bezier(0.24, 0, 0.38, 1) infinite;
            z-index: -1;
        }
        @keyframes pulse-animation {
            0% {
                opacity: 1;
                transform: scale(1);
            }
            50% {
                opacity: 0;
                transform: scale(1.5);
            }
            100% {
                opacity: 0;
                transform: scale(1.5);
            }
        }

        .avatar.avatar-lg {
            height: 5.5rem;
            width: 5.5rem;
        }

        #myInput {
            padding: 20px;
            margin-top: -6px;
            border: 0;
            border-radius: 0;
            background: #f1f1f1;
        }

        .tail-select .select-dropdown ul li.dropdown-option {
            cursor: pointer;
            color: #303438;
            transition: all .3s ease-out;
            direction: ltr;
            text-align: inherit;
            float: right;
        }
        .tail-select .select-label .label-inner {
            display: block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            text-align: center;
        }
        .tail-select input[type=text] {
            text-align: left;
            color: #303438;
            width: 100%;
            height: auto;
            margin: 0;
            padding: 10px 15px;
            display: inline-block;
            outline: 0;
            font-size: 12px;
            line-height: 20px;
            vertical-align: middle;
            background-color: transparent;
            border-width: 0;
            border-style: solid;
            border-color: transparent;
            border-radius: 0;
            box-shadow: none;
            -webkit-box-shadow: none;
        }


        .chip {
            display: inline-block;
            padding: 0 25px;
            height: 35px;
            font-size: 14px;
            line-height: 30px;
            border-radius: 25px;
            border: 1px solid #b1b1b1;
        }

        .container11 {
            position: relative;
            text-align: center;
            color: white;
        }

        .sj-padding{
            border: none;
            padding: .25rem 1rem !important;
        }
        a {
            color: #000000;
        }

        .sj-font-16{
            font-size: 16px!important;
        }

        .sj-font-18{
            font-size: 18px!important;
        }
    </style>

</head>
<body class="navigation-toggle-two">
