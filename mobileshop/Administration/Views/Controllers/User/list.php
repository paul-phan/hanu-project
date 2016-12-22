<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="btn-group" style="padding-bottom: 10px">
    <a href="admin/user/add/" class="btn blue"> Thêm thành viên
        <i class="fa fa-plus"></i>
    </a>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh sách thành viên
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
                <th class="desktop">Tên đăng nhập</th>
                <th class="min-phone-l">Tên đầy đủ</th>
                <th class="desktop">Quyền</th>
                <th class="min-tablet">Ngày tham gia</th>
                <th class="all">Trạng thái</th>
                <th class="all">Tùy chỉnh</th>
                <th class="none">Thời gian đăng nhập</th>
                <th class="none">Email</th>
                <th class="none">Số điện thoại</th>
                <th class="none">Địa chỉ</th>
                <th class="none">Thành phố/Thị trấn</th>
                <th class="none">Quốc gia</th>
                <th class="none">Sinh nhật</th>
                <th class="none">Giới tính</th>

            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"> <?= $user->username ?> </a>
                    </td>
                    <td><?= $user->full_name ?></td>
                    <td> <?= $user->rname ?> </td>
                    <td> <?= $user->created ?> </td>
                    <td><?= ($user->active == 1) ? '<p style="color: green; font-weight: bolder;">Kích hoạt</p>' : '<p style="color: red; font-weight: bolder;">Không kích hoạt</p>' ?></td>
                    <td>
                        <?php if (isset($_SESSION['User']['role_level']) && $_SESSION['User']['role_level'] == 0) : ?>
                            <a href="admin/user/edit/<?= $user->id ?>" class="btn btn-outline btn-circle btn-sm purple">
                                <i class="fa fa-edit"></i> Sửa </a>
                            <a href="admin/user/delete/<?= $user->id ?>"
                               class="btn btn-outline btn-circle dark btn-sm black">
                                <i class="fa fa-trash-o"></i> Xóa </a>
                        <?php endif; ?>
                        <a href="admin/user/view/<?= $user->id ?>" class="btn btn-outline btn-circle btn-sm blue">
                            <i class="fa fa-eye"></i> Xem </a>
                    </td>

                    <td><?= $user->last_login ?></td>
                    <td><?= $user->email ?></td>
                    <td><?= $user->phone ?></td>
                    <td><?= $user->address ?></td>
                    <td><?= $user->city ?></td>
                    <td><?= $user->country ?></td>
                    <td><?= date('d-m-Y', strtotime($user->birthday)) ?></td>
                    <td><?= ($user->gender == 1) ? 'Nam' : 'Nữ' ?></td>

                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

