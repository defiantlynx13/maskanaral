
<!-- Plugin scripts -->
<script src="<?php echo $dash_assets_url.'vendors/bundle.js'?>"></script>

<!-- Dashboard scripts -->
<!--<script src="--><?php //echo $dash_assets_url.'assets/js/examples/dashboard.js'?><!--"></script>-->

<!-- Chartjs -->
<script src="<?php echo $dash_assets_url.'vendors/charts/chartjs/chart.min.js'?>"></script>

<!-- Apex chart -->
<script src="<?php echo $dash_assets_url.'vendors/charts/apex/apexcharts.min.js'?>"></script>

<!-- Circle progress -->
<script src="<?php echo $dash_assets_url.'vendors/circle-progress/circle-progress.min.js'?>"></script>

<!-- Peity -->
<script src="<?php echo $dash_assets_url.'vendors/charts/peity/jquery.peity.min.js'?>"></script>
<script src="<?php echo $dash_assets_url.'assets/js/examples/charts/peity.js'?>"></script>

<!-- Datepicker -->
<script src="<?php echo $dash_assets_url.'vendors/datepicker/daterangepicker.js'?>"></script>
<script src="<?php echo $dash_assets_url.'assets/Datepiker/persian-datepicker.js'?>"></script>
<script src="<?php echo $dash_assets_url.'vendors/datepicker/bootstrap-datepicker.fa.min.js'?>"></script>


<!-- Slick -->
<script src="<?php echo $dash_assets_url.'vendors/slick/slick.min.js'?>"></script>

<!-- Vamp -->
<script src="<?php echo $dash_assets_url.'vendors/vmap/jquery.vmap.min.js'?>"></script>
<script src="<?php echo $dash_assets_url.'vendors/vmap/maps/jquery.vmap.usa.js'?>"></script>
<script src="<?php echo $dash_assets_url.'assets/js/examples/vmap.js'?>"></script>


<!-- a -->
<script src="<?php echo $dash_assets_url.'assets/Cal/moment.js'?>"></script>
<script src="<?php echo $dash_assets_url.'assets/Cal/moment-jalaali.js'?>"></script>
<script src="<?php echo $dash_assets_url.'assets/Cal/fullcalendar.js'?>"></script>
<script src="<?php echo $dash_assets_url.'assets/Cal/fa.js'?>"></script>

<script src="<?php echo $dash_assets_url.'vendors/select2/js/select2.min.js'?>"></script>



<!-- App scripts -->
<script src="<?php echo $dash_assets_url.'assets/js/app.min.js'?>"></script>
<script src="<?php echo $dash_assets_url.'vendors/tagsinput/bootstrap-tagsinput.js'?>"></script>

<script src="<?php echo $dash_assets_url.'vendors/tail/js/tail.select-full.min.js'?>"></script>
<script src="<?php echo $dash_assets_url.'vendors/tail/langs/tail.select-fa.js'?>"></script>


<script src="<?php echo $dash_assets_url.'vendors/dataTable/jquery.dataTables.min.js'?>"></script>

<!-- Bootstrap 4 and responsive compatibility -->
<script src="<?php echo $dash_assets_url.'vendors/dataTable/dataTables.bootstrap4.min.js'?>"></script>
<script src="<?php echo $dash_assets_url.'vendors/dataTable/dataTables.responsive.min.js'?>"></script>

<script src="<?php echo $dash_assets_url.'vendors/validator/validator.min.js'?>"></script>
<script src="<?php echo $dash_assets_url.'vendors/validator/lang/fa.min.js'?>"></script>

<script src="<?php echo $dash_assets_url.'vendors/confirm/jquery-confirm.min.js'?>"></script>

<div class="colors"> <!-- To use theme colors with Javascript -->
    <div class="bg-primary"></div>
    <div class="bg-primary-bright"></div>
    <div class="bg-secondary"></div>
    <div class="bg-secondary-bright"></div>
    <div class="bg-info"></div>
    <div class="bg-info-bright"></div>
    <div class="bg-success"></div>
    <div class="bg-success-bright"></div>
    <div class="bg-danger"></div>
    <div class="bg-danger-bright"></div>
    <div class="bg-warning"></div>
    <div class="bg-warning-bright"></div>
