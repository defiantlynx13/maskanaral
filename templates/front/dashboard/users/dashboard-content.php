<div id="main">
    <!-- begin::navigation -->
    <?php

    use Plugin_Name_Dir\Includes\Functions\Utility;
    $dash_assets_url=trailingslashit( PLUGIN_NAME_URL ) . 'assets/dashboard/';
    Utility::load_template( 'dashboard.experts.general.sidebar',  compact( 'dash_assets_url' ), 'front' );
    $cu_id=get_current_user_id();
    $exp_main_group=get_user_meta($cu_id,'exp_main_group',true);

    if ($exp_main_group)
    {
        $exp_sub_group=get_user_meta($cu_id,'exp_sub_group',true);
    }
    ?>
    <!-- end::navigation -->

    <!-- begin::main-content -->
    <div class="main-content">

        <!-- begin::page-header -->
        <div class="page-header">
            <div class="container-fluid d-sm-flex justify-content-between">
                <h4>میزکار</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo home_url();?>">مسکن آرال</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">میزکار</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page-header -->

        <!-- begin::page content -->
        <div class="container-fluid">


            <div class="row">
                <div class="col-md-12">
                    <div class="row">
                        <div class="col-lg-8 col-md-12">
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="card bg-secondary-gradient">
                                        <div class="card-body">
                                            <div class="row align-items-center">
                                                <div class="col-md-7">
                                                    <h6 class="card-title mb-3">سرویس درخواست ملک</h6>
                                                    <p>مشخصات ملک مدنظرتان را برای کارشناسان ما ارسال کنید.</p>
                                                    <p>کارشناسان خبره املاک آرال بهترین املاک مشابه ملک مدنظرتان را در اختیارتان قرار می دهند.</p>
                                                </div>
                                                <div class="col-md-5">
                                                    <img src="<?php echo  $dash_assets_url.'assets/media/svg/undraw_onboarding_o8mv.svg'?>" alt="..." class="img-fluid">
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h6 class="card-title mb-3"><a href="<?php echo home_url('prop_search');?>">جستجو املاک</a></h6>
                                                    <div class="d-flex d-sm-block d-lg-flex align-items-end">
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="avatar avatar-lg">
                                                        <div class="avatar-title bg-success-bright text-success rounded-circle">
                                                            <i class="fa fa-search"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div class="card">
                                        <div class="card-body">
                                            <div class="d-flex align-items-center justify-content-between">
                                                <div>
                                                    <h6 class="card-title mb-3"><a href="<?php echo home_url('aral-profile');?>">ویرایش پروفایل</a></h6>
                                                    <div class="d-flex d-sm-block d-lg-flex align-items-end">
<!--                                                        <p class="small text-muted mb-0 line-height-20">-->
<!--                                                          ساعت کاری :  <span class="text-danger">17 الی 8:30 </span>-->
<!--                                                        </p>-->
                                                    </div>
                                                </div>
                                                <div>
                                                    <div class="avatar avatar-lg">
                                                        <div class="avatar-title bg-warning-bright text-warning rounded-circle">
                                                            <i class="fa fa-address-card"></i>
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4 col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <div class="card-title d-flex justify-content-between">
                                        <h6 class="card-title">آمار املاک</h6>
                                    </div>
                                    <div id="contacts-statuses2"></div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-md-flex align-items-start justify-content-between">
                                <h6 class="card-title">
<!--                                    درخواست های شما-->
                                </h6>

                                <button type="button" id="new_prop_request" class="btn btn btn-outline-success btn-pulse" style="">
                                    <i class="fa fa-plus mr-2"></i> درخواست جدید
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="user_prop_request_tbl" class="table table-striped mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th class="text-center">مشخصات متقاضی</th>
                                                <th class="text-center">شماره تماس</th>
                                                <th class="text-center">جزِئیات درخواست</th>
                                                <th class="text-center">تاریخ</th>
                                                <th class="text-center">کارشناس</th>
                                                <th class="text-center">وضعیت درخواست</th>
                                                <th>عملیات</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                            <hr>
                            <div class="row mt-3">
                                <?php
                                global $wpdb;
                                $table_name = $wpdb->prefix . "user_prop_request";
                                $user_id=get_current_user_id();
                                $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id} and status='pending'";
                                $pending_request=count($wpdb->get_results($sql));

                                $sql = "SELECT * FROM {$table_name} WHERE user_id = {$user_id} and status='completed'";
                                $complete_request=count($wpdb->get_results($sql));
                                ?>
                                <div class="col-md-6">
                                    <div class="card mb-0 text-center">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-block icon-block-floating mr-3 icon-block-lg icon-block-outline-success text-success">
                                                    <i class="fa fa-thumbs-up"></i>
                                                </div>
                                                <div>
                                                    <h6 class="text-uppercase font-size-11">درخواست های انجام شده</h6>
                                                    <h4 class="mb-0 font-weight-bold" id="compelted_requests"><?php echo $complete_request;?>&nbsp; درخواست</h4>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-md-6" >
                                    <div class="card mb-0 text-center">
                                        <div class="card-body p-3">
                                            <div class="d-flex align-items-center">
                                                <div class="icon-block icon-block-floating mr-3 icon-block-lg icon-block-outline-warning text-warning">
                                                    <i class="fa fa-clock-o"></i>
                                                </div>
                                                <div>
                                                    <h6 class="text-uppercase font-size-11">درخواست های در حال بررسی </h6>
                                                    <h4 class="mb-0 font-weight-bold" id="pending_requests"><?php echo $pending_request?>&nbsp; درخواست</h4>
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

            <div class="row d-none" id="matched_prop_div">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-md-flex align-items-start justify-content-between">
                                <h6 class="card-title">فایل های مشابه</h6>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
                                        <table id="matched_prop_tbl" class="table table-striped mb-0">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">فایل</th>
                                                <th class="text-center">آدرس</th>
                                                <th class="text-center">مشخصات مالک</th>
                                                <th class="text-center">عملیات</th>
                                            </tr>
                                            </thead>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="row d-none" id="new_matched_prop_div">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-md-flex align-items-start justify-content-between">
                                <h6 class="card-title">فایل های مشابه جدید</h6>
                                <button type="button" id="check_all_new_result" class="btn btn btn-outline-warning" style="">
                                    <i class="fa fa-check mr-2"></i>لیست فایل های جدید این درخواست بررسی شد
                                </button>
                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive" tabindex="1" style="overflow: hidden; outline: none;">
                                        <table id="new_matched_prop_tbl" class="table table-striped mb-0">
                                            <thead>
                                            <tr>
                                                <th class="text-center">#</th>
                                                <th class="text-center">فایل</th>
                                                <th class="text-center">آدرس</th>
                                                <th class="text-center">مشخصات مالک</th>
                                                <th class="text-center">عملیات</th>
                                            </tr>
                                            </thead>
                                        </table>
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
                <div>© 1399 | مسکن آرال ورژن 1.0.0 ارایه از  <a href="http://jbyte.ir">گروه  Jbyte developers</a></div>
            </div>
        </footer>
        <!-- end::footer -->

    </div>
    <!-- end::main-content -->

