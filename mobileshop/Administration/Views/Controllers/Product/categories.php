<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="btn-group" style="padding-bottom: 10px">
    <a href="admin/product/add_category/" class="btn blue"> Thêm danh mục
        <i class="fa fa-plus"></i>
    </a>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh mục phân loại sản phẩm
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
                <th class="all">Tên danh mục</th>
                <th class="min-phone-l">Đường dẫn</th>
                <th class="desktop">Trạng thái</th>
                <th class="min-tablet">Thứ tự</th>
                <th class="min-tablet">Cập nhật</th>
                <th class="min-tablet" >Tùy chỉnh</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($categories as $category) { ?>
                <tr>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"> <?= $category->cat_name ?> </a>
                    </td>
                    <td><?= $category->params ?></td>
                    <td> <?= (isset($category->active) && $category->active == 1) ? 'Kích hoạt' : 'Không kích hoạt' ?></td>
                    <td> <?= (isset($category->position) && $category->position != 0) ? $category->position : 'Chưa sắp xếp.' ?></td>
                    <td><?= $category->updated ?></td>
                    <td>
                        <a href="admin/product/edit_category/<?= $category->id ?>"
                           class="btn btn-outline btn-circle btn-sm purple">
                            <i class="fa fa-edit"></i> Sửa </a>
                        <a href="admin/product/delete_category/<?= $category->id ?>"
                           class="btn btn-outline btn-circle dark btn-sm black">
                            <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

