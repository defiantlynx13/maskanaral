
<!-- begin::header -->
<div class="header">

    <div>
        <ul class="navbar-nav">
            <li class="nav-item">
                <a href=<?php echo home_url()?>>
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
            <!-- begin::header search -->
<!--            <li class="nav-item">-->
<!--                <a href="#" class="nav-link" title="جست‌و‌جو" data-toggle="dropdown">-->
<!--                    <i data-feather="search"></i>-->
<!--                </a>-->
<!--                <div class="dropdown-menu p-2 dropdown-menu-right">-->
<!--                    <form>-->
<!--                        <div class="input-group">-->
<!--                            <input type="text" class="form-control" placeholder="جستجو">-->
<!--                            <div class="input-group-prepend">-->
<!--                                <button class="btn" type="button">-->
<!--                                    <i data-feather="search"></i>-->
<!--                                </button>-->
<!--                            </div>-->
<!--                        </div>-->
<!--                    </form>-->
<!--                </div>-->
<!--            </li>-->
            <!-- end::header search -->

            <!-- begin::header minimize/maximize -->
<!--            <li class="nav-item dropdown">-->
<!--                <a href="#" class="nav-link" title="تمام صفحه" data-toggle="fullscreen">-->
<!--                    <i class="maximize" data-feather="maximize"></i>-->
<!--                    <i class="minimize" data-feather="minimize"></i>-->
<!--                </a>-->
<!--            </li>-->
<!--            &nbsp;  &nbsp;| &nbsp; &nbsp;-->
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
            &nbsp;  &nbsp;|
            <?php
            if(!is_user_logged_in())
            {
                ?>
                &nbsp;  &nbsp;
                <li class="nav-item">
                    <a href="<?php echo home_url('auth?ref=aral-prop?id='.$_REQUEST['id'])?>">
                        ورود / ثبت نام
                    </a>
                </li>
                <?php
            }
            else
            {
                ?>
                <li class="nav-item">
                    <a href="<?php echo home_url('auth?ref=aral-prop?id=').$_REQUEST['id']?>" class="nav-link dropdown-toggle" data-toggle="dropdown" aria-expanded="true">  <i data-feather="layout"></i> &nbsp; حساب کاربری</a>
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