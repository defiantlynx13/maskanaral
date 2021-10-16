
<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <h3>
            مسکــن آرال<br>
            <small class="text-muted">ملک خود را با ما پیدا کنید</small>
        </h3>
    </div>
    <!-- ./ logo -->

    <div class="aral-separator">بازگردانی رمزعبور</div>

    <form id="rp_form" novalidate>

        <div class="form-group" id="user_or_mobile_div">
            <input type="text" class="form-control text-center" id="mobile" name="mobile" placeholder="شماره همراه" autofocus  aria-describedby="inputGroupPrepend" required>
        </div>


        <button  type="button" class="btn btn-primary btn-block" id="send_code_btn">ارسال کد احراز هویت</button>
        <hr>

        <?php
        if (isset($_REQUEST['ref']))
        {
            $register_link=home_url('aral-register?ref='.$_REQUEST['ref']);
            $login_link=home_url('auth?ref='.$_REQUEST['ref']);
        }
        else
        {
            $register_link=home_url('aral-register');
            $login_link=home_url('auth');
        }
        ?>
        <a href="<?php echo $register_link;?>" class="btn btn-outline-light btn-sm">ثبت نام کنید!</a>
        یا
        <a href="<?php echo $login_link;?>" class="btn btn-sm btn-outline-light mr-1">وارد شوید!</a>
    </form>

    <form id="confirm_code_form" novalidate style="    display: none">

        <div class="form-group">
            <button type="button" class="btn btn-outline-behance countdown">
            </button>
        </div>

        <div class="form-group">
            <input type="number" class="form-control text-center" id="code" name="code" placeholder=" کد تایید ( - - - - )" autofocus  aria-describedby="inputGroupPrepend" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control text-center" id="new_password" name="new_password" placeholder="گذرواژه جدید" autofocus="" aria-describedby="inputGroupPrepend" required="">
        </div>

        <button  type="button" class="btn btn-primary btn-block" id="confirm_code_btn" name="confirm_code_btn">ثبت گذرواژه جدید</button>
        <hr>

        <?php
        if (isset($_REQUEST['ref']))
        {
            $register_link=home_url('aral-register?ref='.$_REQUEST['ref']);
            $login_link=home_url('auth?ref='.$_REQUEST['ref']);
        }
        else
        {
            $register_link=home_url('aral-register');
            $login_link=home_url('auth');
        }
        ?>
        <a href="<?php echo $register_link;?>" class="btn btn-outline-light btn-sm">ثبت نام کنید!</a>
        یا
        <a href="<?php echo $login_link;?>" class="btn btn-sm btn-outline-light mr-1">وارد شوید!</a>
    </form>

</div>