<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="btn-group" style="padding-bottom: 10px">
    <a href="admin/product/add/" class="btn blue"> Thêm sản phẩm
        <i class="fa fa-plus"></i>
    </a>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh sách sản phẩm
        </div>
        <div class="tools" style="position: absolute">
            <a href="javascript:;" class="collapse"> </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_3"
               cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="all">Tên sản phẩm</th>
                <th class="min-phone-l">Thông tin</th>
                <th class="desktop">Giá</th>
                <th class="min-tablet">Giá sale</th>
                <th class="min-tablet">Năm</th>
                <th class="min-tablet">Cập nhật</th>
                <th class="min-tablet">Tùy chỉnh</th>
                <th class="none">Lượng hàng </th>
                <th class="none">Ảnh</th>
                <th class="none">Tên công ty</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($products as $product) { ?>
                <tr>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"> <?= $product->title ?> </a>
                    </td>
                    <td><?= $product->detail ?></td>
                    <td> <?= number_format($product->price, 0, ",", ".") ?>.000 VNĐ</td>
                    <td> <?= number_format($product->sale, 0, ",", ".") ?>.000 VNĐ</td>
                    <td><?= $product->product_year ?></td>
                    <td><?= $product->updated ?></td>
                    <td>
                        <?php if (isset($_SESSION['User']['role_level']) && $_SESSION['User']['role_level'] == 0) : ?>
                            <a href="admin/product/edit/<?= $product->id ?>"
                               class="btn btn-outline btn-circle btn-sm purple">
                                <i class="fa fa-edit"></i> Sửa </a>
                            <a href="admin/product/delete/<?= $product->id ?>"
                               class="btn btn-outline btn-circle dark btn-sm black">
                                <i class="fa fa-trash-o"></i> Xóa </a>
                        <?php endif; ?>
                        <a href="admin/product/view/<?= $product->id ?>" class="btn btn-outline btn-circle btn-sm blue">
                            <i class="fa fa-eye"></i> Xem </a>
                    </td>
                    <td><?= $product->count ?></td>
                    <td><?= $product->iurl ?></td>
                    <td><?= $product->ccom_name ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

