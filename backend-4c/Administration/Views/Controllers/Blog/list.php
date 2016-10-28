<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="btn-group" style="padding-bottom: 10px">
    <a href="admin/blog/add/" class="btn blue"> Thêm bài viết
        <i class="fa fa-plus"></i>
    </a>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh sách bài viết
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
                <th class="all">Tên bài viết</th>
                <th class="min-phone-l">Params</th>
                <th class="min-tablet">Nội dung</th>
                <th class="min-tablet">Ngày tạo</th>
                <th class="min-tablet" style="width: 27%">Tùy chỉnh</th>

            </tr>
            </thead>
            <tbody>

            <?php foreach ($blogs as $blog) { ?>
                <tr>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"> <?= $blog->title ?> </a>
                    </td>
                    <td><?= $blog->params ?></td>
                    <td><?= $blog->body ?></td>
                    <td><?= $blog->created ?></td>
                    <td>
                        <a href="admin/blog/view/<?= $blog->id ?>" class="btn btn-outline btn-circle btn-sm blue">
                            <i class="fa fa-eye"></i> Xem </a>
                        <a href="admin/blog/edit/<?= $blog->id ?>"
                           class="btn btn-outline btn-circle btn-sm purple">
                            <i class="fa fa-edit"></i> Sửa </a>
                        <a href="admin/blog/delete/<?= $blog->id ?>"
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

