<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= $viewTitle ?> | <?= $viewSiteName ?></title>
    <base href="<?php echo HOST_ROOT; ?>"/>
    <!-- BEGIN THEME GLOBAL STYLES -->
    <link href="dashboard/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="dashboard/css/plugins-md.min.css" rel="stylesheet" type="text/css"/>
    <!-- END THEME GLOBAL STYLES -->
    <!-- Font awesome -->
    <link href="dashboard/css/font-awesome.min.css" rel="stylesheet">
    <!-- Bootstrap -->
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <!-- SmartMenus jQuery Bootstrap Addon CSS -->
    <link href="dashboard/css/jquery.smartmenus.bootstrap.css" rel="stylesheet">
    <!-- Product view slider -->
    <link rel="stylesheet" type="text/css" href="dashboard/css/jquery.simpleLens.css">
    <!-- slick slider -->
    <link rel="stylesheet" type="text/css" href="dashboard/css/slick.css">
    <!-- price picker slider -->
    <link rel="stylesheet" type="text/css" href="dashboard/css/nouislider.css">
    <!-- Theme color -->
    <link id="switcher" href="dashboard/css/theme-color/default-theme.css" rel="stylesheet">
    <!-- <link id="switcher" href="css/theme-color/bridge-theme.css" rel="stylesheet"> -->
    <!--    notification library-->
    <link rel="stylesheet" type="text/css" href="dashboard/css/jquery.notific8.min.css">
    <!-- Main style sheet -->
    <link href="dashboard/css/style.css" rel="stylesheet">
    <link rel="shortcut icon" href="dashboard/img/favicon.ico"/>
    <!-- Google Font -->
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
    <link href='https://fonts.googleapis.com/css?family=Raleway' rel='stylesheet' type='text/css'>


    <!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
    <!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
    <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
    <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
    <!-- jQuery library -->
    <!--<script src="https://code.jquery.com/jquery-2.2.4.min.js"
            integrity="sha256-BbhdlvQf/xTY9gja0Dq3HiwQF8LaCRTXxZKRutelT44=" crossorigin="anonymous"></script>-->
    <script src="dashboard/js/jquery.min.js"></script>
    <script src="dashboard/js/bootstrap.min.js"></script>
    <script src="dashboard/js/js.cookie.min.js" type="text/javascript"></script>
    <script src="dashboard/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
    <script src="dashboard/js/jquery.slimscroll.min.js" type="text/javascript"></script>
    <script src="dashboard/js/jquery.blockui.min.js" type="text/javascript"></script>
    <script src="dashboard/js/jquery.uniform.min.js" type="text/javascript"></script>
    <script src="dashboard/js/bootstrap-switch.min.js" type="text/javascript"></script>
</head>
<body>
<!-- wpf loader Two -->
<div id="wpf-loader-two">
    <div class="wpf-loader-two-inner">
        <span>Đang tải...</span>
    </div>
</div>
<!-- / wpf loader Two -->
<!-- SCROLL TOP BUTTON -->
<a class="scrollToTop" href="#"><i class="fa fa-chevron-up"></i></a>
<!-- END SCROLL TOP BUTTON -->


