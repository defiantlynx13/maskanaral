

<!-- begin::header -->
<div class="header">

    <div>

        <ul class="navbar-nav">
            <li class="nav-item">
                <a href=<?php use Plugin_Name_Dir\Includes\Functions\Date;

                echo home_url()?>>
                    <figure class="avatar mb-3 mr-4">
                        <img src="https://maskanaral.com/wp-content/uploads/2019/09/IMG_20190130_175554_952-150x150.png" class="rounded-circle" alt="image">
                    </figure>
                </a>
            </li>

            <li class="nav-item">
                <a href="<?php echo home_url()?>" class="nav-link font-weight-bold" ><h2>مســـکن آرال</h2></a>
            </li>
            <li class="nav-item">
                <a href="<?php echo home_url('aral-faq')?>" class="nav-link font-weight-bold" >سوالات متداول</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo home_url('aral-about')?>" class="nav-link font-weight-bold" >درباره ما</a>
            </li>
            <li class="nav-item">
                <a href="<?php echo home_url('aral-contact')?>" class="nav-link font-weight-bold" >تماس با ما</a>
            </li>
        </ul>
    </div>

    <div>
        <ul class="navbar-nav">

            <li class="nav-item">
                <a href="<?php echo home_url('add_advertise')?>">
                    <button type="button" class="btn btn-success btn-uppercase">
                        <i class="ti-plus mr-2"></i> ثبت رایگان آگهی
                    </button>
                </a>
            </li>
            &nbsp;  &nbsp;| &nbsp; &nbsp;
            <li class="nav-item">
                <a href="<?php echo home_url('aral-dashboard')?>">
                    <button type="button" class="btn btn-outline-dribbble">
                        <i class="ti-check-box mr-2"></i>  درخواست ملک
                    </button>
                </a>
            </li>
            &nbsp;  &nbsp;| &nbsp;  &nbsp;
            <li class="nav-item dropdown">
                <?php
                $today = getdate();
                $args=array
                (
	                'post_type' => 'aralproperty',
	                'post_status' => 'publish',
	                'posts_per_page' => 5,
	                'date_query' => array(
		                array(
			                'year'  => $today['year'],
			                'month' => $today['mon'],
			                'day'   => $today['mday'],
		                ),
	                ),
                );
                $the_query = new WP_Query( $args );

                ?>
                <a href="#" class="nav-link <?php echo ($the_query->found_posts > 0)? 'nav-link-notify' :'';?> btn-pulse" title="آخرین املاک" data-toggle="dropdown" aria-expanded="false">
<!--                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bell"><path d="M18 8A6 6 0 0 0 6 8c0 7-3 9-3 9h18s-3-2-3-9"></path><path d="M13.73 21a2 2 0 0 1-3.46 0"></path></svg>-->

                    <i class="fa fa-bell-o notif-btn"></i>
                    <!--                    <span class="badge badge-danger">2</span>-->
                </a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-big" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(0px, 38px, 0px);">
                    <div class="p-4 text-center d-flex justify-content-between" data-backround-image="<?php echo $dash_assets_url.'assets/media/image/image1.jpg'?>" style="background: url(&quot;assets/media/image/image1.jpg&quot;);">
                        <h6 class="mb-0">
                            <a href="<?php echo home_url('last-prop');?>">
                              <i class="fa fa-link "></i> اخرین املاک
                            </a>
                        </h6>
                        <small class="font-size-11 opacity-7">  <?php echo Date::jdate ('d  F   y');?></small>
                    </div>
                    <div>
                        <ul class="list-group list-group-flush" tabindex="5" style="overflow: hidden; outline: none;">
                        <?php
                        $today = getdate();
                        $args_sale_aparteman=array
                        (
	                        'post_type' => 'aralproperty',
	                        'post_status' => 'publish',
	                        'posts_per_page' => 5,
	                        'date_query' => array(
		                        array(
			                        'year'  => $today['year'],
			                        'month' => $today['mon'],
			                        'day'   => $today['mday'],
		                        ),
	                        ),
                        );
                        $meta_query = array();
                        $meta_query[] = array(
	                        'key' => 'deal_type',
	                        'value' => 'فروش',
	                        'compare' => 'like'
                        );

                        $meta_query['relation'] = 'AND';

                        $args_sale_aparteman['meta_query'] = $meta_query;
                        $the_query_sale_aparteman = new WP_Query( $args_sale_aparteman );

                        ?>

                            <?php
                            if ($the_query_sale_aparteman->found_posts > 0) {
                                ?>
                                <li>
                                    <a href="<?php echo home_url('last-prop?type=sale')?>" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                املاک فروش امروز
                                            </p>
                                            <span class="text-muted small"><?php echo $the_query_sale_aparteman->found_posts?> آگهی </span>
                                        </div>
                                    </a>
                                </li>
                            <?php
                            }
                            ?>


