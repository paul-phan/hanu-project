<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="btn-group" style="padding-bottom: 10px">
    <a href="admin/product/add_company/" class="btn blue"> Thêm hãng
        <i class="fa fa-plus"></i>
    </a>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh sánh hãng
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
                <th class="all">Tên hãng</th>
                <th class="min-phone-l">Đường dẫn</th>
                <th class="desktop">Trạng thái</th>
                <th class="min-tablet">Thứ tự</th>
                <th class="min-tablet">Cập nhật</th>
                <th class="min-tablet" >Tùy chỉnh</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($companies as $company) { ?>
                <tr>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"> <?= $company->com_name ?> </a>
                    </td>
                    <td><?= $company->params ?></td>
                    <td> <?= (isset($company->active) && $company->active == 1) ? 'Kích hoạt' : 'Không kích hoạt' ?></td>
                    <td> <?= (isset($company->position) && $company->position != 0) ? $company->position : 'Chưa sắp xếp.' ?></td>
                    <td><?= $company->updated ?></td>
                    <td>
                        <a href="admin/product/edit_company/<?= $company->id ?>"
                           class="btn btn-outline btn-circle btn-sm purple">
                            <i class="fa fa-edit"></i> Sửa </a>
                        <a href="admin/product/delete_company/<?= $company->id ?>"
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

