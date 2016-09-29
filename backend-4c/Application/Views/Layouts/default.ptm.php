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
    <!-- END Styles -->


</head>
<body>
<div class="row">
    <?php echo $alert ?>
    <!--BEGIN CONTENT-->
    <div class="col-md-12">
        <?php echo $viewContent; ?>
    </div>
    <!--END CONTENT-->
</div>

<div class="row">
    <?php echo $alert ?>
    <!--BEGIN CONTENT-->
    <div class="col-md-12">
        <?php echo $viewContent; ?>
    </div>
    <!--END CONTENT-->
</div>

<!-- BEGIN Javascript files -->
<!-- END Javascript files -->
</body>
</html>