<!-- Start header section -->
<header id="aa-header">
    <!-- start header top  -->
    <div class="aa-header-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-top-area">
                        <!-- start header top left -->
                        <div class="aa-header-top-left">
                            <!-- start language -->
                            <div class="aa-language">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        <img src="dashboard/img/flags/vn.png" alt="english flag">VIETNAM
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><img src="dashboard/img/flags/england.png" alt="">ENGLISH</a>
                                        </li>
                                        <li><a href="#"><img src="dashboard/img/flags/vn.png" alt="">VIETNAM</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- / language -->

                            <!-- start currency -->
                            <div class="aa-currency">
                                <div class="dropdown">
                                    <a class="btn dropdown-toggle" href="#" type="button" id="dropdownMenu1"
                                       data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                        ~VNĐ~
                                        <span class="caret"></span>
                                    </a>
                                    <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                        <li><a href="#"><i class="fa fa-usd"></i>USD</a></li>
                                        <li><a href="#"><i class="fa fa-euro"></i>EURO</a></li>
                                        <li><a href="#"><i class="fa fa-jpy"></i>YEN</a></li>
                                    </ul>
                                </div>
                            </div>
                            <!-- / currency -->
                            <!-- start cellphone -->
                            <div class="cellphone hidden-xs">
                                <p><span class="fa fa-phone"></span>+84-914-499-925</p>
                            </div>
                            <!-- / cellphone -->
                        </div>
                        <!-- / header top left -->
                        <div class="aa-header-top-right">
                            <ul class="aa-head-top-nav-right">
                                <li><a href="blog/list">Bài viết</a></li>
                                <li><a href="account.html">Tài khoản</a></li>
                                <li class="hidden-xs"><a href="san-pham/yeu-thich.html">Yêu thích</a></li>
                                <li class="hidden-xs"><a href="gio-hang.html">Giỏ hàng</a></li>
                                <li class="hidden-xs"><a href="gio-hang/checkout.html">Checkout</a></li>
                                <li><?php if (!isset($_SESSION['User'])) { ?><a href="" data-toggle="modal"
                                                                                data-target="#login-modal">Đăng
                                        nhập</a> <?php } else {
                                        ?>Xin chào: <?php echo $_SESSION['User']['username'] . ' <a href="auth/logout"> (Đăng xuất)</a>';
                                    } ?></li>
                                <li>
                                    <div class="dropdown" id="theme-swicher">
                                        <a class="btn dropdown-toggle" type="button"
                                           data-toggle="dropdown" aria-haspopup="true" aria-expanded="true">
                                            Màu
                                            <span class="caret"></span>
                                        </a>
                                        <ul class="dropdown-menu" aria-labelledby="dropdownMenu1">
                                            <li><a id="switcher-bridge-theme" style="background-color: #a5d549;"></a>
                                            </li>
                                            <li><a id="switcher-dark-red-theme" style="background-color: #970001;"></a>
                                            </li>
                                            <li><a id="switcher-default-theme" style="background-color: #ff6666;"></a>
                                            </li>
                                            <li><a id="switcher-green-theme" style="background-color: #3fc35f;"></a>
                                            </li>
                                            <li><a id="switcher-lite-blue-theme" style="background-color: #37c6f5;"></a>
                                            </li>
                                            <br/>
                                            <li><a id="switcher-orange-theme" style="background-color: #ff871c;"></a>
                                            </li>
                                            <li><a id="switcher-pink-theme" style="background-color: #ff2851;"></a></li>
                                            <li><a id="switcher-purple-theme" style="background-color: #c762cb;"></a>
                                            </li>
                                            <li><a id="switcher-red-theme" style="background-color: #ee4532;"></a></li>
                                            <li><a id="switcher-yellow-theme" style="background-color: #ffff00;"></a>
                                            </li>
                                        </ul>
                                    </div>
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header top  -->

    <!-- start header bottom  -->
    <div class="aa-header-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-header-bottom-area">
                        <!-- logo  -->
                        <div class="aa-logo">
                            <!-- Text based logo -->
                            <a href="index.html">
                                <span class="fa fa-mobile"></span>
                                <p>SV<strong>Mobile</strong> <span>Your Shopping Partner</span></p>
                            </a>
                            <!-- img based logo -->
                            <!-- <a href="index.html"><img src="img/logo.jpg" alt="logo img"></a> -->
                        </div>
                        <!-- / logo  -->
                        <!-- cart box -->
                        <div class="aa-cartbox">
                            <a class="aa-cart-link" href="#">
                                <span class="fa fa-shopping-basket"></span>
                                <span class="aa-cart-title">GIỎ HÀNG</span>
                                <span class="aa-cart-notify">0</span>
                            </a>
                            <div class="aa-cartbox-summary">
                                <ul id="cart-noti">
                                </ul>
                                <ul>
                                    <li>
                                        <span class="aa-cartbox-total-title">Tổng</span>
                                        <span class="aa-cartbox-total-price">0 VNĐ</span>
                                    </li>
                                </ul>
                                <a class="aa-cartbox-checkout aa-primary-btn" href="gio-hang/checkout.html">Checkout</a>
                            </div>
                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form id="search-form">
                                <input type="text" name="search" id="search-product"
                                       placeholder="Tìm kiếm sản phẩm vd: 'iphone' ">
                                <button disabled><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                        <div style="clear: both"></div>
                        <div class="aa-search-box-result" id="search-box-result">
                            <ul id="search-result-title">&nbsp;&nbsp;&nbsp;Kết quả tìm kiếm:</ul>
                            <ul id="search-result">
                                <li></li>
                            </ul>
                        </div>
                        <!-- / search box -->

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
<style rel="stylesheet">

