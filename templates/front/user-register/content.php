
<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <h3>
            مسکــن آرال<br>
            <small class="text-muted">ملک خود را با ما پیدا کنید</small>
        </h3>
    </div>
    <!-- ./ logo -->

    <div class="aral-separator">ثبت نام</div>

    <form id="register_form" novalidate>
        <div class="form-group">
            <input type="text" class="form-control text-center" id="register_mobile" name="register_mobile" placeholder="شماره همراه" autofocus  aria-describedby="inputGroupPrepend" required>
        </div>

        <button  type="button" class="btn btn-primary btn-block" id="send-code-register-btn">ارسال کد تایید شماره همراه</button>
        <hr>
        <?php
        if (isset($_REQUEST['ref']))
        {
            $recover_link=home_url('recover-password?ref='.$_REQUEST['ref']);
            $login_link=home_url('auth?ref='.$_REQUEST['ref']);
        }
        else
        {
            $recover_link=home_url('recover-password');
            $login_link=home_url('auth');
        }
        ?>
        <a href="<?php echo $login_link;?>" class="btn btn-sm btn-outline-light mr-1">وارد شوید</a>
        یا
        <a href="<?php echo $recover_link;?>" class="btn btn-outline-light btn-sm">بازگردانی رمز</a>
    </form>
    <form id="set_user_info_form" novalidate style="display: none">
        <div class="form-group">
            <input type="text" class="form-control text-center" id="register_fname" name="register_fname" placeholder="نام" autofocus="" aria-describedby="inputGroupPrepend" required="">
            <input type="text" class="form-control text-center" id="register_lname" name="register_lname" placeholder="نام خانوادگی" autofocus="" aria-describedby="inputGroupPrepend" required="">
        </div>

        <div class="form-group">
            <input type="password" class="form-control text-center" id="register_password" name="register_password" placeholder="گذرواژه" autofocus="" aria-describedby="inputGroupPrepend" required="">
        </div>

        <div class="form-group">
            <button type="button" class="btn btn-outline-behance countdown-register">
            </button>
        </div>

        <div class="form-group">
            <input type="number" class="form-control text-center" id="register_code" name="register_code" placeholder=" کد تایید ( - - - - )" autofocus  aria-describedby="inputGroupPrepend" required>
        </div>

        <div class="form-group">
        </div>
        <button  type="button" class="btn btn-primary btn-block" id="register_confirm_btn"> ثبت نام</button>
        <hr>
        <?php
        if (isset($_REQUEST['ref']))
        {
            $recover_link=home_url('recover-password?ref='.$_REQUEST['ref']);
            $login_link=home_url('auth?ref='.$_REQUEST['ref']);
        }
        else
        {
            $recover_link=home_url('recover-password');
            $login_link=home_url('auth');
        }
        ?>
        <a href="<?php echo $login_link;?>" class="btn btn-sm btn-outline-light mr-1">وارد شوید</a>
        یا
        <a href="<?php echo $recover_link;?>" class="btn btn-outline-light btn-sm">بازگردانی رمز</a>
    </form>
</div>