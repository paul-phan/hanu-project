<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">Xem sản phẩm</span>
        </div>
        <div class="actions">
            <div class=" action btn-set">
                <a href="admin/product/list" type="button" name="back" class="btn btn-secondary-outline">
                    <i class="fa fa-angle-left"></i> Trở lại danh sách
                </a>
                <a class="btn btn-danger" href="admin/product/delete/<?= $_GET['params'] ?>">
                    <i class="fa fa-trash"></i> Xóa
                </a>
                <a class="btn btn-success" href="admin/product/edit/<?= $_GET['params'] ?>">
                    <i class="fa fa-edit"></i> Chỉnh sửa
                </a>
            </div>
        </div>
    </div>
    <div class="portlet-body">
        <div class="row">
            <div class="col-md-12">
                <table id="user" class="table table-bordered table-striped">
                    <tbody>
                    <tr>
                        <td style="width:25%"> Tên sản phẩm</td>
                        <td>
                            <h4><b> <?= $product->title ?></b></h4>
                        </td>
                    </tr>
                    <tr>
                        <td> Hãng</td>
                        <td>
                            <p> <?= $product->cname ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Giá</td>
                        <td>
                            <p> <?= $product->price ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Giá sale</td>
                        <td>
                            <p> <?= $product->sale ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Số lượng còn lại</td>
                        <td>
                            <p> <?= $product->count ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Năm sản xuất</td>
                        <td>
                            <p> <?= $product->product_year ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Trạng thái</td>
                        <td>
                            <?= ($product->active == 1) ? '<p style="color: green">Được bán</p>' : '<p style="color: darkred">Ngưng bán</p>' ?>
                        </td>
                    </tr>
                    <tr>
                        <td> Phân mục</td>
                        <td>
                            <p> <?php foreach ($category as $v) {
                                    echo $v->cat_name . ', ';
                                } ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Thông tin</td>
                        <td>
                            <p> <?= substr($product->detail, 0, 30) ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Tags</td>
                        <td>
                            <p> <?= $product->tags ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Hình ảnh</td>
                        <td> <?php foreach ($images as $i) : ?>
                                <img src="<?= UPLOAD_DIR.$i->url ?>" alt="<?= $i->label ?>" width="50px"/> &nbsp;&nbsp;&nbsp;
                            <?php endforeach; ?>
                        </td>
                    </tr>
                    <tr>
                        <td> Chiều dài(mm)</td>
                        <td>
                            <p><?= $product->length ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Chiều rộng(mm)</td>
                        <td>
                            <p><?= $product->width ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Chiều cao(mm)</td>
                        <td>
                            <p><?= $product->height ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Kiểu màn hình</td>
                        <td>
                            <p><?= $product->screen_type ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Kích thước màn hình</td>
                        <td>
                            <p><?= $product->screen_size ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Độ phân giải màn hình</td>
                        <td>
                            <p><?= $product->screen_resolution ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Các tính năng khác(màn hình)</td>
                        <td>
                            <p><?= $product->screen_des ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Bộ nhớ trong</td>
                        <td>
                            <p><?= $product->memory_int ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Bộ nhớ ngoài</td>
                        <td>
                            <p><?= $product->memory_ext ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Loại thẻ nhớ hỗ trợ</td>
                        <td>
                            <p><?= $product->memory_sup ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Mạng hỗ trợ</td>
                        <td>
                            <p><?= $product->bandwidth ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Loại GPS</td>
                        <td>
                            <p><?= $product->gps_type ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Bluetooth</td>
                        <td>
                            <p><?= $product->bluetooth ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Wifi</td>
                        <td>
                            <p><?= $product->wifi ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Hồng ngoại</td>
                        <td>
                            <p><?= $product->infrared ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>USB</td>
                        <td>
                            <p><?= $product->usb ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Máy ảnh chính</td>
                        <td>
                            <p><?= $product->main_camera ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Máy ảnh phụ</td>
                        <td>
                            <p><?= $product->front_camera ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Sim hỗ trợ</td>
                        <td>
                            <p><?= $product->sim_support ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Hệ điều hành</td>
                        <td>
                            <p><?= $product->os ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Vi xử lý</td>
                        <td>
                            <p><?= $product->cpu ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> RAM</td>
                        <td>
                            <p><?= $product->ram ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Pin</td>
                        <td>
                            <p><?= $product->battery ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td>Phụ kiện</td>
                        <td>
                            <p><?= $product->accessory ?></p>
                        </td>
                    </tr>
                    <tr>
                        <td> Đường dẫn</td>
                        <td>
                            <p> <?= $product->params ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Cập nhật</td>
                        <td>
                            <p> <?= $product->updated ?> </p>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>