<!--	                        --><?php
//	                        $today = getdate();
//	                        $args_sale_vilaa_land=array
//	                        (
//		                        'post_type' => 'aralproperty',
//		                        'post_status' => 'publish',
//		                        'posts_per_page' => 5,
//		                        'date_query' => array(
//			                        array(
//				                        'year'  => $today['year'],
//				                        'month' => $today['mon'],
//				                        'day'   => $today['mday'],
//			                        ),
//		                        ),
//	                        );
//	                        $meta_query = array();
//	                        $meta_query[] = array(
//		                        'key' => 'deal_type',
//		                        'value' => 'فروش',
//		                        'compare' => 'like'
//	                        );
//	                        $meta_query[] = array(
//		                        'key' => 'type',
//		                        'value' => 'خانه ویلایی',
//		                        'compare' => 'like'
//	                        );
//
//	                        $meta_query['relation'] = 'AND';
//
//	                        $args_sale_vilaa_land['meta_query'] = $meta_query;
//	                        $the_query_sale_vilaa_land = new WP_Query( $args_sale_vilaa_land );
//
//	                        ?>
<!---->
<!--	                        --><?php
//	                        if ($the_query_sale_vilaa_land->found_posts > 0) {
//		                        ?>
<!--                                    <li>-->
<!--                                        <a href="#" class="list-group-item d-flex hide-show-toggler">-->
<!--                                            <div>-->
<!--                                                <figure class="avatar avatar-sm m-r-15">-->
<!--                                                    <span class="avatar-title bg-success-bright text-success rounded-circle">-->
<!--                                                        <i class="ti-user"></i>-->
<!--                                                    </span>-->
<!--                                                </figure>-->
<!--                                            </div>-->
<!--                                            <div class="flex-grow-1">-->
<!--                                                <p class="mb-0 line-height-20 d-flex justify-content-between">-->
<!--                                                    فروش خانه ویلایی/زمین امروز -->
<!--                                                </p>-->
<!--                                                <span class="text-muted small">--><?php //echo $the_query_sale_vilaa_land->found_posts?><!-- آگهی </span>-->
<!--                                            </div>-->
<!--                                        </a>-->
<!--                                    </li>-->
<!--		                        --><?php
//	                        }
//	                        ?>



	                        <?php
	                        $today = getdate();
	                        $args_rent_mortgage=array
	                        (
		                        'post_type' => 'aralproperty',
		                        'post_status' => 'publish',
		                        'posts_per_page' => 5,
		                        'date_query' => array(
			                        array(
				                        'year'  => $today['year'],
				                        'month' => $today['mon'],
				                        'day'   => $today['mday'],
			                        ),
		                        ),
	                        );
	                        $meta_query = array();
	                        $meta_query[] = array(
		                        'key' => 'deal_type',
		                        'value' => 'رهن و اجاره',
		                        'compare' => 'like'
	                        );
	                        $meta_query['relation'] = 'AND';

	                        $args_rent_mortgage['meta_query'] = $meta_query;
	                        $the_query_rent_mortgage = new WP_Query( $args_rent_mortgage );

	                        ?>

	                        <?php
	                        if ($the_query_rent_mortgage->found_posts > 0) {
		                        ?>
                                <li>
                                    <a href="<?php echo home_url('last-prop?type=rent_mortagage')?>" class="list-group-item d-flex hide-show-toggler">
                                        <div>
                                            <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-success-bright text-success rounded-circle">
                                                    <i class="ti-user"></i>
                                                </span>
                                            </figure>
                                        </div>
                                        <div class="flex-grow-1">
                                            <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                املاک رهن و اجاره امروز
                                            </p>
                                            <span class="text-muted small"><?php echo $the_query_rent_mortgage->found_posts?> آگهی </span>
                                        </div>
                                    </a>
                                </li>
		                        <?php
	                        }
	                        ?>


                            <?php
                                if ($the_query->found_posts > 0)
                                {
                                    ?>
                                        <li class="text-divider small pb-2 pl-3 pt-3">
                                            <span>اخرین املاک</span>
                                        </li>
                                    <?php
                                }
                                else
                                {
                                    ?>
                                        <li>
                                            <a href="#" class="list-group-item d-flex hide-show-toggler">
                                                <div>
                                                    <figure class="avatar avatar-sm m-r-15">
                                                    <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                        <i class="ti-package"></i>
                                                    </span>
                                                    </figure>
                                                </div>
                                                <div class="flex-grow-1">

                                                    تا این ساعت ملک جدیدی ثبت نشده است.
                                                </div>
                                            </a>
                                        </li>
                                     <?php
                                }
                            ?>

	                        <?php
                            global $post;
	                        if ( $the_query->have_posts() )
	                        {
		                        while ( $the_query->have_posts() )
                                {
	                                $the_query->the_post();
	                                ?>
                                    <li>
                                        <a href="<?php echo home_url('aral-prop?id='.$post->ID)?>" class="list-group-item d-flex hide-show-toggler">
                                            <div>
                                                <figure class="avatar avatar-sm m-r-15">
                                                <span class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                    <i class="ti-package"></i>
                                                </span>
                                                </figure>
                                            </div>
                                            <div class="flex-grow-1">
                                                    <p class="mb-0 line-height-20 d-flex justify-content-between">
                                                            <?php echo get_the_title() ?>
                                                            <?php echo get_post_meta($post->ID,'city_name',true); ?>
                                                            <?php echo get_post_meta($post->ID,'district_name',true); ?>
                                                    </p>
                                                <!--                                            <span class="text-muted small">45 ثانیه قبل</span>-->
                                            </div>
                                        </a>
                                    </li>
	                                <?php
		                        }
	                        }

	                        ?>

                        </ul>
                    </div>
