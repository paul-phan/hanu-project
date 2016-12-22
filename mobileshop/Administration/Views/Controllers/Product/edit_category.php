<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-red"></i>
            <span class="caption-subject font-red bold uppercase"> Sửa danh mục
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
        <form role="form" class="form-horizontal" id="submit_form_6" method="POST">
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
                            <h3 class="block">Nhập thông tin danh mục:</h3>
                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Tên danh mục</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="cat_name"
                                           value="<?= !empty($form->cat_name) ? $form->cat_name : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label class="control-label col-md-3">Vị trí
                                </label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" name="position"
                                           value="<?= !empty($form->position) ? $form->position : '' ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Đường dẫn</label>
                                <div class="col-md-7">
                                    <input type="text" class="form-control" name="params"
                                           value="<?= !empty($form->params) ? $form->params : '' ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Trạng thái</label>
                                <div class="col-md-7">
                                    <input
                                        name="active" <?= (isset($form->active) && ($form->active == 1)) ? 'checked' : '' ?>
                                        type="checkbox" class="make-switch"
                                        data-on-text="&nbsp;Kích hoạt&nbsp;&nbsp;"
                                        data-off-text="&nbsp;Không kích hoạt&nbsp;">
                                </div>
                            </div>
                            <div class="form-action">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="admin/product/categories" class="btn default button-previous">
                                            <i class="fa fa-angle-left"></i> Quay lại </a>
                                        </a>
                                        <button type="submit" class="btn green button-submit" id="bsubmit"> Sửa danh mục
                                            hàng
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