<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-red"></i>
            <span class="caption-subject font-red bold uppercase"> Chỉnh sửa thông tin
                                        </span>
        </div>
        <div class="actions">
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-cloud-upload"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-wrench"></i>
            </a>
            <a class="btn btn-circle btn-icon-only btn-default" href="javascript:;">
                <i class="icon-trash"></i>
            </a>
        </div>
    </div>

    <div class="portlet-body form">
        <form role="form" class="form-horizontal" id="submit_form_7" method="POST" enctype="multipart/form-data">
            <div class="form-wizard">
                <div class="form-body">
                    <div class="tab-content">
                        <div class="alert alert-danger display-none">
                            <button class="close" data-dismiss="alert"></button>
                            Bạn có một số lỗi, vui lòng kiểm tra lại!
                        </div>
                        <div class="alert alert-success display-none">
                            <button class="close" data-dismiss="alert"></button>
                            Thông tin hợp lệ!
                        </div>

                        <div class="tab-pane active" id="tab1">
                            <h3 class="block">Nhập thông tin nhân viên:</h3>
                            <div class="form-group">
                                <label class="control-label col-md-3">Tên nhân viên
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="employee_name"
                                           value="<?= isset($form->employee_name) ? $form->employee_name : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Ngày sinh<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập ngày sinh" type="date" class="form-control"
                                           name="dob"
                                           value="<?= isset($form->dob) ? $form->dob : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Địa chỉ
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="address"
                                           value="<?= isset($form->address) ? $form->address : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Số CMND/ Hộ chiếu<span class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập số CMT/Hộ chiếu.." type="number" maxlength="6" class="form-control"
                                           name="authentication"
                                           value="<?= isset($form->authentication) ? $form->authentication : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Giới tính</label>
                                <div class="col-md-7">
                                    <select class="form-control" name="gender">
                                        <option value="0">Nữ</option>
                                        <option value="1">Nam</option>
                                    </select>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Số điện thoại<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập số điện thoại" type="number" class="form-control"
                                           name="phone"
                                           value="<?= isset($form->phone) ? $form->phone : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Ảnh đại diện </label>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img
                                                src="<?= isset($form->image) ? UPLOAD_DIR . '/employee/' . $form->image : 'updatelater.jpg' ?>"
                                                alt=""/></div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                             style="max-width: 200px; max-height: 150px;"></div>
                                        <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Chon ảnh </span>
                                                                <span class="fileinput-exists"> Thay đổi </span>
                                                                <input type="file" name="image"> </span>
                                            <a href="javascript:;" class="btn red fileinput-exists"
                                               data-dismiss="fileinput"> Xóa </a>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="form-action">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="admin/employee/list" class="btn default button-previous">
                                            <i class="fa fa-angle-left"></i> Quay lại </a>
                                        </a>
                                        <button type="submit" class="btn green button-submit" id="bsubmit2"> Cập nhật
                                            <i class="fa fa-check"></i>
                                        </button>
                                    </div>
                                </div>
                            </div>

                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
</div>