</div>

<script type="text/javascript">
    <?php
    $prop_rent_count_args = array(
        'post_type'         => 'aralproperty',
        'paged'             => 1,
        'meta_query' =>array( array( 'key' => 'deal_type', 'value' => 'رهن و اجاره' ) )
    );
    $prop_rent_count = new WP_Query( $prop_rent_count_args);
    wp_reset_query();


    $prop_mortgage_count_args = array(
        'post_type'         => 'aralproperty',
        'paged'             => 1,
        'meta_query' =>array( array( 'key' => 'deal_type', 'value' => 'رهن کامل' ) )
    );
    $prop_mortgage_count = new WP_Query( $prop_mortgage_count_args);
    wp_reset_query();

    $prop_sale_count_args = array(
        'post_type'         => 'aralproperty',
        'paged'             => 1,
        'meta_query' =>array( array( 'key' => 'deal_type', 'value' => 'فروش' ) )
    );
    $prop_sale_count = new WP_Query( $prop_sale_count_args);
    wp_reset_query();

    $cu_id=get_current_user_id();
    $exp_main_group=get_user_meta($cu_id,'exp_main_group',true);

    if ($exp_main_group)
    {
        $exp_sub_group=get_user_meta($cu_id,'exp_sub_group',true);
    }

    ?>
    $(document).ready(function () {

        Validator.useLang('fa');
        Validator.register('mobile', function (val) {
            return val.match(/^09[0-9]{9}$/g);
        }, 'شماره موبایل اشتباه است');
        Validator.register('phone', function (val) {
            return (val.match(/^[1-9]{1}[0-9-]{6,7}$/g) || val.match(/^0[0-9-]{7,14}$/g) || val.match(/^[^0]{1}[0-9]{3}$/g));
        }, 'شماره تلفن اشتباه است');

        <?php
        if ($exp_main_group == 'فروش')
        {
        ?>
        $('#price_div').removeClass('d-none');
        $('#rent_div').addClass('d-none');
        $('#mortgage_div').addClass('d-none');
        <?php
        }
        else
        {
        ?>
        $('#price_div').addClass('d-none');
        $('#rent_div').removeClass('d-none');
        $('#mortgage_div').removeClass('d-none');
        <?php
        }
        ?>

        $('#new_prop_request').click(function () {


            $("#npr_city option:selected").prop("selected", false);
            npr_city.reload();

            $('option', $('#npr_district')).each(function (element) {
                $(this).removeAttr('selected').prop('selected', false);
            });
            npr_district.reload();


            $("#npr_deal_type option:selected").prop("selected", false);
            npr_deal_type.reload();

            $("#npr_prop_type option:selected").prop("selected", false);
            npr_prop_type.reload();


            $('option', $('#npr_price')).each(function (element) {
                $(this).removeAttr('selected').prop('selected', false);
            });
            npr_price.reload();

            $('option', $('#npr_rent')).each(function (element) {
                $(this).removeAttr('selected').prop('selected', false);
            });
            npr_rent.reload();

            $('option', $('#npr_mortgage')).each(function (element) {
                $(this).removeAttr('selected').prop('selected', false);
            });
            npr_mortgage.reload();

            $('option', $('#npr_deed_type')).each(function (element) {
                $(this).removeAttr('selected').prop('selected', false);
            });
            npr_deed_type.reload();

            $('option', $('#npr_bedroom_count')).each(function (element) {
                $(this).removeAttr('selected').prop('selected', false);
            });
            npr_bedroom_count.reload();

            $('option', $('#npr_facilities')).each(function (element) {
                $(this).removeAttr('selected').prop('selected', false);
            });
            npr_facilities.reload();

            // $('option', $('#npr_floor_count')).each(function(element) {
            //    $(this).removeAttr('selected').prop('selected', false);
            // });
            // npr_floor_count.reload();

            $('option', $('#npr_infrastructure_area')).each(function (element) {
                $(this).removeAttr('selected').prop('selected', false);
            });
            npr_infrastructure_area.reload();


            $('#price_div').removeClass('d-none');
            $('#rent_div').addClass('d-none');
            $('#mortgage_div').addClass('d-none');



            $('#bedroom_count_div').removeClass('d-none');
            $('#facilities_div').removeClass('d-none');
            $('#floor_count_div').addClass('d-none');
            $('#infrastructure_area_div').removeClass('d-none');

            $("input:radio[name=elevator]:first").prop('checked', true);
            $("#elavator_floor_count_div").removeClass('d-none');

            $('#npr_customer_name').val("");
            $('#npr_customer_tel').val("");

            $("#npr_district").empty();
            npr_district.disable(false);
            npr_city.disable(false);
            // npr_district.updateLabel('در حال بارگزاری ...');
            npr_district.updateLabel('<div class="spinner-border spinner-border-sm text-info" role="status">\n' +
                '  <span class="sr-only">درحال بارگذاری...</span>\n' +
                '</div>');
            $.ajax({
                type: "POST",
                url: '<?php echo admin_url('admin-ajax.php');?>',
                data: {
                    action: 'get_districts',
                    city_name: 'مشهد',
                },
                success: function (result) {
                    var data = JSON.parse(result);
                    for (var index = 0; index < data['districts'].length; index++) {
                        var district = data['districts'][index];
                        $('#npr_district').append('<option value="' + district.name + '">' + district.name + '</option>');
                    }

                    npr_district.reload();
                    npr_district.updateLabel('محله های شهر' + ' ' + 'مشهد');
                    npr_district.enable(false);
                    npr_city.enable(false);
                }
            });
            $('#new_prop_request_btn').html("ثبت");
            $('#new_prop_request_btn').removeAttr("disabled");
            $('#new_prop_request_modal').modal('toggle');
        });

        var npr_city = tail.select("#npr_city", {
            placeholder: 'شهر ...',
            locale: "fa",
            width: 200,
            hideDisabled: true,
            multiShowCount: true,
            multiContainer: ".npr-district-container",
            multiShowLimit: true,
            multiSelectAll: true,
        });
        var npr_district = tail.select("#npr_district", {
            locale: "fa",
            search: true,
            width: 200,
            hideDisabled: true,
            multiShowCount: true,
            multiContainer: ".npr-district-container",
            multiShowLimit: true,
            // multiSelectAll: true,
            multiPinSelected: true
        });
        var npr_deal_type = tail.select("#npr_deal_type", {
            locale: "fa",
            width: 200,
            hideDisabled: true,
            multiShowCount: true,
            multiContainer: ".npr-district-container",
            multiShowLimit: true,
            multiSelectAll: true,
        });
        var npr_prop_type = tail.select("#npr_prop_type", {
            locale: "fa",
            width: 200,
            hideDisabled: true,
            multiShowCount: true,
            multiContainer: ".npr-district-container",
            multiShowLimit: true,
            multiSelectAll: true,
        });
        var npr_price = tail.select("#npr_price", {
            locale: "fa",
            width: 200,
            className: 'test test 2',
            hideDisabled: true,
            multiLimit: 2,
            multiShowCount: true,
            // multiContainer: ".tail-move-container",
            multiShowLimit: true,
            // multiSelectAll: true,
            multiPinSelected: true
        }).updateLabel('حداقل و حداکثر قیمت');
        var npr_rent = tail.select("#npr_rent", {
            locale: "fa",
            width: 200,
            className: 'test test 2',
            hideDisabled: true,
            multiLimit: 2,
            multiShowCount: true,
            // multiContainer: ".tail-move-container",
            multiShowLimit: true,
            // multiSelectAll: true,
            multiPinSelected: true
        }).updateLabel('حداقل و حداکثر اجاره');
        var npr_mortgage = tail.select("#npr_mortgage", {
            search: true,
            locale: "fa",
            width: 200,
            className: 'test test 2',
            hideDisabled: true,
            multiLimit: 2,
            multiShowCount: true,
            // multiContainer: ".tail-move-container",
            multiShowLimit: true,
            // multiSelectAll: true,
            multiPinSelected: true
        }).updateLabel('حداقل و حداکثر رهن');
        var npr_deed_type = tail.select("#npr_deed_type", {
            locale: "fa",
            width: 200,
            hideDisabled: true,
            multiShowCount: true,
            multiContainer: ".npr-deed_type-container",
            multiShowLimit: true,
            // multiSelectAll: true,
            multiPinSelected: true
        }).updateLabel('نوع سند');
        var npr_bedroom_count = tail.select("#npr_bedroom_count", {
            locale: "fa",
            width: 200,
            hideDisabled: true,
            multiShowCount: true,
            multiContainer: ".npr-district-container",
            multiShowLimit: true,
            multiSelectAll: true,
        });
        var npr_facilities = tail.select("#npr_facilities", {
            locale: "fa",
            width: 200,
            hideDisabled: true,
            multiShowCount: true,
            multiContainer: ".npr_facilities_container",
            multiShowLimit: true,
            // multiSelectAll: true,
            multiPinSelected: true,
            search: true,
        });
        var npr_floor_count = tail.select("#npr_floor_count", {
            locale: "fa",
            width: 200,
            hideDisabled: true,
            multiShowCount: true,
            multiContainer: ".npr_floor_count_container",
            multiShowLimit: true,
            // multiSelectAll: true,
            multiPinSelected: true
        });
        var npr_infrastructure_area = tail.select("#npr_infrastructure_area", {
            locale: "fa",
            width: 200,
            hideDisabled: true,
            multiLimit: 2,
            multiShowCount: true,
            // multiContainer: ".tail-move-container",
            multiShowLimit: true,
            // multiSelectAll: true,
            multiPinSelected: true
        }).updateLabel('حداقل و حداکثر زیربنا');
        var no_elavator_floor_count = tail.select("#no_elavator_floor_count", {
            locale: "fa",
            width: 200,
            hideDisabled: true,
            multiShowCount: true,
            multiShowLimit: true,
            // multiSelectAll: true,
            multiPinSelected: true
        });
        var yes_elavator_floor_count = tail.select("#yes_elavator_floor_count", {
            locale: "fa",
            width: 200,
            hideDisabled: true,
            multiShowCount: true,
            multiShowLimit: true,
            // multiSelectAll: true,
            multiPinSelected: true
        });

        npr_city.on("change", function (item, state) {
            $("#npr_district").empty();
            npr_district.disable(false);
            npr_city.disable(false);
            npr_district.updateLabel('<div class="spinner-border spinner-border-sm text-info" role="status">\n' +
                '  <span class="sr-only">درحال بارگذاری...</span>\n' +
                '</div>');
            $.ajax({
                type: "POST",
                url: '<?php echo admin_url('admin-ajax.php');?>',
                data: {
                    action: 'get_districts',
                    city_name: item.value,
                },
                success: function (result) {
                    var data = JSON.parse(result);
                    for (var index = 0; index < data['districts'].length; index++) {
                        var district = data['districts'][index];
                        $('#npr_district').append('<option value="' + district.name + '">' + district.name + '</option>');
                    }

                    npr_district.reload();
                    npr_district.updateLabel('محله های شهر' + ' ' + item.value);
                    npr_district.enable(false);
                    npr_city.enable(false);
                }
            });

        });


        npr_price.on("change", function (item, state) {
            var selected_value = $.map($('#npr_price option:selected'), function (option) {
                return option.value;
            });

            switch (selected_value.length) {
                case 0:
                    npr_price.updateLabel('حداقل و حداکثر قیمت');
                    break;
                case 1:
                    npr_price.updateLabel('تا' + ' ' + selected_value[0] + ' ' + 'میلیون');
                    break;
                case 2:
                    npr_price.updateLabel('از' + ' ' + selected_value[0] + ' ' + 'تا' + selected_value[1] + ' ' + 'میلیون');
                    break;
            }
        });

        npr_infrastructure_area.on("change", function (item, state) {
            var selected_value = $.map($('#npr_infrastructure_area option:selected'), function (option) {
                return option.value;
            });

            switch (selected_value.length) {
                case 0:
                    npr_price.updateLabel('حداقل و حداکثر زیربنا');
                    break;
                case 1:
                    npr_infrastructure_area.updateLabel('تا' + ' ' + selected_value[0] + ' ' + 'متر');
                    break;
                case 2:
                    npr_infrastructure_area.updateLabel('از' + ' ' + selected_value[0] + ' ' + 'تا' + selected_value[1] + ' ' + 'متر');
                    break;
            }
        });


        npr_mortgage.on("change", function (item, state) {
            var selected_value = $.map($('#npr_mortgage option:selected'), function (option) {
                return option.value;
            });

            switch (selected_value.length) {
                case 0:
                    npr_mortgage.updateLabel('حداقل و حداکثر رهن');
                    break;
                case 1:
                    npr_mortgage.updateLabel('تا' + ' ' + selected_value[0] + ' ' + 'میلیون');
                    break;
                case 2:
                    npr_mortgage.updateLabel('از' + ' ' + selected_value[0] + ' ' + 'تا' + selected_value[1] + ' ' + 'میلیون');
                    break;
            }
        });


        npr_rent.on("change", function (item, state) {
            var selected_value = $.map($('#npr_rent option:selected'), function (option) {
                return option.value;
            });

            switch (selected_value.length) {
                case 0:
                    npr_rent.updateLabel('حداقل و حداکثر اجاره');
                    break;
                case 1:
                    if (selected_value[0] < 1000) {
                        npr_rent.updateLabel('تا' + ' ' + selected_value[0] + ' ' + 'هزار');
                    }
                    else {
                        npr_rent.updateLabel('از' + ' ' + selected_value[0] / 1000 + ' ' + 'میلیون');
                    }

                    break;
                case 2:
                    if (selected_value[0] < 1000) {
                        var min_lable = selected_value[0] + 'هزار';
                    }
                    else {
                        var min_lable = selected_value[0] / 1000 + 'میلیون';
                    }

                    if (selected_value[1] < 1000) {
                        var max_lable = selected_value[1] + 'هزار';
                    }
                    else {
                        var max_lable = selected_value[1] / 1000 + 'میلیون';
                    }
                    npr_rent.updateLabel('از' + ' ' + min_lable + ' ' + 'تا' + max_lable);
                    break;
            }
        });

        npr_deal_type.on("change", function (item, state) {
            if (state == 'select') {
                switch (item.value) {
                    case 'خرید':
                        $('#price_div').removeClass('d-none');
                        $('#deed_type_div').removeClass('d-none');
                        $('#rent_div').addClass('d-none');
                        $('#mortgage_div').addClass('d-none');
                        break;
                    case 'رهن و اجاره':
                        $('#price_div').addClass('d-none');
                        $('#deed_type_div').addClass('d-none');
                        $('#rent_div').removeClass('d-none');
                        $('#mortgage_div').removeClass('d-none');
                        break;
                    case 'رهن کامل':
                        $('#price_div').addClass('d-none');
                        $('#deed_type_div').addClass('d-none');
                        $('#rent_div').addClass('d-none');
                        $('#mortgage_div').removeClass('d-none');
                        break;

                }
            }

        });


        npr_prop_type.on("change", function (item, state)
        {

            $('#bedroom_count_div').addClass('d-none');
            $('#facilities_div').addClass('d-none');
            $('#floor_count_div').addClass('d-none');
            $('#infrastructure_area_div').addClass('d-none');

            if (state == 'select') {
                switch (item.value) {
                    case 'آپارتمان':
                    case 'خانه ویلایی':
                    case 'باغ ویلا':
                        $('#bedroom_count_div').removeClass('d-none');
                        $('#facilities_div').removeClass('d-none');
                        $('#floor_count_div').removeClass('d-none');
                        $('#infrastructure_area_div').removeClass('d-none');
                        break;
                    case 'مغازه تجاری':
                    case 'دفتر کار اداری':
                        $('#facilities_div').removeClass('d-none');
                        $('#floor_count_div').removeClass('d-none');
                        $('#infrastructure_area_div').removeClass('d-none');
                        break;
                }

                if (item.value != 'آپارتمان') {
                    if(item.value != 'زمین')
                    {
                        $('#floor_count_div').removeClass('d-none');
                    }


                    $('#yes_elavator_floor_count_div').addClass('d-none');
                    $('#no_elavator_floor_count_div').addClass('d-none');

                    $('#no_elev_div').addClass('d-none');
                    $('#yes_elev_div').addClass('d-none');
                }
                else {
                    $('#floor_count_div').addClass('d-none');

                    $('#no_elavator_floor_count_div').removeClass('d-none');
                    $('#yes_elavator_floor_count_div').addClass('d-none');

                    $('#no_elev_div').removeClass('d-none');
                    $('#yes_elev_div').removeClass('d-none');
                }

            }

        });

        $('input[name=elevator]').change(function () {
            var value = $('input[name=elevator]:checked').val();
            if (value == 'yes') {
                $('#no_elavator_floor_count_div').addClass('d-none');
                $('#yes_elavator_floor_count_div').removeClass('d-none');
            }
            else {
                $('#yes_elavator_floor_count_div').addClass('d-none');
                $('#no_elavator_floor_count_div').removeClass('d-none');
            }
        });

        $('#new_prop_request_btn').click(function () {
            $('#new_prop_request_btn').html("");
            $('#new_prop_request_btn').attr('disabled', 'disabled');
            $('#new_prop_request_btn').html('  <span class="spinner-border spinner-border-sm mr-2" role="status" aria-hidden="true"></span>\n' +
                '  درحال ثبت ...');
            $('#npr_form').trigger('submit');

        });

        $('form#npr_form').on("submit", function (e) {
            e.preventDefault();
            $('#npr_customer_tel_error').addClass('d-none');
            $('#npr_customer_name_error').addClass('d-none');
            var $inputs = $('form#npr_form :input');
            // not sure if you wanted this, but I thought I'd add it.
            // get an associative array of just the values.
            var nprFormsData = {};
            $inputs.each(function () {
                nprFormsData[this.name] = $(this).val();
            });

            nprFormsData['sj_elavator'] = $('input[name=elevator]:checked').val();

            let validation = new Validator({
                customer_name: nprFormsData.npr_customer_name,
                customer_tel: nprFormsData.npr_customer_tel
            }, {
                customer_name: 'required',
                customer_tel: 'required|mobile'
            });

            if (validation.fails()) {
                if (validation.errors.errors.customer_tel && validation.errors.errors.customer_tel.length > 0) {
                    $('#npr_customer_tel_error').html("").html(validation.errors.errors.customer_tel[0]).removeClass('d-none');
                }

                if (validation.errors.errors.customer_name && validation.errors.errors.customer_name.length > 0) {
                    $('#npr_customer_name_error').html("").html(validation.errors.errors.customer_name[0]).removeClass('d-none');
                }
                $('#new_prop_request_btn').html("ثبت").removeAttr("disabled");
                console.log(validation.errors.errors);
            }
            else {
                $.ajax({
                    type: "POST",
                    url: '<?php echo admin_url('admin-ajax.php');?>',
                    data: {
                        action: 'save_npr',
                        user_id: <?php echo get_current_user_id()?>,
                        data: nprFormsData,
                    },
                    success: function (result) {
                        switch (result.status) {
                            case 'success':

                                toastr.options = {
                                    timeOut: 3000,
                                    progressBar: true,
                                    showMethod: "slideDown",
                                    hideMethod: "slideUp",
                                    showDuration: 200,
                                    hideDuration: 200,
                                    positionClass: "toast-top-left",
                                };
                                toastr.success('درخواست شما با موفقیت ثبت گردید!');

                                $('#new_prop_request_modal').modal('hide');
                                $('#new_prop_request_btn').html("ثبت");
                                $('#new_prop_request_btn').removeAttr("disabled");

                                $('#compelted_requests').html(result.complete_req + ' ' + 'درخواست');
                                $('#pending_requests').html(result.pending_req + ' ' + 'درخواست');

                                $('#user_prop_request_tbl').DataTable().clear().destroy();
                                fetch_user_prop_requests();
                                break;
                            case 'not_secure':
                                swal("هشدار!", "به نظر خطای امنیتی رخ داده است!", "warning");
                                $('#new_prop_request_modal').modal('hide');

                                break;
                        }
                    }
                });
            }


        });

        function get_prop_statistic() {

            var colors = {
                primary: $('.colors .bg-primary').css('background-color'),
                primaryLight: $('.colors .bg-primary-bright').css('background-color'),
                secondary: $('.colors .bg-secondary').css('background-color'),
                secondaryLight: $('.colors .bg-secondary-bright').css('background-color'),
                info: $('.colors .bg-info').css('background-color'),
                infoLight: $('.colors .bg-info-bright').css('background-color'),
                success: $('.colors .bg-success').css('background-color'),
                successLight: $('.colors .bg-success-bright').css('background-color'),
                danger: $('.colors .bg-danger').css('background-color'),
                dangerLight: $('.colors .bg-danger-bright').css('background-color'),
                warning: $('.colors .bg-warning').css('background-color'),
                warningLight: $('.colors .bg-warning-bright').css('background-color'),
            };
            if ($('#contacts-statuses2').length) {
                var chart = new ApexCharts(
                    document.querySelector("#contacts-statuses2"), {
                        chart: {
                            width: "100%",
                            type: 'donut',
                        },
                        dataLabels: {
                            enabled: false
                        },
                        stroke: {
                            width: 3,
                            colors: $('body').hasClass('dark') ? "#313852" : "rgba(255, 255, 255, 1)",
                        },
                        series: [<?php echo $prop_rent_count->found_posts?>,  <?php echo $prop_mortgage_count->found_posts?>, <?php echo $prop_sale_count->found_posts?>],
                        labels: ['رهن و اجاره', 'رهن کامل', 'فروش'],
                        colors: [colors.warning, colors.info, colors.success, colors.danger],
                        legend: {
                            position: 'bottom',
                        },
                    }
                );

                chart.render();
            }
        }

        get_prop_statistic();

        fetch_user_prop_requests();

        function fetch_user_prop_requests() {
            $('#user_prop_request_tbl').addClass('loadingbar gray');
            $('#user_prop_request_tbl').DataTable({
                "lengthMenu": [[5, 10, 25, -1], [5, 10, 25, "All"]],
                language: {
                    processing: "در حال پردازش",
                    searchPlaceholder: "جستجو ...",
                    lengthMenu: " _MENU_",
                    emptyTable: "تا به حال درخواستی ثبت نکرده اید!",
                },
                columnDefs: [
                    {
                        "targets": 1, // your case first column
                        "className": "text-center",
                    },
                    {
                        "targets": 2, // your case first column
                        "className": "text-center",
                    },
                    {
                        "targets": 3, // your case first column
                        "className": "text-center",
                    },
                    {
                        "targets": 4, // your case first column
                        "className": "text-center",
                    },
                    {
                        "targets": 5, // your case first column
                        "className": "text-center",
                    }, {
                        "targets": 6, // your case first column
                        "className": "text-center",
                    }, {
                        "targets": 7, // your case first column
                        "className": "text-center",
                    },
                ],
                bFilter: false,
                // responsive : true,
                serverSide: true,
                ajax: {
                    url: '<?php echo admin_url("admin-ajax.php");?>',
                    data: {
                        action: 'get_all_user_prop_request',
                        user_id: '<?php echo get_current_user_id()?>',
                    },
                    type: 'post',
                },
                "fnDrawCallback": function () {
                    traverse(document.body);
                    $('#user_prop_request_tbl').removeClass('loadingbar gray');
                },
                "rowCallback": function (nRow, aData, iDisplayIndex, iDisplayIndexFull) {

                    if (aData[8] == 'same') {
                        $('td:eq(0)', nRow).addClass('sj-bg-green');
                    }

                    if (aData[9] == 'found') {
                        $('td:eq(7)', nRow).addClass('sj-bg-green');
                    }
                    return nRow;
                }
            });
        }

        persian = {0: '۰', 1: '۱', 2: '۲', 3: '۳', 4: '۴', 5: '۵', 6: '۶', 7: '۷', 8: '۸', 9: '۹'};

        function traverse(el) {
            if (el.nodeType == 3) {
                var list = el.data.match(/[0-9]/g);
                if (list != null && list.length != 0) {
                    for (var i = 0; i < list.length; i++)
                        el.data = el.data.replace(list[i], persian[list[i]]);
                }
            }
            for (var i = 0; i < el.childNodes.length; i++) {
                traverse(el.childNodes[i]);
            }
        }

        $('body').tooltip({
            selector: '[data-toggle="tooltip"]'
        });

        $(document.body).on('click', '#show_prop_request_detailes', function () {
            var temp = $(this);
            $(this).closest('tr').addClass(' loadingbar gray').prop('disabled', true);
            $.ajax({
                type: "POST",
                url: '<?php echo admin_url('admin-ajax.php');?>',
                data: {
                    action: 'get_request_det',
                    r_id: $(this).data('request_id'),
                    user_id:<?php echo get_current_user_id()?>,
                },
                success: function (result) {
                    $('div #show_request_det_tbl').html('');
                    $('div #show_request_det_tbl').append(result);
                    temp.closest('tr').removeClass(' loadingbar gray');
                    $('#prop_requeset_detailes').modal('toggle');
                }
            });


        });

        $(document.body).on('click', '#npr_delete', function () {
            var request_id = $(this).data('request_id');
            $.confirm({
                boxWidth: '30%',
                useBootstrap: false,
                title: 'حذف درخواست',
                rtl: true,
                closeIcon: true,
                content: '' +
                    '<form action="" class="formName">' +
                    '<div class="form-group" style="margin-right: 10px;">' +
                        'آیا مطمئن هستید؟'+
                    '</div>' +
                    '</form>',
                buttons: {
                    submit: {
                        text: 'حذف',
                        btnClass: 'btn-green',
                        action: function () {
                            $.post(
                                '<?php echo admin_url("admin-ajax.php");?>',
                                {
                                    action: 'delete_request',
                                    r_id: request_id,
                                    user_id: '<?php echo get_current_user_id()?>',
                                },
                                function (response) {
                                    if (response.status == 'success') {
                                        $('#user_prop_request_tbl').DataTable().clear().destroy();
                                        fetch_user_prop_requests(request_id);
                                        toastr.options = {
                                            timeOut: 4000,
                                            positionClass: "toast-top-left",
                                            progressBar: true,
                                            showMethod: "slideDown",
                                            hideMethod: "slideUp",
                                            showDuration: 200,
                                            hideDuration: 200,
                                            rtl: true
                                        };

                                        toastr.success(response.msg);
                                    }
                                    else if (response.status == 'not_success') {
                                        toastr.options = {
                                            timeOut: 4000,
                                            positionClass: "toast-top-left",
                                            progressBar: true,
                                            showMethod: "slideDown",
                                            hideMethod: "slideUp",
                                            showDuration: 200,
                                            hideDuration: 200,
                                            rtl: true
                                        };
                                        toastr.error(response.msg);
                                    }

                                }
                            );
                        }
                    },
                    close: {
                        text: 'انصراف',
                        btnClass: 'btn-red',
                        action: function () {
                        }
                    }
                },
                onContentReady: function () {
                    // bind to events
                    var jc = this;
                    this.$content.find('form').on('submit', function (e) {
                        // if the user submits the form by pressing enter in the field.
                        e.preventDefault();
                        jc.$$formSubmit.trigger('click'); // reference the button and click it
                    });
                }
            });

        });

    });


</script>

</body>

</html>