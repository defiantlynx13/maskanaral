
<?php
use Plugin_Name_Dir\Includes\Functions\Date;
use Plugin_Name_Dir\Includes\Functions\Utility;
$dash_assets_url=trailingslashit( PLUGIN_NAME_URL ) . 'assets/dashboard/';
?>
<!-- begin::main -->
<div id="main">
    <!-- begin::main-content -->
    <div class="main-content">
        <!-- begin::page-header -->
<!--        <div class="page-header">-->
<!---->
<!--        </div>-->
        <!-- end::page-header -->




        <!-- begin::page content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center pb-1 pt-3 mb-3" >
                                <div class="col-md-8">
                                    <h1 class="card-title mb-3 pageTitle city-page-title">جستــجو</h1>
                                    <hr>
                                    <form class="form-inline well" id="aral-home-search-form" method="get" action="<?php echo home_url('aral-all-prop')?>">
                                        <div class="form-group mx-sm-3 mb-2" id="search_city">
                                            <select id="search_city_select" name="search_city_select">
                                                <option>مشهد</option>
                                                <option>طرقبه</option>
                                                <option>شاندیز</option>
                                                <option>گلبهار</option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2 "  id="seach_region">
                                            <select id="search_region_select" name="search_region_select">
                                                <option value="0">انتخاب منطقه</option>
                                                <option value="1">منطقه 1</option>
                                                <option value="2">منطقه 2</option>
                                                <option value="3">منطقه 3</option>
                                                <option value="4">منطقه 4</option>
                                                <option value="5">منطقه 5</option>
                                                <option value="6">منطقه 6</option>
                                                <option value="7">منطقه 7</option>
                                                <option value="8">منطقه 8</option>
                                                <option value="9">منطقه 9</option>
                                                <option value="10">منطقه 10</option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2" id="search_district">
                                            <select id="search_district_select" name="search_district_select" multiple>
                                                <option value="قاسم آباد">قاسم آباد</option>
                                                <option value="احمدآباد">احمدآباد</option><option value="بلوار پیروزی" data-select2-id="54">بلوار پیروزی</option><option value="بلوار فکوری" data-select2-id="55">بلوار فکوری</option><option value="کوثر جنوبی" data-select2-id="56">کوثر جنوبی</option><option value="جاده سنتو" data-select2-id="57">جاده سنتو</option><option value="کوثر شمالی" data-select2-id="58">کوثر شمالی</option><option value="معلم" data-select2-id="59">معلم</option><option value="الهیه" data-select2-id="60">الهیه</option><option value="آب و برق" data-select2-id="61">آب و برق</option><option value="فلاحی" data-select2-id="62">فلاحی</option><option value="بلوار هاشمیه" data-select2-id="63">بلوار هاشمیه</option><option value="بلوار صارمی" data-select2-id="64">بلوار صارمی</option><option value="خیابان توفیق" data-select2-id="65">خیابان توفیق</option><option value="۲۰ متری بلال" data-select2-id="66">۲۰ متری بلال</option><option value="۲۰ متری طلاب" data-select2-id="67">۲۰ متری طلاب</option><option value="۳۰ متری طلاب" data-select2-id="68">۳۰ متری طلاب</option><option value="آبادگران" data-select2-id="69">آبادگران</option><option value="آبروان جاده سرخس" data-select2-id="70">آبروان جاده سرخس</option><option value="آبکوه" data-select2-id="71">آبکوه</option><option value="آپادانا" data-select2-id="72">آپادانا</option><option value="آخوند خراسانی" data-select2-id="73">آخوند خراسانی</option><option value="آرامگاه فردوسی" data-select2-id="74">آرامگاه فردوسی</option><option value="آرمان" data-select2-id="75">آرمان</option><option value="آزادشهر" data-select2-id="76">آزادشهر</option><option value="آزادگان" data-select2-id="77">آزادگان</option><option value="آزاده" data-select2-id="78">آزاده</option><option value="آیت الله بهجت" data-select2-id="79">آیت الله بهجت</option><option value="ابرار" data-select2-id="80">ابرار</option><option value="ابن سینا" data-select2-id="81">ابن سینا</option><option value="ابوذر" data-select2-id="82">ابوذر</option><option value="ابوذر غفاری" data-select2-id="83">ابوذر غفاری</option><option value="ابومسلم" data-select2-id="84">ابومسلم</option><option value="ابونصر" data-select2-id="85">ابونصر</option><option value="اتوبان جاده نیشابور" data-select2-id="86">اتوبان جاده نیشابور</option><option value="احمدی" data-select2-id="87">احمدی</option><option value="ارداک" data-select2-id="88">ارداک</option><option value="ارشاد الرضا" data-select2-id="89">ارشاد الرضا</option><option value="ارغوان" data-select2-id="90">ارغوان</option><option value="ارمغان" data-select2-id="91">ارمغان</option><option value="استقلال" data-select2-id="92">استقلال</option><option value="اسدالله زاده" data-select2-id="93">اسدالله زاده</option><option value="التیمور" data-select2-id="94">التیمور</option><option value="المهدی" data-select2-id="95">المهدی</option><option value="امام خمینی" data-select2-id="96">امام خمینی</option><option value="امام دوست" data-select2-id="97">امام دوست</option><option value="امام رضا" data-select2-id="98">امام رضا</option><option value="امام هادی" data-select2-id="99">امام هادی</option><option value="امیرآباد" data-select2-id="100">امیرآباد</option><option value="امیر کبیر" data-select2-id="101">امیر کبیر</option><option value="انوری" data-select2-id="102">انوری</option><option value="ایثارگران" data-select2-id="103">ایثارگران</option><option value="ایستگاه سراب" data-select2-id="104">ایستگاه سراب</option><option value="بابانظر" data-select2-id="105">بابانظر</option><option value="بابک" data-select2-id="106">بابک</option><option value="بازار سرشور" data-select2-id="107">بازار سرشور</option><option value="باغچه" data-select2-id="108">باغچه</option><option value="بخارایی" data-select2-id="109">بخارایی</option><option value="بردباری" data-select2-id="110">بردباری</option><option value="برزش آباد" data-select2-id="111">برزش آباد</option><option value="برسلانی" data-select2-id="112">برسلانی</option><option value="برک پور" data-select2-id="113">برک پور</option><option value="برکپور" data-select2-id="114">برکپور</option><option value="بزرگراه آزادی" data-select2-id="115">بزرگراه آزادی</option><option value="بزرگراه آسیایی" data-select2-id="116">بزرگراه آسیایی</option><option value="بزرگراه امام علی" data-select2-id="117">بزرگراه امام علی</option><option value="بزرگراه شهید چراغچی" data-select2-id="118">بزرگراه شهید چراغچی</option><option value="بزرگ راه غدیر" data-select2-id="119">بزرگ راه غدیر</option><option value="بزرگراه فجر" data-select2-id="120">بزرگراه فجر</option><option value="بزرگراه قائم" data-select2-id="121">بزرگراه قائم</option><option value="بزرگراه کلانتری" data-select2-id="122">بزرگراه کلانتری</option><option value="بزرگراه میثاق" data-select2-id="123">بزرگراه میثاق</option><option value="بزرگراه همت" data-select2-id="124">بزرگراه همت</option><option value="بزرگمهر جنوبی" data-select2-id="125">بزرگمهر جنوبی</option><option value="بزرگمهر شمالی" data-select2-id="126">بزرگمهر شمالی</option><option value="بعثت" data-select2-id="127">بعثت</option><option value="بلوار حسابی جنوبی" data-select2-id="128">بلوار حسابی جنوبی</option><option value="بلوار آموزگار" data-select2-id="129">بلوار آموزگار</option><option value="بولوار ابوطالب" data-select2-id="130">بولوار ابوطالب</option><option value="بلوار ادیب" data-select2-id="131">بلوار ادیب</option><option value="بلوار استاد یوسفی" data-select2-id="132">بلوار استاد یوسفی</option><option value="بلوار اقبال لاهوری" data-select2-id="133">بلوار اقبال لاهوری</option><option value="بلوار اقدسیه" data-select2-id="134">بلوار اقدسیه</option><option value="بلوار امامت" data-select2-id="135">بلوار امامت</option><option value="بلوار امامیه" data-select2-id="136">بلوار امامیه</option><option value="بلوار امت" data-select2-id="137">بلوار امت</option><option value="بلوار امیر" data-select2-id="138">بلوار امیر</option><option value="بلوار امیرالمومنین" data-select2-id="139">بلوار امیرالمومنین</option><option value="بلوار امیریه" data-select2-id="140">بلوار امیریه</option><option value="بلوار اندیشه" data-select2-id="141">بلوار اندیشه</option><option value="بلوار باهنر" data-select2-id="142">بلوار باهنر</option><option value="بلوار برادران خلیلی" data-select2-id="143">بلوار برادران خلیلی</option><option value="بلوار برنسی" data-select2-id="144">بلوار برنسی</option><option value="بلوار بعثت" data-select2-id="145">بلوار بعثت</option><option value="بلوار توس" data-select2-id="146">بلوار توس</option><option value="بلوار ثامن" data-select2-id="147">بلوار ثامن</option><option value="بلوار جانباز" data-select2-id="148">بلوار جانباز</option><option value="بلوار جمهوری" data-select2-id="149">بلوار جمهوری</option><option value="بلوار چمن" data-select2-id="150">بلوار چمن</option><option value="بلوار حافظ" data-select2-id="151">بلوار حافظ</option><option value="بلوار حجاب" data-select2-id="152">بلوار حجاب</option><option value="بلوار حر" data-select2-id="153">بلوار حر</option><option value="حسابی" data-select2-id="154">حسابی</option><option value="بلوار حسابی شمالی" data-select2-id="155">بلوار حسابی شمالی</option><option value="بلوار دانش آمور" data-select2-id="156">بلوار دانش آمور</option><option value="بلوار دانشجو" data-select2-id="157">بلوار دانشجو</option><option value="بلوار دستغیب" data-select2-id="158">بلوار دستغیب</option><option value="بلوار دلاوارن" data-select2-id="159">بلوار دلاوارن</option><option value="بلوار دندانپزشکان" data-select2-id="160">بلوار دندانپزشکان</option><option value="بلوار دهقان" data-select2-id="161">بلوار دهقان</option><option value="بلوار رحمانیه" data-select2-id="162">بلوار رحمانیه</option><option value="بلوار رسالت" data-select2-id="163">بلوار رسالت</option><option value="بلوار رستمی" data-select2-id="164">بلوار رستمی</option><option value="بلوار رضوی" data-select2-id="165">بلوار رضوی</option><option value="بلوار رضویه" data-select2-id="166">بلوار رضویه</option><option value="بلوار زکریا" data-select2-id="167">بلوار زکریا</option><option value="بلوار ساجدی" data-select2-id="168">بلوار ساجدی</option><option value="بلوار سپاه" data-select2-id="169">بلوار سپاه</option><option value="بلوار سجاد" data-select2-id="170">بلوار سجاد</option><option value="بلوار سجادیه" data-select2-id="171">بلوار سجادیه</option><option value="بلوار سرافرازان" data-select2-id="172">بلوار سرافرازان</option><option value="بلوار سید رضی" data-select2-id="173">بلوار سید رضی</option><option value="بلوار شریعتی" data-select2-id="174">بلوار شریعتی</option><option value="بلوار شفا" data-select2-id="175">بلوار شفا</option><option value="بلوار شمس" data-select2-id="176">بلوار شمس</option><option value="بلوار شهید رفیعی" data-select2-id="177">بلوار شهید رفیعی</option><option value="بلوار شهید صادقی" data-select2-id="178">بلوار شهید صادقی</option><option value="بلوار شهید کاوه" data-select2-id="179">بلوار شهید کاوه</option><option value="بلوار شهید کریمی" data-select2-id="180">بلوار شهید کریمی</option><option value="بلوار شهید کشوری" data-select2-id="181">بلوار شهید کشوری</option><option value="بلوار شیرودی" data-select2-id="182">بلوار شیرودی</option><option value="بلوار صادقیه" data-select2-id="183">بلوار صادقیه</option><option value="بلوار صبا" data-select2-id="184">بلوار صبا</option><option value="بلوار صدر" data-select2-id="185">بلوار صدر</option><option value="بلوار صیاد شیرازی" data-select2-id="186">بلوار صیاد شیرازی</option><option value="بلوار عبادی" data-select2-id="187">بلوار عبادی</option><option value="بلوار عبدالمطلب" data-select2-id="188">بلوار عبدالمطلب</option><option value="بلوار عزیزیه" data-select2-id="189">بلوار عزیزیه</option><option value="بلوار عصمتیه" data-select2-id="190">بلوار عصمتیه</option><option value="بلوار فارغ التحصیلان" data-select2-id="191">بلوار فارغ التحصیلان</option><option value="بلوار فردوسی" data-select2-id="192">بلوار فردوسی</option><option value="بلوار فرهنگ" data-select2-id="193">بلوار فرهنگ</option><option value="بلوار فلسطین" data-select2-id="194">بلوار فلسطین</option><option value="بلوار قرنی" data-select2-id="195">بلوار قرنی</option><option value="بلوار کشاورز" data-select2-id="196">بلوار کشاورز</option><option value="بلوار کلاهدوز" data-select2-id="197">بلوار کلاهدوز</option><option value="بلوار کوهستان" data-select2-id="198">بلوار کوهستان</option><option value="بلوار گاز" data-select2-id="199">بلوار گاز</option><option value="بلوار گلدیس" data-select2-id="200">بلوار گلدیس</option><option value="بلوار گلها" data-select2-id="201">بلوار گلها</option><option value="بلوار لادن" data-select2-id="202">بلوار لادن</option><option value="بلوار مجیدیه" data-select2-id="203">بلوار مجیدیه</option><option value="بلوار محمدیه" data-select2-id="204">بلوار محمدیه</option><option value="بلوار مدرس" data-select2-id="205">بلوار مدرس</option><option value="بلوار مصلی" data-select2-id="206">بلوار مصلی</option><option value="بلوار ملک آباد" data-select2-id="207">بلوار ملک آباد</option><option value="بلوار منتظری" data-select2-id="208">بلوار منتظری</option><option value="بلوار مهدیه" data-select2-id="209">بلوار مهدیه</option><option value="بلوار مهران" data-select2-id="210">بلوار مهران</option><option value="بلوار موسوی قوچانی" data-select2-id="211">بلوار موسوی قوچانی</option><option value="بلوار مولوی" data-select2-id="212">بلوار مولوی</option><option value="بلوار میامی" data-select2-id="213">بلوار میامی</option><option value="بلوار نامجو" data-select2-id="214">بلوار نامجو</option><option value="بلوار نقویه" data-select2-id="215">بلوار نقویه</option><option value="بلوار نماز" data-select2-id="216">بلوار نماز</option><option value="بلوار نمایشگاه" data-select2-id="217">بلوار نمایشگاه</option><option value="بلوار هاشمی مهنه" data-select2-id="218">بلوار هاشمی مهنه</option><option value="بلوار هدایت" data-select2-id="219">بلوار هدایت</option><option value="بلوار هفت تیر" data-select2-id="220">بلوار هفت تیر</option><option value="بلوار هنرستان" data-select2-id="221">بلوار هنرستان</option><option value="بلوار هنرور" data-select2-id="222">بلوار هنرور</option><option value="بلوار وکیل آباد" data-select2-id="223">بلوار وکیل آباد</option><option value="بلوار ولایت" data-select2-id="224">بلوار ولایت</option><option value="بلوار ولیعصر" data-select2-id="225">بلوار ولیعصر</option><option value="بنفشه" data-select2-id="226">بنفشه</option><option value="بهاران" data-select2-id="227">بهاران</option><option value="بهارستان" data-select2-id="228">بهارستان</option><option value="سپاد" data-select2-id="229">سپاد</option><option value="بهشت" data-select2-id="230">بهشت</option><option value="بهشتی" data-select2-id="231">بهشتی</option><option value="بهمن" data-select2-id="232">بهمن</option><option value="بهروز" data-select2-id="233">بهروز</option><option value="بوستان" data-select2-id="234">بوستان</option><option value="بلوار ارشاد" data-select2-id="235">بلوار ارشاد</option><option value="بیستون" data-select2-id="236">بیستون</option><option value="بیهقی" data-select2-id="237">بیهقی</option><option value="پاستور" data-select2-id="238">پاستور</option><option value="پاسداران" data-select2-id="239">پاسداران</option><option value="پایداری" data-select2-id="240">پایداری</option><option value="پرستار" data-select2-id="241">پرستار</option><option value="پرورش" data-select2-id="242">پرورش</option><option value="پروین اعتصامی" data-select2-id="243">پروین اعتصامی</option><option value="پژوهش" data-select2-id="244">پژوهش</option><option value="پلیس راه" data-select2-id="245">پلیس راه</option><option value="پنج تن" data-select2-id="246">پنج تن</option><option value="پنجراه" data-select2-id="247">پنجراه</option><option value="تعبدی" data-select2-id="248">تعبدی</option><option value="تقی آباد" data-select2-id="249">تقی آباد</option><option value="توحید" data-select2-id="250">توحید</option><option value="توس" data-select2-id="251">توس</option><option value="ثمانه" data-select2-id="252">ثمانه</option><option value="جاده آرامگاه فردوسی" data-select2-id="253">جاده آرامگاه فردوسی</option><option value="جاده ابلق" data-select2-id="254">جاده ابلق</option><option value="جاده بیرجند" data-select2-id="255">جاده بیرجند</option><option value="جاده تربت حیدریه" data-select2-id="256">جاده تربت حیدریه</option><option value="جاده ریحان" data-select2-id="257">جاده ریحان</option><option value="جاده ساغشک" data-select2-id="258">جاده ساغشک</option><option value="جاده سد طرق" data-select2-id="259">جاده سد طرق</option><option value="جاده سد کارده" data-select2-id="260">جاده سد کارده</option><option value="جاده سرخس" data-select2-id="261">جاده سرخس</option><option value="جاد ه شاندیز" data-select2-id="262">جاد ه شاندیز</option><option value="جاده طرقبه" data-select2-id="263">جاده طرقبه</option><option value="جاده فریمان" data-select2-id="264">جاده فریمان</option><option value="جاده قدیم قوچان" data-select2-id="265">جاده قدیم قوچان</option><option value="جاده قدیم نیشابور" data-select2-id="266">جاده قدیم نیشابور</option><option value="جاده قوچان" data-select2-id="267">جاده قوچان</option><option value="جاده کارخانه سیمان" data-select2-id="268">جاده کارخانه سیمان</option><option value="جاده کاهو" data-select2-id="269">جاده کاهو</option><option value="جاده کشف" data-select2-id="270">جاده کشف</option><option value="جاده کلات" data-select2-id="271">جاده کلات</option><option value="جاهد شهر" data-select2-id="272">جاهد شهر</option><option value="جلال آل احمد" data-select2-id="273">جلال آل احمد</option><option value="جنت" data-select2-id="274">جنت</option><option value="جهان آرا" data-select2-id="275">جهان آرا</option><option value="چاهشک" data-select2-id="276">چاهشک</option><option value="چراغچی" data-select2-id="277">چراغچی</option><option value="چمران" data-select2-id="278">چمران</option><option value="چناران" data-select2-id="279">چناران</option><option value="چهارراه بیسیم" data-select2-id="280">چهارراه بیسیم</option><option value="چهارراه برق" data-select2-id="281">چهارراه برق</option><option value="چهارراه خسروی" data-select2-id="282">چهارراه خسروی</option><option value="چهارراه دانش" data-select2-id="283">چهارراه دانش</option><option value="چهارراه دکترا" data-select2-id="284">چهارراه دکترا</option><option value="چهارراه اه آهن" data-select2-id="285">چهارراه اه آهن</option><option value="چهارراه شهدا" data-select2-id="286">چهارراه شهدا</option><option value="چهارراه عامل" data-select2-id="287">چهارراه عامل</option><option value="چهارراه عشرت آباد" data-select2-id="288">چهارراه عشرت آباد</option><option value="" data-select2-id="289"></option><option value="چهارراه لشکر" data-select2-id="290">چهارراه لشکر</option><option value="چهارراه مخابرات" data-select2-id="291">چهارراه مخابرات</option><option value="چهارراه مقدم" data-select2-id="292">چهارراه مقدم</option><option value="چهارراه ورزش" data-select2-id="293">چهارراه ورزش</option><option value="چهار طبقه" data-select2-id="294">چهار طبقه</option><option value="چهار فصل" data-select2-id="295">چهار فصل</option><option value="حافظ" data-select2-id="296">حافظ</option><option value="حامد جنوبی" data-select2-id="297">حامد جنوبی</option><option value="حامد شمالی" data-select2-id="298">حامد شمالی</option><option value="حرعاملی" data-select2-id="299">حرعاملی</option><option value="حسین باشی" data-select2-id="300">حسین باشی</option><option value="حکیم نظامی" data-select2-id="301">حکیم نظامی</option><option value="حومه شهر" data-select2-id="302">حومه شهر</option><option value="خادم الشریعه" data-select2-id="303">خادم الشریعه</option><option value="خرمشهر" data-select2-id="304">خرمشهر</option><option value="خسروی" data-select2-id="305">خسروی</option><option value="خضرائی منش" data-select2-id="306">خضرائی منش</option><option value="خلج" data-select2-id="307">خلج</option><option value="خواجه ربیع" data-select2-id="308">خواجه ربیع</option><option value="خوش هوا" data-select2-id="309">خوش هوا</option><option value="دانشگاه" data-select2-id="310">دانشگاه</option><option value="رازی" data-select2-id="311">رازی</option><option value="صدف" data-select2-id="312">صدف</option><option value="هفده شهریور" data-select2-id="313">هفده شهریور</option><option value="خیام جنوبی" data-select2-id="314">خیام جنوبی</option><option value="خین عرب" data-select2-id="315">خین عرب</option><option value="دادگر" data-select2-id="316">دادگر</option><option value="دانش غربی" data-select2-id="317">دانش غربی</option><option value="دانش سرا" data-select2-id="318">دانش سرا</option><option value="دروازه طلایی" data-select2-id="319">دروازه طلایی</option><option value="دریا دل" data-select2-id="320">دریا دل</option><option value="دعبل خزایی" data-select2-id="321">دعبل خزایی</option><option value="ده غیبی" data-select2-id="322">ده غیبی</option><option value="دهخدا" data-select2-id="323">دهخدا</option><option value="دهشک" data-select2-id="324">دهشک</option><option value="دولت آباد" data-select2-id="325">دولت آباد</option><option value="راه آهن" data-select2-id="326">راه آهن</option><option value="راهنمایی" data-select2-id="327">راهنمایی</option><option value="رضا" data-select2-id="328">رضا</option><option value="رضا شهر" data-select2-id="329">رضا شهر</option><option value="رهایی" data-select2-id="330">رهایی</option><option value="رودکی" data-select2-id="331">رودکی</option><option value="زیبا شهر" data-select2-id="332">زیبا شهر</option><option value="سامانیه" data-select2-id="333">سامانیه</option><option value="سپیده" data-select2-id="334">سپیده</option><option value="سروش" data-select2-id="335">سروش</option><option value="سعد آباد" data-select2-id="336">سعد آباد</option><option value="سعدی" data-select2-id="337">سعدی</option><option value="سلمان فارسی" data-select2-id="338">سلمان فارسی</option><option value="سناباد" data-select2-id="339">سناباد</option><option value="سنایی" data-select2-id="340">سنایی</option><option value="سه راه ادبیات" data-select2-id="341">سه راه ادبیات</option><option value="سه راه دانش" data-select2-id="342">سه راه دانش</option><option value="سه راه فردوسی" data-select2-id="343">سه راه فردوسی</option><option value="سیده مرتضی" data-select2-id="344">سیده مرتضی</option><option value="سیدان" data-select2-id="345">سیدان</option><option value="سیدی" data-select2-id="346">سیدی</option><option value="شاهد" data-select2-id="347">شاهد</option><option value="شاهنامه" data-select2-id="348">شاهنامه</option><option value="شهرستانی" data-select2-id="349">شهرستانی</option><option value="شهرک ابوذر" data-select2-id="350">شهرک ابوذر</option><option value="شهرک بهارستان" data-select2-id="351">شهرک بهارستان</option><option value="شهرک ثامن" data-select2-id="352">شهرک ثامن</option><option value="شهید قانع" data-select2-id="353">شهید قانع</option><option value="شهید صدوق" data-select2-id="354">شهید صدوق</option><option value="شیخ طوسی شمالی" data-select2-id="355">شیخ طوسی شمالی</option><option value="طبرسی بلوار اول" data-select2-id="356">طبرسی بلوار اول</option><option value="طبرسی بلوار دوم" data-select2-id="357">طبرسی بلوار دوم</option><option value="طلاب" data-select2-id="358">طلاب</option><option value="عارف" data-select2-id="359">عارف</option><option value="عدل خمینی" data-select2-id="360">عدل خمینی</option><option value="علیمردانی" data-select2-id="361">علیمردانی</option><option value="عنصری غربی" data-select2-id="362">عنصری غربی</option><option value="عنصری شرقی" data-select2-id="363">عنصری شرقی</option><option value="غدیر" data-select2-id="364">غدیر</option><option value="فاطمیه" data-select2-id="365">فاطمیه</option><option value="فداییان اسلام" data-select2-id="366">فداییان اسلام</option><option value="فرامرز عباسی" data-select2-id="367">فرامرز عباسی</option><option value="فرهاد" data-select2-id="368">فرهاد</option><option value="فیاض بخش" data-select2-id="369">فیاض بخش</option><option value="قائم" data-select2-id="370">قائم</option><option value="قائم مقام فراهانی" data-select2-id="371">قائم مقام فراهانی</option><option value="قاضی طباطبایی" data-select2-id="372">قاضی طباطبایی</option><option value="قباد" data-select2-id="373">قباد</option><option value="کارگر" data-select2-id="374">کارگر</option><option value="کاشانی" data-select2-id="375">کاشانی</option><option value="کامیاب" data-select2-id="376">کامیاب</option><option value="کاهو" data-select2-id="377">کاهو</option><option value="کاویان" data-select2-id="378">کاویان</option><option value="کرامت" data-select2-id="379">کرامت</option><option value="کوشش" data-select2-id="380">کوشش</option><option value="کوهسنگی" data-select2-id="381">کوهسنگی</option><option value="مجد" data-select2-id="382">مجد</option><option value="مجلسی" data-select2-id="383">مجلسی</option><option value="مطهری جنوبی" data-select2-id="384">مطهری جنوبی</option><option value="مطهری شمالی" data-select2-id="385">مطهری شمالی</option><option value="معاد" data-select2-id="386">معاد</option><option value="مفتح" data-select2-id="387">مفتح</option><option value="ملاصدرا" data-select2-id="388">ملاصدرا</option><option value="ملک الشعرا بهار" data-select2-id="389">ملک الشعرا بهار</option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2" id="search_deal_type">
                                            <select id="search_deal_type_select" name="search_deal_type_select">
                                                <option>خرید</option>
                                                <option>رهن واجاره</option>
                                                <option>رهن کامل</option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2" id="search_prop_type">
                                            <select id="search_prop_type_select" name="search_prop_type_select">
                                                <option >آپارتمان</option>
                                                <option >زمین</option>
                                                <option >خانه ویلایی</option>
                                                <option >باغ ویلا</option>
                                                <option >دفتر کار اداری</option>
                                                <option >مغازه تجاری</option>
                                            </select>
                                        </div>

                                        <div class="form-group mx-sm-3 mb-2"  id="search_price">
                                            <select id="search_price_select" name="search_price_select"  multiple>
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
                                                <option value="15000" title="15 میلیارد">15 میلیارد</option>
                                                <option value="20000" title="20 میلیارد">20 میلیارد</option>
                                                <option value="25000" title="25 میلیارد">25 میلیارد</option>
                                                <option value="30000" title="30 میلیارد">30 میلیارد</option>
                                            </select>
                                        </div>

                                        <div class="form-group mx-sm-3 mb-2 d-none"  id="search_mortgage">
                                            <select id="search_mortgage_select" name="search_mortgage_select" multiple>
                                                <option value="5" title="5">5 میلیون</option>
                                                <option value="10" title="10 میلیون">10 میلیون</option>
                                                <option value="15" title="15 میلیون">15 میلیون</option>
                                                <option value="20" title="20 میلیون">20 میلیون</option>
                                                <option value="30" title="30 میلیون">30 میلیون</option>
                                                <option value="35" title="35 میلیون">35 میلیون</option>
                                                <option value="40" title="40 میلیون">40 میلیون</option>
                                                <option value="45" title="45 میلیون">45 میلیون</option>
                                                <option value="50" title="50 میلیون">50 میلیون</option>
                                                <option value="60" title="60 میلیون">60 میلیون</option>
                                                <option value="70" title="70 میلیون">70 میلیون</option>
                                                <option value="80" title="80 میلیون">80 میلیون</option>
                                                <option value="90" title="90 میلیون">90 میلیون</option>
                                                <option value="100" title="100 میلیون">100 میلیون</option>
                                                <option value="120" title="120 میلیون">120 میلیون</option>
                                                <option value="140" title="140 میلیون">140 میلیون</option>
                                                <option value="160" title="160 میلیون">160 میلیون</option>
                                                <option value="180" title="180 میلیون">180 میلیون</option>
                                                <option value="200" title="200 میلیون">200 میلیون</option>
                                                <option value="220" title="220 میلیون">220 میلیون</option>
                                                <option value="250" title="250 میلیون">250 میلیون</option>
                                                <option value="270" title="270 میلیون">270 میلیون</option>
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
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2 d-none"  id="search_rent">
                                            <select id="search_rent_select" name="search_rent_select" multiple>
                                                <option value="1200" title="1/2 میلیون">1/2 میلیون</option>
                                                <option value="1800" title="1/8 میلیون">1/8 میلیون</option>
                                                <option value="2200" title="2/2 میلیون">2/2 میلیون</option>
                                                <option value="2800" title="2/8 میلیون">2/8 میلیون</option>
                                                <option value="3200" title="3/2 میلیون">3/2 میلیون</option>
                                                <option value="3800" title="3/8 میلیون">3/8 میلیون</option>
                                                <option value="4200" title="4/2 میلیون">4/2 میلیون</option>
                                                <option value="4800" title="4/8 میلیون">4/8 میلیون</option>
                                                <option value="5500" title="5/5 میلیون">5/5 میلیون</option>
                                                <option value="6500" title="6/5 میلیون">6/5 میلیون</option>
                                                <option value="7500" title="7/5 میلیون">7/5 میلیون</option>
                                                <option value="8500" title="8/5 میلیون">8/5 میلیون</option>
                                                <option value="9500" title="9/5 میلیون">9/5 میلیون</option>
                                                <option value="10000" title="10 میلیون">10 میلیون</option>
                                                <option value="11000" title="11 میلیون">11 میلیون</option>
                                                <option value="12000" title="12 میلیون">12 میلیون</option>
                                                <option value="13000" title="12 میلیون">13 میلیون</option>
                                                <option value="14000" title="14 میلیون">14 میلیون</option>
                                                <option value="15000" title="15 میلیون">15 میلیون</option>
                                                <option value="16000" title="16 میلیون">16 میلیون</option>
                                                <option value="17000" title="17 میلیون">17 میلیون</option>
                                                <option value="18000" title="18 میلیون">18 میلیون</option>
                                                <option value="19000" title="19 میلیون">19 میلیون</option>
                                                <option value="20000" title="20 میلیون">20 میلیون</option>
                                            </select>
                                        </div>

                                        <div class="form-group mx-sm-3 mb-2 "  id="search_deed">
                                            <select id="search_deed_select" name="search_deed_select" multiple>
                                                <option value="ملکی">ملکی</option>
                                                <option value="آستان قدس">آستان قدس</option>
                                                <option value="اوقاف">اوقاف</option>
                                                <option value="قولنامه‌ای">قولنامه‌ای</option>
                                                <option value="مشاع">مشاع</option>
                                                <option value="سرقفلی">سرقفلی</option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2 "  id="search_bedroom">
                                            <select id="search_bedroom_select" name="search_bedroom_select" multiple>
                                                <option value="1">1 خواب</option>
                                                <option value="2">2 خواب</option>
                                                <option value="3">3 خواب</option>
                                                <option value="4">4 خواب</option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2 "  id="search_facilities">
                                            <select id="search_facilities_select" name="search_facilities_select" multiple>
                                                <option value="elavator">آسانسور</option>
                                                <option value="parking">پارکینک</option>
                                                <option value="warehouse">انباری</option>
                                                <option value="wallpaper">کاغذ دیواری</option>
                                                <option value="terrace">تراس</option>
                                                <option value="video_iphone">آیفون تصویری</option>
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
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2 "  id="search_floor">
                                            <select id="search_floor_select" name="search_floor_select" multiple>
                                                <option value="-1">زیرزمین</option>
                                                <option value="0">همکف</option>
                                                <option value="1">طبقه 1</option>
                                                <option value="2">طبقه 2</option>
                                                <option value="3">طبقه 3</option>
                                                <option value="4">طبقه 4</option>
                                                <option value="5">طبقه 5</option>
                                                <option value="6">طبقه 6</option>
                                                <option value="7">طبقه 7</option>
                                                <option value="8">طبقه 8</option>
                                                <option value="9">طبقه 9</option>
                                                <option value="10">طبقه 10</option>
                                                <option value="100">طبقه +10</option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2 "  id="search_infrastructure">
                                            <select id="search_infrastructure_select" name="search_infrastructure_select"  multiple>
                                                <option value="50">50 متر</option>
                                                <option value="60">60 متر</option>
                                                <option value="70">70 متر</option>
                                                <option value="80">80 متر</option>
                                                <option value="90">90 متر</option>
                                                <option value="100">100 متر</option>
                                                <option value="130">130 متر</option>
                                                <option value="150">150 متر</option>
                                                <option value="170">170 متر</option>
                                                <option value="190">190 متر</option>
                                                <option value="210">210 متر</option>
                                                <option value="240">240 متر</option>
                                                <option value="270">270 متر</option>
                                                <option value="300">300 متر</option>
                                                <option value="350">350 متر</option>
                                                <option value="400">400 متر</option>
                                                <option value="500">500 متر</option>
                                                <option value="600">600 متر</option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2 "  id="search_age">
                                            <select id="search_age_select" name="search_age_select"  multiple>
                                                <option  value="0">نوساز</option>
                                                <option  value="1" >۱ سال</option>
                                                <option  value="2" >۲ سال</option>
                                                <option  value="3" >۳ سال</option>
                                                <option value="4" >۴ سال</option>
                                                <option value="5" >۵ سال</option>
                                                <option value="6" >۶ سال</option>
                                                <option value="7" >۷ سال</option>
                                                <option value="8" >۸ سال</option>
                                                <option value="9" >۹ سال</option>
                                                <option value="10" >۱۰ سال</option>
                                                <option value="11" >۱۱ سال</option>
                                                <option value="12" >۱۲ سال</option>
                                                <option value="13" >۱۳ سال</option>
                                                <option value="14" >۱۴ سال</option>
                                                <option value="15" >۱۵ سال</option>
                                                <option value="16" >۱۶ سال</option>
                                                <option value="17" >۱۷ سال</option>
                                                <option value="18" >۱۸ سال</option>
                                                <option value="19" >۱۹ سال</option>
                                                <option value="20" >۲۰ سال</option>
                                                <option value="21" >۲۱ سال</option>
                                                <option value="22" >۲۲ سال</option>
                                                <option value="23" >۲۳ سال</option>
                                                <option value="24" >۲۴ سال</option>
                                                <option value="25" >۲۵ سال</option>
                                                <option value="26" >۲۶ سال</option>
                                                <option value="27" >۲۷ سال</option>
                                                <option value="28" >۲۸ سال</option>
                                                <option value="29" >۲۹ سال</option>
                                                <option value="30" >۳۰ سال</option>
                                            </select>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2 d-none "  id="search_land_area">
                                            <select id="search_land_area_select" name="search_land_area_select" multiple>
                                                <option value="50">50 متر</option>
                                                <option value="100">100 متر</option>
                                                <option value="200">200 متر</option>
                                                <option value="300">300 متر</option>
                                                <option value="400">400 متر</option>
                                                <option value="500">500 متر</option>
                                                <option value="600">600 متر</option>
                                                <option value="700">700 متر</option>
                                                <option value="800">800 متر</option>
                                                <option value="900">900 متر</option>
                                                <option value="1000">1000 متر</option>
                                                <option value="1200">1200 متر</option>
                                                <option value="1500">1500 متر</option>
                                                <option value="1800">1800 متر</option>
                                                <option value="2000">2000 متر</option>
                                                <option value="2500">2500 متر</option>
                                                <option value="3000">3000 متر</option>
                                                <option value="3500">3500 متر</option>
                                                <option value="4000">4000 متر</option>
                                                <option value="5000">5000 متر</option>
                                                <option value="6000">6000 متر</option>
                                                <option value="7000">7000 متر</option>
                                                <option value="8000">8000 متر</option>
                                                <option value="9000">9000 متر</option>
                                                <option value="10000">10000 متر</option>
                                            </select>
                                        </div >
                                       <div class="w-100 p-t-20"></div>
                                        <div class="form-group mx-sm-3 mb-2" id="search_prop_id_div">
                                            <input type="number" class="form-control form-rounded text-center" placeholder="کد ملک" id="search_prop_id" name="search_prop_id" style="border-color: rgb(189 189 189);font-family: 'iransans-light' !important;">
                                        </div>
                                        <?php
                                            if (is_user_logged_in() and Utility::is_user_exp(get_current_user_id()))
                                            {
                                                ?>
                                                <div class="form-group mx-sm-3 mb-2" id="search_landlord_name_div">
                                                    <input type="text" class="form-control form-rounded text-center" placeholder="نام و نام خانوادگی مالک" id="search_landlord_name" name="search_landlord_name" style="border-color: rgb(189 189 189);font-family: 'iransans-light' !important;">
                                                </div>
                                                <div class="form-group mx-sm-3 mb-2" id="search_phone1_div">
                                                    <input type="text" class="form-control form-rounded text-center" placeholder="شماره تلفن مالک" id="search_phone1" name="search_phone1" style="border-color: rgb(189 189 189);font-family: 'iransans-light' !important;">
                                                </div>
                                                <?php
                                            }
                                        ?>

                                    </form>
                                    <div class="text-left d-print-none">
                                        <hr class="mb-5">
                                        <?php
                                        if(isset($_GET['search_city_select'],$_GET['search_deal_type_select'],$_GET['search_prop_type_select']))
                                        {
                                            ?>
                                            <a href="<?php echo home_url('aral-all-prop')?>"  class="btn btn-outline-danger">
                                                <i class="fa fa-remove fa-lg mr-2"></i>حذف فیلتر ها
                                            </a>
                                            <?php
                                        }
                                        ?>
                                        <button id="aral-home-search-btn" class="btn btn-primary float-left ml-2">
                                            <i class="fa fa-search fa-lg mr-2"></i> جستــجو امــلاک
                                        </button>

                                    </div>

                                </div>
                                <div class="col-md-4">
