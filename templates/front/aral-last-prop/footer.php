
<!-- Plugin scripts -->
<script src="<?php echo $dash_assets_url.'vendors/bundle.js'?>"></script>

<!-- Chartjs -->
<script src="<?php echo $dash_assets_url.'vendors/charts/chartjs/chart.min.js'?>"></script>
<script src="<?php echo $dash_assets_url.'assets/js/examples/charts/chartjs.js'?>"></script>
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


<script type="text/javascript" src="<?php echo $dash_assets_url.'vendors/swiper/swiper.min.js'?>"></script>

<script type="text/javascript" src="<?php echo $dash_assets_url.'vendors/lightbox/jquery.magnific-popup.min.js'?>"></script>


<script src="<?php echo $dash_assets_url.'vendors/slick/slick.min.js'?>"></script>

<script src="<?php echo $dash_assets_url.'vendors/tail/js/tail.select.min.js'?>"></script>
<script src="<?php echo $dash_assets_url.'vendors/tail/langs/tail.select-fa.js'?>"></script>


<!-- Dashboard scripts -->
<script src="<?php echo $dash_assets_url.'assets/js/examples/dashboard.js'?>"></script>
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


<!-- App scripts -->
<script src="<?php echo $dash_assets_url.'assets/js/app.min.js'?>"></script>



<script type="text/javascript">
    var myData=<?php echo json_encode(
        array(
            'ajax_url'=>admin_url('admin-ajax.php'),
            'all_prop_url'=>home_url('aral-all-prop'),
        )
    );?>

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

    ?>

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

    var element = document.getElementById("chartjs_three");
    element.height = 300;

    new Chart(element, {
        type: 'pie',
        data: {
            labels: [
                "خرید/فروش"+ "(<?php echo $prop_sale_count->found_posts?>"+" ملک "+") ",
                "رهن و اجاره" + "(<?php echo $prop_rent_count->found_posts?>"+" ملک "+") ",
                "رهن کامل"+ "(<?php echo $prop_mortgage_count->found_posts?>"+" ملک "+") "
            ],
            datasets: [{
                label: "Population (millions)",
                borderWidth: 5,
                backgroundColor: [
                    colors.warning,
                    colors.success,
                    colors.danger
                ],
                data: [<?php echo $prop_sale_count->found_posts?>,  <?php echo $prop_rent_count->found_posts?>, <?php echo $prop_mortgage_count->found_posts?>]
            }]
        },
        options: {
            title: {
                display: true,
                text: 'املاک منتشر شده در مسکن آرال',
                fontFamily: "'iranyekan'",
                fontSize: '22',
            },
            legend: {
                labels: {
                    // This more specific font property overrides the global property
                    fontFamily: "'iranyekan'"
                }
            }
        }
    });

    function openCity(evt, cityName) {
        var i, tabcontent, tablinks;
        tabcontent = document.getElementsByClassName("tabcontent");
        for (i = 0; i < tabcontent.length; i++) {
            tabcontent[i].style.display = "none";
        }
        tablinks = document.getElementsByClassName("tablinks");
        for (i = 0; i < tablinks.length; i++) {
            tablinks[i].className = tablinks[i].className.replace(" active", "");
        }
        document.getElementById(cityName).style.display = "block";
        evt.currentTarget.className += " active";
    }

</script>
<script type="text/javascript" src="<?php echo $dash_assets_url.'assets/js/pages/aral-home.js'?>"></script>

</body>

</html>