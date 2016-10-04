<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">Xem sản phẩm</span>
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
                        <td style="width:25%"> Tên sản phẩm</td>
                        <td>
                            <h4><b> <?= $product->title ?></b> </h4>
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
                        <td>
                            <p> Đang cập nhật... </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Thông tin chi tiết</td>
                        <td>
                            <p> Đang cập nhật... </p>
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