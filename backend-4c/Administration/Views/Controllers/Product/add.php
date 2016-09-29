<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-red"></i>
            <span class="caption-subject font-red bold uppercase"> Thêm sản phẩm
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
        <form role="form" class="form-horizontal" id="submit_form_4" method="POST" enctype="multipart/form-data">
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
                            <h3 class="block">Nhập thông tin sản phẩm:</h3>
                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Tên sản phẩm<span class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập tên sản phẩm..." type="text" class="form-control"
                                           name="title"
                                           value="<?= !empty($form['title']) ? $form['title'] : '' ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Hãng (công ty)<span class="required"> * </span></label>
                                <div class="col-md-7">
                                    <select class="form-control country_list" name="company_id">
                                        <option value=""></option>
                                        <?php foreach ($companies as $company): ?>
                                            <option
                                                value="<?php echo $company->id ?>" <?= (!empty($form['company_id'])) ? 'selected' : '' ?> ><?php echo $company->com_name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Số lượng<span class="required"> * </span>
                                </label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" name="count"
                                           value="<?= !empty($form['count']) ? $form['count'] : '1' ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Giá<span class="required"> * </span>
                                </label>
                                <div class="col-md-6">
                                    <input placeholder="Nhập giá (nghìn đồng)" type="number" class="form-control"
                                           name="price"
                                           value="<?= !empty($form['price']) ? $form['price'] : '' ?>"/>
                                </div>
                                <span class="help-block"> .000 VNĐ </span>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Giá Sale
                                </label>
                                <div class="col-md-6">
                                    <input placeholder="Nhập giá sale (0 nếu không sale)" type="number"
                                           class="form-control" name="sale"
                                           value="<?= !empty($form['sale']) ? $form['sale'] : '' ?>"/>
                                </div>
                                <span class="help-block"> .000 VNĐ </span>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Năm sản xuất
                                </label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" name="product_year"
                                           value="<?= !empty($form['product_year']) ? $form['product_year'] : '2016' ?>"/>
                                </div>
                            </div>
                            <div class="form-group form-md-checkboxes ">
                                <label class="col-md-3 control-label" for="form_control_1">Phân loại</label>
                                <div class="col-md-9">
                                    <div class="md-checkbox-inline">
                                        <?php foreach ($categories as $v) { ?>
                                            <div class="md-checkbox">
                                                <input
                                                    name="category[]" <?= (isset($form['category']) && in_array($v->id, $form['category'])) ? 'checked' : '' ?>
                                                    type="checkbox" value="<?= $v->id ?>" id="checkbox1_<?= $v->id ?>"
                                                    class="md-check">
                                                <label for="checkbox1_<?= $v->id ?>">
                                                    <span></span>
                                                    <span class="check"></span>
                                                    <span class="box"></span> <?= $v->cat_name ?> </label>
                                            </div>
                                        <?php } ?>
                                    </div>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Thông tin
                                </label>
                                <div class="col-md-7">
                                    <textarea rows="3" class="form-control"
                                              name="detail"><?= !empty($form['detail']) ? $form['detail'] : '' ?></textarea>
                                </div>
                            </div>
                            <div class="form-action">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="admin/product/list" class="btn default button-previous">
                                            <i class="fa fa-angle-left"></i> Quay lại </a>
                                        </a>
                                        <button type="submit" class="btn green button-submit" id="bsubmit"> Thêm sản
                                            phẩm
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