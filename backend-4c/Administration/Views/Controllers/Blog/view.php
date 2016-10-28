<div class="portlet light portlet-fit bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class="icon-settings font-dark"></i>
            <span class="caption-subject font-dark sbold uppercase">Xem bài viết</span>
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
                        <td style="width:25%"> Tên bài viết</td>
                        <td>
                            <h4><b> <?= $blog->title ?></b> </h4>
                        </td>
                    </tr>
                    <tr>
                        <td>Params</td>
                        <td>
                            <p> <?= $blog->params ?> </p>
                        </td>
                    </tr>
                    
                    <tr>
                        <td>Nội dung</td>
                        <td>
                            <p> <?= $blog->body ?> </p>
                        </td>
                    </tr>
                  
                    <tr>
                        <td> Cập nhật</td>
                        <td>
                            <p> <?= $blog->updated ?> </p>
                        </td>
                    </tr>

                    </tbody>
                </table>
            </div>
        </div>
    </div>
</div>