<!--                    <div class="p-2 text-right">-->
<!--                        <ul class="list-inline small">-->
<!--                          -->
<!--                        </ul>-->
<!--                    </div>-->
                    <div id="ascrail2004" class="nicescroll-rails nicescroll-rails-vr" style="width: 8px; z-index: 1000; cursor: default; position: absolute; top: 65px; left: 292px; height: 296px; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: relative; top: 0px; float: right; width: 6px; height: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px;"></div></div><div id="ascrail2004-hr" class="nicescroll-rails nicescroll-rails-hr" style="height: 8px; z-index: 1000; top: 353px; left: 0px; position: absolute; cursor: default; display: none; opacity: 0;"><div class="nicescroll-cursors" style="position: absolute; top: 0px; height: 6px; width: 0px; background-color: rgb(66, 66, 66); border: 1px solid rgb(255, 255, 255); background-clip: padding-box; border-radius: 5px; left: 0px;"></div></div></div>
            </li>

            &nbsp;  &nbsp;|
            <?php
            if(!is_user_logged_in())
            {
                ?>
                &nbsp;  &nbsp;
                <li class="nav-item">
                    <a href="<?php echo home_url('auth?ref=aral-home')?>">
                        ورود / ثبت نام
                    </a>
                </li>
                <?php
            }
            else
            {
                ?>
                <li class="nav-item">
                    <a href="<?php echo home_url()?>" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">  <i data-feather="layout"></i> &nbsp; حساب کاربری</a>
                    <div class="dropdown-menu dropdown-menu-right" x-placement="bottom-end" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(796px, 51px, 0px);">
                        <a href="<?php echo home_url('aral-dashbaord')?>" class="dropdown-item"> <i class="fa fa-user" aria-hidden="true"></i> &nbsp; داشبرد</a>
                        <a href="<?php echo wp_logout_url('test')?>" class="dropdown-item"> <i class="fa fa-power-off" aria-hidden="true"></i> &nbsp; خروج</a>
                    </div>
                </li>
                <?php
            }
            ?>
        </ul>

        <!-- begin::mobile header toggler -->
        <ul class="navbar-nav d-flex align-items-center">
            <li class="nav-item header-toggler">
                <a href="#" class="nav-link">
                    <i data-feather="arrow-down"></i>
                </a>
            </li>
        </ul>
        <!-- end::mobile header toggler -->
    </div>

</div>
<!-- end::header -->