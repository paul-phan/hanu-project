<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="btn-group" style="padding-bottom: 10px">
    <a href="admin/order/add/" class="btn blue"> Thêm đơn hàng
        <i class="fa fa-plus"></i>
    </a>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh sách đơn hàng
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
                <th class="desktop" style="width: 30%">Sản phẩm</th>
                <th class="min-phone-l" style="width: 15%">Người đặt</th>
                <th class="desktop">Tổng tiền</th>
                <th class="min-tablet">Cập nhật</th>
                <th class="all">Tùy chỉnh</th>
                <th class="none">Trạng thái</th>
                <th class="none">Thời gian đặt hàng</th>
                <th class="none">Số lượng</th>
                <th class="none">Đơn giá</th>
                <th class="none">Ghi chú</th>
                <th class="none">Địa chỉ</th>
                <th class="none">Số điện thoại</th>
                <th class="none">Email</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($orders as $order) { ?>
                <tr>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"> <?= $order->title ?> </a>
                    </td>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"><?= $order->full_name ?></a></td>
                    <td> <?= $order->total_price ?> </td>
                    <td> <?= $order->updated ?> </td>
                    <td>
                        <?php if (isset($_SESSION['User']['role_level']) && $_SESSION['User']['role_level'] < 2) : ?>
                            <a href="admin/order/edit/<?= $order->id ?>"
                               class="btn btn-outline btn-circle btn-sm purple">
                                <i class="fa fa-edit"></i> Sửa </a>
                            <a href="admin/order/delete/<?= $order->id ?>"
                               class="btn btn-outline btn-circle dark btn-sm black">
                                <i class="fa fa-trash-o"></i> Xóa </a>
                        <?php endif; ?>
                        <a href="admin/order/view/<?= $order->id ?>" class="btn btn-outline btn-circle btn-sm blue">
                            <i class="fa fa-eye"></i> Xem </a>
                    </td>
                    <td><?= ($order->status == 1) ? 'Active' : '' ?></td>
                    <td><?= $order->created ?></td>
                    <td><?= $order->item_count ?></td>
                    <td><?= $order->to_price ?></td>
                    <td><?= $order->description ?></td>
                    <td><?= $order->address . ' - ' . $order->city . ' - ' . $order->country ?></td>
                    <td><?= $order->phone ?></td>
                    <td><?= $order->email ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

