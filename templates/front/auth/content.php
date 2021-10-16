
<div class="form-wrapper">

    <!-- logo -->
    <div id="logo">
        <h3>
         مسکــن آرال<br>
            <small class="text-muted">ملک خود را با ما پیدا کنید</small>
        </h3>
<!--        <img class="logo" src="--><?php //echo $dash_assets_url.'assets/media/image/logo-F.png'?><!--" alt="image">-->
<!--        <img class="logo-dark" src="--><?php //echo $dash_assets_url.'assets/media/image/logo-dark.png'?><!--" alt="image">-->
    </div>
    <!-- ./ logo -->

    <div class="aral-separator">ورود</div>

    <form id="login_form" novalidate>
        <div class="form-group" id="user_or_mobile_div">
            <input type="text" class="form-control text-center" id="user_name" name="user_name" placeholder="نام کاربری یا شماره همراه" autofocus  aria-describedby="inputGroupPrepend" required>
        </div>

        <div class="form-group">
            <input type="password" class="form-control text-center" id="password" name="password" placeholder="رمزعبور" required>
        </div>

        <div class="form-group d-flex justify-content-between ">
            <?php
                if (isset($_REQUEST['ref']))
                {
                    $recover_password_link=home_url('recover-password?ref='.$_REQUEST['ref']);
                }
                else
                {
                    $recover_password_link=home_url('recover-password');
                }
            ?>
            <a href="<?php echo $recover_password_link;?>"> <i class="fa fa-key fa-rotate-90" aria-hidden="true"></i> بازگردانی رمزعبور</a>
        </div>
        <button  type="button" class="btn btn-primary btn-block" id="login-btn">ورود</button>
        <hr>
        <p class="text-muted">اکانت ندارید؟</p>
        <?php
        if (isset($_REQUEST['ref']))
        {
            $register_link=home_url('aral-register?ref='.$_REQUEST['ref']);
        }
        else
        {
            $register_link=home_url('aral-register');
        }
        ?>
        <a href="<?php echo $register_link;?>" class="btn btn-outline-light btn-sm">ثبت نام کنید!</a>
    </form>

</div>