</div>

<div class="modal fade" id="new_prop_request_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-lg modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">درخواست ملک</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <form id="npr_form" method="post" class="needs-validation" novalidate>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <select id="npr_city" name="npr_city" class="form-control">
                                <option value="مشهد">مشهد</option>
                                <option value="طرقبه">طرقبه</option>
                                <option value="شاندیز">شاندیز</option>
                                <option value="گلبهار">گلبهار</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <select id="npr_district"  name="npr_district" class="form-control "  multiple>
                                <option value="قاسم آباد" data-select2-id="51">قاسم آباد</option><option value="احمدآباد" data-select2-id="53">احمدآباد</option><option value="بلوار پیروزی" data-select2-id="54">بلوار پیروزی</option><option value="بلوار فکوری" data-select2-id="55">بلوار فکوری</option><option value="کوثر جنوبی" data-select2-id="56">کوثر جنوبی</option><option value="جاده سنتو" data-select2-id="57">جاده سنتو</option><option value="کوثر شمالی" data-select2-id="58">کوثر شمالی</option><option value="معلم" data-select2-id="59">معلم</option><option value="الهیه" data-select2-id="60">الهیه</option><option value="آب و برق" data-select2-id="61">آب و برق</option><option value="فلاحی" data-select2-id="62">فلاحی</option><option value="بلوار هاشمیه" data-select2-id="63">بلوار هاشمیه</option><option value="بلوار صارمی" data-select2-id="64">بلوار صارمی</option><option value="خیابان توفیق" data-select2-id="65">خیابان توفیق</option><option value="۲۰ متری بلال" data-select2-id="66">۲۰ متری بلال</option><option value="۲۰ متری طلاب" data-select2-id="67">۲۰ متری طلاب</option><option value="۳۰ متری طلاب" data-select2-id="68">۳۰ متری طلاب</option><option value="آبادگران" data-select2-id="69">آبادگران</option><option value="آبروان جاده سرخس" data-select2-id="70">آبروان جاده سرخس</option><option value="آبکوه" data-select2-id="71">آبکوه</option><option value="آپادانا" data-select2-id="72">آپادانا</option><option value="آخوند خراسانی" data-select2-id="73">آخوند خراسانی</option><option value="آرامگاه فردوسی" data-select2-id="74">آرامگاه فردوسی</option><option value="آرمان" data-select2-id="75">آرمان</option><option value="آزادشهر" data-select2-id="76">آزادشهر</option><option value="آزادگان" data-select2-id="77">آزادگان</option><option value="آزاده" data-select2-id="78">آزاده</option><option value="آیت الله بهجت" data-select2-id="79">آیت الله بهجت</option><option value="ابرار" data-select2-id="80">ابرار</option><option value="ابن سینا" data-select2-id="81">ابن سینا</option><option value="ابوذر" data-select2-id="82">ابوذر</option><option value="ابوذر غفاری" data-select2-id="83">ابوذر غفاری</option><option value="ابومسلم" data-select2-id="84">ابومسلم</option><option value="ابونصر" data-select2-id="85">ابونصر</option><option value="اتوبان جاده نیشابور" data-select2-id="86">اتوبان جاده نیشابور</option><option value="احمدی" data-select2-id="87">احمدی</option><option value="ارداک" data-select2-id="88">ارداک</option><option value="ارشاد الرضا" data-select2-id="89">ارشاد الرضا</option><option value="ارغوان" data-select2-id="90">ارغوان</option><option value="ارمغان" data-select2-id="91">ارمغان</option><option value="استقلال" data-select2-id="92">استقلال</option><option value="اسدالله زاده" data-select2-id="93">اسدالله زاده</option><option value="التیمور" data-select2-id="94">التیمور</option><option value="المهدی" data-select2-id="95">المهدی</option><option value="امام خمینی" data-select2-id="96">امام خمینی</option><option value="امام دوست" data-select2-id="97">امام دوست</option><option value="امام رضا" data-select2-id="98">امام رضا</option><option value="امام هادی" data-select2-id="99">امام هادی</option><option value="امیرآباد" data-select2-id="100">امیرآباد</option><option value="امیر کبیر" data-select2-id="101">امیر کبیر</option><option value="انوری" data-select2-id="102">انوری</option><option value="ایثارگران" data-select2-id="103">ایثارگران</option><option value="ایستگاه سراب" data-select2-id="104">ایستگاه سراب</option><option value="بابانظر" data-select2-id="105">بابانظر</option><option value="بابک" data-select2-id="106">بابک</option><option value="بازار سرشور" data-select2-id="107">بازار سرشور</option><option value="باغچه" data-select2-id="108">باغچه</option><option value="بخارایی" data-select2-id="109">بخارایی</option><option value="بردباری" data-select2-id="110">بردباری</option><option value="برزش آباد" data-select2-id="111">برزش آباد</option><option value="برسلانی" data-select2-id="112">برسلانی</option><option value="برک پور" data-select2-id="113">برک پور</option><option value="برکپور" data-select2-id="114">برکپور</option><option value="بزرگراه آزادی" data-select2-id="115">بزرگراه آزادی</option><option value="بزرگراه آسیایی" data-select2-id="116">بزرگراه آسیایی</option><option value="بزرگراه امام علی" data-select2-id="117">بزرگراه امام علی</option><option value="بزرگراه شهید چراغچی" data-select2-id="118">بزرگراه شهید چراغچی</option><option value="بزرگ راه غدیر" data-select2-id="119">بزرگ راه غدیر</option><option value="بزرگراه فجر" data-select2-id="120">بزرگراه فجر</option><option value="بزرگراه قائم" data-select2-id="121">بزرگراه قائم</option><option value="بزرگراه کلانتری" data-select2-id="122">بزرگراه کلانتری</option><option value="بزرگراه میثاق" data-select2-id="123">بزرگراه میثاق</option><option value="بزرگراه همت" data-select2-id="124">بزرگراه همت</option><option value="بزرگمهر جنوبی" data-select2-id="125">بزرگمهر جنوبی</option><option value="بزرگمهر شمالی" data-select2-id="126">بزرگمهر شمالی</option><option value="بعثت" data-select2-id="127">بعثت</option><option value="بلوار حسابی جنوبی" data-select2-id="128">بلوار حسابی جنوبی</option><option value="بلوار آموزگار" data-select2-id="129">بلوار آموزگار</option><option value="بولوار ابوطالب" data-select2-id="130">بولوار ابوطالب</option><option value="بلوار ادیب" data-select2-id="131">بلوار ادیب</option><option value="بلوار استاد یوسفی" data-select2-id="132">بلوار استاد یوسفی</option><option value="بلوار اقبال لاهوری" data-select2-id="133">بلوار اقبال لاهوری</option><option value="بلوار اقدسیه" data-select2-id="134">بلوار اقدسیه</option><option value="بلوار امامت" data-select2-id="135">بلوار امامت</option><option value="بلوار امامیه" data-select2-id="136">بلوار امامیه</option><option value="بلوار امت" data-select2-id="137">بلوار امت</option><option value="بلوار امیر" data-select2-id="138">بلوار امیر</option><option value="بلوار امیرالمومنین" data-select2-id="139">بلوار امیرالمومنین</option><option value="بلوار امیریه" data-select2-id="140">بلوار امیریه</option><option value="بلوار اندیشه" data-select2-id="141">بلوار اندیشه</option><option value="بلوار باهنر" data-select2-id="142">بلوار باهنر</option><option value="بلوار برادران خلیلی" data-select2-id="143">بلوار برادران خلیلی</option><option value="بلوار برنسی" data-select2-id="144">بلوار برنسی</option><option value="بلوار بعثت" data-select2-id="145">بلوار بعثت</option><option value="بلوار توس" data-select2-id="146">بلوار توس</option><option value="بلوار ثامن" data-select2-id="147">بلوار ثامن</option><option value="بلوار جانباز" data-select2-id="148">بلوار جانباز</option><option value="بلوار جمهوری" data-select2-id="149">بلوار جمهوری</option><option value="بلوار چمن" data-select2-id="150">بلوار چمن</option><option value="بلوار حافظ" data-select2-id="151">بلوار حافظ</option><option value="بلوار حجاب" data-select2-id="152">بلوار حجاب</option><option value="بلوار حر" data-select2-id="153">بلوار حر</option><option value="حسابی" data-select2-id="154">حسابی</option><option value="بلوار حسابی شمالی" data-select2-id="155">بلوار حسابی شمالی</option><option value="بلوار دانش آمور" data-select2-id="156">بلوار دانش آمور</option><option value="بلوار دانشجو" data-select2-id="157">بلوار دانشجو</option><option value="بلوار دستغیب" data-select2-id="158">بلوار دستغیب</option><option value="بلوار دلاوارن" data-select2-id="159">بلوار دلاوارن</option><option value="بلوار دندانپزشکان" data-select2-id="160">بلوار دندانپزشکان</option><option value="بلوار دهقان" data-select2-id="161">بلوار دهقان</option><option value="بلوار رحمانیه" data-select2-id="162">بلوار رحمانیه</option><option value="بلوار رسالت" data-select2-id="163">بلوار رسالت</option><option value="بلوار رستمی" data-select2-id="164">بلوار رستمی</option><option value="بلوار رضوی" data-select2-id="165">بلوار رضوی</option><option value="بلوار رضویه" data-select2-id="166">بلوار رضویه</option><option value="بلوار زکریا" data-select2-id="167">بلوار زکریا</option><option value="بلوار ساجدی" data-select2-id="168">بلوار ساجدی</option><option value="بلوار سپاه" data-select2-id="169">بلوار سپاه</option><option value="بلوار سجاد" data-select2-id="170">بلوار سجاد</option><option value="بلوار سجادیه" data-select2-id="171">بلوار سجادیه</option><option value="بلوار سرافرازان" data-select2-id="172">بلوار سرافرازان</option><option value="بلوار سید رضی" data-select2-id="173">بلوار سید رضی</option><option value="بلوار شریعتی" data-select2-id="174">بلوار شریعتی</option><option value="بلوار شفا" data-select2-id="175">بلوار شفا</option><option value="بلوار شمس" data-select2-id="176">بلوار شمس</option><option value="بلوار شهید رفیعی" data-select2-id="177">بلوار شهید رفیعی</option><option value="بلوار شهید صادقی" data-select2-id="178">بلوار شهید صادقی</option><option value="بلوار شهید کاوه" data-select2-id="179">بلوار شهید کاوه</option><option value="بلوار شهید کریمی" data-select2-id="180">بلوار شهید کریمی</option><option value="بلوار شهید کشوری" data-select2-id="181">بلوار شهید کشوری</option><option value="بلوار شیرودی" data-select2-id="182">بلوار شیرودی</option><option value="بلوار صادقیه" data-select2-id="183">بلوار صادقیه</option><option value="بلوار صبا" data-select2-id="184">بلوار صبا</option><option value="بلوار صدر" data-select2-id="185">بلوار صدر</option><option value="بلوار صیاد شیرازی" data-select2-id="186">بلوار صیاد شیرازی</option><option value="بلوار عبادی" data-select2-id="187">بلوار عبادی</option><option value="بلوار عبدالمطلب" data-select2-id="188">بلوار عبدالمطلب</option><option value="بلوار عزیزیه" data-select2-id="189">بلوار عزیزیه</option><option value="بلوار عصمتیه" data-select2-id="190">بلوار عصمتیه</option><option value="بلوار فارغ التحصیلان" data-select2-id="191">بلوار فارغ التحصیلان</option><option value="بلوار فردوسی" data-select2-id="192">بلوار فردوسی</option><option value="بلوار فرهنگ" data-select2-id="193">بلوار فرهنگ</option><option value="بلوار فلسطین" data-select2-id="194">بلوار فلسطین</option><option value="بلوار قرنی" data-select2-id="195">بلوار قرنی</option><option value="بلوار کشاورز" data-select2-id="196">بلوار کشاورز</option><option value="بلوار کلاهدوز" data-select2-id="197">بلوار کلاهدوز</option><option value="بلوار کوهستان" data-select2-id="198">بلوار کوهستان</option><option value="بلوار گاز" data-select2-id="199">بلوار گاز</option><option value="بلوار گلدیس" data-select2-id="200">بلوار گلدیس</option><option value="بلوار گلها" data-select2-id="201">بلوار گلها</option><option value="بلوار لادن" data-select2-id="202">بلوار لادن</option><option value="بلوار مجیدیه" data-select2-id="203">بلوار مجیدیه</option><option value="بلوار محمدیه" data-select2-id="204">بلوار محمدیه</option><option value="بلوار مدرس" data-select2-id="205">بلوار مدرس</option><option value="بلوار مصلی" data-select2-id="206">بلوار مصلی</option><option value="بلوار ملک آباد" data-select2-id="207">بلوار ملک آباد</option><option value="بلوار منتظری" data-select2-id="208">بلوار منتظری</option><option value="بلوار مهدیه" data-select2-id="209">بلوار مهدیه</option><option value="بلوار مهران" data-select2-id="210">بلوار مهران</option><option value="بلوار موسوی قوچانی" data-select2-id="211">بلوار موسوی قوچانی</option><option value="بلوار مولوی" data-select2-id="212">بلوار مولوی</option><option value="بلوار میامی" data-select2-id="213">بلوار میامی</option><option value="بلوار نامجو" data-select2-id="214">بلوار نامجو</option><option value="بلوار نقویه" data-select2-id="215">بلوار نقویه</option><option value="بلوار نماز" data-select2-id="216">بلوار نماز</option><option value="بلوار نمایشگاه" data-select2-id="217">بلوار نمایشگاه</option><option value="بلوار هاشمی مهنه" data-select2-id="218">بلوار هاشمی مهنه</option><option value="بلوار هدایت" data-select2-id="219">بلوار هدایت</option><option value="بلوار هفت تیر" data-select2-id="220">بلوار هفت تیر</option><option value="بلوار هنرستان" data-select2-id="221">بلوار هنرستان</option><option value="بلوار هنرور" data-select2-id="222">بلوار هنرور</option><option value="بلوار وکیل آباد" data-select2-id="223">بلوار وکیل آباد</option><option value="بلوار ولایت" data-select2-id="224">بلوار ولایت</option><option value="بلوار ولیعصر" data-select2-id="225">بلوار ولیعصر</option><option value="بنفشه" data-select2-id="226">بنفشه</option><option value="بهاران" data-select2-id="227">بهاران</option><option value="بهارستان" data-select2-id="228">بهارستان</option><option value="سپاد" data-select2-id="229">سپاد</option><option value="بهشت" data-select2-id="230">بهشت</option><option value="بهشتی" data-select2-id="231">بهشتی</option><option value="بهمن" data-select2-id="232">بهمن</option><option value="بهروز" data-select2-id="233">بهروز</option><option value="بوستان" data-select2-id="234">بوستان</option><option value="بلوار ارشاد" data-select2-id="235">بلوار ارشاد</option><option value="بیستون" data-select2-id="236">بیستون</option><option value="بیهقی" data-select2-id="237">بیهقی</option><option value="پاستور" data-select2-id="238">پاستور</option><option value="پاسداران" data-select2-id="239">پاسداران</option><option value="پایداری" data-select2-id="240">پایداری</option><option value="پرستار" data-select2-id="241">پرستار</option><option value="پرورش" data-select2-id="242">پرورش</option><option value="پروین اعتصامی" data-select2-id="243">پروین اعتصامی</option><option value="پژوهش" data-select2-id="244">پژوهش</option><option value="پلیس راه" data-select2-id="245">پلیس راه</option><option value="پنج تن" data-select2-id="246">پنج تن</option><option value="پنجراه" data-select2-id="247">پنجراه</option><option value="تعبدی" data-select2-id="248">تعبدی</option><option value="تقی آباد" data-select2-id="249">تقی آباد</option><option value="توحید" data-select2-id="250">توحید</option><option value="توس" data-select2-id="251">توس</option><option value="ثمانه" data-select2-id="252">ثمانه</option><option value="جاده آرامگاه فردوسی" data-select2-id="253">جاده آرامگاه فردوسی</option><option value="جاده ابلق" data-select2-id="254">جاده ابلق</option><option value="جاده بیرجند" data-select2-id="255">جاده بیرجند</option><option value="جاده تربت حیدریه" data-select2-id="256">جاده تربت حیدریه</option><option value="جاده ریحان" data-select2-id="257">جاده ریحان</option><option value="جاده ساغشک" data-select2-id="258">جاده ساغشک</option><option value="جاده سد طرق" data-select2-id="259">جاده سد طرق</option><option value="جاده سد کارده" data-select2-id="260">جاده سد کارده</option><option value="جاده سرخس" data-select2-id="261">جاده سرخس</option><option value="جاد ه شاندیز" data-select2-id="262">جاد ه شاندیز</option><option value="جاده طرقبه" data-select2-id="263">جاده طرقبه</option><option value="جاده فریمان" data-select2-id="264">جاده فریمان</option><option value="جاده قدیم قوچان" data-select2-id="265">جاده قدیم قوچان</option><option value="جاده قدیم نیشابور" data-select2-id="266">جاده قدیم نیشابور</option><option value="جاده قوچان" data-select2-id="267">جاده قوچان</option><option value="جاده کارخانه سیمان" data-select2-id="268">جاده کارخانه سیمان</option><option value="جاده کاهو" data-select2-id="269">جاده کاهو</option><option value="جاده کشف" data-select2-id="270">جاده کشف</option><option value="جاده کلات" data-select2-id="271">جاده کلات</option><option value="جاهد شهر" data-select2-id="272">جاهد شهر</option><option value="جلال آل احمد" data-select2-id="273">جلال آل احمد</option><option value="جنت" data-select2-id="274">جنت</option><option value="جهان آرا" data-select2-id="275">جهان آرا</option><option value="چاهشک" data-select2-id="276">چاهشک</option><option value="چراغچی" data-select2-id="277">چراغچی</option><option value="چمران" data-select2-id="278">چمران</option><option value="چناران" data-select2-id="279">چناران</option><option value="چهارراه بیسیم" data-select2-id="280">چهارراه بیسیم</option><option value="چهارراه برق" data-select2-id="281">چهارراه برق</option><option value="چهارراه خسروی" data-select2-id="282">چهارراه خسروی</option><option value="چهارراه دانش" data-select2-id="283">چهارراه دانش</option><option value="چهارراه دکترا" data-select2-id="284">چهارراه دکترا</option><option value="چهارراه اه آهن" data-select2-id="285">چهارراه اه آهن</option><option value="چهارراه شهدا" data-select2-id="286">چهارراه شهدا</option><option value="چهارراه عامل" data-select2-id="287">چهارراه عامل</option><option value="چهارراه عشرت آباد" data-select2-id="288">چهارراه عشرت آباد</option><option value="" data-select2-id="289"></option><option value="چهارراه لشکر" data-select2-id="290">چهارراه لشکر</option><option value="چهارراه مخابرات" data-select2-id="291">چهارراه مخابرات</option><option value="چهارراه مقدم" data-select2-id="292">چهارراه مقدم</option><option value="چهارراه ورزش" data-select2-id="293">چهارراه ورزش</option><option value="چهار طبقه" data-select2-id="294">چهار طبقه</option><option value="چهار فصل" data-select2-id="295">چهار فصل</option><option value="حافظ" data-select2-id="296">حافظ</option><option value="حامد جنوبی" data-select2-id="297">حامد جنوبی</option><option value="حامد شمالی" data-select2-id="298">حامد شمالی</option><option value="حرعاملی" data-select2-id="299">حرعاملی</option><option value="حسین باشی" data-select2-id="300">حسین باشی</option><option value="حکیم نظامی" data-select2-id="301">حکیم نظامی</option><option value="حومه شهر" data-select2-id="302">حومه شهر</option><option value="خادم الشریعه" data-select2-id="303">خادم الشریعه</option><option value="خرمشهر" data-select2-id="304">خرمشهر</option><option value="خسروی" data-select2-id="305">خسروی</option><option value="خضرائی منش" data-select2-id="306">خضرائی منش</option><option value="خلج" data-select2-id="307">خلج</option><option value="خواجه ربیع" data-select2-id="308">خواجه ربیع</option><option value="خوش هوا" data-select2-id="309">خوش هوا</option><option value="دانشگاه" data-select2-id="310">دانشگاه</option><option value="رازی" data-select2-id="311">رازی</option><option value="صدف" data-select2-id="312">صدف</option><option value="هفده شهریور" data-select2-id="313">هفده شهریور</option><option value="خیام جنوبی" data-select2-id="314">خیام جنوبی</option><option value="خین عرب" data-select2-id="315">خین عرب</option><option value="دادگر" data-select2-id="316">دادگر</option><option value="دانش غربی" data-select2-id="317">دانش غربی</option><option value="دانش سرا" data-select2-id="318">دانش سرا</option><option value="دروازه طلایی" data-select2-id="319">دروازه طلایی</option><option value="دریا دل" data-select2-id="320">دریا دل</option><option value="دعبل خزایی" data-select2-id="321">دعبل خزایی</option><option value="ده غیبی" data-select2-id="322">ده غیبی</option><option value="دهخدا" data-select2-id="323">دهخدا</option><option value="دهشک" data-select2-id="324">دهشک</option><option value="دولت آباد" data-select2-id="325">دولت آباد</option><option value="راه آهن" data-select2-id="326">راه آهن</option><option value="راهنمایی" data-select2-id="327">راهنمایی</option><option value="رضا" data-select2-id="328">رضا</option><option value="رضا شهر" data-select2-id="329">رضا شهر</option><option value="رهایی" data-select2-id="330">رهایی</option><option value="رودکی" data-select2-id="331">رودکی</option><option value="زیبا شهر" data-select2-id="332">زیبا شهر</option><option value="سامانیه" data-select2-id="333">سامانیه</option><option value="سپیده" data-select2-id="334">سپیده</option><option value="سروش" data-select2-id="335">سروش</option><option value="سعد آباد" data-select2-id="336">سعد آباد</option><option value="سعدی" data-select2-id="337">سعدی</option><option value="سلمان فارسی" data-select2-id="338">سلمان فارسی</option><option value="سناباد" data-select2-id="339">سناباد</option><option value="سنایی" data-select2-id="340">سنایی</option><option value="سه راه ادبیات" data-select2-id="341">سه راه ادبیات</option><option value="سه راه دانش" data-select2-id="342">سه راه دانش</option><option value="سه راه فردوسی" data-select2-id="343">سه راه فردوسی</option><option value="سیده مرتضی" data-select2-id="344">سیده مرتضی</option><option value="سیدان" data-select2-id="345">سیدان</option><option value="سیدی" data-select2-id="346">سیدی</option><option value="شاهد" data-select2-id="347">شاهد</option><option value="شاهنامه" data-select2-id="348">شاهنامه</option><option value="شهرستانی" data-select2-id="349">شهرستانی</option><option value="شهرک ابوذر" data-select2-id="350">شهرک ابوذر</option><option value="شهرک بهارستان" data-select2-id="351">شهرک بهارستان</option><option value="شهرک ثامن" data-select2-id="352">شهرک ثامن</option><option value="شهید قانع" data-select2-id="353">شهید قانع</option><option value="شهید صدوق" data-select2-id="354">شهید صدوق</option><option value="شیخ طوسی شمالی" data-select2-id="355">شیخ طوسی شمالی</option><option value="طبرسی بلوار اول" data-select2-id="356">طبرسی بلوار اول</option><option value="طبرسی بلوار دوم" data-select2-id="357">طبرسی بلوار دوم</option><option value="طلاب" data-select2-id="358">طلاب</option><option value="عارف" data-select2-id="359">عارف</option><option value="عدل خمینی" data-select2-id="360">عدل خمینی</option><option value="علیمردانی" data-select2-id="361">علیمردانی</option><option value="عنصری غربی" data-select2-id="362">عنصری غربی</option><option value="عنصری شرقی" data-select2-id="363">عنصری شرقی</option><option value="غدیر" data-select2-id="364">غدیر</option><option value="فاطمیه" data-select2-id="365">فاطمیه</option><option value="فداییان اسلام" data-select2-id="366">فداییان اسلام</option><option value="فرامرز عباسی" data-select2-id="367">فرامرز عباسی</option><option value="فرهاد" data-select2-id="368">فرهاد</option><option value="فیاض بخش" data-select2-id="369">فیاض بخش</option><option value="قائم" data-select2-id="370">قائم</option><option value="قائم مقام فراهانی" data-select2-id="371">قائم مقام فراهانی</option><option value="قاضی طباطبایی" data-select2-id="372">قاضی طباطبایی</option><option value="قباد" data-select2-id="373">قباد</option><option value="کارگر" data-select2-id="374">کارگر</option><option value="کاشانی" data-select2-id="375">کاشانی</option><option value="کامیاب" data-select2-id="376">کامیاب</option><option value="کاهو" data-select2-id="377">کاهو</option><option value="کاویان" data-select2-id="378">کاویان</option><option value="کرامت" data-select2-id="379">کرامت</option><option value="کوشش" data-select2-id="380">کوشش</option><option value="کوهسنگی" data-select2-id="381">کوهسنگی</option><option value="مجد" data-select2-id="382">مجد</option><option value="مجلسی" data-select2-id="383">مجلسی</option><option value="مطهری جنوبی" data-select2-id="384">مطهری جنوبی</option><option value="مطهری شمالی" data-select2-id="385">مطهری شمالی</option><option value="معاد" data-select2-id="386">معاد</option><option value="مفتح" data-select2-id="387">مفتح</option><option value="ملاصدرا" data-select2-id="388">ملاصدرا</option><option value="ملک الشعرا بهار" data-select2-id="389">ملک الشعرا بهار</option>
                            </select>
                            <div class="npr-district-container"></div>
                        </div>
                        <div class="form-group col-md-3" >
                            <select id="npr_deal_type"  name="npr_deal_type" class="form-control">

                                <?php
                                if($exp_main_group=='فروش')
                                {
                                    echo '<option value="خرید">خرید</option>';
                                }
                                else
                                {
                                    echo '
                                    <option value="رهن و اجاره">رهن و اجاره</option>
                                <option value="رهن کامل">رهن کامل</option>';
                                }
                                ?>

                            </select>
                        </div>
                        <div class="form-group col-md-3">
                            <select id="npr_prop_type" name="npr_prop_type" class="form-control">
                                <?php
                                if($exp_main_group=='فروش')
                                {
                                    if ($exp_sub_group == 'آپارتمان،مغازه تجاری،دفتر کار اداری')
                                    {
                                        echo '<option value="آپارتمان">آپارتمان</option>
                                <option value="مغازه تجاری">مغازه تجاری</option>
                                <option value="دفتر کار اداری">دفتر کار اداری</option>';
                                    }
                                    else
                                    {
                                        echo '<option value="خانه ویلایی">خانه ویلایی</option>
                                <option value="باغ ویلا">باغ ویلا</option>
                                <option value="زمین">زمین</option>';
                                    }
                                }
                                else
                                {
                                    echo '  <option value="آپارتمان">آپارتمان</option>
                                <option value="مغازه تجاری">مغازه تجاری</option>
                                <option value="دفتر کار اداری">دفتر کار اداری</option>
                                <option value="خانه ویلایی">خانه ویلایی</option>
                                <option value="باغ ویلا">باغ ویلا</option>
                                <option value="زمین">زمین</option>';
                                }
                                ?>
                            </select>
                        </div>

                        <div class="form-group col-md-3 d-none" id="price_div">
                            <select id="npr_price"  name="npr_price" class="form-control" multiple>
                                <option value="50" title="50 میلیون">50 میلیون</option>
                                <option value="100" title="100 میلیون">100 میلیون</option>
                                <option value="150" title="150 میلیون">150 میلیون</option>
                                <option value="200" title="200 میلیون">200 میلیون</option>
                                <option value="250" title="250 میلیون">250 میلیون</option>
                                <option value="300" title="300 میلیون">300 میلیون</option>
                                <option value="350" title="350 میلیون">350 میلیون</option>
                                <option value="400" title="400 میلیون">400 میلیون</option>
                                <option value="450" title="450 میلیون">450 میلیون</option>
                                <option value="500" title="500 میلیون">500 میلیون</option>
                                <option value="600" title="600 میلیون">600 میلیون</option>
                                <option value="700" title="700 میلیون">700 میلیون</option>
                                <option value="800" title="800 میلیون">800 میلیون</option>
                                <option value="900" title="900 میلیون">900 میلیون</option>
                                <option value="1000" title="1 میلیارد">1 میلیارد</option>
                                <option value="1250" title="1/250 میلیارد">1/250 میلیارد</option>
                                <option value="1500" title="1/500 میلیارد">1/500 میلیارد</option>
                                <option value="1750" title="1/750 میلیارد">1/750 میلیارد</option>
                                <option value="2000" title="2 میلیارد">2 میلیارد</option>
                                <option value="2250" title="2/250 میلیارد">2/250 میلیارد</option>
                                <option value="2500" title="2/500 میلیارد">2/500 میلیارد</option>
                                <option value="2750" title="2/750 میلیارد">2/750 میلیارد</option>
                                <option value="3000" title="3 میلیارد">3 میلیارد</option>
                                <option value="3500" title="3/5 میلیارد">3/5 میلیارد</option>
                                <option value="4000" title="4 میلیارد">4 میلیارد</option>
                                <option value="4500" title="4/5 میلیارد">4/5 میلیارد</option>
                                <option value="5000" title="5 میلیارد">5 میلیارد</option>
                                <option value="5000" title="6 میلیارد">6 میلیارد</option>
                                <option value="7000" title="7 میلیارد">7 میلیارد</option>
                                <option value="8000" title="8 میلیارد">8 میلیارد</option>
                                <option value="9000" title="9 میلیارد">9 میلیارد</option>
                                <option value="10000" title="10 میلیارد">10 میلیارد</option>
                            </select>
                            <div class="tail-move-container"></div>
                        </div>
                        <div class="form-group col-md-3 d-none" id="deed_type_div">
                            <select id="npr_deed_type" name="npr_deed_type" class="form-control" multiple>
                                <option value="ملکی">ملکی</option>
                                <option value="آستان قدس">آستان قدس</option>
                                <option value="قولنامه‌ای">قولنامه‌ای</option>
                                <option value="اوقاف">اوقاف</option>
                                <option value="مشاع">مشاع</option>
                                <option value="سرقفلی">سرقفلی</option>
                            </select>
                            <div class="npr-deed_type-container"></div>
                        </div>
                        <div class="form-group col-md-3 d-none" id="rent_div">
                            <select id="npr_rent"  name="npr_rent" class="form-control" multiple>
                                <option value="100" title="100 هزار">100 هزار</option>
                                <option value="200" title="200 هزار">200 هزار</option>
                                <option value="300" title="300 هزار">300 هزار</option>
                                <option value="400" title="400 هزار">400 هزار</option>
                                <option value="500" title="500 هزار">500 هزار</option>
                                <option value="600" title="600 هزار">600 هزار</option>
                                <option value="700" title="700 هزار">700 هزار</option>
                                <option value="800" title="800 هزار">800 هزار</option>
                                <option value="900" title="900 هزار">900 هزار</option>
                                <option value="1000" title="1 میلیون">1 میلیون</option>
                                <option value="1500" title="1/5 میلیون">1/5 میلیون</option>
                                <option value="2000" title="2 میلیون">2 میلیون</option>
                                <option value="2500" title="2/5 میلیون">2/5 میلیون</option>
                                <option value="3000" title="3 میلیون">3 میلیون</option>
                                <option value="3500" title="3/5 میلیون">3/5 میلیون</option>
                                <option value="4000" title="4 میلیون">4 میلیون</option>
                                <option value="4500" title="4/5 میلیون">4/5 میلیون</option>
                                <option value="5000" title="5 میلیون">5 میلیون</option>
                                <option value="6000" title="6 میلیون">6 میلیون</option>
                                <option value="7000" title="7 میلیون">7 میلیون</option>
                                <option value="8000" title="8 میلیون">8 میلیون</option>
                                <option value="9000" title="9 میلیون">9 میلیون</option>
                                <option value="10000" title="10 میلیون">10 میلیون</option>
                                <option value="11000" title="11 میلیون">11 میلیون</option>
                                <option value="12000" title="12 میلیون">12 میلیون</option>
                                <option value="13000" title="12 میلیون">13 میلیون</option>
                                <option value="14000" title="14 میلیون">14 میلیون</option>
                                <option value="15000" title="15 میلیون">15 میلیون</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3 d-none" id="mortgage_div">
                            <select id="npr_mortgage"  name="npr_mortgage" class="form-control" multiple>
                                <option value="1" title="1 میلیون">1 میلیون</option>
                                <option value="2" title="2 میلیون">2 میلیون</option>
                                <option value="3" title="3 میلیون">3 میلیون</option>
                                <option value="4" title="4 میلیون">4 میلیون</option>
                                <option value="5" title="5 میلیون">5 میلیون</option>
                                <option value="6" title="6 میلیون">6 میلیون</option>
                                <option value="7" title="7 میلیون">7 میلیون</option>
                                <option value="8" title="8 میلیون">8 میلیون</option>
                                <option value="9" title="9 میلیون">9 میلیون</option>
                                <option value="10" title="10 میلیون">10 میلیون</option>
                                <option value="15" title="15 میلیون">15 میلیون</option>
                                <option value="20" title="20 میلیون">20 میلیون</option>
                                <option value="25" title="25 میلیون">25 میلیون</option>
                                <option value="30" title="30 میلیون">30 میلیون</option>
                                <option value="35" title="35 میلیون">35 میلیون</option>
                                <option value="40" title="40 میلیون">40 میلیون</option>
                                <option value="45" title="45 میلیون">45 میلیون</option>
                                <option value="50" title="50 میلیون">50 میلیون</option>
                                <option value="55" title="55 میلیون">55 میلیون</option>
                                <option value="60" title="60 میلیون">60 میلیون</option>
                                <option value="65" title="65 میلیون">65 میلیون</option>
                                <option value="70" title="70 میلیون">70 میلیون</option>
                                <option value="75" title="75 میلیون">75 میلیون</option>
                                <option value="80" title="80 میلیون">80 میلیون</option>
                                <option value="85" title="85 میلیون">85 میلیون</option>
                                <option value="90" title="90 میلیون">90 میلیون</option>
                                <option value="100" title="100 میلیون">100 میلیون</option>
                                <option value="125" title="125 میلیون">125 میلیون</option>
                                <option value="150" title="150 میلیون">150 میلیون</option>
                                <option value="175" title="175 میلیون">175 میلیون</option>
                                <option value="200" title="200 میلیون">200 میلیون</option>
                                <option value="250" title="250 میلیون">250 میلیون</option>
                                <option value="300" title="300 میلیون">300 میلیون</option>
                                <option value="350" title="350 میلیون">350 میلیون</option>
                                <option value="400" title="400 میلیون">400 میلیون</option>
                                <option value="450" title="450 میلیون">450 میلیون</option>
                                <option value="500" title="500 میلیون">500 میلیون</option>
                            </select>
                        </div>

                        <div class="form-group col-md-3" id="bedroom_count_div">
                            <select id="npr_bedroom_count" name="npr_bedroom_count" class="form-control">
                                <option value="1">1 خواب</option>
                                <option value="2">2 خواب</option>
                                <option value="3">3 خواب</option>
                                <option value="4">4 خواب</option>
                                <option value="5">5 خواب</option>
                                <option value="6">6 خواب</option>
                                <option value="7">7 خواب</option>
                                <option value="8">8 خواب</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3" id="facilities_div">
                            <select id="npr_facilities" name="npr_facilities" class="form-control" multiple>
                                <option value="parking">پارکینک</option>
                                <option value="warehouse">انباری</option>
                                <option value="wallpaper">کاغذ دیواری</option>
                                <option value="terrace">تراس</option>
                                <option value="video_iphone">آیفون تصویری</option>
                                <option value="remote_door">درب برقی</option>
                                <option value="toilet">توالت فرنگی</option>
                                <option value="sauna">سونا</option>
                                <option value="jacuzzi">جکوزی</option>
                                <option value="pool">استخر</option>
                                <option value="water_cooler">کولر آبی</option>
                                <option value="heater">بخاری</option>
                                <option value="package">پکیج</option>
                                <option value="water_heater">آب گرمکن</option>
                                <option value="gas_cooler">کولر گازی</option>
                                <option value="floor_heating">گرمایش از کف</option>
                                <option value="air_conditioning">تهویه مطبوع</option>
                                <option value="chiller">چیلر</option>
                                <option value="desktop_gas">گاز رو میزی</option>
                                <option value="hood">هود</option>
                                <option value="cctv">دوربین مدار بسته</option>
                                <option value="radiator">رادیاتور</option>
                                <option value="luster">لوستر</option>
                            </select>
                            <div class="npr_facilities_container"></div>
                        </div>
                        <div class="form-group col-md-3 " id="floor_count_div">
                            <select id="npr_floor_count" name="npr_floor_count" class="form-control">
                                <option value="-1">زیرهمکف</option>
                                <option value="0">همکف</option>
                                <option value="1" selected>طبقه 1</option>
                                <option value="2">طبقه 2</option>
                                <option value="3">طبقه 3</option>
                                <option value="4">طبقه 4</option>
                                <option value="5">طبقه 5</option>
                                <option value="100">طبقه +5</option>
                            </select>
                            <div class="npr_floor_count_container"></div>
                        </div>
                        <div class="form-group col-md-3" id="infrastructure_area_div">
                            <select id="npr_infrastructure_area" name="npr_infrastructure_area" class="form-control" multiple>
                                <option value="50">50 متر</option>
                                <option value="75">75 متر</option>
                                <option value="100">100 متر</option>
                                <option value="125">125 متر</option>
                                <option value="150">150 متر</option>
                                <option value="175">175 متر</option>
                                <option value="200">200 متر</option>
                                <option value="250">250 متر</option>
                                <option value="300">300 متر</option>
                                <option value="400">400 متر</option>
                                <option value="500">500 متر</option>
                                <option value="600">600 متر</option>
                                <option value="700">700 متر</option>
                                <option value="800">800 متر</option>
                                <option value="900">900 متر</option>
                                <option value="1000">1000 متر</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3" id="no_elev_div">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-checkbox-info">
                                    <input type="radio" id="no_elavator" name="elevator" class="custom-control-input" value="no" checked>
                                    <label class="custom-control-label" for="no_elavator">بدون آسانسور</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3" id="no_elavator_floor_count_div">
                            <label for="no_elavator_floor_count">بدون آسانسور تا کدام طبقه ؟</label>
                            <select id="no_elavator_floor_count" name="no_elavator_floor_count" class="form-control">
                                <option value="-1">زیرهمکف</option>
                                <option value="0">همکف</option>
                                <option value="1" selected>طبقه 1</option>
                                <option value="2">طبقه 2</option>
                                <option value="3">طبقه 3</option>
                                <option value="4">طبقه 4</option>
                                <option value="5">طبقه 5</option>
                                <option value="100">طبقه +5</option>
                            </select>
                        </div>
                        <div class="form-group col-md-3"  id="yes_elev_div">
                            <div class="form-group">
                                <div class="custom-control custom-radio custom-checkbox-info">
                                    <input type="radio" id="yes_elavator" name="elevator" value="yes" class="custom-control-input">
                                    <label class="custom-control-label" for="yes_elavator">با آسانسور</label>
                                </div>
                            </div>
                        </div>
                        <div class="form-group col-md-3  d-none" id="yes_elavator_floor_count_div">
                            <label for="yes_elavator_floor_count">با آسانسور تا کدام طبقه؟</label>
                            <select id="yes_elavator_floor_count" name="yes_elavator_floor_count" class="form-control">
                                <option value="-1">زیرهمکف</option>
                                <option value="0">همکف</option>
                                <option value="1" selected>طبقه 1</option>
                                <option value="2">طبقه 2</option>
                                <option value="3">طبقه 3</option>
                                <option value="4">طبقه 4</option>
                                <option value="5">طبقه 5</option>
                                <option value="100">طبقه +5</option>
                            </select>
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-3">
                            <label for="npr_customer_name">نام و نام خانوادگی متقاضی</label>
                            <input class="form-control sj-input" type="text" id="npr_customer_name" name="npr_customer_name">
                            <div class="invalid-feedback d-none" id="npr_customer_name_error">
                            </div>
                        </div>
                        <div class="form-group col-md-3">
                            <label for="npr_customer_tel">موبایل</label>
                            <input class="form-control sj-input" type="text" id="npr_customer_tel" name="npr_customer_tel">
                            <div class="invalid-feedback d-none" id="npr_customer_tel_error">
                            </div>
                        </div>
                    </div>
                </form>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">بستن
                </button>
                <button type="button" class="btn btn-primary" id="new_prop_request_btn">ثبت</button>
            </div>
        </div>
    </div>
</div>

<div class="modal fade" id="prop_requeset_detailes" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">جزئیات درخواست</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body" id="show_request_det_tbl">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
<!--                <button type="button" class="btn btn-outline-primary btn-rounded">پیشفرض</button>-->

            </div>
        </div>
    </div>
</div>
