<!-- BEGIN LOGO -->
<div class="logo">
    <a href="#">
        <img src="dashboard/img/logo-big.jpg" alt="" width="200px"/> </a>
</div>
<!-- END LOGO -->
<!-- BEGIN LOGIN -->
<div class="content">
    <!-- BEGIN LOGIN FORM -->
    <form class="login-form" role="form" method="post">
        <h3 class="form-title">Đăng nhập vào tài khoản</h3>
        <div class="alert alert-danger display-hide">
            <button class="close" data-close="alert"></button>
            <span> Vui lòng nhập tài khoản và mật khẩu </span>
        </div>
        <?php echo $alert ?>
        <div class="form-group">
            <!--ie8, ie9 does not support html5 placeholder, so we just show field title for that-->
            <label class="control-label visible-ie8 visible-ie9">Tên tài khoản</label>
            <div class="input-icon">
                <i class="fa fa-user"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Tên đăng nhập"
                       name="login"/></div>
        </div>
        <div class="form-group">
            <label class="control-label visible-ie8 visible-ie9">Mật khẩu</label>
            <div class="input-icon">
                <i class="fa fa-lock"></i>
                <input class="form-control placeholder-no-fix" type="password" autocomplete="off" placeholder="Mật khẩu"
                       name="password"/></div>
        </div>
        <div class="form-actions">
            <label class="checkbox">
                <input type="checkbox" name="remember" value="1"/> Ghi nhớ </label>
            <button type="submit" class="btn green pull-right"> Đăng nhập</button>
        </div>
        <div class="login-options">
            <h4>Hoặc đăng nhập với</h4>
            <ul class="social-icons">
                <li>
                    <a class="facebook" data-original-title="facebook" href="javascript:;"> </a>
                </li>
                <li>
                    <a class="twitter" data-original-title="Twitter" href="javascript:;"> </a>
                </li>
                <li>
                    <a class="googleplus" data-original-title="Goole Plus" href="javascript:;"> </a>
                </li>
                <li>
                    <a class="linkedin" data-original-title="Linkedin" href="javascript:;"> </a>
                </li>
            </ul>
        </div>
        <div class="forget-password">
            <h4>Quên mật khẩu ?</h4>
            <p> đừng lo, hãy nhấn
                <a href="javascript:;" id="forget-password"> vào đây </a> để lấy lại mật khẩu của bạn. </p>
        </div>

    </form>
    <!-- END LOGIN FORM -->
    <!-- BEGIN FORGOT PASSWORD FORM -->
    <form class="forget-form" action="#" method="post">
        <h3>Quên mật khẩu ?</h3>
        <p> Hãy điền E-mail của bạn vào đây. </p>
        <div class="form-group">
            <div class="input-icon">
                <i class="fa fa-envelope"></i>
                <input class="form-control placeholder-no-fix" type="text" autocomplete="off" placeholder="Email"
                       name="email"/></div>
        </div>
        <div class="form-actions">
            <button type="button" id="back-btn" class="btn red btn-outline">Quay lại</button>
            <button type="submit" class="btn green pull-right"> Gửi</button>
        </div>
    </form>
    <!-- END FORGOT PASSWORD FORM -->

</div>
<!-- END LOGIN -->
<!-- BEGIN COPYRIGHT -->
<div class="copyright"> 2016 &copy; by Phan Thế Minh.</div>
<!-- END COPYRIGHT -->
