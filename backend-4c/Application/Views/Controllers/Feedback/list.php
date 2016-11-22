<!DOCTYPE html>
<html>
<head>
    <title>Phản hồi</title>
</head>

<body>
<div class="col-md-12">
    <?php
    if(empty($_SESSION['product_name'])){
        header('Location: ../../index');
    }
    ?>
    <h4>Phản hồi cho sản phẩm <b><?= $_SESSION['product_name']; ?></b></h4>
    <table class="table table-hover">
        <tr>
            <th>Tên khách hàng</th>
            <th>Phản hồi của khách hàng</th>
            <th>Email</th>
            <th>Mã sản phẩm</th>
            <th>Reply</th>
            <th>Thời gian</th>
        </tr>

        <?php
            if(isset($feedbacks)):
                foreach($feedbacks as $value): ?>
                    <tr>
                        <td><?php echo $value->name; ?></td>
                        <td><?php echo $value->message;?></td>
                        <td><?php echo $value->email;  ?></td>
                        <td><?php echo $value->product_id;?></td>
                        <td><?php echo $value->content;?></td>
                        <td><?php echo $value->date; ?></td>
                    </tr>
        <?php
                endforeach;
            endif;
        ?>


    </table>
</div>

</body>
</html>