<div id="main">
    <!-- begin::navigation -->
    <?php

    use Plugin_Name_Dir\Includes\Functions\Utility;
    $dash_assets_url=trailingslashit( PLUGIN_NAME_URL ) . 'assets/dashboard/';
    Utility::load_template( 'aral-exp-files.sidebar',  compact( 'dash_assets_url' ), 'front' );
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
                <h4>فایل ها</h4>
                <nav aria-label="breadcrumb">
                    <ol class="breadcrumb">
                        <li class="breadcrumb-item">
                            <a href="<?php echo home_url();?>">مسکن آرال</a>
                        </li>
                        <li class="breadcrumb-item active" aria-current="page">فایل ها</li>
                    </ol>
                </nav>
            </div>
        </div>
        <!-- end::page-header -->

        <!-- begin::page content -->
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <div class="card">
                        <div class="card-body">
                            <div class="card-title d-md-flex align-items-start justify-content-between">
                                <h6 class="card-title">
                                        لیست فایل های شما
                                </h6>

                            </div>
                            <div class="row">
                                <div class="col-md-12">
                                    <div class="table-responsive">
                                        <table id="user_prop_request_tbl" class="table table-striped mb-0">
                                            <thead>
                                            <tr>
                                                <th>#</th>
                                                <th>شماره ملک</th>
                                                <th class="text-center">عنوان </th>
                                                <th class="text-center">اطلاعات قیمت</th>
                                                <th class="text-center">آدرس</th>
                                                <th class="text-center">تاریخ</th>
                                                <th class="text-center">وضعیت</th>
                                                <th>عملیات</th>
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


<div class="modal fade" id="prop_divar_list" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">لیست آگهی های دیوار</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body" id="prop_divar_list_modal_body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body" id="prop_divar_list_card">

                                    <form class="form-inline align-center" id="form_add_divar">
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label for="divar_phone" class="sr-only">شماره تماس دیوار</label>
                                            <input type="text" class="form-control" id="divar_phone" placeholder="شماره تماس دیوار">
                                            <div class="divar_error danger"></div>
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label for="divar_date" class="sr-only">تاریخ انتشار</label>
                                            <input type="hidden" id="divar_date" name="divar_date">
                                            <input type="text" class="form-control pwt-datepicker-input-element" id="divar_date2" name="divar_date2" placeholder="رمزعبور">
                                        </div>
                                        <div class="form-group mx-sm-3 mb-2">
                                            <label for="divar_description" class="sr-only">توضیحات</label>
                                            <input type="text" class="form-control" id="divar_description" name="divar_description" placeholder="توضیحات">
                                        </div>
                                        <button type="button" class="btn btn-primary mb-2" id="divar_add"> ثبت </button>
                                        <input type="hidden" class="btn btn-primary mb-2" id="add_divar_prop_id" />
                                    </form>


                                    <div class="table-responsive">
                                        <table class="table" id="prop_divar_list_tbl">
                                            <thead>
                                            <tr>
                                                <th scope="col">همراه</th>
                                                <th scope="col">تاریخ</th>
                                                <th scope="col">توضیحات</th>
                                                <th class="text-right" scope="col"><i class="fa fa-cogs fa-lg"></i></th>
                                            </tr>
                                            </thead>
                                            <tbody>

                                            </tbody>
                                        </table>
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



<div class="modal fade" id="prop_edit_modal" tabindex="-1" role="dialog" aria-hidden="true">
    <div class="modal-dialog modal-dialog-centered modal-lg" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalCenterTitle">ویرایش ملک</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <i class="ti-close"></i>
                </button>
            </div>
            <div class="modal-body">
                <div class="container-fluid">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="card">
                                <div class="card-body">
                                    <form id="form_edit_prop">
                                        <div class="form-row">
                                            <div class="form-group col-md-6">
                                                <label for="inputEmail4">ایمیل</label>
                                                <input type="email" class="form-control" id="inputEmail4" placeholder="ایمیل ">
                                            </div>
                                            <div class="form-group col-md-6">
                                                <label for="inputPassword4">رمزعبور</label>
                                                <input type="password" class="form-control" id="inputPassword4" placeholder="رمزعبور">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="inputAddress">آدرس</label>
                                            <input type="text" class="form-control" id="inputAddress" placeholder="1234 خیابان اصلی ">
                                        </div>
                                        <div class="form-group">
                                            <div class="form-check">
                                                <input class="form-check-input" type="checkbox" id="gridCheck">
                                                <label class="form-check-label" for="gridCheck">
                                                    مرا علامت بزنید
                                                </label>
                                            </div>
                                        </div>
                                        <button type="button" class="btn btn-primary mb-2" id="edit_prop_submit" name="edit_prop_submit"> ویرایش </button>
                                        <input type="hidden" class="btn btn-primary mb-2" id="edit_prop_id" name="edit_prop_id"/>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>