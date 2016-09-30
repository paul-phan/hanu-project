<form class="form-horizontal form-row-seperated" method="post" id="submit_form_5" enctype="multipart/form-data">
    <div class="portlet">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-shopping-cart"></i>Sửa thông tin sản phẩm
            </div>
            <div class="actions btn-set">
                <a href="admin/product/list" type="button" name="back" class="btn btn-secondary-outline">
                    <i class="fa fa-angle-left"></i> Trở lại
                </a>
                <button class="btn btn-secondary-outline">
                    <i class="fa fa-reply"></i> Xóa
                </button>
                <button class="btn btn-success">
                    <i class="fa fa-check"></i> Lưu lại
                </button>
                <button class="btn btn-success">
                    <i class="fa fa-check-circle"></i> Lưu & Tiếp tục sửa
                </button>
                <div class="btn-group">
                    <a class="btn btn-success dropdown-toggle" href="javascript:;" data-toggle="dropdown">
                        <i class="fa fa-share"></i> Thêm
                        <i class="fa fa-angle-down"></i>
                    </a>
                    <div class="dropdown-menu pull-right">
                        <li>
                            <a href="javascript:;"> Nhân bản </a>
                        </li>
                        <li>
                            <a href="javascript:;"> Xóa </a>
                        </li>
                        <li class="dropdown-divider"></li>
                        <li>
                            <a href="javascript:;"> In </a>
                        </li>
                    </div>
                </div>
            </div>
        </div>
        <div class="portlet-body">
            <div class="tabbable-bordered">
                <ul class="nav nav-tabs">
                    <li class="active">
                        <a href="#tab_general" data-toggle="tab"> Thông tin cơ bản </a>
                    </li>
                    <li>
                        <a href="#tab_meta" data-toggle="tab"> Chi tiết </a>
                    </li>
                    <li>
                        <a href="#tab_images" data-toggle="tab"> Hình ảnh </a>
                    </li>
                    <li>
                        <a href="#tab_reviews" data-toggle="tab"> Xem lại
                            <!--                            <span class="badge badge-success"> 3 </span>-->
                        </a>
                    </li>
                    <li>
                        <a href="#tab_history" data-toggle="tab"> Lịch sử </a>
                    </li>
                </ul>
                <div class="tab-content">
                    <div class="tab-pane active" id="tab_general">
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Tên sản phẩm:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="product[title]"
                                           value="<?= $fproduct->title ?>"></div>
                            </div>
                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-2">Hãng (công ty)
                                    <span class="required"> * </span></label>
                                <div class="col-md-10">
                                    <select class="form-control country_list" name="product[company_id]">
                                        <option value=""></option>
                                        <?php foreach ($fcompany as $company): ?>
                                            <option
                                                value="<?php echo $company->id ?>" <?= (($fproduct->company_id == $company->id) ? 'selected' : '') ?> ><?php echo $company->com_name ?></option>
                                        <?php endforeach; ?>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Số lượng
                                    <span class="required"> * </span></label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" name="product[count]"
                                           value="<?= !empty($fproduct->count) ? $fproduct->count : '1' ?>"/>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Giá<span class="required"> * </span>
                                </label>
                                <div class="col-md-9">
                                    <input placeholder="Nhập giá (nghìn đồng)" type="number" class="form-control"
                                           name="product[price]"
                                           value="<?= !empty($fproduct->price) ? $fproduct->price : '' ?>"/>
                                </div>
                                <span class="help-block"> .000 VNĐ </span>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Giá Sale
                                </label>
                                <div class="col-md-9">
                                    <input placeholder="Nhập giá sale (0 nếu không sale)" type="number"
                                           class="form-control" name="product[sale]"
                                           value="<?= !empty($fproduct->sale) ? $fproduct->sale : '' ?>"/>
                                </div>
                                <span class="help-block"> .000 VNĐ </span>
                            </div>
                            <div class="form-group">
                                <label class="control-label col-md-2">Năm sản xuất
                                </label>
                                <div class="col-md-10">
                                    <input type="number" class="form-control" name="product[product_year]"
                                           value="<?= !empty($fproduct->product_year) ? $fproduct->product_year : '2016' ?>"/>
                                </div>
                            </div>
                            <div class="form-group form-md-checkboxes ">
                                <label class="col-md-2 control-label" for="form_control_1">Phân loại</label>
                                <div class="col-md-10">
                                    <div class="md-checkbox-inline">
                                        <?php foreach ($fcategory as $v) { ?>
                                            <div class="md-checkbox">
                                                <input
                                                    name="category[]" <?php foreach ($fcollection as $v2) {
                                                    if ($v2->category_id == $v->id) {
                                                        echo 'checked';
                                                    }
                                                } ?>
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
                                <label class="control-label col-md-2">Trạng thái</label>
                                <div class="col-md-10">
                                    <input
                                        name="product[active]" <?= (isset($fproduct->active) && ($fproduct->active == 1)) ? 'checked' : '' ?>
                                        type="checkbox" class="make-switch"
                                        data-on-text="&nbsp;Kích hoạt&nbsp;&nbsp;"
                                        data-off-text="&nbsp;Không kích hoạt&nbsp;">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Thông tin:
                                </label>
                                <div class="col-md-10">
                                    <textarea class="form-control"
                                              name="product[detail]"><?= $fproduct->detail ?></textarea>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_meta">
                        <div class="alert alert-success margin-bottom-10">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa fa-warning fa-lg"></i> Chức năng này đang được cập nhật trong thời gian sớm
                            nhất! Vui lòng quay lại sau.
                        </div>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label">SKU:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control" name="detail[sku]" placeholder=""></div>
                            </div>

                            <div class="form-group">
                                <label class="col-md-2 control-label">Tax Class:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-10">
                                    <select class="table-group-action-input form-control input-medium"
                                            name="detail[tax_class]">
                                        <option value="">Select...</option>
                                        <option value="1">None</option>
                                        <option value="0">Taxable Goods</option>
                                        <option value="0">Shipping</option>
                                        <option value="0">USA</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Status:
                                    <span class="required"> * </span>
                                </label>
                                <div class="col-md-10">
                                    <select class="table-group-action-input form-control input-medium"
                                            name="detail[status]">
                                        <option value="">Select...</option>
                                        <option value="1">Published</option>
                                        <option value="0">Not Published</option>
                                    </select>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Meta Title:</label>
                                <div class="col-md-10">
                                    <input type="text" class="form-control maxlength-handler" name="detail[meta_title]"
                                           maxlength="100" placeholder="">
                                    <span class="help-block"> max 100 chars </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Meta Keywords:</label>
                                <div class="col-md-10">
                                    <textarea class="form-control maxlength-handler" rows="8"
                                              name="detail[meta_keywords]" maxlength="1000"></textarea>
                                    <span class="help-block"> max 1000 chars </span>
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Meta Description:</label>
                                <div class="col-md-10">
                                    <textarea class="form-control maxlength-handler" rows="8"
                                              name="detail[meta_description]" maxlength="255"></textarea>
                                    <span class="help-block"> max 255 chars </span>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_images">
                        <?= $uploadInfo ?>
                        <!--                        <div class="alert alert-success margin-bottom-10">-->
                        <!--                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>-->
                        <!--                            <i class="fa fa-warning fa-lg"></i> Chức năng upload qua API/Ajax đang được cập nhật trong-->
                        <!--                            thời gian sớm nhất! Vui lòng quay lại sau.-->
                        <!--                        </div>-->
                        <!--                        <div id="tab_images_uploader_container" class="text-align-reverse margin-bottom-10">-->
                        <!--                            <a id="tab_images_uploader_pickfiles" href="javascript:;" class="btn btn-success">-->
                        <!--                                <i class="fa fa-plus"></i> Select Files </a>-->
                        <!--                            <a id="tab_images_uploader_uploadfiles" href="javascript:;" class="btn btn-primary">-->
                        <!--                                <i class="fa fa-share"></i> Upload Files </a>-->
                        <!--                        </div>-->

                        <div class="row">
                            <div id="tab_images_uploader_filelist" class="col-md-6 col-sm-12"></div>
                        </div>
                        <table class="table table-bordered table-hover">
                            <thead>
                            <tr role="row" class="heading">
                                <th width="17%"> Hình ảnh</th>
                                <th> Nhãn</th>
                                <th width="15%"> Thứ tự</th>
                                <th width="10%" style="align-content: center"> Hình ảnh chính</th>
                                <th width="10%">Tùy chọn</th>
                            </tr>
                            </thead>
                            <tbody>
                            <?php foreach ($images as $image) { ?>
                                <tr>
                                    <td>
                                        <a href="<?= UPLOAD_DIR . $image->url ?>" class="fancybox-button"
                                           data-rel="fancybox-button">
                                            <img class="img-responsive"
                                                 src="<?= UPLOAD_DIR . $image->url ?>"
                                                 alt="">
                                        </a>
                                    </td>
                                    <td>
                                        <input type="text" class="form-control" name="image[<?= $image->id ?>][label]"
                                               value="<?= isset($image->label) ? $image->label : 'Chưa đặt tên :3' ?>">
                                    </td>
                                    <td>
                                        <input type="text" class="form-control"
                                               name="image[<?= $image->id ?>][position]"
                                               value="<?= isset($image->position) ? $image->position : 0 ?>"></td>
                                    <td>
                                        <label>
                                            <input type="radio" name="image[<?= $image->id ?>][base_image]"
                                                   value="1" <?= (isset($image->base_image) && $image->base_image == 1) ? 'checked' : '' ?>>
                                        </label>
                                    </td>
                                    <td>
                                        <a href="javascript:;" class="btn btn-default btn-sm">
                                            <i class="fa fa-times"></i> Remove </a>
                                    </td>
                                </tr>
                            <?php } ?>
                            <tr>
                                <td>
                                    <div class="form-group ">
                                        <div class="col-md-12">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail">
                                                    <img
                                                        src="<?= UPLOAD_DIR . 'avatar/updatelater.jpg' ?>"
                                                        alt="no-image"/></div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"
                                                ></div>
                                                <div>                   <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Thêm ảnh </span>
                                                                <span class="fileinput-exists"> Thay đổi </span>
                                                                <input type="file" name="images"> </span>
                                                    <a href="javascript:;" class="btn red fileinput-exists"
                                                       data-dismiss="fileinput"> Xóa </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="images[label]"
                                           value="Chưa đặt tên">
                                </td>
                                <td>
                                    <input type="text" class="form-control" name="images[position]"
                                           value="0"></td>
                                <td>
                                    <label>
                                        <input type="radio" name="images[base_image]"
                                               value="1">
                                    </label>
                                </td>
                                <td>

                                </td>
                            </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="tab-pane" id="tab_reviews">
                        <div class="alert alert-success margin-bottom-10">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa fa-warning fa-lg"></i> Chức năng này đang được cập nhật trong thời gian sớm
                            nhất! Vui lòng quay lại sau.
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_history">
                        <div class="alert alert-success margin-bottom-10">
                            <button type="button" class="close" data-dismiss="alert" aria-hidden="true"></button>
                            <i class="fa fa-warning fa-lg"></i> Chức năng này đang được cập nhật trong thời gian sớm
                            nhất! Vui lòng quay lại sau.
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</form>

<!--<script src="dashboard/js/ecommerce-products-edit.min.js" type="text/javascript"></script>-->