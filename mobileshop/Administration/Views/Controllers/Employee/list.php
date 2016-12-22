<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="btn-group" style="padding-bottom: 10px">
    <a href="admin/employee/add/" class="btn blue"> Thêm nhân viên
        <i class="fa fa-plus"></i>
    </a>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh sách nhân viên
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
                <th class="all">Tên nhân viên</th>
                <th class="min-phone-l">Ngày sinh</th>
                <th class="min-tablet">Địa chỉ</th>
                <th class="min-phone-l">Số CMND/ Hộ chiếu</th>
                <th class="min-tablet">Giới tính</th>
                <th class="min-phone-l">Số điện thoại</th>
                <th class="min-tablet"> Ảnh</th>
                <th class="min-tablet">Ngày bắt đầu vào làm</th>
                <th class="min-tablet" style="width: 27%">Tùy chỉnh</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($employees as $employee) { ?>
                <tr>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"> <?= $employee->employee_name ?> </a>
                    </td>
                    <td><?= $employee->dob ?></td>
                    <td><?= $employee->address ?></td>
                    <td><?= $employee->authentication ?></td>
                    <td><?= ($employee->gender=='1') ? "Nam" : "Nữ" ?></td>
                    <td><?= $employee->phone ?></td>
                    <td>
                        <img src="<?= $employee->image ?>" alt="<?= $employee->image ?>" width="150px" height="150px" />
                    </td>
                    <td><?= $employee->created ?></td>
                    <td>
                        <a href="admin/employee/view/<?= $employee->id ?>" class="btn btn-outline btn-circle btn-sm blue">
                            <i class="fa fa-eye"></i> Xem </a>
                        <a href="admin/employee/edit/<?= $employee->id ?>"
                           class="btn btn-outline btn-circle btn-sm purple">
                            <i class="fa fa-edit"></i> Sửa </a>
                        <a href="admin/employee/delete/<?= $employee->id ?>"
                           class="btn btn-outline btn-circle dark btn-sm black">
                            <i class="fa fa-trash-o"></i> Xóa </a>
                        <a href="admin/employee/calculate/<?= $employee->id ?>"
                           class="btn btn-outline btn-circle red btn-sm red">
                            <i class="fa fa-calculator"></i> Tính lương </a>
                    </td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

