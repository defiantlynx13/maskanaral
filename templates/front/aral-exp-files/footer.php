
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
<script src="<?php echo $dash_assets_url.'vendors/persian-date/persian-date.min.js'?>"></script>
<script src="<?php echo $dash_assets_url.'vendors/persian-date/persian-datepicker.min.js'?>"></script>
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
    $(document).ready(function () {

        Validator.useLang('fa');
        Validator.register('mobile', function (val) {
            return val.match(/^09[0-9]{9}$/g);
        }, 'شماره موبایل اشتباه است');

        fetch_exp_files();
        function fetch_exp_files()
        {
            $('#user_prop_request_tbl').addClass('loadingbar gray');
            $('#user_prop_request_tbl').DataTable({
                "lengthMenu": [[5,10, 25, -1], [5,10, 25, "All"]],
                language: {
                    processing:     "در حال پردازش",
                    searchPlaceholder: "جستجو ...",
                    lengthMenu:    " _MENU_",
                    emptyTable:     "تا به حال درخواستی ثبت نکرده اید!",
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
                    },{
                        "targets": 6, // your case first column
                        "className": "text-center",
                    },{
                        "targets": 7, // your case first column
                        "className": "text-center",
                    },
                ],
                bFilter :false,
                "dom": "Btp",
                serverSide: true,
                ajax: {
                    url: '<?php echo admin_url("admin-ajax.php");?>',
                    data: {
                        action: 'get_exp_files',
                        user_id: '<?php echo get_current_user_id()?>',
                    },
                    type: 'post',
                },
                "fnDrawCallback" : function() {
                    traverse(document.body);
                    $('#user_prop_request_tbl').removeClass('loadingbar gray');
                }
            } );
        }

        persian={0:'۰',1:'۱',2:'۲',3:'۳',4:'۴',5:'۵',6:'۶',7:'۷',8:'۸',9:'۹'};
        function traverse(el){
            if(el.nodeType==3){
                var list=el.data.match(/[0-9]/g);
                if(list!=null && list.length!=0){
                    for(var i=0;i<list.length;i++)
                        el.data=el.data.replace(list[i],persian[list[i]]);
                }
            }
            for(var i=0;i<el.childNodes.length;i++){
                traverse(el.childNodes[i]);
            }
        }

        $('body').tooltip({
            selector: '[data-toggle="tooltip"]'
        });

        function get_prop_divar_list(prop_id)
        {
            $('#prop_divar_list_tbl tbody').empty();
            $.post(
                '<?php echo admin_url('admin-ajax.php')?>',
                {
                    action : 'get_prop_divar_list',
                    prop_id:prop_id,
                    user_id:<?php echo get_current_user_id()?>,
                },
                function (response) {

                    if (response.status == 'success') {
                        $.each( response.message, function( index, value ){
                            $('#prop_divar_list_tbl tbody').append(
                                '  <tr>'+
                                '<td>'+ index+'</td>'+
                                '<td>'+value['divar_date']+'</td>'+
                                '<td>'+value['divar_description']+'</td>'+
                                '<td class="text-right">'+
                                '<button type="button" data-prop_id="'+prop_id+'" data-divar_phone="'+index+'" class="btn btn-danger btn-rounded" id="remove_from_divar_list"> <i class="ti-trash"></i> </button>'+
                                '</td>'+
                                '</tr>'
                            );
                        });
                    } else {
                        toastr.options = {
                            timeOut: 3000,
                            progressBar: true,
                            showMethod: "slideDown",
                            hideMethod: "slideUp",
                            showDuration: 200,
                            hideDuration: 200
                        };
                        toastr.error(response.message);
                    }
                }

            );
        }

        function delete_from_divar_list(prop_id,divar_phone)
        {
            $.post(
                '<?php echo admin_url('admin-ajax.php')?>',
                {
                    action : 'delete_from_divar_list',
                    prop_id:prop_id,
                    divar_phone:divar_phone,
                    user_id:<?php echo get_current_user_id()?>,
                },
                function (response) {

                    if (response.status == 'success') {
                        get_prop_divar_list(prop_id);
                    } else {
                        toastr.options = {
                            timeOut: 3000,
                            progressBar: true,
                            showMethod: "slideDown",
                            hideMethod: "slideUp",
                            showDuration: 200,
                            hideDuration: 200
                        };
                        toastr.error(response.message);
                    }
                }
            );
        }

        $(document.body).on('click','#show_divar_list_modal',function () {
            var prop_id=$(this).data('prop_id');
            $("form#form_add_divar input[id=add_divar_prop_id]").attr('data-prop_id',prop_id);
            get_prop_divar_list(prop_id);
            $('#prop_divar_list').modal('toggle');
        });



        $("#divar_date2").pDatepicker({

            "autoClose": true,
            "altField": "#divar_date",
            "format" : "DD MMMM YYYY ",
            "altFieldFormatter" :function (unixDate) {
                var self = this;
                var pd = new persianDate(unixDate).toCalendar('gregorian').format('X');
                return pd;
            }
        });

        $('#divar_add').click(function () {
            $('#form_add_divar').trigger('submit');
        });

        $(document.body).on('click','#remove_from_divar_list',function (){
            var prop_id=$(this).data('prop_id');
            var divar_phone=$(this).data('divar_phone');
            delete_from_divar_list(prop_id,divar_phone);
        });

        $('form#form_add_divar').on("submit", function (e) {
            e.preventDefault();
            $(".divar_error").html('').addClass("hidden")
            var $submit = $(this).find('[type=submit]');
            var allFormsData={};
            allFormsData.divar_phone = $('#divar_phone').val();
            allFormsData.divar_date = $('#divar_date').val();
            allFormsData.divar_description = $('#divar_description').val();
            allFormsData.prop_id = $('input[id=add_divar_prop_id]').data('prop_id');

            let divar_Data = {
                divar_phone: allFormsData.divar_phone,
            };

            let rules = {
                divar_phone: 'required|mobile',
            };

            let validation = new Validator(divar_Data, rules);


            if (validation.fails())
            {
                var divar_phone_validation_errors = validation.errors.get('divar_phone');
                if (divar_phone_validation_errors && divar_phone_validation_errors.length > 0)
                {
                    $(this).find(".divar_error").html(validation.errors.errors['divar_phone'][0]).removeClass("hidden");
                    traverse(document.body);
                }
            }
            else
            {
                $('#prop_divar_list_card,#form_add_divar').addClass('loadingbar gray');
                 $submit.prop('disabled', true);
                $.post(
                    '<?php echo admin_url('admin-ajax.php')?>',
                    {
                        action : 'add_divar',
                        divar_date: allFormsData.divar_date,
                        divar_phone: allFormsData.divar_phone,
                        divar_description: allFormsData.divar_description,
                        prop_id: allFormsData.prop_id,
                        user_id:<?php echo get_current_user_id()?>,
                    },
                    function (response) {
                        $('#prop_divar_list_card,#form_add_divar').removeClass('loadingbar gray');
                        $submit.prop('disabled', false);

                        if (response.status == 'success') {
                            toastr.options = {
                                timeOut: 3000,
                                progressBar: true,
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                showDuration: 200,
                                hideDuration: 200
                            };

                            toastr.success('ثبت شد');

                            $('#prop_divar_list_tbl tbody').empty();
                            $.each( response.message, function( index, value ){
                                $('#prop_divar_list_tbl tbody').append(
                                    '  <tr>'+
                                            '<td>'+ index+'</td>'+
                                        '<td>'+value['divar_date']+'</td>'+
                                        '<td>'+value['divar_description']+'</td>'+
                                        '<td class="text-right">'+
                                            '<button type="button" data-prop_id="'+response.prop_id+'" class="btn btn-danger btn-rounded" id="remove_from_divar_list"> <i class="ti-trash"></i> </button>'+
                                        '</td>'+
                                    '</tr>'
                                );
                            });


                        } else {
                            toastr.options = {
                                timeOut: 3000,
                                progressBar: true,
                                showMethod: "slideDown",
                                hideMethod: "slideUp",
                                showDuration: 200,
                                hideDuration: 200
                            };
                            toastr.error(response.message);
                        }
                    }

                );

            }
            return false;
        });



        $(document.body).on('click','#show_prop_edit_modal',function () {
            var prop_id=$(this).data('prop_id');
            $("form#form_edit_prop input[id=edit_prop_id]").attr('data-prop_id',prop_id);

            $('#prop_edit_modal').modal('toggle');
        });

    });

</script>

</body>

</html>