<div class="aa-product-review-area">


</div>


<!DOCTYPE html>
<html>
<head>
    <title>Thêm phản hồi</title>
</head>

<body>
<div class="col-md-3"></div>
<div class="col-md-6">
    <h4>Thêm phản hồi cho sản phẩm <b><?= $_SESSION['product_name'] ?></b></h4> <br/>
    <form action="../../../Feedback/add" method="POST" class="aa-review-form">

        <div class="form-group">
            <label for="content">Phản hồi của bạn</label>
            <textarea class="form-control" rows="3" name="message" id="message"></textarea>
        </div>

        <div class="form-group">
            <label for="name">Tên</label>
            <input type="text" class="form-control" name="name" id="name" placeholder="Name">
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" class="form-control" name="email" id="email" placeholder="example@gmail.com">
        </div>

        <div class="form-group">
            <input type="hidden" class="form-control" name="product_id" value="<?php echo $_SESSION['product_id']; ?>" >
        </div>

        <input class="btn btn-danger btn-lg" type="submit" name="submit" value="GỬI" />
        <input class="btn btn-warning btn-lg" type="button" value="Quay lại" onclick="goBack()" />
        <script>
            function goBack() {
                window.history.back();
            }
        </script>

    </form>
</div>
<div class="col-md-3"></div>
</body>
</html>