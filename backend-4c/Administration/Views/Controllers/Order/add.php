<div class="portlet light bordered" xmlns="http://www.w3.org/1999/html">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-red"></i>
            <span class="caption-subject font-red bold uppercase"> Thêm đơn đặt hàng
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
        <form role="form" class="form-horizontal" id="submit_form_3" method="POST" enctype="multipart/form-data">
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
                            <h3 class="block">Nhập thông tin đơn hàng:</h3>
                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Khách hàng</label>
                                <div class="col-md-7">
                                    <select class="form-control country_list" name="profile_id">
                                        <option value=""></option>
                                        <?php foreach ($profiles as $value): ?>
                                            <option
                                                value="<?php echo $value->id ?>" <?= (!empty($form['profile_id'])) ? 'selected' : '' ?> ><?php echo $value->full_name . ' - ' . $value->email ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Sản phẩm</label>
                                <div class="col-md-7">
                                    <select class="form-control country_list" name="product_id">
                                        <option value=""></option>
                                        <?php foreach ($products as $value): ?>
                                            <option
                                                value="<?php echo $value->id ?>" <?= (!empty($form['product_id'])) ? 'selected' : '' ?> ><?php echo $value->title . ' - ' . $value->price . (!empty($value->sale) ? ' - giảm giá: ' . $value->sale : '') . ' (nghìn VNĐ)' ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Số lượng
                                </label>
                                <div class="col-md-7">
                                    <input type="number" class="form-control" name="item_count"
                                           id="submit_form_password"
                                           value="<?= !empty($form['item_count']) ? $form['item_count'] : '' ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Phí ship
                                </label>
                                <div class="col-md-6">
                                    <input type="number" class="form-control" name="ship_price"/>
                                </div>
                                <span class="help-block"> nghìn VNĐ </span>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-3">Ghi chú
                                </label>
                                <div class="col-md-7">
                                    <textarea rows="3" class="form-control"
                                              name="description"><?= !empty($form['description']) ? $form['description'] : '' ?></textarea>
                                </div>
                            </div>
                            <div class="form-action">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="admin/order/list" class="btn default button-previous">
                                            <i class="fa fa-angle-left"></i> Quay lại </a>
                                        </a>
                                        <button type="submit" class="btn green button-submit" id="bsubmit"> Thêm đơn hàng
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