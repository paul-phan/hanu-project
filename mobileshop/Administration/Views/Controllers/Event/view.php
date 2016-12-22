<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">Xem sự kiện</span>
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
                        <td style="width:25%"> Tên sự kiện</td>
                        <td>
                            <h4><b> <?= $event->title ?></b> </h4>
                        </td>
                    </tr>
                    <tr>
                        <td>Params</td>
                        <td>
                            <p> <?= $event->params ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Lịch</td>
                        <td>
                            <p> <?= $event->schedule ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Địa chỉ</td>
                        <td>
                            <p> <?= $event->address ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày bắt đầu</td>
                        <td>
                            <p> <?= $event->date_start ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Ngày kết thúc</td>
                        <td>
                            <p> <?= $event->date_end ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Thành phố</td>
                        <td>
                            <p> <?= $event->city ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Giá</td>
                        <td>
                            <p> <?= $event->price ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Số lượng</td>
                        <td>
                            <p> <?= $event->ticket ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Ảnh</td>
                        <td>
                            <img src="<?= $event->image ?>" alt="<?= $event->image ?>" width="300px" height="300px" />
                        </td>
                    </tr>
                    <tr>
                        <td>Miêu tả</td>
                        <td>
                            <p> <?= $event->description ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td>Mã zipcode</td>
                        <td>
                            <p> <?= $event->zipcode ?> </p>
                        </td>
                    </tr>
                    <tr>
                        <td> Cập nhật</td>
                        <td>
                            <p> <?= $event->updated ?> </p>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>