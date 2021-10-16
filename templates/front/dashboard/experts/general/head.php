
<!doctype html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>مسکن آرال | فایل ها</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="<?php echo $dash_assets_url.'assets/media/image/favicon.png'?>"/>

    <!-- Plugin styles -->
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/bundle.css'?>" type="text/css">

    <!-- Datepicker -->
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/datepicker/daterangepicker.css'?>">
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'assets/Datepiker/persian-datepicker.css'?>">


    <!-- Fullcalendar -->
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/fullcalendar/fullcalendar.min.css'?>" type="text/css">
    <link href="<?php echo $dash_assets_url.'assets/Cal/fullcalendar.css' ?>" rel='stylesheet' />
    <link href="<?php echo $dash_assets_url.'assets/Cal/fullcalendar.print.css'?>" rel='stylesheet' media='print' />

    <!-- Vmap -->
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/vmap/jqvmap.min.css'?>">

    <!-- App styles -->
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'assets/css/app.min.css'?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/tagsinput/bootstrap-tagsinput.css'?>" type="text/css">
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/select2/css/select2.min.css'?>" type="text/css">

    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/tail/css/modern/tail.select-light-feather.min.css'?>">
    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/dataTable/dataTables.min.css'?>" type="text/css">

    <link rel="stylesheet" href="<?php echo $dash_assets_url.'vendors/confirm/jquery-confirm.min.css'?>" type="text/css">

    <style type="text/css">

        .jconfirm-buttons {
            float: left !important;
        }
        .invalid-feedback {
             display: block;
            width: 100%;
            margin-top: .25rem;
            font-size: 80%;
            color: #dc3545;
        }
        .sj-input
        {
            border-radius: 26px;
            border-color: #b1b1b1;
        }
        td.dataTables_empty {
            text-align: center;
        }
        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 28px;
            direction: rtl;
        }

        .select2-container--default .select2-selection--single .select2-selection__rendered {
            color: #444;
            line-height: 35px;
            direction: rtl;
        }
        @-webkit-keyframes sc-pending{to{background-position:16px 0}}@keyframes sc-pending{to{background-position:16px 0}}
        loadingbar,.loadingbar.orange,.loadingbar:hover{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAMElEQVQoU2P434CADGgALIZfGkkBdmm4AlzSUAW4pcEK8EljyqJJYygYqdLoCjBlAalbv4Hzd/xyAAAAAElFTkSuQmCC)!important;background-repeat:repeat!important;-webkit-animation:sc-pending .5s linear infinite;animation:sc-pending .5s linear infinite}.loadingbar.orange{opacity:.75}.loadingbar.orange:hover{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAMElEQVQoU2P434CADGgALIZfGkkBdmm4AlzSUAW4pcEK8EljyqJJYygYqdLoCjBlAalbv4Hzd/xyAAAAAElFTkSuQmCC)!important;background-repeat:repeat!important;-webkit-animation:sc-pending .5s linear infinite;animation:sc-pending .5s linear infinite;opacity:.95}.loadingbar.green{opacity:.75}.loadingbar.green,.loadingbar.green:hover{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAMElEQVQoU2P434CADGgALIZfGkkBdmm4AlzSUAW4pcEK8EljyqJJYygYqdLoCjBlAalbv4Hzd/xyAAAAAElFTkSuQmCC)!important;background-repeat:repeat!important;-webkit-animation:sc-pending .5s linear infinite;animation:sc-pending .5s linear infinite;background-color:#3097d1}.loadingbar.green:hover{opacity:.95}.loadingbar.gray{opacity:.75}.loadingbar.gray,.loadingbar.gray:hover{background-image:url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABAAAAAQCAQAAAC1+jfqAAAAMElEQVQoU2P434CADGgALIZfGkkBdmm4AlzSUAW4pcEK8EljyqJJYygYqdLoCjBlAalbv4Hzd/xyAAAAAElFTkSuQmCC)!important;background-repeat:repeat!important;-webkit-animation:sc-pending .5s linear infinite;animation:sc-pending .5s linear infinite;background-color:#ebe9ea}.loadingbar.gray:hover{opacity:.95}

        .select2-container--default .select2-search--inline .select2-search__field {
            background: transparent;
            border: none;
            outline: 0;
            box-shadow: none;
            -webkit-appearance: textfield;
            padding-right: 15px;
        }

        .tail-select-container .select-handle {
            width: auto;
            color: #303438;
            cursor: pointer;
            margin: 1px;
            padding: 2px 10px 3px 10px;
            display: inline-block;
            position: relative;
            font-size: 11.844px;
            text-align: left;
            font-weight: 700;
            line-height: 16px;
            text-shadow: none;
            vertical-align: top;
            background-color: #d9d9d9;
            border-width: 0;
            border-style: solid;
            border-color: transparent;
            border-radius: 10px;
            transition: background 142ms linear;
            -webkit-transition: background 142ms linear;
        }

        .tail-select-container {
            margin: 0;
            padding: 3px 5px 2px 5px;
            text-align: right;
            border-radius: 34px;
        }

        .tail-select {
            width: 250px;
            margin: 1px;
            padding: 0;
            display: inline-block;
            position: relative;
            font-size: 11px;
            line-height: 22px;
            font-family: inherit;
            direction: rtl;
        }

        .tail-select .select-dropdown ul li.dropdown-option {
            cursor: pointer;
            color: #303438;
            transition: all .3s ease-out;
            /* float: right; */
            /* direction: rtl; */
            text-align: right;
        }

        .tail-select .select-label .label-inner {
            display: block;
            overflow: hidden;
            white-space: nowrap;
            text-overflow: ellipsis;
            text-align: center;
        }

        .swal-button-container {
            margin: 5px;
            display: inline-block;
            position: relative;
            float: left;
        }

        .sj-bg-green{
            background-color: #00BCD4;
        }
    </style>
</head>
<body>