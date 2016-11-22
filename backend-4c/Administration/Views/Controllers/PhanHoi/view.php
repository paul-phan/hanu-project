<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">Xem nội dung</span>
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
                        <td style="width:25%"> ID</td>
                        <td>
                            <h4><b> <?= $phanHoi->id ?></b> </h4>
                        </td>
                    </tr>
                    <tr>
                        <td>Tên khách hàng</td>
                        <td>
                            <p> <?= $phanHoi->name ?> </p>
                        </td>
                    </tr>

                    <tr>
                        <td>Mã sản phẩm</td>
                        <td>
                            <p> <?= $phanHoi->product_id ?> </p>
                        </td>
                    </tr>

                    <tr>
                        <td>Nội dung</td>
                        <td>
                            <p> <?= $phanHoi->message ?> </p>
                        </td>
                    </tr>


                    <tr>
                        <td>Email</td>
                        <td>
                            <p> <?= $phanHoi->email ?> </p>
                        </td>
                    </tr>

                    <tr>
                        <td>Ngày</td>
                        <td>
                            <p> <?= $phanHoi->date ?> </p>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>