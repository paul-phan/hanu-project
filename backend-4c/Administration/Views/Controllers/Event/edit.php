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
                            <h3 class="block">Nhập thông tin sự kiện:</h3>
                            <div class="form-group">
                                <label class="control-label col-md-3">Tên sự kiện
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="title"
                                           value="<?= isset($form->title) ? $form->title : '' ?>"/>
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
                                <label for="dropdown" class="control-label col-md-3">Miêu tả<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <textarea class="form-control"
                                              name="description" cols="5"
                                    ><?= isset($form->description) ? $form->description : '' ?></textarea>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Mã zipcode<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập mã zipcode" type="text" class="form-control"
                                           name="zipcode"
                                           value="<?= isset($form->zipcode) ? $form->zipcode : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Thành phố
                                </label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="city"
                                           value="<?= isset($form->city) ? $form->city : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Lịch<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập lịch" type="datetime" class="form-control"
                                           name="schedule"
                                           value="<?= isset($form->schedule) ? $form->schedule : '' ?>"/>
                                </div>
                            </div>


                            <div class="form-group">
                                <label class="control-label col-md-3">Ngày bắt đầu</label><span
                                    class="required"> * </span>
                                <div class="col-md-4">
                                    <div class="input-group date form_datetime" data-date="2016-05-06T15:25:00Z">
                                        <input type="text" size="16" name="date_start"
                                               value="<?= isset($form->date_start) ? $form->date_start : '' ?>"
                                               class="form-control">
                                        <span class="input-group-btn">
                                                            <button class="btn default date-reset" type="button">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                            <button class="btn default date-set" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Ngày kết thúc</label><span
                                    class="required"> * </span>
                                <div class="col-md-4">
                                    <div class="input-group date form_datetime" data-date="2016-05-06T15:25:00Z">
                                        <input type="text" size="16" name="date_end"
                                               value="<?= isset($form->date_end) ? $form->date_end : '' ?>"
                                               class="form-control">
                                        <span class="input-group-btn">
                                                            <button class="btn default date-reset" type="button">
                                                                <i class="fa fa-times"></i>
                                                            </button>
                                                            <button class="btn default date-set" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                    </div>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Số lượng<span
                                        class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập số lượng" type="number" class="form-control"
                                           name="ticket" min="1"
                                           value="<?= isset($form->ticket) ? $form->ticket : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Giá<span class="required"> * </span>
                                </label>
                                <div class="col-md-6">
                                    <input placeholder="Nhập giá (nghìn đồng)" type="number" class="form-control"
                                           name="price"
                                           value="<?= isset($form->price) ? $form->price : 1 ?>"/>
                                </div>
                                <span class="help-block"> .000 VNĐ </span>
                            </div>

                            <div class="form-group ">
                                <label class="control-label col-md-3">Ảnh</label>
                                <div class="col-md-9">
                                    <div class="fileinput fileinput-new" data-provides="fileinput">
                                        <div class="fileinput-new thumbnail" style="width: 200px; height: 150px;">
                                            <img
                                                src="<?= !empty($form->image) ? UPLOAD_DIR . 'image/' . $form->image : UPLOAD_DIR . 'avatar/updatelater.jpg' ?>"
                                                alt=""/></div>
                                        <div class="fileinput-preview fileinput-exists thumbnail"
                                             style="max-width: 400px; max-height: 300px;"></div>
                                        <div>                   <span class="btn default btn-file">
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
                                        <a href="admin/event/list" class="btn default button-previous">
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