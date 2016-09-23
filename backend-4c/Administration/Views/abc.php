<!DOCTYPE html>
<html lang="vi">
<head>
    <meta charset="utf-8">
    <meta http-equiv="Content-type" content="text/html;charset=UTF-8"/>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title><?php echo $viewTitle . ' | ' . $viewSiteName ?></title>
    <base href="<?php echo HOST_ROOT; ?>"/>
    <!-- Styles -->
    <!--    GLOBAL CSS-->
    <!-- Bootstrap CSS -->
    <link href="http://fonts.googleapis.com/css?family=Open+Sans:400,300,600,700&subset=all" rel="stylesheet"
          type="text/css"/>
    <link href="dashboard/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font awesome CSS -->
    <link href="dashboard/css/font-awesome.min.css" rel="stylesheet">
    <!-- Custom Color CSS -->
    <link href="dashboard/css/less-style.css" rel="stylesheet">
    <link href="dashboard/css/simple-line-icons.min.css" rel="stylesheet" type="text/css"/>
    <!-- Custom CSS -->
    <link href="dashboard/css/uniform.default.css" rel="stylesheet" type="text/css"/>
    <link href="dashboard/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
    <!--    END GLOBAL-->
    <link href="dashboard/css/morris.css" rel="stylesheet" type="text/css"/>

    <!-- Custom CSS -->
    <link href="dashboard/css/style.css" rel="stylesheet">
    <!--    CUSTOM CSS-->
    <link href="dashboard/css/select2.min.css" rel="stylesheet" type="text/css"/>
    <link href="dashboard/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>
    <link href="dashboard/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
    <link href="dashboard/css/bootstrap-markdown.min.css" rel="stylesheet" type="text/css"/>

    <link href="dashboard/css/components-md.min.css" rel="stylesheet" id="style_components" type="text/css"/>

    <link href="dashboard/css/plugins-md.min.css" rel="stylesheet" type="text/css"/>
    <link href="dashboard/css/custom.min.css" rel="stylesheet" type="text/css"/>
    <link href="dashboard/css/login-4.min.css" rel="stylesheet" type="text/css"/>


        <link rel="shortcut icon" href="dashboard/img/favicon.ico" />
    <!--    END CUSTOM CSS-->
</head>
<body>
<div class="outer">
    <div class="sidebar">

        <div class="sidey">
            <div class="logo">
                <h1><a href="/admin"></i> Mương 14</a></h1>
                <a href="/"> Về trang chủ</a>
                <div class="menu-toggler sidebar-toggler"></div>
            </div>
            <!-- BEGIN RESPONSIVE MENU TOGGLER -->
            <a href="javascript:;" class="menu-toggler responsive-toggler" data-toggle="collapse"
               data-target=".navbar-collapse"> </a>
            <!-- END RESPONSIVE MENU TOGGLER -->
            <div class="sidebar-dropdown"><a href="#" class="br-red"><i class="fa fa-bars"></i></a></div>
            <div class="side-nav" style="">
                <div class="side-nav-block">
                    <h4>Menu</h4>
                    <ul class="list-unstyled">
                        <li><a href="/admin"><i class="fa fa-wrench"></i> Cài đặt</a></li>
                        <li><a href="/admin/article"><i class="fa fa-file"></i> Quản lý trang </a></li>
                        <li><a href="/admin/product"><i class="fa fa-file"></i> Sản phẩm</a></li>
                        <li><a href="/admin/user"><i class="fa fa-user"></i> Người dùng</a></li>
                        <li><a href="/admin/orser"><i class="fa fa-user"></i> Order</a></li>
                        <li><a href="/admin/event"><i class="fa fa-calendar"></i> Sự kiện</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
    <div class="mainbar">
        <div class="main-head">
            <div class="container">
                <div class="">
                    <div class="col-md-9 col-sm-4 col-xs-6">
                        <h2><i class="fa fa-desktop lblue"></i> Administration</h2>
                    </div>
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="head-user dropdown pull-right">
                            <a href="#" id="profile">

                                <i class="fa fa-user"></i>
                                <?php echo $_SESSION['User']['username']; ?> <span class="label label-danger">Admin</span>
                            </a>
                            <a href="/logout" class="btn btn-default">Đăng xuất <i class="fa fa-sign-in "></i></a>
                        </div>
                        <div class="clearfix"></div>
                    </div>
                </div>
            </div>

        </div>
        <?php echo $alert ?>
        <div class="main-content">
            <?php echo $viewContent; ?>
        </div>
        <!-- Mainbar ends -->

        <div class="clearfix"></div>
    </div>