</style>
<!-- / header section -->
<!-- menu -->
<section id="menu">
    <div class="container">
        <div class="menu-area">
            <!-- Navbar -->
            <div class="navbar navbar-default" role="navigation">
                <div class="navbar-header">
                    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
                        <span class="sr-only">Toggle navigation</span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                        <span class="icon-bar"></span>
                    </button>
                </div>
                <div class="navbar-collapse collapse">
                    <!-- Left nav -->
                    <ul class="nav navbar-nav">
                        <li><a href="index.html">Trang chủ</a></li>
                        <li><a href="#">Apple <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Iphone 6</a></li>
                                <li><a href="#">Iphone 6</a></li>
                                <li><a href="#">Iphone 6</a></li>
                                <li><a href="#">Iphone 6</a></li>
                                <li><a href="#">Iphone 6</a></li>
                                <li><a href="#">Iphone 6</a></li>
                                <li><a href="#">Iphone 6</a></li>
                                <li><a href="#">Iphone 6</a></li>
                                <li><a href="#">Thêm.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Iphone 6</a></li>
                                        <li><a href="#">Iphone 6</a></li>
                                        <li><a href="#">Iphone 6</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">SAMSUNG <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Galaxy Note 7</a></li>
                                <li><a href="#">Galaxy Note 7</a></li>
                                <li><a href="#">Galaxy Note 7</a></li>
                                <li><a href="#">Galaxy Note 7</a></li>
                                <li><a href="#">Galaxy Note 7</a></li>
                                <li><a href="#">Galaxy Note 7</a></li>
                                <li><a href="#">Galaxy Note 7</a></li>
                                <li><a href="#">Thêm.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Galaxy Note 7</a></li>
                                        <li><a href="#">Galaxy Note 7</a></li>
                                        <li><a href="#">Galaxy Note 7</a></li>
                                        <li><a href="#">Thêm.. <span class="caret"></span></a>
                                            <ul class="dropdown-menu">
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li class="disabled"><a class="disabled" href="#">Disabled item</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                                <li><a href="#">Galaxy Note 7</a></li>
                                            </ul>
                                        </li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Xiaomi <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Redmi Note 3 Pro</a></li>
                                <li><a href="#">Redmi Note 3 Pro</a></li>
                                <li><a href="#">Redmi Note 3 Pro</a></li>
                                <li><a href="#">Redmi Note 3 Pro</a></li>
                                <li><a href="#">Redmi Note 3 Pro</a></li>
                                <li><a href="#">Redmi Note 3 Pro</a></li>
                                <li><a href="#">Redmi Note 3 Pro</a></li>
                                <li><a href="#">Redmi Note 3 Pro</a></li>
                                <li><a href="#">Thêm.. <span class="caret"></span></a>
                                    <ul class="dropdown-menu">
                                        <li><a href="#">Redmi Note 3 Pro</a></li>
                                        <li><a href="#">Redmi Note 3 Pro</a></li>
                                        <li><a href="#">Redmi Note 3 Pro</a></li>
                                    </ul>
                                </li>
                            </ul>
                        </li>
                        <li><a href="#">Phụ kiện</a></li>
                        <li><a href="contact">Liên hệ <span class="caret"></span></a>
                            <ul class="dropdown-menu">
                                <li><a href="#">Camera</a></li>
                                <li><a href="#">Mobile</a></li>
                                <li><a href="#">Tablet</a></li>
                                <li><a href="#">Laptop</a></li>
                                <li><a href="#">Accesories</a></li>
                            </ul>
                        </li>
                    </ul>
                </div><!--/.nav-collapse -->
            </div>
        </div>
    </div>
