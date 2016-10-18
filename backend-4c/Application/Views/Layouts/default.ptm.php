<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title> <?= $viewTitle ?> | <?= $viewSiteName ?></title>
    <base href="<?php echo HOST_ROOT; ?>"/>
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

    <!-- Main style sheet -->
    <link href="dashboard/css/style.css" rel="stylesheet">

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
    <script src="http://code.jquery.com/jquery-1.12.4.min.js" integrity="sha256-ZosEbRLbNQzLpnKIkEdrPv7lOy9C27hHQ+Xp8a4MxAQ=" crossorigin="anonymous"></script>
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
                                <li><a href="account.html">Tài khoản</a></li>
                                <li class="hidden-xs"><a href="wishlist.html">Yêu thích</a></li>
                                <li class="hidden-xs"><a href="cart.html">Giỏ hàng</a></li>
                                <li class="hidden-xs"><a href="checkout.html">Checkout</a></li>
                                <li><a href="" data-toggle="modal" data-target="#login-modal">Đăng nhập</a></li>
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
                                <span class="fa fa-shopping-cart"></span>
                                <p>AT<strong>Mobile</strong> <span>Your Shopping Partner</span></p>
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
                                <span class="aa-cart-notify">2</span>
                            </a>
                            <div class="aa-cartbox-summary">
                                <ul>
                                    <li>
                                        <a class="aa-cartbox-img" href="#"><img src="img/woman-small-2.jpg"
                                                                                alt="img"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                    </li>
                                    <li>
                                        <a class="aa-cartbox-img" href="#"><img src="img/woman-small-1.jpg"
                                                                                alt="img"></a>
                                        <div class="aa-cartbox-info">
                                            <h4><a href="#">Product Name</a></h4>
                                            <p>1 x $250</p>
                                        </div>
                                        <a class="aa-remove-product" href="#"><span class="fa fa-times"></span></a>
                                    </li>
                                    <li>
                      <span class="aa-cartbox-total-title">
                        Total
                      </span>
                                        <span class="aa-cartbox-total-price">
                        $500
                      </span>
                                    </li>
                                </ul>
                                <a class="aa-cartbox-checkout aa-primary-btn" href="checkout.html">Checkout</a>
                            </div>
                        </div>
                        <!-- / cart box -->
                        <!-- search box -->
                        <div class="aa-search-box">
                            <form action="">
                                <input type="text" name="" id="" placeholder="Tìm kiếm sản phẩm vd: 'iphone' ">
                                <button type="submit"><span class="fa fa-search"></span></button>
                            </form>
                        </div>
                        <!-- / search box -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- / header bottom  -->
</header>
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
                        <li><a href="#">Liên hệ <span class="caret"></span></a>
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

<!-- Client Brand -->
<section id="aa-client-brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-client-brand-area">
                    <ul class="aa-client-brand-slider">
                        <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
                        <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
                        <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
                        <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
                        <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
                        <li><a href="#"><img src="img/client-brand-joomla.png" alt="joomla img"></a></li>
                        <li><a href="#"><img src="img/client-brand-java.png" alt="java img"></a></li>
                        <li><a href="#"><img src="img/client-brand-jquery.png" alt="jquery img"></a></li>
                        <li><a href="#"><img src="img/client-brand-html5.png" alt="html5 img"></a></li>
                        <li><a href="#"><img src="img/client-brand-css3.png" alt="css3 img"></a></li>
                        <li><a href="#"><img src="img/client-brand-wordpress.png" alt="wordPress img"></a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Client Brand -->

<!-- Subscribe section -->
<section id="aa-subscribe">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="aa-subscribe-area">
                    <h3>Subscribe our newsletter </h3>
                    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ex, velit!</p>
                    <form action="" class="aa-subscribe-form">
                        <input type="email" name="" id="" placeholder="Enter your Email">
                        <input type="submit" value="Subscribe">
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Subscribe section -->

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
                                        <li><a href="#">Contact Us</a></li>
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
                <h4>Login or Register</h4>
                <form class="aa-login-form" action="">
                    <label for="">Username or Email address<span>*</span></label>
                    <input type="text" placeholder="Username or email">
                    <label for="">Password<span>*</span></label>
                    <input type="password" placeholder="Password">
                    <button class="aa-browse-btn" type="submit">Login</button>
                    <label for="rememberme" class="rememberme"><input type="checkbox" id="rememberme"> Remember me
                    </label>
                    <p class="aa-lost-password"><a href="#">Lost your password?</a></p>
                    <div class="aa-register-now">
                        Don't have an account?<a href="account.html">Register now!</a>
                    </div>
                </form>
            </div>
        </div><!-- /.modal-content -->
    </div><!-- /.modal-dialog -->
</div>


<!-- Include all compiled plugins (below), or include individual files as needed -->
<script src="dashboard/js/bootstrap.min.js"></script>
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
<!-- Custom js -->
<script src="dashboard/js/custom.js"></script>

</body>
</html>