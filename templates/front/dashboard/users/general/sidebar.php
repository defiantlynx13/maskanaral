<div class="navigation">

    <div class="navigation-menu-tab">
        <div>
            <div class="navigation-menu-tab-header" data-toggle="tooltip" title="" data-placement="right" data-original-title=" <?php echo \Plugin_Name_Dir\Includes\Functions\Utility::get_current_user_fname_lname();?>">
                <a href="#" class="nav-link" data-toggle="dropdown" aria-expanded="false">
                    <figure class="avatar avatar-sm">
                        <img src="<?php echo get_avatar_url(get_current_user_id())?>" class="rounded-circle" alt="avatar">
                    </figure>
                </a>
                <div class="dropdown-menu dropdown-menu-left dropdown-menu-big" x-placement="bottom-start" style="position: absolute; will-change: transform; top: 0px; left: 0px; transform: translate3d(-5px, 59px, 0px);">
                    <div class="p-3 text-center" data-backround-image="<?php echo $dash_assets_url.'assets/media/image/image1.jpg'?>" style="background: url(<?php echo $dash_assets_url.'assets/media/image/image1.jpg'?>);">
                        <figure class="avatar mb-3">
                            <img src="<?php echo get_avatar_url(get_current_user_id())?>" class="rounded-circle" alt="image">
                        </figure>
                        <h6 class="d-flex align-items-center justify-content-center">
                          <?php echo \Plugin_Name_Dir\Includes\Functions\Utility::get_current_user_fname_lname();?>
                            <a href="#" class="btn btn-primary btn-sm ml-2" data-toggle="tooltip" title="" data-original-title="ویرایش پروفایل">
                                <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-edit-2"><path d="M17 3a2.828 2.828 0 1 1 4 4L7.5 20.5 2 22l1.5-5.5L17 3z"></path></svg>
                            </a>
                        </h6>
                    </div>
                    <div class="dropdown-menu-body">
                        <div class="list-group list-group-flush">
                            <a href="#" class="list-group-item">پروفایل</a>
                            <a href="<?php echo wp_logout_url(home_url()); ?>" class="list-group-item text-danger" data-sidebar-target="#settings">خروج</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="flex-grow-1">
            <ul>
<!--                <li>-->
<!--                    <a class="active" href="#" data-toggle="tooltip" data-placement="right" title="" data-nav-target="#dashboards" data-original-title="داشبردها">-->
<!--                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-bar-chart-2"><line x1="18" y1="20" x2="18" y2="10"></line><line x1="12" y1="20" x2="12" y2="4"></line><line x1="6" y1="20" x2="6" y2="14"></line></svg>-->
<!--                    </a>-->
<!--                </li>-->
            </ul>
        </div>
        <div>
            <ul>
                <li>
                    <a href="<?php echo wp_logout_url(home_url()); ?>" data-toggle="tooltip" data-placement="right" title="" data-original-title="خروج">
                        <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="1" stroke-linecap="round" stroke-linejoin="round" class="feather feather-log-out"><path d="M9 21H5a2 2 0 0 1-2-2V5a2 2 0 0 1 2-2h4"></path><polyline points="16 17 21 12 16 7"></polyline><line x1="21" y1="12" x2="9" y2="12"></line></svg>
                    </a>
                </li>
            </ul>
        </div>
    </div>
    <!-- begin::navigation menu -->
    <div class="navigation-menu-body">
        <!-- begin::navigation-logo -->
        <div>
            <div id="navigation-logo">
                <a href="<?php echo home_url();?>">
                    <img class="logo" src="<?php echo $dash_assets_url.'assets/media/image/logo-aral.png'?>" alt="logo">
                </a>
            </div>
        </div>
        <!-- end::navigation-logo -->

        <div class="navigation-menu-group">

            <div class="open" id="dashboards">
                <ul>
                    <li class="navigation-divider">
                        <a href="<?php echo home_url('aral-dashboard') ?>">
                            <h3>
                                میزکار
                                <small class="text-muted">اخرین درخواست ها</small>
                            </h3>
                        </a>
                    </li>
                    <li class="navigation-divider">

                    </li>
                </ul>
            </div>
        </div>
    </div>
    <!-- end::navigation menu -->

</div>