<!--                                    <img src="--><?php //echo $dash_assets_url.'assets/media/svg/undraw_onboarding_o8mv.svg'?><!--" alt="..." class="img-fluid">-->
                                    <canvas id="chartjs_three"></canvas>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <h1 class="pageTitle city-page-title">آپارتمان مشهد</h1>
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo home_url('aral-all-prop?search_city_select=مشهد&search_price_select=500&search_prop_type_select=آپارتمان&search_deal_type_select=فروش')?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="card-title mb-3">خرید آپارتمان</h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-lg-start">
                                            <h4 class="mb-0 mr-2 font-weight-bold">تا 500 میلیون</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-lg">
                                            <figure class="avatar avatar-lg m-b-20">
                                                <img src="<?php echo $dash_assets_url.'assets/media/image/coin.jpg'?>" class="rounded-circle" alt="...">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>

                <div class="col-md-3">
                    <a href="<?php echo home_url('aral-all-prop?search_city_select=مشهد&search_price_select=500|1000&search_prop_type_select=آپارتمان&search_deal_type_select=خرید')?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="card-title mb-3">خرید آپارتمان</h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-lg-start">
                                            <h4 class="mb-0 mr-2 font-weight-bold">500 تا 1 میلیارد</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-lg">
                                            <figure class="avatar avatar-lg m-b-20">
                                                <img src="<?php echo $dash_assets_url.'assets/media/image/coin0.png'?>" class="rounded-circle" alt="...">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="<?php echo home_url('aral-all-prop?search_city_select=مشهد&search_price_select=1000|3000&search_prop_type_select=آپارتمان&search_deal_type_select=خرید')?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="card-title mb-3">خرید آپارتمان</h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-lg-start">
                                            <h4 class="mb-0 mr-2 font-weight-bold">1 تا 3 میلیارد</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-lg">
                                            <figure class="avatar avatar-lg m-b-20">
                                                <img src="<?php echo $dash_assets_url.'assets/media/image/coin1.png'?>" class="rounded-circle" alt="...">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>

                <div class="col-md-3">
                    <a href="<?php echo home_url('aral-all-prop?search_city_select=مشهد&search_price_select=3000|7000&search_prop_type_select=آپارتمان&search_deal_type_select=خرید')?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <h6 class="card-title mb-3">خرید آپارتمان</h6>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-lg-start">
                                            <h4 class="mb-0 mr-2 font-weight-bold">3 تا 7 میلیارد</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-lg">
                                            <figure class="avatar avatar-lg m-b-20">
                                                <img src="<?php echo $dash_assets_url.'assets/media/image/coin3.png'?>" class="rounded-circle" alt="...">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>
                </div>
            </div>

            <div class="row">
                <div class="col-xs-12">
                    <div class="tab" role="tabpanel">
                        <!-- Nav tabs -->

                        <ul class="nav nav-tabs justify-content-center" role="tablist">
                            <li role="presentation" ><a  href="<?php echo home_url('aral-all-prop')?>">همه آگهی ها</a></li>
                            <li role="presentation"><a href="#Section2" aria-controls="profile" role="tab" data-toggle="tab"> فروش خانه ویلایی / زمین</a></li>
                            <li role="presentation" class="active" ><a href="#Section1" aria-controls="home"  class="active" role="tab"  data-toggle="tab">فروش آپارتمان</a></li>
                            <li role="presentation"><a href="#Section3" aria-controls="messages" role="tab" data-toggle="tab">رهن و اجاره</a></li>
                            <li role="presentation"><a href="#Section4" aria-controls="messages2" role="tab" data-toggle="tab">رهن کامل</a></li>
                        </ul>
                        <!-- Tab panes -->
                        <div class="tab-content tabs">

                            <div role="tabpanel" class="tab-pane fade " id="Section2">
                                <div class="row">

                                    <div class="col-md-12 d-flex justify-content-end">
                                        <h1 class="pageTitle city-page-title">
                                            <a href="<?php echo home_url('aral-all-prop?'.'search_deal_type_select=خرید&search_prop_type_select=خانه ویلایی')?>" class="btn btn-outline-primary pulse float-left">
                                                مشاهده همه آگهی های فروش خانه ویلایی/زمین
                                                &nbsp;&nbsp;&nbsp;  <i class="fa fa-angle-left fa-lg"></i>
                                            </a>
                                        </h1>
                                    </div>
                                    <?php
                                    global $post;

                                    $args=array
                                    (
                                        'post_type' => 'aralproperty',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 40,
                                        'orderby' => 'ID',
                                        'order' => 'DESC',
                                    );
                                    $meta_query = array();
                                    $meta_query[] = array(
                                        'key' => 'deal_type',
                                        'value' => 'فروش',
                                        'compare' => 'like'
                                    );
                                    $meta_query[] = array(
                                        'key' => 'type',
                                        'value' => 'خانه ویلایی',
                                        'compare' => 'like'
                                    );

                                    $meta_query['relation'] = 'AND';

                                    $args['meta_query'] = $meta_query;

                                    $the_query = new WP_Query( $args );
                                    if ( $the_query->have_posts() ) {

                                        while ( $the_query->have_posts() )
                                        {
                                            $the_query->the_post();
                                            $post_meta=get_post_meta($post->ID);
                                            ?>
                                            <div class="col-md-3">
                                                <a href="<?php echo home_url('aral-prop?id='.$post->ID)?>">
                                                    <div class="card shadow">
<!--                                                        <div class="container11">-->
<!--                                                            <img src="--><?php //echo Utility::get_prop_image($post->ID)?><!--" class="card-img-top" alt="image">-->
<!--                                                        </div>-->
                                                        <div class="card-footer sj-font-16 text-right">
                                                            <!--                                               <i class="fa fa-building-o fa-lg pr-3"></i>-->
                                                            <?php echo $post_meta['deal_type'][0].' '.$post_meta['type'][0].' '.$post_meta['district_name'][0]?>
                                                        </div>
                                                        <div class="card-footer sj-font-16">
                                                            <ul class="list-group list-group-horizontal">
                                                                <li class="list-group-item  sj-padding">
	                                                                <?php echo $post_meta['land_area'][0].' متر'.' زمین ';?>
                                                                </li>
<!--                                                                <li class="list-group-item  sj-padding">-->
<!--		                                                            --><?php //echo $post_meta['infrastructure_area'][0].' متر'.' زیربنا ';?>
<!--                                                                </li>-->
                                                                <li class="list-group-item  sj-padding">
	                                                                <?php
	                                                                if ($post_meta['position'][0] != '')
	                                                                {
		                                                                echo $post_meta['position'][0];
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
				                                                    if ($post_meta['density'][0] != '')
				                                                    {
				                                                        switch ($post_meta['density'][0])
                                                                        {
                                                                            case 'low':
	                                                                            echo 'تراکم کم';
                                                                                break;
					                                                        case 'medium':
						                                                        echo ' تراکم متوسط';
						                                                        break;
					                                                        case 'high':
						                                                        echo 'تراکم زیاد';
						                                                        break;
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
				                                                    if ($post_meta['breadth'][0] != '' )
				                                                    {

						                                                    echo $post_meta['breadth'][0];

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
                                                                    if ($post_meta['infrastructure_area'][0] != '' )
                                                                    {

                                                                        echo $post_meta['infrastructure_area'][0].' متر زیر بنا ';

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
                                                                    if ($post_meta['usage'][0] != '' )
                                                                    {
                                                                            echo $post_meta['usage'][0].' سال';
                                                                    }
                                                                    else
                                                                    {
                                                                        echo '-';
                                                                    }
                                                                    ?>
                                                                </li>
                                                                <li class="list-group-item sj-padding">
		                                                            <?php
		                                                            if ($post_meta['floor_count'][0] != '')
		                                                            {
			                                                            echo $post_meta['floor_count'][0].' طبقه ';
		                                                            }
		                                                            else
		                                                            {
			                                                            echo '-';
		                                                            }
		                                                            ?>
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
	                                                            <?php
	                                                            if (Utility::get_prop_image_count($post->ID) > 0)
	                                                            {
		                                                            ?>
                                                                    <span class="badge badge-dark bg-info-gradient">
                                                                       <i class="fa fa-camera fa-lg pr-3"></i>
                                                                        <?php echo Utility::get_prop_image_count($post->ID) ?>
                                                                    </span>
		                                                            <?php
	                                                            }
	                                                            ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php
                                        }



                                    }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade in show active " id="Section1">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <h1 class="pageTitle city-page-title">
                                            <a href="<?php echo home_url('aral-all-prop?'.'search_deal_type_select=خرید&search_prop_type_select=آپارتمان')?>" class="btn btn-outline-primary pulse float-left">
                                                مشاهده همه آگهی های فروش آپارتمان
                                                &nbsp;&nbsp;&nbsp;  <i class="fa fa-angle-left fa-lg"></i>
                                            </a>
                                        </h1>
                                    </div>
                                    <?php
                                    global $post;

                                    $args=array
                                    (
                                        'post_type' => 'aralproperty',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 40,
                                        'orderby' => 'modified',
                                        'order' => 'DESC',
                                    );
                                    $meta_query = array();
                                    $meta_query[] = array(
                                        'key' => 'deal_type',
                                        'value' => 'فروش',
                                        'compare' => 'like'
                                    );
                                    $meta_query[] = array(
                                        'key' => 'type',
                                        'value' => 'آپارتمان',
                                        'compare' => 'like'
                                    );

                                    $meta_query['relation'] = 'AND';

                                    $args['meta_query'] = $meta_query;

                                    $the_query = new WP_Query( $args );
                                    if ( $the_query->have_posts() )
                                    {

                                        while ( $the_query->have_posts() )
                                        {
                                            $the_query->the_post();
                                            $post_meta=get_post_meta($post->ID);
                                            ?>
                                            <div class="col-md-3">
                                                <a href="<?php echo home_url('aral-prop?id='.$post->ID)?>">
                                                    <div class="card shadow">
<!--                                                        <div class="container11">-->
<!--                                                            <img src="--><?php //echo Utility::get_prop_image($post->ID)?><!--" class="card-img-top" alt="image">-->
<!--                                                        </div>-->
                                                        <div class="card-footer sj-font-16 text-right">
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
                                                                            echo $post_meta['age'][0].' سال';
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
                                                                <?php
	                                                            if (Utility::get_prop_image_count($post->ID) > 0)
	                                                            {
		                                                            ?>
                                                                    <span class="badge badge-dark bg-info-gradient">
                                                                       <i class="fa fa-camera fa-lg pr-3"></i>
                                                                        <?php echo Utility::get_prop_image_count($post->ID) ?>
                                                                    </span>
		                                                            <?php
	                                                            }
	                                                            ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php
                                        }
                                    }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section3">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <h1 class="pageTitle city-page-title">
                                            <a href="<?php echo home_url('aral-all-prop?'.'search_deal_type_select=رهن+واجاره')?>" class="btn btn-outline-primary pulse float-left">
                                               مشاهده همه آگهی های رهن و اجاره
                                                &nbsp;&nbsp;&nbsp;  <i class="fa fa-angle-left fa-lg"></i>
                                            </a>
                                        </h1>
                                    </div>
                                    <?php
                                    global $post;

                                    $args=array
                                    (
                                        'post_type' => 'aralproperty',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 40,
                                        'orderby' => 'ID',
                                        'order' => 'DESC',
                                    );
                                    $meta_query = array();
                                    $meta_query[] = array(
                                        'key' => 'deal_type',
                                        'value' => 'رهن و اجاره',
                                        'compare' => 'like'
                                    );
                                    $meta_query['relation'] = 'AND';

                                    $args['meta_query'] = $meta_query;

                                    $the_query = new WP_Query( $args );
                                    if ( $the_query->have_posts() ) {

                                        while ( $the_query->have_posts() )
                                        {
                                            $the_query->the_post();
                                            $post_meta=get_post_meta($post->ID);
                                            ?>
                                            <div class="col-md-3">
                                                <a href="<?php echo home_url('aral-prop?id='.$post->ID)?>">
                                                    <div class="card shadow">
<!--                                                        <div class="container11">-->
<!--                                                            <img src="--><?php //echo Utility::get_prop_image($post->ID)?><!--" class="card-img-top" alt="image">-->
<!--                                                        </div>-->
                                                        <div class="card-footer sj-font-16 text-right">
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
                                                                            echo $post_meta['age'][0].' سال';
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
	                                                            <?php
	                                                            if (Utility::get_prop_image_count($post->ID) > 0)
	                                                            {
		                                                            ?>
                                                                    <span class="badge badge-dark bg-info-gradient">
                                                                       <i class="fa fa-camera fa-lg pr-3"></i>
                                                                        <?php echo Utility::get_prop_image_count($post->ID) ?>
                                                                    </span>
		                                                            <?php
	                                                            }
	                                                            ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php
                                        }



                                    }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                            <div role="tabpanel" class="tab-pane fade" id="Section4">
                                <div class="row">
                                    <div class="col-md-12 d-flex justify-content-end">
                                        <h1 class="pageTitle city-page-title">
                                            <a href="<?php echo home_url('aral-all-prop?'.'search_deal_type_select=رهن+کامل')?>" class="btn btn-outline-primary pulse float-left">
                                                مشاهده همه آگهی های رهن کامل
                                                &nbsp;&nbsp;&nbsp;  <i class="fa fa-angle-left fa-lg"></i>
                                            </a>
                                        </h1>
                                    </div>
                                    <?php
                                    global $post;

                                    $args=array
                                    (
                                        'post_type' => 'aralproperty',
                                        'post_status' => 'publish',
                                        'posts_per_page' => 40,
                                        'orderby' => 'ID',
                                        'order' => 'DESC',
                                    );
                                    $meta_query = array();
                                    $meta_query[] = array(
                                        'key' => 'deal_type',
                                        'value' => 'رهن کامل',
                                        'compare' => 'like'
                                    );
                                    $meta_query['relation'] = 'AND';

                                    $args['meta_query'] = $meta_query;

                                    $the_query = new WP_Query( $args );
                                    if ( $the_query->have_posts() ) {

                                        while ( $the_query->have_posts() )
                                        {
                                            $the_query->the_post();
                                            $post_meta=get_post_meta($post->ID);
                                            ?>
                                            <div class="col-md-3">
                                                <a href="<?php echo home_url('aral-prop?id='.$post->ID)?>">
                                                    <div class="card shadow">
<!--                                                        <div class="container11">-->
<!--                                                            <img src="--><?php //echo Utility::get_prop_image($post->ID)?><!--" class="card-img-top" alt="image">-->
<!--                                                        </div>-->
                                                        <div class="card-footer sj-font-16 text-right">
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
                                                                            echo $post_meta['age'][0].' سال';
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
	                                                            <?php
	                                                            if (Utility::get_prop_image_count($post->ID) > 0)
	                                                            {
		                                                            ?>
                                                                    <span class="badge badge-dark bg-info-gradient">
                                                                       <i class="fa fa-camera fa-lg pr-3"></i>
                                                                        <?php echo Utility::get_prop_image_count($post->ID) ?>
                                                                    </span>
		                                                            <?php
	                                                            }
	                                                            ?>
                                                            </div>
                                                        </div>
                                                    </div>
                                                </a>
                                            </div>
                                            <?php
                                        }



                                    }
                                    wp_reset_postdata();
                                    ?>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <h1 class="pageTitle city-page-title">رهن و اجاره</h1>
            <div class="row">
                <div class="col-md-3">
                    <a href="<?php echo home_url('aral-all-prop?type=آپارتمان&deal_type=رهن و اجاره')?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-lg-start">
                                            <h4 class="mb-0 mr-2 font-weight-bold">آپارتمان</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-lg">
                                            <figure class="avatar avatar-lg m-b-20">
                                                <img src="<?php echo $dash_assets_url.'assets/media/image/apartment1.png'?>" class="rounded-circle" alt="...">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-3">
                    <a href="<?php echo home_url('aral-all-prop?type=خانه ویلایی&deal_type=رهن و اجاره')?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-lg-start">
                                            <h4 class="mb-0 mr-2 font-weight-bold">خانه ویلایی</h4>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-lg">
                                            <figure class="avatar avatar-lg m-b-20">
                                                <img src="<?php echo $dash_assets_url.'assets/media/image/house.jpg'?>" class="rounded-circle" alt="...">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-3">
                    <a href="<?php echo home_url('aral-all-prop?type=مغازه تجاری&deal_type=رهن و اجاره')?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-lg-start">
                                            <h5 class="mb-0 mr-2 font-weight-bold">مغازه تجاری</h5>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-lg">
                                            <figure class="avatar avatar-lg m-b-20">
                                                <img src="<?php echo $dash_assets_url.'assets/media/image/shop.jpg'?>" class="rounded-circle" alt="...">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
                <div class="col-md-3">
                    <a href="<?php echo home_url('aral-all-prop?type=دفتر کار&deal_type=رهن و اجاره')?>">
                        <div class="card">
                            <div class="card-body">
                                <div class="d-flex align-items-center justify-content-between">
                                    <div>
                                        <div class="d-flex d-sm-block d-lg-flex align-items-lg-start">
                                            <h5 class="mb-0 mr-2 font-weight-bold">دفتر کار</h5>
                                        </div>
                                    </div>
                                    <div>
                                        <div class="avatar avatar-lg">
                                            <figure class="avatar avatar-lg m-b-20">
                                                <img src="<?php echo $dash_assets_url.'assets/media/image/office.jpg'?>" class="rounded-circle" alt="...">
                                            </figure>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </a>

                </div>
            </div>

            <div class="row">
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h6 class="card-title mb-3 font-size-22 font-weight-bold">می خواهید ملکتان را آگهی کنید؟</h6>
                                    <p>
                                        ملکتان را به ما بسپارید.
                                    </p>
                                    <ul class="mb-3">
                                        <li>این قسمت ها را مشاهده کنید</li>
                                        <li>مخاطبان خود را اضافه کنید</li>
                                    </ul>
                                    <a href="<?php echo home_url('add_advertise')?>" class="btn btn-outline-primary float-left">ثبت رایگان آگهی&nbsp;&nbsp;&nbsp;  <i class="fa fa-angle-left fa-lg"></i></a>
                                </div>
                                <div class="col-md-5">
                                    <img style=" -webkit-transform: scaleX(-1);transform: scaleX(-1);" src="<?php echo $dash_assets_url.'assets/media/image/owner.png'?>" alt="..." class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-6">
                    <div class="card">
                        <div class="card-body">
                            <div class="row align-items-center">
                                <div class="col-md-7">
                                    <h6 class="card-title mb-3 font-size-22 font-weight-bold">به دنبال ملک هستید؟</h6>
                                    <p>
                                        با سامانه جامع املاک آرال بهترین املاک مطابق با مشخصات مدنظرتان را بیابید.
                                    </p>

                                    <a href="<?php echo home_url('aral-dashboard')?>" class="btn btn-outline-primary float-left">ثبت مشخصات ملک مورد نظر &nbsp;&nbsp;&nbsp;  <i class="fa fa-angle-left fa-lg"></i></a>
                                </div>
                                <div class="col-md-5">
                                    <img style=" -webkit-transform: scaleX(-1);transform: scaleX(-1);" src="<?php echo $dash_assets_url.'assets/media/image/realtor.png'?>" alt="..." class="img-fluid">
                                </div>
                            </div>
                        </div>
                    </div>
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

