<div class="tab-pane fade active in" id="addnew">
    <?php if ($action) : ?>
        <p>Đang chuyển hướng...</p>
    <?php else: ?>
        <form class="form-horizontal" role="form" method="POST">

            <div class="form-group">
                <div class="col-md-12">
                    <p>Bạn chắc chắn muốn xóa đơn hàng này chứ ?</p>
                </div>
            </div>
            <div class="form-group">
                <div class="col-md-offset-2 col-md-10">
                    <button type="submit" class="btn btn-danger" name="submit" value="delete">Đồng ý</button>
                </div>
        </form>
    <?php endif; ?>
</div>