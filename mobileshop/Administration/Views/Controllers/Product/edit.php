<form class="form-horizontal form-row-seperated" method="post" id="submit_form_5" enctype="multipart/form-data">
    <div class="portlet">
        <div class="portlet-title">
            <div class="caption">
                <i class="fa fa-shopping-cart"></i>Sửa thông tin sản phẩm
            </div>
            <div class="actions btn-set">
                <a href="admin/product/list" type="button" name="back" class="btn btn-secondary-outline">
                    <i class="fa fa-angle-left"></i> Trở lại danh sách
                </a>
                <a href="admin/product/view/<?= $_GET['params'] ?>" type="button"
                   class="btn btn-warning">
                    <i class="fa fa-search"></i> Xem
                </a>
                <a class="btn btn-danger" href="admin/product/delete/<?= $_GET['params'] ?>">
                    <i class="fa fa-trash"></i> Xóa
                </a>
                <button class="btn btn-success">
                    <i class="fa fa-check"></i> Lưu lại
                </button>
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
                                <label class="control-label col-md-2">Đường dẫn
                                </label>
                                <div class="col-md-10">
                                    <input placeholder="Nhập đường dẫn" type="text"
                                           class="form-control" name="product[params]"
                                           value="<?= !empty($fproduct->params) ? $fproduct->params : '' ?>"/>
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
                        <?= $alertDetail ?>
                        <div class="form-body">
                            <div class="form-group">
                                <label class="col-md-2 control-label">Chiều dài(mm):
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[length]"
                                           value="<?= isset($detail->length) ? $detail->length : '' ?>"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Chiều rộng(mm):
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[width]"
                                           value="<?= isset($detail->width) ? $detail->width : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Chiều cao(mm):
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[height]"
                                           value="<?= isset($detail->height) ? $detail->height : '' ?>"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Trọng lượng:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[weight]"
                                           value="<?= isset($detail->weight) ? $detail->weight : '' ?>"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Kiểu màn hình:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[screen_type]"
                                           value="<?= isset($detail->screen_type) ? $detail->screen_type : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Kích thước màn hình:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[screen_size]"
                                           value="<?= isset($detail->screen_type) ? $detail->screen_type : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Độ phân giải:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[screen_resolution]"
                                           value="<?= isset($detail->screen_resolution) ? $detail->screen_resolution : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Các tính năng khác(màn hình):
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[screen_des]"
                                           value="<?= isset($detail->screen_des) ? $detail->screen_des : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Bộ nhớ trong:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[memory_int]"
                                           value="<?= isset($detail->memory_int) ? $detail->memory_int : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Bộ nhớ ngoài:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[memory_ext]"
                                           value="<?= isset($detail->memory_ext) ? $detail->memory_ext : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Loại thẻ nhớ hỗ trợ:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[memory_sup]"
                                           value="<?= isset($detail->memory_sup) ? $detail->memory_sup : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Mạng hỗ trợ(bandwidth):
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[bandwidth]"
                                           value="<?= isset($detail->bandwidth) ? $detail->bandwidth : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Kiểu GPS:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[gps_type]"
                                           value="<?= isset($detail->gps_type) ? $detail->gps_type : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Bluetooth:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[bluetooth]"
                                           value="<?= isset($detail->bluetooth) ? $detail->bluetooth : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Wifi:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[wifi]"
                                           value="<?= isset($detail->wifi) ? $detail->wifi : '' ?>"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Hồng ngoại:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[infrared]"
                                           value="<?= isset($detail->infrared) ? $detail->infrared : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">USB:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[usb]"
                                           value="<?= isset($detail->usb) ? $detail->usb : '' ?>"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Máy ảnh chính:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[main_camera]"
                                           value="<?= isset($detail->main_camera) ? $detail->main_camera : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Máy ảnh phụ:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[front_camera]"
                                           value="<?= isset($detail->front_camera) ? $detail->front_camera : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Sim hỗ trợ:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[sim_support]"
                                           value="<?= isset($detail->sim_support) ? $detail->sim_support : '' ?>">
                                </div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Hệ điều hành:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[os]"
                                           value="<?= isset($detail->os) ? $detail->os : '' ?>"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">CPU:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[cpu]"
                                           value="<?= isset($detail->cpu) ? $detail->cpu : '' ?>"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">RAM:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[ram]"
                                           value="<?= isset($detail->ram) ? $detail->ram : '' ?>"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Thông tin Pin:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[battery]"
                                           value="<?= isset($detail->battery) ? $detail->battery : '' ?>"></div>
                            </div>
                            <div class="form-group">
                                <label class="col-md-2 control-label">Phụ kiện đi kèm:
                                </label>
                                <div class="col-md-9">
                                    <input type="text" class="form-control" name="detail[accessory]"
                                           value="<?= isset($detail->accessory) ? $detail->accessory : '' ?>">
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-pane" id="tab_images">
                        <?= $uploadInfo ?>
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
                                                 alt="<?= $image->label ?>">
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
                                        <input type="checkbox" class="make-switch" data-size="small"
                                               data-on-color="danger" name="image[<?= $image->id ?>][delete]"
                                               data-on-text="Xóa" data-off-color="default" data-off-text="Xóa?"/>
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
                                                                <input type="file" name="imagesUpload"> </span>
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
                                        <input type="hidden" name="images[base_image]"
                                               value="0">
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