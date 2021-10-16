
<?php

//function faTOen($string) {
//    return strtr($string, array('۰'=>'0', '۱'=>'1', '۲'=>'2', '۳'=>'3', '۴'=>'4', '۵'=>'5', '۶'=>'6', '۷'=>'7', '۸'=>'8', '۹'=>'9', '٠'=>'0', '١'=>'1', '٢'=>'2', '٣'=>'3', '٤'=>'4', '٥'=>'5', '٦'=>'6', '٧'=>'7', '٨'=>'8', '٩'=>'9'));
//}
//
//$args2 = array(
//    'post_type'         => 'aralproperty',
//    'posts_per_page' => '-1',
//    'post_status' => array('publish', 'pending', 'draft', 'auto-draft', 'future', 'private', 'inherit', 'trash')
//);
//$meta_query2 = array();
//
//$the_query2 = new WP_Query( $args2 );
//
//if ( $the_query2->have_posts() ){
//    while ( $the_query2->have_posts() ) : $the_query2->the_post();
//    if(metadata_exists('post',get_the_ID(),'phone1'))
//    {
//        $value=faTOen(get_post_meta(get_the_ID(),'phone1',true));
//        update_post_meta(get_the_ID(), 'phone1', $value);
//    }
//    endwhile;
//}
//wp_reset_postdata();





    use Plugin_Name_Dir\Includes\Functions\Date;
    use Plugin_Name_Dir\Includes\Functions\Utility;
    $dash_assets_url=trailingslashit( PLUGIN_NAME_URL ) . 'assets/dashboard/';
    $post_meta=get_post_meta($post->ID);

    $req=$_GET;
    global $post;
    $page=(isset($_GET['page']))?$_GET['page']:1;
    $posts_per_page=100;
    $today = getdate();

    $args = array(
        'post_type'         => 'aralproperty',
        'post_status'     => 'publish',
        'posts_per_page'=>$posts_per_page,
        'paged' => $page,
        'date_query' => array(
	        array(
		        'year'  => $today['year'],
		        'month' => $today['mon'],
		        'day'   => $today['mday'],
	        ),
        ),
    );


	$meta_query = array();

	if ( isset($_GET['type']) and  $_GET['type']!= "")
    {
        switch ($_GET['type'])
        {
            case 'sale':
	            $status="فروش";
	            $meta_query[] = array(
		            'key' => 'deal_type',
		            'value' => $status,
		            'compare' => 'like'
	            );
                break;
	        case 'rent_mortagage':
		        $status="رهن و اجاره";
		        $meta_query[] = array(
			        'key' => 'deal_type',
			        'value' => $status,
			        'compare' => 'like'
		        );
		        break;
        }

    }

	$meta_count = count( $meta_query );
	if ( $meta_count > 1 ) {
		$meta_query['relation'] = 'AND';
	}

	$args['meta_query'] = $meta_query;



$the_query = new WP_Query( $args );