</section>
<!-- / menu -->
<div style="clear: both"></div>
<!--CONTENT-->

<?= $viewContent ?>

<!--END CONTENT-->
<div style="clear: both"></div>
<!-- quick view modal -->
<div class="modal fade" id="quick-view-modal" tabindex="-1" role="dialog"
     aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal"
                        aria-hidden="true">&times;</button>
                <div class="row">
                    <!-- Modal view slider -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="aa-product-view-slider">
                            <div class="simpleLens-gallery-container" id="demo-1">
                                <div class="simpleLens-container">
                                    <div class="simpleLens-big-image-container">
                                        <a class="simpleLens-lens-image" id="m-img1"
                                           data-lens-image="img/view-slider/large/polo-shirt-1.png">
                                            <img id="m-img2"
                                                 src="img/view-slider/medium/polo-shirt-1.png"
                                                 class="simpleLens-big-image">
                                        </a>
                                    </div>
                                </div>
                                <div class="simpleLens-thumbnails-container"></div>
                            </div>
                        </div>
                    </div>
                    <!-- Modal view content -->
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="aa-product-view-content">
                            <h3 id="m-title">Title</h3>
                            <div class="aa-price-block">
                                                            <span id="m-price"
                                                                  class="aa-product-view-price">$34.99</span>
                                <p class="aa-product-avilability">Trạng thái: <span
                                        id="m-status">In stock</span>
                                </p>
                            </div>
                            <p id="m-detail">Some detail here...</p>
                            <h4>Màu</h4>
                            <div class="aa-prod-view-size">
                                <a href="#">Xanh</a>
                                <a href="#">Đỏ</a>
                                <a href="#">Tím</a>
                                <a href="#">Vàng</a>
                            </div>
                            <div class="aa-prod-quantity">
                                <form action="" id="order-quantity">
                                    <select name="" id="select-quantity">
                                        <option value="1" selected="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                    </select>
                                </form>
                                <p class="aa-prod-category">
                                    Hãng: <a id="m-company" href="#">Polo T-Shirt</a>
                                </p>
                            </div>
                            <div class="aa-prod-view-bottom">
                                <a href="javascript:;" data-product-id="" id="add-to-cart-in"
                                   class="aa-add-to-cart-btn"><span
                                        class="fa fa-shopping-cart"></span>Thêm vào giỏ</a>
                                <a id="m-view" href="#" class="aa-add-to-cart-btn">Xem chi
                                    tiết</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div><!-- / quick view modal -->


