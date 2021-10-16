<?php
use Plugin_Name_Dir\Includes\Functions\Utility;
$dash_assets_url=trailingslashit( PLUGIN_NAME_URL ) . 'assets/dashboard/';
$post_meta=get_post_meta($current_prop->ID);
?>
<!-- begin::main -->
<div id="main">

    <!-- begin::navigation -->
<!--    --><?php //  Utility::load_template( 'aral-prop.sidebar', compact( 'dash_assets_url' ), 'front' ); ?>
    <!-- end::navigation -->

    <!-- begin::main-content -->
    <div class="main-content">
        <!-- begin::page-header -->
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h6 class="breadcrumb-item">
                    <a  href="<?php echo home_url('aral-all-prop');?>"><i class="fa fa-arrow-right" aria-hidden="true"></i>&nbsp;&nbsp;  تمام املاک  </a>
                </h6>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo home_url('aral-home')?>">خانه</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page"><?php echo $current_prop->post_title?></li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page-header -->
        <!-- begin::page content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-9 ">
                    <div class="row">


                        <?php
                       $images_nv=Utility::get_prop_images($current_prop->ID);
                        if($images_nv['images_count'] > 0)
                        {
                            $gallery_images=$images_nv['images'];
                            array_splice($gallery_images, 4);
                            ?>
                            <div class="col-md-12">
                                <div class="row p-b-15">
                                    <?php
                                    switch (count($gallery_images))
                                    {
                                        case 1:
                                            ?>
                                            <div class="col-md-12 d-flex align-items-center justify-content-center">
                                                <a class="image-popup-gallery-item" style="height: 400px;" href="<?php echo Utility::convert_to_english_number($gallery_images[0])?>">
                                                    <img src="<?php echo Utility::convert_to_english_number($gallery_images[0])?>" class=" h-100  img-fluid rounded" alt="image">
                                                </a>
                                            </div>
                                            <?php
                                            break;
                                        case 2:
                                            ?>
                                            <div class="col-md-6  d-flex align-items-center justify-content-center">
                                                <a class="image-popup-gallery-item" style="height: 300px;"  href="<?php echo Utility::convert_to_english_number($gallery_images[0])?>">
                                                    <img src="<?php echo Utility::convert_to_english_number($gallery_images[0])?>" class="h-100 img-fluid rounded" alt="image">
                                                </a>
                                            </div>
                                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                                <a class="image-popup-gallery-item" style="height: 300px;"  href="<?php echo Utility::convert_to_english_number($gallery_images[1])?>">
                                                    <img src="<?php echo Utility::convert_to_english_number($gallery_images[1])?>" class="h-100 img-fluid rounded" alt="image">
                                                </a>
                                            </div>
                                            <?php
                                            break;
                                        case 3:
                                            ?>
                                            <div class="col-md-8  d-flex align-items-center justify-content-center">
                                                <a class="image-popup-gallery-item"  style="height: 400px;" href="<?php echo Utility::convert_to_english_number($gallery_images[0])?>">
                                                    <img src="<?php echo Utility::convert_to_english_number($gallery_images[0])?>" class="h-100 img-fluid rounded" alt="image">
                                                </a>
                                            </div>
                                            <div class="col-md-4 d-flex align-items-center justify-content-center">
                                                <div class="row">
                                                    <div class="col-md-12 d-flex align-items-center justify-content-center p-b-10">
                                                        <a class="image-popup-gallery-item"  style="height: 200px;" href="<?php echo Utility::convert_to_english_number($gallery_images[1])?>">
                                                            <img src="<?php echo Utility::convert_to_english_number($gallery_images[1])?>" class=" h-100 img-fluid rounded" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="col-md-12 d-flex align-items-center justify-content-center ">
                                                        <a class="image-popup-gallery-item"  style="height: 200px;"  href="<?php echo Utility::convert_to_english_number($gallery_images[2])?>">
                                                            <img src="<?php echo Utility::convert_to_english_number($gallery_images[2])?>" class=" h-100 img-fluid rounded" alt="image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            break;
                                        case 4:
                                            ?>
                                            <div class="col-md-6  d-flex align-items-center justify-content-center">
                                                <div class="row">
                                                    <div class="col-md-12 d-flex align-items-center justify-content-center p-b-10">
                                                        <a class="image-popup-gallery-item"  style="height: 200px;" href="<?php echo Utility::convert_to_english_number($gallery_images[0])?>">
                                                            <img src="<?php echo Utility::convert_to_english_number($gallery_images[0])?>" class=" h-100 img-fluid rounded" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="col-md-12 d-flex align-items-center justify-content-center ">
                                                        <a class="image-popup-gallery-item"  style="height: 200px;"  href="<?php echo Utility::convert_to_english_number($gallery_images[1])?>">
                                                            <img src="<?php echo Utility::convert_to_english_number($gallery_images[1])?>" class=" h-100 img-fluid rounded" alt="image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="col-md-6 d-flex align-items-center justify-content-center">
                                                <div class="row">
                                                    <div class="col-md-12 d-flex align-items-center justify-content-center p-b-10">
                                                        <a class="image-popup-gallery-item"  style="height: 200px;" href="<?php echo Utility::convert_to_english_number($gallery_images[2])?>">
                                                            <img src="<?php echo Utility::convert_to_english_number($gallery_images[2])?>" class=" h-100 img-fluid rounded" alt="image">
                                                        </a>
                                                    </div>
                                                    <div class="col-md-12 d-flex align-items-center justify-content-center ">
                                                        <a class="image-popup-gallery-item"  style="height: 200px;"  href="<?php echo Utility::convert_to_english_number($gallery_images[3])?>">
                                                            <img src="<?php echo Utility::convert_to_english_number($gallery_images[3])?>" class=" h-100 img-fluid rounded" alt="image">
                                                        </a>
                                                    </div>
                                                </div>
                                            </div>
                                            <?php
                                            break;
                                    }
                                    ?>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                        <div class="col-md-12">
                            <div class="card">

                                <div class="card-body">
                                    <div class="card-title" style="float: left">
                                        <div class="btn btn-outline-light btn-sm mt-3 mt-md-0 ">
                                            <span class="text font-size-15">  <i class="fa fa-calendar-plus-o" aria-hidden="true"></i> <?php echo Utility::prop_date_publish($current_prop->ID)?></span>
                                            &nbsp;  &nbsp;|&nbsp; &nbsp;
                                            <span class="text font-size-15"> <?php echo $current_prop->ID?> <i class="fa fa-hashtag" aria-hidden="true"></i> </span>
                                        </div>
                                    </div>
                                    <dl class="row">
                                        <dt class="col-sm-12">
                                            <h3 class="font-weight-bold font-size-25">
                                                <?php echo $current_prop->post_title?>
                                                <?php
                                                if (current_user_can('editor') || current_user_can('administrator'))
                                                {
                                                    echo '<a href="'.admin_url().'/post.php?post='.$current_prop->ID.'&action=edit'.'" target="_blank"><i class="fa fa-edit text-primary"></i></a>';
                                                }
                                                ?>
                                            </h3>
                                        </dt>
                                        <dt class="col-sm-12">
                                            <div class="list-group list-group-flush">
                                                <a href="#" class="list-group-item d-flex align-items-center font-size-17">
                                                    <i data-feather="map-pin"></i>&nbsp;&nbsp;
                                                     <?php echo get_post_meta($current_prop->ID,'city_name',true).' ، '.get_post_meta($current_prop->ID,'district_name',true) .' ، '.get_post_meta($current_prop->ID,'street',true);?>

                                                    <?php
//                                                    if ((Utility::show_owner_det_or_not($current_prop->ID,get_current_user_id()) or current_user_can('administrator')) and Utility::is_request_from_office())
                                                    if ((Utility::show_owner_det_or_not($current_prop->ID,get_current_user_id()) or current_user_can('administrator')) )
                                                    {
                                                        if(strpos(get_post_meta($current_prop->ID,'address',true), 'پلاک')!== false)
                                                        {
                                                            echo ' , '.get_post_meta($current_prop->ID,'address',true);
                                                        }
                                                        else
                                                        {
                                                            echo ' , '.' پلاک '.get_post_meta($current_prop->ID,'address',true);
                                                        }

                                                    }
                                                    ?>
                                                </a>


                                                <?php
                                                switch ($post_meta['deal_type'][0])
                                                {
                                                    case 'رهن و اجاره':
//                                                        $rent=shortMoneyNumber(faTOen($post_meta['rent'][0]));
//                                                        $mortgage=shortMoneyNumber(faTOen($post_meta['mortgage'][0]));
                                                        ?>
                                                        <a href="#" class="list-group-item d-flex align-items-center font-size-17">
                                                            <i data-feather="dollar-sign"></i>&nbsp;&nbsp;&nbsp;رهن :
                                                            &nbsp;
                                                            <?php
                                                            $numtostring=new \Plugin_Name_Dir\Includes\Functions\Number_To_String();
                                                            echo $numtostring->convert(get_post_meta($current_prop->ID,'mortgage',true)).' '.'تومان';
                                                            ?>
                                                        </a>
                                                        <a href="#" class="list-group-item d-flex align-items-center font-size-17">
                                                            <i data-feather="dollar-sign"></i>&nbsp;&nbsp;&nbsp;اجاره :
                                                            &nbsp;
                                                            <?php
                                                            $numtostring=new \Plugin_Name_Dir\Includes\Functions\Number_To_String();
                                                            echo $numtostring->convert(get_post_meta($current_prop->ID,'rent',true)).' '.'تومان';
                                                            ?>
                                                        </a>
                                                        <?php
                                                        break;


                                                    case 'رهن کامل':
                                                        ?>

                                                            <a href="#" class="list-group-item d-flex align-items-center font-size-17">
                                                            <i data-feather="dollar-sign"></i>&nbsp;&nbsp;&nbsp;رهن :
                                                            &nbsp;
                                                            <?php
                                                            $numtostring=new \Plugin_Name_Dir\Includes\Functions\Number_To_String();
                                                            echo $numtostring->convert(get_post_meta($current_prop->ID,'mortgage',true)).' '.'تومان';
                                                            ?>
                                                        </a>
                                                        <?php
                                                        break;

                                                    default :
                                                        ?>
                                                        <a href="#" class="list-group-item d-flex align-items-center font-size-17">
                                                            <i data-feather="dollar-sign"></i>&nbsp;&nbsp;
                                                            <?php
                                                            $numtostring=new \Plugin_Name_Dir\Includes\Functions\Number_To_String();
                                                            echo $numtostring->convert(get_post_meta($current_prop->ID,'price',true)).' '.'تومان';
                                                            ?>
                                                        </a>

                                                        <a href="#" class="list-group-item d-flex align-items-center font-size-17">
                                                            <i data-feather="dollar-sign"></i>&nbsp;&nbsp;
                                                            <?php
                                                            if ($post_meta['type'][0] == 'خانه ویلایی' or $post_meta['type'][0] == 'زمین' or $post_meta['type'][0]=='ویلا')
                                                            {
	                                                            $infrastructure_area= Utility::convert_to_english_number(get_post_meta($current_prop->ID,'land_area',true));
                                                            }
                                                            else
                                                            {
	                                                            $infrastructure_area= Utility::convert_to_english_number(get_post_meta($current_prop->ID,'infrastructure_area',true));
                                                            }
                                                            $price= get_post_meta($current_prop->ID,'price',true);
                                                            echo 'متری ' . ceil(($price/1000000)/$infrastructure_area).' '.'میلیون تومان';
                                                            ?>
                                                        </a>
                                                        <?php
                                                        break;
                                                }
                                                ?>
                                            </div>
                                        </dt>
                                    </dl>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-md-flex align-items-end justify-content-between">
                                        <h3 class="font-weight-bold border-bottom border-warning p-3 font-size-25">
                                            <i class="fa fa-building-o"></i>&nbsp;&nbsp;
                                            مشخصات کلی <?php echo get_post_meta($current_prop->ID,'type',true) ?>
                                        </h3>
                                    </div>

                                    <div class="row">

                                        <?php
                                        if ($post_meta['type'][0]=='زمین' || $post_meta['type'][0]=='ویلا') {
                                            if (metadata_exists('post',$current_prop->ID,'land_area'))
                                            {
                                                ?>
                                                <div class="col-md-4">
                                                    <div class="list-group list-group-flush">
                                                        <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17">
                                                            <i class="fa fa-arrows" aria-hidden="true" data-toggle="tooltip" title="زیر بنا"></i>&nbsp; متراژ زمین &nbsp;
                                                            <?php echo get_post_meta($current_prop->ID,'land_area',true).' '.'متر';?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }
                                        else
                                        {
                                            if (metadata_exists('post',$current_prop->ID,'infrastructure_area'))
                                            {
                                                ?>
                                                <div class="col-md-4">
                                                    <div class="list-group list-group-flush">
                                                        <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                            <i class="fa fa-arrows" aria-hidden="true" data-toggle="tooltip" title="زیر بنا"></i>&nbsp; زیربنا :&nbsp;
                                                            <?php echo get_post_meta($current_prop->ID,'infrastructure_area',true).' '.'متر';?>
                                                        </a>
                                                    </div>
                                                </div>
                                                <?php
                                            }
                                        }

                                        if($post_meta['commercial_area'][0] and  metadata_exists('post',$current_prop->ID,'commercial_area'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-arrows" aria-hidden="true"></i>&nbsp; متراژ تجاری :&nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'commercial_area',true).' '.'متر';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if (($post_meta['type'][0]!='زمین' || $post_meta['type'][0]!='مغازه و تجاری') and  metadata_exists('post',$current_prop->ID,'bedroom_count'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-hashtag" aria-hidden="true"></i>&nbsp; اتاق خواب :&nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'bedroom_count',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['deed'][0] and  metadata_exists('post',$current_prop->ID,'deed'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-file-text-o" aria-hidden="true"></i>&nbsp; سند :&nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'deed',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }


                                        if($post_meta['dengue'][0] and  metadata_exists('post',$current_prop->ID,'dengue'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-pie-chart" aria-hidden="true"></i>&nbsp; دانگ :&nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'dengue',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        if($post_meta['age'][0] and  metadata_exists('post',$current_prop->ID,'age'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <?php
                                                            if (get_post_meta($current_prop->ID,'age',true) == '0') {
	                                                            ?>
                                                                <i class="fa fa-address-card-o" aria-hidden="true"></i>
	                                                            <?php echo get_post_meta($current_prop->ID,'age',true);?> سال
	                                                            <?php
                                                            }
                                                            else {
                                                                ?>
                                                                    <i class="fa fa-address-card-o" aria-hidden="true"></i>&nbsp; سن بنا :
                                                                    <?php echo get_post_meta($current_prop->ID,'age',true);?> سال
	                                                            <?php
                                                            }
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['floor_count'][0] and  metadata_exists('post',$current_prop->ID,'floor_count'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-hashtag" aria-hidden="true"></i>&nbsp;تعداد طبقات :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'floor_count',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($fls=get_post_meta($current_prop->ID,'floor',true))
                                        {
                                            $fls=str_replace('[','',$fls);
                                            $fls=str_replace(']','',$fls);
                                            $fls=str_replace('"','',$fls);
                                            $fls=explode(',',$fls);
                                            ?>

                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-hashtag" aria-hidden="true"></i>
                                                        &nbsp;
                                                        <?php
                                                        $numItems = count($fls);
                                                        $i = 0;
                                                        foreach ($fls as $fl)
                                                        {
                                                            if ($fl == 0)
                                                            {
                                                                echo 'طبقه همکف';
                                                            }
                                                            elseif ($fl == -1)
                                                            {
                                                                echo 'طبقه منفی یک';
                                                            }
                                                            elseif ($fl == -2)
                                                            {
                                                                echo 'طبقه منفی دو';
                                                            }
                                                            else
                                                            {
                                                                echo ' طبقه ' .$fl;
                                                            }


                                                            if(++$i !== $numItems) {
                                                                echo " | ";
                                                            }
                                                        }
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php

                                        }

                                        if($post_meta['unit_count'][0] and  metadata_exists('post',$current_prop->ID,'unit_count'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-hashtag" aria-hidden="true"></i>&nbsp;تعداد واحد  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'unit_count',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['instruction_phase'][0] and  metadata_exists('post',$current_prop->ID,'instruction_phase'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-puzzle-piece" aria-hidden="true"></i>&nbsp;مرحله ساخت  :
                                                        &nbsp;
                                                        <?php
                                                        switch ($post_meta['instruction_phase'][0])
                                                        {
                                                            case 'installers':
                                                                echo 'نصبیات';
                                                                break;
                                                            case 'joinery':
                                                                echo 'نازک کاری';
                                                                break;
                                                            case 'plate':
                                                                echo 'سفت کاری';
                                                                break;
                                                            case 'frame':
                                                                echo 'اسکلت';
                                                                break;
                                                            case 'foundation':
                                                                echo 'فونداسیون';
                                                                break;
                                                            case 'excavation':
                                                                echo 'خاک برداری';
                                                                break;
                                                            case 'destruction':
                                                                echo 'تخریب';
                                                                break;
                                                        }
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['delivered_at_month'][0] and  metadata_exists('post',$current_prop->ID,'delivered_at_month'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp;ماه تحویل  :
                                                        &nbsp;
                                                        <?php
                                                        switch ($post_meta['delivered_at_month'][0])
                                                        {
                                                            case '1':
                                                                echo 'فروردین';
                                                                break;
                                                            case '2':
                                                                echo 'اردیبهشت';
                                                                break;
                                                            case '3':
                                                                echo 'خرداد';
                                                                break;
                                                            case '4':
                                                                echo 'تیر';
                                                                break;
                                                            case '5':
                                                                echo 'مرداد';
                                                                break;
                                                            case '6':
                                                                echo 'شهریور';
                                                                break;
                                                            case '7':
                                                                echo 'مهر';
                                                                break;
                                                            case '8':
                                                                echo 'آبان';
                                                                break;
                                                            case '9':
                                                                echo 'آذر';
                                                                break;
                                                            case '10':
                                                                echo 'دی';
                                                                break;
                                                            case '11':
                                                                echo 'بهمن';
                                                                break;
                                                            case '12':
                                                                echo 'اسفند';
                                                                break;
                                                        }
                                                        ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['delivered_at_year'][0] and  metadata_exists('post',$current_prop->ID,'delivered_at_year'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-calendar-check-o" aria-hidden="true"></i>&nbsp;سال تحویل  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'delivered_at_year',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['suitable_for'][0] and  metadata_exists('post',$current_prop->ID,'suitable_for'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-flag" aria-hidden="true"></i>&nbsp;مناسب برای  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'suitable_for',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['tree_count'][0] and  metadata_exists('post',$current_prop->ID,'tree_count'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-tree" aria-hidden="true"></i>&nbsp;تعداد درخت  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'tree_count',true).' '.'اصله';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['length'][0] and  metadata_exists('post',$current_prop->ID,'length'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-arrows-h" aria-hidden="true"></i>&nbsp;طول بر  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'length',true).' '.'متر';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }


                                        if($post_meta['breadth'][0] and  metadata_exists('post',$current_prop->ID,'breadth'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-arrows-v" aria-hidden="true"></i>&nbsp; عرض زمین  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'breadth',true).' '.'متر';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['height'][0] and  metadata_exists('post',$current_prop->ID,'height'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-text-height" aria-hidden="true"></i>&nbsp; ارتفاع  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'height',true).' '.'متر';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['modified_area'][0] and  metadata_exists('post',$current_prop->ID,'modified_area'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-cut" aria-hidden="true"></i>&nbsp; متراژ اصلاحی  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'modified_area',true).' '.'متر';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['construction_permit'][0] and  metadata_exists('post',$current_prop->ID,'construction_permit'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-certificate" aria-hidden="true"></i>&nbsp;مجوز ساخت  :
                                                        &nbsp;
                                                        <?php echo (get_post_meta($current_prop->ID,'construction_permit',true) == 1)?'دارد':'ندارد';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['density'][0] and  metadata_exists('post',$current_prop->ID,'density'))
                                            {
                                            ?>
                                        <div class="col-md-4">
                                            <div class="list-group list-group-flush">
                                                <a href="#"
                                                   class="list-group-item d-flex align-items-center font-weight-bold font-size-17">
                                                    <i class="fa fa-users" aria-hidden="true"></i>&nbsp;تراکم :
                                                    &nbsp;
                                                    <?php
                                                    switch (get_post_meta($current_prop->ID,'density',true))
                                                    {
                                                        case 'low':
                                                            echo 'کم';
                                                            break;
                                                        case 'medium':
                                                            echo 'کم';
                                                            break;
                                                        default:
                                                            echo 'زیاد';
                                                            break;
                                                    }
                                                     ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }


                                        if($post_meta['width'][0] and  metadata_exists('post',$current_prop->ID,'width'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-arrows-h" aria-hidden="true"></i>&nbsp;عرض گذر  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'width',true).''.'متر';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        if($post_meta['wall_covering'][0] and  metadata_exists('post',$current_prop->ID,'wall_covering'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-google-wallet" aria-hidden="true"></i>&nbsp;پوشش دیوار  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'wall_covering',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['one_bed_unit_count'][0] and  metadata_exists('post',$current_prop->ID,'one_bed_unit_count'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-bed" aria-hidden="true"></i>&nbsp; اتاق های یک تخته  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'one_bed_unit_count',true).' '.'اتاق';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['two_bed_unit_count'][0] and  metadata_exists('post',$current_prop->ID,'two_bed_unit_count'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-bed" aria-hidden="true"></i>&nbsp; اتاق های دو تخته  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'two_bed_unit_count',true).' '.'اتاق';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['three_bed_unit_count'][0] and  metadata_exists('post',$current_prop->ID,'three_bed_unit_count'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-bed" aria-hidden="true"></i>&nbsp; اتاق های سه تخته  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'three_bed_unit_count',true).' '.'اتاق';?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }


                                        if($post_meta['suite_count'][0] and  metadata_exists('post',$current_prop->ID,'suite_count'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-building" aria-hidden="true"></i>&nbsp; تعداد سوئیت ها  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'suite_count',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }


                                        if($post_meta['bed_count'][0] and  metadata_exists('post',$current_prop->ID,'bed_count'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-bed" aria-hidden="true"></i>&nbsp;تعداد تخت خواب  :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'bed_count',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['position'][0] and  metadata_exists('post',$current_prop->ID,'position'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-bullseye" aria-hidden="true"></i>&nbsp;موقعیت :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'position',true); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['front'][0] and  metadata_exists('post',$current_prop->ID,'front'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-google-wallet" aria-hidden="true"></i>&nbsp;نما :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'front',true); ?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        if($post_meta['flooring'][0] and  metadata_exists('post',$current_prop->ID,'flooring'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-google-wallet" aria-hidden="true"></i>&nbsp;کف پوش :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'flooring',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }
                                        if($post_meta['cabinet'][0] and  metadata_exists('post',$current_prop->ID,'cabinet'))
                                        {
                                            ?>
                                            <div class="col-md-4">
                                                <div class="list-group list-group-flush">
                                                    <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17"  >
                                                        <i class="fa fa-google-wallet" aria-hidden="true"></i>&nbsp;کابینت :
                                                        &nbsp;
                                                        <?php echo get_post_meta($current_prop->ID,'cabinet',true);?>
                                                    </a>
                                                </div>
                                            </div>
                                            <?php
                                        }

                                        ?>

                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-md-flex align-items-end justify-content-between">
                                        <h3 class="font-weight-bold border-bottom border-success p-3 font-size-25">
                                            <i class="fa fa-qrcode"></i>&nbsp;&nbsp;تجهیزات
                                        </h3>
                                    </div>

                                    <div class="row">
                                                <?php
                                                $facalities_name=array(
                                                    'elevator' =>'آسانسور',
                                                    'remote_door' =>'درب برقی',
                                                    'video_iphone' =>'ایفون تصویری',
                                                    'parking' =>'پارکینگ',
                                                    'warehouse' =>'انباری',
                                                    'terrace' =>'تراس',
                                                    'package' =>'پکیج',
                                                    'radiator' =>'رادیاتور',
                                                    'floor_heating' =>'گرمایش از کف',
                                                    'chiller' =>'چیلر',
                                                    'air_conditioning' =>'هواساز',
                                                    'gas_cooler' =>'کولر گازی',
                                                    'water_cooler' =>'کولرآبی',
                                                    'heater' =>'بخاری',
                                                    'water_heater' =>'آب گرمکن',
                                                    'heating' =>'شوفاژ',
                                                    'painted' =>'نقاشی',
                                                    'wallpaper' =>'کاغذ دیواری',
                                                    'paneled' =>'پانل کوبی',
                                                    'desktop_gas' =>'گاز رومیزی',
                                                    'hood' =>'هود',
                                                    'sauna' =>'سونا',
                                                    'jacuzzi' =>'جکوزی',
                                                    'master_bath' =>'حمام مستر',
                                                    'closet' =>'کمد دیواری',
                                                    'security_door' =>'درب ضد سرقت',
                                                    'cctv' =>'دوربین مداربسته',
                                                    'toilet' =>'سرویس فرنگی',
                                                    'pool' =>'استخر',
                                                    'curtain' =>'پرده',
                                                    'luster' =>'لوستر',
                                                );

                                                $facalities=explode(',',get_post_meta($current_prop->ID,'facilities',true));
                                                $facalities_count= count($facalities);
                                                $counter_fac=1;
                                                $tag_close=false;
                                                foreach ($facalities as $facality)
                                                {
                                                 ?>
                                                    <div class="col-md-4">
                                                            <div class="list-group list-group-flush">
                                                                <a href="#" class="list-group-item d-flex align-items-center font-weight-bold font-size-17">
                                                                    <?php echo $facalities_name[trim($facality)];?>
                                                                </a>
                                                            </div>
                                                    </div>
                                                <?php
                                                }
                                                ?>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php
                            if((metadata_exists('post',$current_prop->ID,'description') or metadata_exists('post',$current_prop->ID,'in_use')) and Utility::is_request_from_office() )
                            {
                                $in_use=get_post_meta($current_prop->ID,'in_use',true);
                                $description=get_post_meta($current_prop->ID,'description',true);
                                ?>
                                <div class="col-md-12">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="card-title d-md-flex align-items-end justify-content-between">
                                                <h3 class="font-weight-bold border-bottom border-primary p-3 font-size-25">
                                                    <i class="fa fa-info"></i>&nbsp;&nbsp;  سایر اطلاعات
                                                </h3>
                                            </div>

                                                <dl class="row">
                                                    <?php
                                                    if (metadata_exists('post',$current_prop->ID,'description'))
                                                    {
                                                        ?>
                                                        <dt class="col-sm-3 font-size-20">توضیحات تکمیلی</dt>
                                                        <dd class="col-sm-9 font-size-17"><?php echo $description;?></dd>
                                                        <?php
                                                    }

                                                    if (metadata_exists('post',$current_prop->ID,'in_use'))
                                                    {

                                                        switch ($in_use)
                                                        {
                                                            case 'empty':
	                                                            ?>
                                                                    <dt class="col-sm-3 font-size-20">وضعیت اجاره ملک</dt>
                                                                    <dd class="col-sm-9 font-size-17"> خالی از سکنه </dd>
	                                                            <?php
                                                                break;
	                                                        case 'landlord':
		                                                        ?>
                                                                    <dt class="col-sm-3 font-size-20">وضعیت اجاره ملک</dt>
                                                                    <dd class="col-sm-9 font-size-17">مالک ساکت است</dd>
		                                                        <?php
		                                                        break;
	                                                        case 'tenant':
		                                                        ?>
                                                                    <dt class="col-sm-3 font-size-20">وضعیت اجاره ملک</dt>
                                                                    <dd class="col-sm-9 font-size-17">مستاجر ساکن است</dd>
		                                                        <?php
		                                                        break;
                                                            default:
	                                                            ?>
                                                                <dt class="col-sm-3 font-size-20">وضعیت اجاره ملک</dt>
                                                                <dd class="col-sm-9 font-size-17">خالی از سکنه</dd>
	                                                            <?php
                                                                break;
                                                        }

                                                    }
                                                    ?>
                                                </dl>
                                        </div>
                                    </div>
                                </div>
                                <?php
                            }
                        ?>

                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-md-flex align-items-end justify-content-between">
                                        <h3 class="font-weight-bold border-bottom border-success p-3 font-size-25">
                                           <i class="fa fa-map-marker"></i>&nbsp;&nbsp; موقعیت مکانی
                                        </h3>
                                    </div>

                                    <div class="row">
                                            <div class="col-md-12">
                                                <div id="mapid" class="rounded"></div>
                                            </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="card">
                        <?php
                           $exp_id= Utility::get_prop_exp_id($current_prop->ID);
                        ?>
                        <div class="card-body text-center">
                            <figure class="avatar avatar-lg m-b-20" style="height: 6rem;width: 6rem">
                                <img src="<?php echo wp_get_attachment_url(get_user_meta( $exp_id, 'expert_image', true ));?>" class="rounded-circle" alt="...">
                            </figure>
                            <h5 class="mb-1 font-size-20"><?php echo get_user_meta($exp_id,'amlak_exp_name',true)?></h5>
                            <p class="text-muted font-size-12"> کارشناس</p>
                            <a href="#" class="btn btn-outline-primary font-size-20"><?php echo get_user_meta($exp_id,'amlak_phone_number',true)?></a>
                        </div>

                        <?php
//                        if ((Utility::show_owner_det_or_not($current_prop->ID,get_current_user_id()) or current_user_can('administrator')) and Utility::is_request_from_office())
                        if ((Utility::show_owner_det_or_not($current_prop->ID,get_current_user_id()) or current_user_can('administrator')))
                        {
                            ?>
                            <div class="separator">اطلاعات مالک</div>
                            <div class="card-body">
                                <div class="row text-center">
                                    <div class="col-6">
                                        <span><?php echo get_post_meta($current_prop->ID,'landlord_name',true)?></span>
                                    </div>
                                    <div class="col-6">
                                        <span><?php echo get_post_meta($current_prop->ID,'phone1',true)?></span>
                                    </div>
                                </div>
                            </div>
                            <?php
                        }
                        ?>

                    </div>
                    <?php
                        $similar_props=Utility::get_similar_prop($current_prop->ID);
                        if(count($similar_props) > 0)
                        {
                            ?>
                        <div class="card">
                            <div class="card-body">
                                <h6 class="card-title font-size-25">املاک مشابه</h6>
                                 <?php
                                    foreach ($similar_props as $prop)
                                    {
                                        ?>
                                          <div>
                                                <p class="d-flex justify-content-between">
                                                    <span class=""><a  class="text-primary" href="<?php echo $prop['url'];?>"><?php echo $prop['title']?></a></span>
                                                    <small class="text-muted"><?php echo '&nbsp;&nbsp;&nbsp;'.'متری ' . ceil(($prop['price']/1000000)/$prop['infra_area']).' '.'میلیون تومان'?> </small>
                                                </p>
                                                 <p class="d-flex justify-content-between">
                                                     <span class=""> <i data-feather="map-pin"></i>&nbsp;&nbsp;<?php echo $prop['city_name'].' ، '. $prop['district_name'].' ، '. $prop['street']?></span>
                                                 </p>
                                                 <p class="d-flex justify-content-between">
                                                     <span class=""> <i data-feather="dollar-sign"></i>&nbsp;&nbsp;<?php echo $prop['price_string'];?></span>
                                                 </p>
                                          </div>
                                        <hr>
                                        <?php
                                    }

                                ?>
                            </div>
                        </div>
                    <?php
                        }
                    ?>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card-transparent">
                        <div class="card-body">
                            <div class="row">
                                <div class="col-md-4">
                                    <div class="card-transparent">
                                        <div class="card-body">
                                            <h1 class="font-weight-bold font-size-35 m-b-20">
                                                مسکن آرال
                                                <h4 class="text-muted text-medium"> راهی برای خانه دار شدن شما</h4>
                                            </h1>
                                            <h5 class="m-t-20 line-height-40">
                                                در مسکن آرال با اطمینان بین آگهی‌ها جست‌وجو کنید و به سرعت ملک مورد نظرتون رو پیدا کنید.
                                            </h5>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-transparent">
                                        <div class="card-body">
                                            <div class="pricing-table m-b-20">
                                                <h1 class="font-weight-bold font-size-35 m-b-20">
                                                    همراه با مسکن آرال
                                                </h1>
                                                <ul class="list-group list-group-flush bg-transparent">
                                                    <li class="list-group-item bg-transparent">
                                                        <h5>
                                                            <a href="<?php echo home_url('add_advertise');?>" >ثبت رایگان آگهی ملک</a>
                                                        </h5>
                                                    </li>
                                                    <li class="list-group-item bg-transparent">
                                                        <h5>
                                                            <a href="<?php echo home_url('aral-dashboard');?>" > درخواست رایگان ملک</a>
                                                        </h5>
                                                    </li>
                                                    <li class="list-group-item bg-transparent">
                                                        <h5>
                                                            <a href="<?php echo home_url('aral-dashboard');?>" >پنل کاربری</a>
                                                        </h5>
                                                    </li>

                                                    <li class="list-group-item bg-transparent">
                                                        <h5>
                                                            <a href="<?php echo home_url('aral-contact');?>" >تماس با ما</a>
                                                        </h5>
                                                    </li>


                                                    <li class="list-group-item bg-transparent">
                                                        <h5>
                                                            <a href="<?php echo home_url('aral-about');?>" >درباره ما</a>
                                                        </h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-4">
                                    <div class="card-transparent">
                                        <div class="card-body">
                                            <div class="pricing-table m-b-20">
                                                <h1 class="font-weight-bold font-size-35 m-b-20">
                                                    دسترسی سریع
                                                </h1>
                                                <ul class="list-group list-group-flush bg-transparent">
                                                    <li class="list-group-item bg-transparent">
                                                        <h5>
                                                            <a href="<?php echo home_url('aral-all-prop?search_city_select=مشهد&search_district_select=&search_deal_type_select=خرید&search_prop_type_select=آپارتمان');?>" >خرید اپارتمان مشهد</a>
                                                        </h5>
                                                    </li>
                                                    <li class="list-group-item bg-transparent">
                                                        <h5>
                                                            <a href="<?php echo home_url('aral-all-prop?search_city_select=مشهد&search_district_select=&search_deal_type_select=خرید&search_prop_type_select=خانه ویلایی');?>" > خرید خانه ویلایی مشهد</a>
                                                        </h5>
                                                    </li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- end::page content -->

        <!-- begin::footer -->
        <footer>
            <div class="container-fluid">
                <div></div>
                <div>© 1399 | مسکن آرال - توسعه و پیاده سازی توسط    <a href="https://jbyte.ir">Jbyte Developer</a></div>
            </div>
        </footer>
        <!-- end::footer -->

    </div>
    <!-- end::main-content -->

</div>
<!-- end::main -->
<script type="text/javascript">
    var mymap = L.map('mapid').setView([<?php echo $post_meta['location_latitude'][0]?>, <?php echo $post_meta['location_longitude'][0]?>], 15);
    L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
        attribution: 'Map data &copy; <a href="https://www.openstreetmap.org/">OpenStreetMap</a> contributors, <a href="https://creativecommons.org/licenses/by-sa/2.0/">CC-BY-SA</a>, Imagery © <a href="https://www.mapbox.com/">Mapbox</a>',
        maxZoom: 18,
        id: 'mapbox/streets-v11',
        tileSize: 512,
        zoomOffset: -1,
        accessToken: 'pk.eyJ1IjoiZGVmaWFudGx5bngiLCJhIjoiY2tmYTExMTAzMHJoMDJ0cHB4NWw5enZ1cSJ9.V-_Jw4zQYhhlUvH6iv55sQ'
    }).addTo(mymap);

    var marker = L.marker([<?php echo $post_meta['location_latitude'][0]?>, <?php echo $post_meta['location_longitude'][0]?>]).addTo(mymap);
    marker.bindPopup("<b style='font-family:iransans-light'><?php echo $post_meta['city_name'][0].' ، '.$post_meta['district_name'][0].' ، '.$post_meta['street'][0]?></b>").openPopup();
</script>