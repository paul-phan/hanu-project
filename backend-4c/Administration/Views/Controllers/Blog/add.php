<div class="portlet light bordered">
    <div class="portlet-title">
        <div class="caption">
            <i class=" icon-layers font-red"></i>
            <span class="caption-subject font-red bold uppercase"> Thêm bài viết
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
                            <h3 class="block">Nhập thông tin bài viết:</h3>
                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Tên bài viết<span class="required"> * </span></label>
                                <div class="col-md-7">
                                    <input placeholder="Nhập tên bài viết..." type="text" class="form-control"
                                           name="title"
                                           value="<?= !empty($form['title']) ? $form['title'] : '' ?>"/>
                                </div>
                            </div>

                            <div class="form-group">
                                <label for="dropdown" class="control-label col-md-3">Nội dung<span class="required"> * </span></label>
                                <div class="col-md-7">
                                    <textarea class="form-control"
                                              name="description"
                                              value="<?= !empty($form['body']) ? $form['body'] : '' ?>"> </textarea>
                                </div>
                            </div>


                            <div class="form-action">
                                <div class="row">
                                    <div class="col-md-offset-3 col-md-9">
                                        <a href="admin/event/list" class="btn default button-previous">
                                            <i class="fa fa-angle-left"></i> Quay lại </a>
                                        </a>
                                        <button type="submit" class="btn green button-submit" id="bsubmit"> Thêm bài viết
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