</div>
<!-- Javascript files -->
<!--BEGIN CORE PLUGIN-->
<!-- jQuery -->

<script src="dashboard/js/jquery.min.js"></script>
<!-- Bootstrap JS -->
<script src="dashboard/js/bootstrap.min.js"></script>
<!-- Respond JS for IE8 -->
<script src="dashboard/js/respond.min.js"></script>
<!-- HTML5 Support for IE -->
<script src="dashboard/js/html5shiv.js"></script>
<!-- Custom JS -->

<script src="dashboard/js/js.cookie.min.js" type="text/javascript"></script>
<script src="dashboard/js/bootstrap-hover-dropdown.min.js" type="text/javascript"></script>
<script src="dashboard/js/jquery.slimscroll.min.js" type="text/javascript"></script>
<script src="dashboard/js/jquery.blockui.min.js" type="text/javascript"></script>
<script src="dashboard/js/jquery.uniform.min.js" type="text/javascript"></script>
<script src="dashboard/js/bootstrap-switch.min.js" type="text/javascript"></script>
<!--END CORE PLUGIN-->

<!--BEGIN CUSTOM-->
<script src="dashboard/js/select2.full.min.js" type="text/javascript"></script>
<script src="dashboard/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="dashboard/js/additional-methods.min.js" type="text/javascript"></script>
<!--<script src="dashboard/js/daterangepicker.min.js" type="text/javascript"></script>-->
<script src="dashboard/js/form-validation-md.min.js" type="text/javascript"></script>
<!--<script src="dashboard/js/wysihtml5-0.3.0.js" type="text/javascript"></script>-->
<script src="dashboard/js/ckeditor.js" type="text/javascript"></script>
<!--<script src="dashboard/js/markdown.js" type="text/javascript"></script>-->
<script src="dashboard/js/bootstrap-markdown.js" type="text/javascript"></script>

<script src="dashboard/js/morris.min.js" type="text/javascript"></script>


<!--<script src="dashboard/js/amcharts.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/serial.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/pie.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/radar.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/light.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/patterns.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/chalk.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/ammap.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/worldLow.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/amstock.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/fullcalendar.min.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.flot.min.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.flot.resize.min.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.flot.categories.min.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.easypiechart.min.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.sparkline.min.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.vmap.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.vmap.russia.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.vmap.world.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.vmap.europe.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.vmap.germany.js" type="text/javascript"></script>-->
<!--<script src="dashboard/js/jquery.vmap.usa.js" type="text/javascript"></script>-->

<!--END CUSTOM-->

<script src="dashboard/js/app.min.js" type="text/javascript"></script>
<!--<script src="dashboard/js/form-validation.min.js" type="text/javascript"></script>-->
<script src="dashboard/js/dashboard.min.js" type="text/javascript"></script>

<script src="dashboard/js/layout.min.js" type="text/javascript"></script>
<script src="dashboard/js/demo.min.js" type="text/javascript"></script>
<script src="dashboard/js/quick-sidebar.min.js" type="text/javascript"></script>
<script src="dashboard/js/login-4.min.js" type="text/javascript"></script>

<script src="dashboard/js/custom.js"></script>
</body>
</html>