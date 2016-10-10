<!doctype html>
<html lang="vi">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title><?php echo $viewTitle . ' | ' . $viewSiteName ?></title>
    <base href="<?php echo HOST_ROOT; ?>"/>
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta content="width=device-width, initial-scale=1" name="viewport"/>
    <meta content="Anh Tiến Mobile" name="description"/>
    <meta content="Phan Thế Minh" name="author"/>
    <!-- BEGIN Styles -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <link href="dashboard/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css"/>
    <link href="dashboard/css/plugins-md.min.css" rel="stylesheet" type="text/css"/>
    <link href="dashboard/css/style.css" rel="stylesheet" type="text/css"/>
    <!-- END Styles -->


</head>
<body>
<div class="container">
    <div id="header">
        <div class="row">
            <div class="col-md-4">
                <a href="#"> <img src="front/img/logo.png" alt="logo"> </a>
            </div>
            <div class="col-md-4">
                <img src="front/img/icon_call.png">
                <p class="inline">Call Us: +84 123456789</p>
            </div>
            <div class="col-md-3" style="word-spacing:5px;padding-top:10px;">
                <img src="front/img/lock.png">
                <a href="" class="inline">LOGIN</a>
                <img src="front/img/divider.png">
                <img src="front/img/user.png">
                <a href="" class="inline">REGISTER</a>
            </div>
            <div class="col-md-1">
                <div class="pull-right">
                    <a href="#"><img src="front/img/shoppingcart.png"></a>
                </div>
            </div>
        </div>
    </div>
    <div class="navbar">
        <nav class="navbar navbar-default">
            <div class="container-fluid">
                <ul class="nav navbar-nav">
                    <li><a href="#"><img src="front/img/home.png"></a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">Service</a></li>
                    <li><a href="">Service</a></li>
                </ul>
                <form class="navbar-form navbar-right">
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Search">
                    </div>
                    <button type="submit" class="btn btn-default"><img src="front/img/search.png"></button>
                </form>
            </div>
        </nav>
    </div>

    <div id="sidebar">
        <div class="col-md-3">
            <div class="panel">
                <div class="panel-heading" style="font-size: 15pt;text-align: center;">Best Selling</div>
                <ul class="panel-body">
                    <li>
                        <a href=""><img src="front/img/ip1.png" style="width: 80px;height: 70px;float:left;">Apple
                            Iphone
                            10</a>
                        <p style="color:red;">$999 <a href=""><img src="front/img/icon_shopingcart.png"
                                                                   style="float:right;"></a>
                        </p>
                    </li>
                    <li class="divider"></li>
                    <li>
                        <a href=""><img src="front/img/ip1.png" style="width: 80px;height: 70px;float:left;">Apple
                            Iphone
                            10</a>
                        <p style="color:red;">$999 <a href=""> <img src="front/img/icon_shopingcart.png"
                                                                    style="float:right;"></a>
                        </p>
                    </li>
                    <li class="divider"></li>
                    <p style="float:right;"><a href="">View More >></a></p>
                </ul>
            </div>
            <div class="panel">
                <div class="panel-heading" style="font-size: 15pt;text-align: center;">Category</div>
                <ul class="panel-body">
                    <li><a href=""><img src="front/img/icon_redcircle.png"><span class="tab-space"></span>Apple</a></li>
                    <li class="divider"></li>
                    <li><a href=""><img src="front/img/icon_redcircle.png"><span class="tab-space"></span>Samsung</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href=""><img src="front/img/icon_redcircle.png"><span class="tab-space"></span>HTC</a></li>
                    <li class="divider"></li>
                    <li><a href=""><img src="front/img/icon_redcircle.png"><span class="tab-space"></span>Sony</a></li>
                    <li class="divider"></li>
                    <li><a href=""><img src="front/img/icon_redcircle.png"><span class="tab-space"></span>Nokia</a></li>
                    <li class="divider"></li>
                    <li><a href=""><img src="front/img/icon_redcircle.png"><span class="tab-space"></span>Xiaomi</a>
                    </li>
                    <li class="divider"></li>
                    <li><a href=""><img src="front/img/icon_redcircle.png"><span class="tab-space"></span>China,lol</a>
                    </li>
                    <li style="border:0"> &nbsp;</li>
                </ul>
            </div>
            <div class="well well-small alert alert-warning cntr">
                <h2>50% Discount</h2>
                <p>Every promotion event is here! </p>
                <p>...............................</p>
                <p style="float:right;"><a href="#">View More >> </a></p>
                <br>
            </div>
        </div>
    </div>
    <?php echo $alert ?>
    <!--BEGIN CONTENT-->
    <?php echo $viewContent; ?>
    <!--END CONTENT-->
    <div style="clear:both;"></div>
    <footer class="footer">
        <div class="row">
            <div class="col-md-2">
                <h4>Your Account</h4>
                <a href="#">YOUR ACCOUNT</a><br>
                <a href="#">PERSONAL INFORMATION</a><br>
                <a href="#">ADDRESSES</a><br>
                <a href="#">DISCOUNT</a><br>
                <a href="#">ORDER HISTORY</a><br>
            </div>
            <div class="col-md-2">
                <h4>Information</h4>
                <a href="contact.html">CONTACT</a><br>
                <a href="#">SITEMAP</a><br>
                <a href="#">LEGAL NOTICE</a><br>
                <a href="#">TERMS AND CONDITIONS</a><br>
                <a href="#">ABOUT US</a><br>
            </div>
            <div class="col-md-2">
                <h4>Our Offer</h4>
                <a href="#">NEW PRODUCTS</a> <br>
                <a href="#">TOP SELLERS</a><br>
                <a href="#">SPECIALS</a><br>
                <a href="#">MANUFACTURERS</a><br>
                <a href="#">SUPPLIERS</a> <br/>
            </div>
            <div class="col-md-6">
                <form class="mail">
                    <div class="form-group">
                        <h4>SIGN UP FOR NEWSLETTER: </h4><textarea class="form-control" rows="3"></textarea>
                    </div>
                    <button type="submit" style="float:right;"><img src="front/img/button_mail.png"></button>
                </form>
            </div>
        </div>
    </footer>
    <div class="copyright">
        <div class="container">
            <p class="pull-right">
                <a href="#"><img src="front/img/facebook.png"></a>
                <a href="#"><img src="front/img/tweeter.png"></a>
                <a href="#"><img src="front/img/flick.png"></a>
            </p>
            <span>Copyright &copy; 2016<br>4c-13 Company: KM 9 Nguyen Trai Sreet</span>
        </div>
    </div>
    <a href="#" class="gotop"><i class="icon-double-angle-up"></i></a>


</div>
<!-- BEGIN Javascript files -->
<script src="dashboard/js/jquery.min.js"></script>
<script src="dashboard/js/bootstrap.min.js"></script>
<!-- END Javascript files -->
</body>
</html>
