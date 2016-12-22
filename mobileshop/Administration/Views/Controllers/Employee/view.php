<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">Xem nhân viên</span>
        </div>
        <div class="actions">
            <div class="btn-group btn-group-devided" data-toggle="buttons">
                <label class="btn btn-transparent dark btn-outline btn-circle btn-sm active">
                    <!--                    <input type="radio" name="options" class="toggle" id="option1">Hành động</label>-->
                    <label class="btn btn-transparent dark btn-outline btn-circle btn-sm">
                        <!--                    <input type="radio" name="options" class="toggle" id="option2">Cài đặt</label>-->
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <div class="col-md-12">
                <table id="user" class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <td style="width:25%"> Tên nhân viên</td>
                        <td>
                            <h4><b> <?= $employee->employee_name ?></b> </h4>
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày sinh</td>
                        <td>
                            <p> <?= $employee->dob ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>
                            <p> <?= $employee->address ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Số CMND/ Hộ chiếu</td>
                        <td>
                            <p> <?= $employee->authentication ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Giới tính</td>
                        <td>
                            <p> <?= ($employee->gender=='1') ? "Nam" : "Nữ" ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Số điện thoại</td>
                        <td>
                            <p> <?= $employee->phone ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Ảnh đại diện</td>
                        <td>
                            <img src="<?= $employee->image ?>" alt="<?= $employee->image ?>" width="150px" height="150px" />
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày bắt đầu vào làm</td>
                        <td>
                            <p> <?= $employee->created ?> </p>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>