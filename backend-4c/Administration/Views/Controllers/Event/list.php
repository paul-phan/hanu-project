<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="btn-group" style="padding-bottom: 10px">
    <a href="admin/event/add/" class="btn blue"> Thêm sự kiện
        <i class="fa fa-plus"></i>
    </a>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh sách sự kiện
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
                <th class="all">Tên sự kiện</th>
                <th class="min-phone-l">Params</th>
                <th class="none">Lịch</th>
                <th class="min-tablet">Địa chỉ</th>
                <th class="min-tablet">Ngày bắt đầu</th>
                <th class="min-tablet">Ngày kết thúc</th>
                <th class="min-tablet">Thành phố</th>
                <th class="min-tablet">Giá</th>
                <th class="min-tablet" style="width: 27%">Tùy chỉnh</th>
                <th class="none">Ticket</th>
                <th class="none">Ảnh</th>
                <th class="none">Miêu tả</th>
                <th class="none">Mã zipcode</th>

            </tr>
            </thead>
            <tbody>

            <?php foreach ($events as $event) { ?>
                <tr>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"> <?= $event->title ?> </a>
                    </td>
                    <td><?= $event->params ?></td>
                    <td><?= $event->schedule ?></td>
                    <td><?= $event->address ?></td>
                    <td><?= $event->date_start ?></td>
                    <td><?= $event->date_end ?></td>
                    <td><?= $event->city ?></td>
                    <td><?= $event->price ?></td>
                    <td>
                        <a href="admin/event/view/<?= $event->id ?>" class="btn btn-outline btn-circle btn-sm blue">
                            <i class="fa fa-eye"></i> Xem </a>
                        <a href="admin/event/edit/<?= $event->id ?>"
                           class="btn btn-outline btn-circle btn-sm purple">
                            <i class="fa fa-edit"></i> Sửa </a>
                        <a href="admin/event/delete/<?= $event->id ?>"
                           class="btn btn-outline btn-circle dark btn-sm black">
                            <i class="fa fa-trash-o"></i> Xóa </a>
                    </td>
                    <td><?= $event->ticket ?></td>
                    <td><img src="<?= $event->image ?>" alt="<?= $event->image ?>" width="300px" height="300px" /></td>
                    <td><?= $event->description ?></td>
                    <td><?= $event->zipcode ?></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

