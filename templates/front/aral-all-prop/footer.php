
<!-- Plugin scripts -->
<script src="<?php echo $dash_assets_url.'vendors/bundle.js'?>"></script>

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


<script type="text/javascript" src="<?php echo $dash_assets_url.'vendors/swiper/swiper.min.js'?>"></script>

<script type="text/javascript" src="<?php echo $dash_assets_url.'vendors/lightbox/jquery.magnific-popup.min.js'?>"></script>


<script src="<?php echo $dash_assets_url.'vendors/slick/slick.min.js'?>"></script>

<script src="<?php echo $dash_assets_url.'vendors/tail/js/tail.select.min.js'?>"></script>
<script src="<?php echo $dash_assets_url.'vendors/tail/langs/tail.select-fa.js'?>"></script>
<script src="https://cdn.jsdelivr.net/npm/sweetalert2@9"></script>


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
    var myData=
    <?php
        $temp=array(
            'ajax_url'=>admin_url('admin-ajax.php'),
            'all_prop_url'=>home_url('aral-all-prop'),
        );
        if (isset($_GET) and !empty($_GET))
        {
            $temp['search_args']=$_GET;
        }
    echo json_encode($temp);
    ?>

</script>
<script type="text/javascript" src="<?php echo $dash_assets_url.'assets/js/pages/aral-all-prop.js'?>"></script>

</body>

</html>