<!-- Subscribe section -->
<?php if (!isset($_SESSION['User'])) { ?>
    <section id="aa-subscribe">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-subscribe-area">
                        <h3>Subscribe our newsletter </h3>
                        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                        <form method="post" action="account/subcribe" class="aa-subscribe-form">
                            <input type="email" name="subcribe" id="" placeholder="Enter your Email">
                            <input type="submit" value="Subscribe">
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </section>
<?php } ?>
<!-- / Subscribe section -->
<div style="clear: both"></div>
<!-- footer -->
<footer id="aa-footer">
    <!-- footer bottom -->
    <div class="aa-footer-top">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-top-area">
                        <div class="row">
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <h3>Main Menu</h3>
                                    <ul class="aa-footer-nav">
                                        <li><a href="#">Home</a></li>
                                        <li><a href="#">Our Services</a></li>
                                        <li><a href="#">Our Products</a></li>
                                        <li><a href="#">About Us</a></li>
                                        <li><a href="Contact">Contact Us</a></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Knowledge Base</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Delivery</a></li>
                                            <li><a href="#">Returns</a></li>
                                            <li><a href="#">Services</a></li>
                                            <li><a href="#">Discount</a></li>
                                            <li><a href="#">Special Offer</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Useful Links</h3>
                                        <ul class="aa-footer-nav">
                                            <li><a href="#">Site Map</a></li>
                                            <li><a href="#">Search</a></li>
                                            <li><a href="#">Advanced Search</a></li>
                                            <li><a href="#">Suppliers</a></li>
                                            <li><a href="#">FAQ</a></li>
                                        </ul>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-3 col-sm-6">
                                <div class="aa-footer-widget">
                                    <div class="aa-footer-widget">
                                        <h3>Contact Us</h3>
                                        <address>
                                            <p> Km9, Nguyen Trai - Thanh Xuan, Hanoi</p>
                                            <p><span class="fa fa-phone"></span>+84 914-499-925</p>
                                            <p><span class="fa fa-envelope"></span>phanminh65@gmail.com</p>
                                        </address>
                                        <div class="aa-footer-social">
                                            <a href="#"><span class="fa fa-facebook"></span></a>
                                            <a href="#"><span class="fa fa-twitter"></span></a>
                                            <a href="#"><span class="fa fa-google-plus"></span></a>
                                            <a href="#"><span class="fa fa-youtube"></span></a>
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
    <!-- footer-bottom -->
    <div class="aa-footer-bottom">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <div class="aa-footer-bottom-area">
                        <p>Copyright 2016 &copy; <a href="http://www.facebook.com/gangstar.a2/">MinhSoftware</a></p>
                        <div class="aa-footer-payment">
                            <span class="fa fa-cc-mastercard"></span>
                            <span class="fa fa-cc-visa"></span>
                            <span class="fa fa-paypal"></span>
                            <span class="fa fa-cc-discover"></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- / footer -->

<!-- Login Modal -->
<div class="modal fade" id="login-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <div class="modal-body">
                <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                <h4>Đăng nhập hoặc đăng ký</h4>
                <form method="post" class="aa-login-form" action="auth/login">
                    <label for="">Tên tài khoản hoặc Email<span>*</span></label>
                    <input name="login" type="text" placeholder="Tên tài khoản hoặc email">
                    <label for="">Mật khẩu<span>*</span></label>
                    <input name="password" type="password" placeholder="Mật khẩu">
                    <button class="aa-browse-btn" type="submit">Đăng nhập</button>
                    <label for="rememberme" class="rememberme"><input value="1" name="remember" type="checkbox"
                                                                      id="rememberme"> Nhớ lần sau
                    </label>
                    <p class="aa-lost-password"><a href="#">Quên mật khẩu?</a></p>
                    <div class="aa-register-now">
                        Không có tài khoản?<a href="auth/register">Đăng ký!</a>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<!-- Include all compiled plugins (below), or include individual files as needed -->
<!-- SmartMenus jQuery plugin -->
<script type="text/javascript" src="dashboard/js/jquery.smartmenus.js"></script>
<!-- SmartMenus jQuery Bootstrap Addon -->
<script type="text/javascript" src="dashboard/js/jquery.smartmenus.bootstrap.js"></script>
<!-- Product view slider -->
<script type="text/javascript" src="dashboard/js/jquery.simpleGallery.js"></script>
<script type="text/javascript" src="dashboard/js/jquery.simpleLens.js"></script>
<!-- slick slider -->
<script type="text/javascript" src="dashboard/js/slick.js"></script>
<!-- Price picker slider -->
<script type="text/javascript" src="dashboard/js/nouislider.js"></script>
<!--notification 8-->
<script type="text/javascript" src="dashboard/js/jquery.notific8.min.js"></script>
<!-- Custom js -->
<script src="dashboard/js/custom.js"></script>
<?php if (!empty($alert)) {
    echo '<div id="alerting" data-alert="' . $alert . '"></div>';
} ?>
<script>
    a = $('#alerting').attr('data-alert')
    if (a) {
        $.notific8(a, {
            life: 5000,
            heading: 'From Minh:',
            height: 100
        });
    }
</script>

</body>
</html>