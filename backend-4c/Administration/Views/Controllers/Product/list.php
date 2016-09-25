
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
                <th class="min-tablet">Tùy chỉnh</th>
                <th class="min-tablet">Ngày sản xuất</th>
                <th class="none">Trạng thái</th>
                <th class="none">Loại</th>
                <th class="none">Ảnh</th>
                <th class="none">Tên công ty</th>
                <th class="none">Danh mục</th>

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
                    <td> <?= $product->price ?> </td>
                    <td> <?= $product->sale ?> </td>
                    <td>
                        <?php if (isset($_SESSION['User']['role_level']) && $_SESSION['User']['role_level'] == 0) : ?>
                            <a href="admin/product/edit/<?= $product->id ?>" class="btn btn-outline btn-circle btn-sm purple">
                                <i class="fa fa-edit"></i> Sửa </a>
                            <a href="admin/product/delete/<?= $product->id ?>"
                               class="btn btn-outline btn-circle dark btn-sm black">
                                <i class="fa fa-trash-o"></i> Xóa </a>
                        <?php endif; ?>
                        <a href="admin/product/view/<?= $product->id ?>" class="btn btn-outline btn-circle btn-sm purple">
                            <i class="fa fa-edit"></i> Xem </a>
                    </td>
                    <td><?= date('d-m-Y', strtotime($product->manufactured_date)) ?></td>
                    <td><?= $product->active ?></td>
                    <td><?= $product->type ?></td>
                    <td><?= $product->iurl ?></td>
                    <td><?= $product->ccom_name ?></td>
                    <td><?= $product->cacat_name ?></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