?>
<!-- begin::main -->
<div id="main">
    <!-- begin::main-content -->
    <div class="main-content">
        <!-- begin::page content -->
        <div class="container-fluid">

            <div class="row">
                <div class="col-md-8">
                    <h1 class="pageTitle city-page-title">
                        <?php
                            if(isset($_GET['type']) and $_GET['type'] == 'sale')
                            {
                                ?>
                                    <button type="button" class="btn btn-yahoo ml-3">
                                           آگهی های فروش
                                    </button>
                                    <button type="button" class="btn btn-yahoo ml-3">
                                        <i class="fa fa-calendar-check-o fa-lg mr-2"></i><?php echo Date::jdate ('d  F   y');?>
                                    </button>
                                <?php
                            }
                            else if(isset($_GET['type']) and $_GET['type'] == 'rent_mortagage')
                            {
	                            ?>
                                <button type="button" class="btn btn-yahoo ml-3">
                                    <i class="fa fa-usd fa-lg mr-2"></i>   آگهی های رهن و اجاره
                                </button>
                                <button type="button" class="btn btn-yahoo ml-3">
                                    <i class="fa fa-calendar-check-o fa-lg mr-2"></i><?php echo Date::jdate ('d  F   y');?>
                                </button>
	                            <?php
                            }
                            else {
	                            echo "تمام اگهی های". " ".Date::jdate( 'd  F   y' );
                            }
                        ?>
                    </h1>
                </div>
                <div class="col-md-4 d-flex justify-content-end">
					<?php
					if($the_query->found_posts > 0)
					{
						?>
                        <h1 class="pageTitle city-page-title"><?php echo $the_query->found_posts.' ملک پیدا شد';?></h1>
						<?php
					}
					?>
                </div>
            </div>
            <br>
			<?php
			//                echo '<pre style="direction: ltr;float: left">';
			//                 print_r($args);
			//                echo '</pre>';

			if ( $the_query->have_posts() )
			{
				?>
                <div class="row">
					<?php
					while ( $the_query->have_posts() )
					{
						$the_query->the_post();
						$post_meta=get_post_meta($post->ID);
						?>
                        <div class="col-md-3">
                            <a target="_blank" href="<?php echo home_url('aral-prop?id='.$post->ID)?>">
                                <div class="card shadow">
									<?php

									if (metadata_exists('post',get_the_ID(),'cover_media_link'))
									{

										if (empty($img_link))
										{
											$img_link=get_post_meta($post->ID,'cover_media_link',true);
										}
										else
										{
											$img_link=$dash_assets_url.'assets/media/image/img_holder3.jpeg';
										}
									}
									else if(metadata_exists('post',get_the_ID(),'images'))
									{
										$all_imgs=explode('\n',trim(get_post_meta($post->ID,'images',true)));
										if (empty($all_imgs[0]))
										{
											$img_link=get_post_meta($post->ID,'images',true);
										}
										else
										{
											$img_link= $all_imgs[0];
										}
									}
									else
									{
										$img_link=$dash_assets_url.'assets/media/image/img_holder3.jpeg';

									}
									?>
                                    <!--                                            <div class="container11">-->
                                    <!--                                                <img src="--><?php //echo $img_link?><!--" class="card-img-top" alt="image">-->
                                    <!--                                                --><?php
									//                                                if (current_user_can('administrator'))
									//                                                {
									//                                                    ?>
                                    <!--                                                    <a href="--><?php //echo admin_url('post.php?post='.$post->ID.'&action=edit')?><!--" target="_blank" class="top-left"><span class="badge badge-dark bg-success-gradient"><i class="fa fa-pencil"></i> ویرایش </span></a>-->
                                    <!--                                                    --><?php
									//                                                    $deal_type = get_post_meta($post->ID, 'deal_type', true);
									//                                                    if($deal_type == 'رهن و اجاره' || $deal_type == 'رهن کامل')
									//                                                    {
									//                                                        ?>
                                    <!--                                                            <span id="archive_prop" data-pid="--><?php //echo $post->ID?><!--" class=" badge badge-dark bg-danger-gradient top-left1"><i class="fa fa-file-archive-o "></i> آرشیو </span>-->
                                    <!--                                                        --><?php
									//                                                    }
									//                                                    else if ($deal_type == 'فروش' )
									//                                                    {
									//                                                        ?>
                                    <!--                                                            <span id="archive_sale_prop" data-pid="--><?php //echo $post->ID?><!--" class="badge badge-dark bg-info-gradient top-left1"><i class="fa fa-file-archive-o  "></i> بایگانی </span>-->
                                    <!--                                                        --><?php
									//                                                    }
									//                                                }
									//                                                ?>
                                    <!--                                            </div>-->
									<?php
									$s_deal_type=$_GET['search_deal_type_select'];
									$s_prop_type=$_GET['search_prop_type_select'];

									if ($s_deal_type =='خرید' and $s_prop_type=='آپارتمان')
									{
										?>
                                        <div class="card-footer font-size-15 text-right">
                                            <!--                                               <i class="fa fa-building-o fa-lg pr-3"></i>-->
											<?php echo $post_meta['deal_type'][0].' '.$post_meta['type'][0].' '.$post_meta['district_name'][0]?>
                                        </div>
                                        <div class="card-footer sj-font-16">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item  sj-padding">
													<?php echo $post_meta['infrastructure_area'][0].' متر';?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['bedroom_count'][0] != '')
													{
														echo $post_meta['bedroom_count'][0].' خواب';
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['floor'][0] != '')
													{
														echo ' طبقه '.$post_meta['floor'][0];
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-16">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['unit_count'][0] != '')
													{
														if ($post_meta['unit_count'][0] == 'تک واحدی')
														{
															echo $post_meta['unit_count'][0];
														}
														else
														{
															echo $post_meta['unit_count'][0].' واحدی ';
														}

													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['age'][0] != '' )
													{
														if ($post_meta['age'][0] == 0)
														{
															echo 'نوساز';
														}
														else
														{
															echo $post_meta['age'][0].' سال ساخت';
														}
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													echo '-';
													?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-16">
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

											$facalities=explode(',',$post_meta['facilities'][0]);
											$facalities_count= count($facalities);
											$counter_fac=1;
											$tag_close=false;
											?>
                                            <ul class="list-group list-group-horizontal">
												<?php
												foreach ($facalities as $facality)
												{
													?>
                                                    <li class="list-group-item font-size-10 sj-padding"><?php  echo $facalities_name[trim($facality)];?></li>
													<?php
													if ($counter_fac ==3)
													{
														break;
													}
													$counter_fac++;
												}
												?>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-18">
                                            <ul class="list-group list-group-horizontal">
												<?php
												$infrastructure_area= Utility::convert_to_english_number(get_post_meta($post->ID,'infrastructure_area',true));
												$price= get_post_meta($post->ID,'price',true);
												?>
                                                <li class="list-group-item sj-padding">
													<?php  echo 'قیمت : '.number_format(get_post_meta($post->ID,'price',true)).' '.'تومان';?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-18">
                                            <ul class="list-group list-group-horizontal">
												<?php
												$infrastructure_area= Utility::convert_to_english_number(get_post_meta($post->ID,'infrastructure_area',true));
												$price= get_post_meta($post->ID,'price',true);
												?>
                                                <li class="list-group-item sj-padding">
													<?php  echo 'متری ' . round(($price/1000000)/$infrastructure_area, 1).' '.'میلیون تومان';?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-muted font-size-12">
                                            <div class="mr-3 d-sm-inline d-none">
                                            <span class="badge badge-dark bg-info-gradient">
                                                    <i class="fa fa-calendar fa-lg pr-3"></i>
                                                <?php
                                                $tmp=explode('/',get_the_date("Y/m/d"));
                                                $date1 = Date::jalali_to_gregorian($tmp[0],$tmp[1],$tmp[2],'/');
                                                $date2 = date("Y/m/d");

                                                $diff = abs(strtotime($date2) - strtotime($date1));

                                                $years = floor($diff / (365*60*60*24));
                                                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                                $date_title="";
                                                if ($years > 0)
                                                {
	                                                $date_title.=$years." سال و ";
                                                }
                                                if ($months > 0)
                                                {
	                                                $date_title.=$months." ماه و ";
                                                }
                                                if ($days > 0)
                                                {
	                                                $date_title.=$days." روز پیش ";
                                                }
                                                else
                                                {
	                                                $date_title.=" امروز ";
                                                }

                                                echo $date_title;
                                                ?>
                                             </span>
                                                <span class="badge badge-dark bg-info-gradient">
                                                                       <i class="fa fa-calendar fa-lg pr-3"></i>
                                                                    <?php echo Utility::get_prop_image_count($post->ID) ?>
                                                                </span>
                                            </div>
                                        </div>
										<?php
									}
									else if ($s_deal_type =='خرید' and ($s_prop_type=='خانه ویلایی' or $s_prop_type=='زمین'))
									{
										?>
                                        <div class="card-footer font-size-15 text-right">
                                            <!--                                               <i class="fa fa-building-o fa-lg pr-3"></i>-->
											<?php echo $post_meta['deal_type'][0].' '.$post_meta['type'][0].' '.$post_meta['district_name'][0]?>
                                        </div>
                                        <div class="card-footer sj-font-16">
                                            <ul class="list-group list-group-horizontal">
                                                <!--                                                            <li class="list-group-item  sj-padding">-->
                                                <!--                                                                --><?php //echo $post_meta['infrastructure_area'][0].' متر'.' زمین ';?>
                                                <!--                                                            </li>-->
                                                <!--                                                            <li class="list-group-item  sj-padding">-->
                                                <!--                                                                --><?php //echo $post_meta['land_area'][0].' متر'.' زیربنا ';?>
                                                <!--                                                            </li>-->

                                                <li class="list-group-item  sj-padding">
													<?php echo $post_meta['land_area'][0].' متر'.' زمین ';?>
                                                </li>
                                                <li class="list-group-item  sj-padding">
													<?php echo $post_meta['infrastructure_area'][0].' متر'.' زیربنا ';?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-16">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['bedroom_count'][0] != '')
													{
														echo $post_meta['bedroom_count'][0].' خواب';
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['age'][0] != '' )
													{
														if ($post_meta['age'][0] == 0)
														{
															echo 'نوساز';
														}
														else
														{
															echo $post_meta['age'][0].' سال ساخت';
														}
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>

                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-16">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['deed'][0] != '' )
													{

														echo ' سند '.$post_meta['deed'][0];

													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['floor'][0] != '' )
													{

														echo $post_meta['floor'][0].' طبقه ';

													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-16">
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

											$facalities=explode(',',$post_meta['facilities'][0]);
											$facalities_count= count($facalities);
											$counter_fac=1;
											$tag_close=false;
											?>
                                            <ul class="list-group list-group-horizontal">
												<?php
												foreach ($facalities as $facality)
												{
													?>
                                                    <li class="list-group-item font-size-10 sj-padding"><?php  echo $facalities_name[trim($facality)];?></li>
													<?php
													if ($counter_fac ==3)
													{
														break;
													}
													$counter_fac++;
												}
												?>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-18">
                                            <ul class="list-group list-group-horizontal">
												<?php
												$infrastructure_area= Utility::convert_to_english_number(get_post_meta($post->ID,'infrastructure_area',true));
												$price= get_post_meta($post->ID,'price',true);
												?>
                                                <li class="list-group-item sj-padding">
													<?php  echo 'قیمت : '.number_format(get_post_meta($post->ID,'price',true)).' '.'تومان';?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-18">
                                            <ul class="list-group list-group-horizontal">
												<?php
												$land_area= Utility::convert_to_english_number(get_post_meta($post->ID,'land_area',true));
												$price= get_post_meta($post->ID,'price',true);
												$price_metr=($price/1000000)/$land_area;
												?>
                                                <li class="list-group-item sj-padding">
													<?php  echo 'متری ' . round($price_metr, 1).' '.'میلیون تومان';?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-muted font-size-12">
                                            <div class="mr-3 d-sm-inline d-none">
                                            <span class="badge badge-dark bg-info-gradient">
                                                    <i class="fa fa-calendar fa-lg pr-3"></i>
                                                <?php
                                                $tmp=explode('/',get_the_date("Y/m/d"));
                                                $date1 = Date::jalali_to_gregorian($tmp[0],$tmp[1],$tmp[2],'/');
                                                $date2 = date("Y/m/d");

                                                $diff = abs(strtotime($date2) - strtotime($date1));

                                                $years = floor($diff / (365*60*60*24));
                                                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                                $date_title="";
                                                if ($years > 0)
                                                {
	                                                $date_title.=$years." سال و ";
                                                }
                                                if ($months > 0)
                                                {
	                                                $date_title.=$months." ماه و ";
                                                }
                                                if ($days > 0)
                                                {
	                                                $date_title.=$days." روز پیش ";
                                                }
                                                else
                                                {
	                                                $date_title.=" امروز ";
                                                }

                                                echo $date_title;
                                                ?>
                                             </span>
                                                <span class="badge badge-dark bg-info-gradient">
                                                                       <i class="fa fa-calendar fa-lg pr-3"></i>
                                                                    <?php echo Utility::get_prop_image_count($post->ID) ?>
                                                                </span>
                                            </div>
                                        </div>
										<?php
									}
									else if ($s_deal_type =='رهن واجاره')
									{
										?>
                                        <div class="card-footer font-size-15 text-right">
                                            <!--                                               <i class="fa fa-building-o fa-lg pr-3"></i>-->
											<?php echo $post_meta['deal_type'][0].' '.$post_meta['type'][0].' '.$post_meta['district_name'][0]?>
                                        </div>
                                        <div class="card-footer sj-font-16">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item  sj-padding">
													<?php echo $post_meta['infrastructure_area'][0].' متر';?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['bedroom_count'][0] != '')
													{
														echo $post_meta['bedroom_count'][0].' خواب';
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['floor'][0] != '')
													{
														echo ' طبقه '.$post_meta['floor'][0];
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-16">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['unit_count'][0] != '')
													{
														if ($post_meta['unit_count'][0] == 'تک واحدی')
														{
															echo $post_meta['unit_count'][0];
														}
														else
														{
															echo $post_meta['unit_count'][0].' واحدی ';
														}

													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['age'][0] != '' )
													{
														if ($post_meta['age'][0] == 0)
														{
															echo 'نوساز';
														}
														else
														{
															echo $post_meta['age'][0].' سال ساخت';
														}
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													echo '-';
													?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-16">
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

											$facalities=explode(',',$post_meta['facilities'][0]);
											$facalities_count= count($facalities);
											$counter_fac=1;
											$tag_close=false;
											?>
                                            <ul class="list-group list-group-horizontal">
												<?php
												foreach ($facalities as $facality)
												{
													?>
                                                    <li class="list-group-item font-size-10 sj-padding"><?php  echo $facalities_name[trim($facality)];?></li>
													<?php
													if ($counter_fac ==3)
													{
														break;
													}
													$counter_fac++;
												}
												?>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-18">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item sj-padding">
													<?php  echo 'رهن : '.number_format(get_post_meta($post->ID,'mortgage',true)).' '.'تومان';?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-18">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item sj-padding">
													<?php  echo 'اجاره : ' . number_format(get_post_meta($post->ID,'rent',true)).' '.'تومان';?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer text-muted font-size-12">
                                            <div class="mr-3 d-sm-inline d-none">
                                            <span class="badge badge-dark bg-info-gradient">
                                                    <i class="fa fa-calendar fa-lg pr-3"></i>
                                                <?php
                                                $tmp=explode('/',get_the_date("Y/m/d"));
                                                $date1 = Date::jalali_to_gregorian($tmp[0],$tmp[1],$tmp[2],'/');
                                                $date2 = date("Y/m/d");

                                                $diff = abs(strtotime($date2) - strtotime($date1));

                                                $years = floor($diff / (365*60*60*24));
                                                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                                $date_title="";
                                                if ($years > 0)
                                                {
	                                                $date_title.=$years." سال و ";
                                                }
                                                if ($months > 0)
                                                {
	                                                $date_title.=$months." ماه و ";
                                                }
                                                if ($days > 0)
                                                {
	                                                $date_title.=$days." روز پیش ";
                                                }
                                                else
                                                {
	                                                $date_title.=" امروز ";
                                                }

                                                echo $date_title;
                                                ?>
                                             </span>
                                                <span class="badge badge-dark bg-info-gradient">
                                                                       <i class="fa fa-calendar fa-lg pr-3"></i>
                                                                    <?php echo Utility::get_prop_image_count($post->ID) ?>
                                                                </span>
                                            </div>
                                        </div>
										<?php
									}
									else if ($s_deal_type =='رهن کامل')
									{
										?>
                                        <div class="card-footer font-size-15 text-right">
                                            <!--                                               <i class="fa fa-building-o fa-lg pr-3"></i>-->
											<?php echo $post_meta['deal_type'][0].' '.$post_meta['type'][0].' '.$post_meta['district_name'][0]?>
                                        </div>
                                        <div class="card-footer sj-font-16">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item  sj-padding">
													<?php echo $post_meta['infrastructure_area'][0].' متر';?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['bedroom_count'][0] != '')
													{
														echo $post_meta['bedroom_count'][0].' خواب';
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['floor'][0] != '')
													{
														echo ' طبقه '.$post_meta['floor'][0];
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-16">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['unit_count'][0] != '')
													{
														if ($post_meta['unit_count'][0] == 'تک واحدی')
														{
															echo $post_meta['unit_count'][0];
														}
														else
														{
															echo $post_meta['unit_count'][0].' واحدی ';
														}

													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													if ($post_meta['age'][0] != '' )
													{
														if ($post_meta['age'][0] == 0)
														{
															echo 'نوساز';
														}
														else
														{
															echo $post_meta['age'][0].' سال ساخت';
														}
													}
													else
													{
														echo '-';
													}
													?>
                                                </li>
                                                <li class="list-group-item sj-padding">
													<?php
													echo '-';
													?>
                                                </li>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-16">
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

											$facalities=explode(',',$post_meta['facilities'][0]);
											$facalities_count= count($facalities);
											$counter_fac=1;
											$tag_close=false;
											?>
                                            <ul class="list-group list-group-horizontal">
												<?php
												foreach ($facalities as $facality)
												{
													?>
                                                    <li class="list-group-item font-size-10 sj-padding"><?php  echo $facalities_name[trim($facality)];?></li>
													<?php
													if ($counter_fac ==3)
													{
														break;
													}
													$counter_fac++;
												}
												?>
                                            </ul>
                                        </div>
                                        <div class="card-footer sj-font-18">
                                            <ul class="list-group list-group-horizontal">
                                                <li class="list-group-item sj-padding">
													<?php  echo 'رهن : '.number_format(get_post_meta($post->ID,'mortgage',true)).' '.'تومان';?>
                                                </li>
                                            </ul>
                                        </div>

                                        <div class="card-footer text-muted font-size-12">
                                            <div class="mr-3 d-sm-inline d-none">
                                            <span class="badge badge-dark bg-info-gradient">
                                                    <i class="fa fa-calendar fa-lg pr-3"></i>
                                                <?php
                                                $tmp=explode('/',get_the_date("Y/m/d"));
                                                $date1 = Date::jalali_to_gregorian($tmp[0],$tmp[1],$tmp[2],'/');
                                                $date2 = date("Y/m/d");

                                                $diff = abs(strtotime($date2) - strtotime($date1));

                                                $years = floor($diff / (365*60*60*24));
                                                $months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
                                                $days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

                                                $date_title="";
                                                if ($years > 0)
                                                {
	                                                $date_title.=$years." سال و ";
                                                }
                                                if ($months > 0)
                                                {
	                                                $date_title.=$months." ماه و ";
                                                }
                                                if ($days > 0)
                                                {
	                                                $date_title.=$days." روز پیش ";
                                                }
                                                else
                                                {
	                                                $date_title.=" امروز ";
                                                }

                                                echo $date_title;
                                                ?>
                                             </span>
                                                <span class="badge badge-dark bg-info-gradient">
                                                                       <i class="fa fa-calendar fa-lg pr-3"></i>
                                                                    <?php echo Utility::get_prop_image_count($post->ID) ?>
                                                                </span>
                                            </div>
                                        </div>
										<?php
									}
									else
									{
										?>
                                        <div class="card-footer font-size-15">
                                            <i class="fa fa-building-o fa-lg pr-3"></i>
											<?php echo get_the_title()?>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <i class="fa fa-map-marker fa-lg pr-3"></i>
											<?php echo get_post_meta($post->ID,'city_name',true).' ، '.get_post_meta($post->ID,'district_name',true)?>
                                        </div>
                                        <div class="card-footer text-muted font-size-12">
                                            <i class="fa fa-usd fa-lg pr-3"></i>
											<?php
											switch ($post_meta['deal_type'][0])
											{
												case 'رهن و اجاره':
													//
													$numtostring=new \Plugin_Name_Dir\Includes\Functions\Number_To_String();
													echo '<b class="text-success"> رهن :</b> '.$numtostring->convert(get_post_meta($post->ID,'mortgage',true)).' '.'تومان'.' / ';

													$numtostring=new \Plugin_Name_Dir\Includes\Functions\Number_To_String();
													echo  '<b class="text-success"> اجاره :</b> '.$numtostring->convert(get_post_meta($post->ID,'rent',true)).' '.'تومان';

													break;


												case 'رهن کامل':

													$numtostring=new \Plugin_Name_Dir\Includes\Functions\Number_To_String();
													echo $numtostring->convert(get_post_meta($post->ID,'mortgage',true)).' '.'تومان';
													break;

												default :

													$numtostring=new \Plugin_Name_Dir\Includes\Functions\Number_To_String();
													echo $numtostring->convert(get_post_meta($post->ID,'price',true)).' '.'تومان';
													break;
											}
											?>
                                        </div>
                                        <div class="card-footer text-muted">
                                            <i class="fa fa-calendar fa-lg pr-3"></i>
											<?php
											$tmp=explode('/',get_the_date("Y/m/d"));
											$date1 = Date::jalali_to_gregorian($tmp[0],$tmp[1],$tmp[2],'/');
											$date2 = date("Y/m/d");

											$diff = abs(strtotime($date2) - strtotime($date1));

											$years = floor($diff / (365*60*60*24));
											$months = floor(($diff - $years * 365*60*60*24) / (30*60*60*24));
											$days = floor(($diff - $years * 365*60*60*24 - $months*30*60*60*24)/ (60*60*24));

											$date_title="";
											if ($years > 0)
											{
												$date_title.=$years." سال و ";
											}
											if ($months > 0)
											{
												$date_title.=$months." ماه و ";
											}
											if ($days > 0)
											{
												$date_title.=$days." روز پیش ";
											}
											else
											{
												$date_title.=" امروز ";
											}

											echo $date_title;
											?>
                                        </div>
                                        <div class="card-footer text-muted font-size-12">
                                            <div class="mr-3 d-sm-inline d-none">
												<?php
												if ($post_meta['deal_type'][0] == 'فروش')
												{
													$infrastructure_area= Utility::convert_to_english_number(get_post_meta($post->ID,'infrastructure_area',true));
													$price= get_post_meta($post->ID,'price',true);

													?>
                                                    <span class="badge badge-primary bg-secondary-gradient"><?php  echo 'متری ' . ceil(($price/1000000)/$infrastructure_area).' '.'میلیون تومان';?></span>
													<?php
												}

												if (!empty($post_meta['floor'][0]))
												{
													?>
                                                    <span class="badge badge-dark bg-info-gradient"><?php  echo 'طبقه ' .$post_meta['floor'][0].' '.'ام';?></span>
													<?php
												}
												?>

                                            </div>
                                        </div>
										<?php
									}
									?>

                                </div>
                            </a>
                        </div>
						<?php
					}
					?>
                </div>

                <div class="row">
                    <div class="col-md-12">
                        <nav aria-label="...">
                            <ul class="pagination pagination-rounded justify-content-center  ">
								<?php
								$total_page=ceil($the_query->found_posts/$posts_per_page);
								if($total_page > 4)
								{
									if ($page > 1)
									{
										$_GET['page']=$page-1;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <i class="ti-angle-left"></i></a>
                                        </li>
										<?php
									}

									if ($total_page - $page >= 3)
									{
										$_GET['page']=$page;
										?>
                                        <li class="page-item active">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <?php echo $page;?></a>
                                        </li>
										<?php
										$_GET['page']=$page+1;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <?php echo $page+1;?></a>
                                        </li>
                                        <li class="page-item disabled">
                                            <a class="page-link"> ... </a>
                                        </li>
										<?php
										$_GET['page']=$total_page;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <?php echo $total_page;?></a>
                                        </li>
										<?php
									}

									if ($total_page - $page == 2)
									{
										$_GET['page']=1;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> 1</a>
                                        </li>
                                        <li class="page-item disabled">
                                            <a class="page-link"> ... </a>
                                        </li>
										<?php
										$_GET['page']=$page;
										?>
                                        <li class="page-item active">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <?php echo $page;?></a>
                                        </li>
										<?php
										$_GET['page']=$page+1;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <?php echo $page+1;?></a>
                                        </li>
										<?php
										$_GET['page']=$page+2;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <?php echo $page+2;?></a>
                                        </li>
										<?php
									}

									if ($total_page - $page == 1)
									{
										$_GET['page']=1;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> 1</a>
                                        </li>
                                        <li class="page-item disabled">
                                            <a class="page-link"> ... </a>
                                        </li>
										<?php
										$_GET['page']=$page;
										?>
                                        <li class="page-item active">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <?php echo $page;?></a>
                                        </li>
										<?php
										$_GET['page']=$page+1;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <?php echo $page+1;?></a>
                                        </li>
										<?php
									}

									if ($total_page - $page == 0)
									{
										$_GET['page']=1;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> 1</a>
                                        </li>
                                        <li class="page-item disabled">
                                            <a class="page-link"> ... </a>
                                        </li>
										<?php
										$_GET['page']=$page-1;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <?php echo $page-1;?></a>
                                        </li>
										<?php
										$_GET['page']=$page;
										?>
                                        <li class="page-item active">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <?php echo $page;?></a>
                                        </li>
										<?php
									}

									if ($page != $total_page)
									{
										$_GET['page']=$page+1;
										?>
                                        <li class="page-item">
                                            <a class="page-link" href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"> <i class="ti-angle-right"></i></a>
                                        </li>
										<?php
									}

								}
								else
								{

									for ($i=1 ; $i <= $total_page ; $i++)
									{
										$_GET['page']=$i;
										?>
                                        <li class="page-item <?php echo ($page == $i)?'active':'';?>">
                                            <a class="page-link " href="<?php echo home_url('aral-all-prop?'.http_build_query($_GET))?>"><?php echo $i;?></a>
                                        </li>
										<?php
									}

								}

								?>
                            </ul>
                        </nav>
                    </div>
                </div>
				<?php
			}
			else
			{
				?>
                <div class="row">
                    <div class="col-md-12">
                        <div class="card">
                            <div class="card-body">
                                <div class="row align-items-center pb-1 pt-3 mb-3" >
                                    <div class="col-md-7">
                                        <h2>
                                            متاسفانه تا این ساعت ملک جدیدی ثبت نشده است!
                                        </h2>
                                    </div>
                                    <div class="col-md-5">
                                        <img src="<?php echo $dash_assets_url.'assets/media/svg/mean_at_work.svg'?>" alt="..." class="img-fluid">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
				<?php
			}
			wp_reset_postdata();
			?>
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

