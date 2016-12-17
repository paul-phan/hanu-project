<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Bảng lương nhân viên
        </div>
        <div class="tools" style="position: absolute">
            <a href="javascript:;" class="collapse"> </a>
        </div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_3"
               cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="all">Ngày cập nhật</th>
                <th class="all">Tên nhân viên</th>
                <th class="min-phone-l">Ảnh</th>
                <th class="min-tablet">Năm</th>
                <th class="min-tablet">Tháng</th>
                <th class="min-tablet">Số ngày công</th>
                <th class="min-tablet">Lương (VNĐ) (100.000/ngày)</th>
            </tr>
            </thead>
            <tbody>

            <?php foreach ($salary as $value): ?>
                <tr>
                    <td><?= $value->created ?></td>
                    <td><?= $value->employee_name ?></td>
                    <td><img src="<?= $value->image ?>" width="100px" height="100px" /></td>
                    <td><?= $value->year ?></td>
                    <td><?= $value->month ?></td>
                    <td><?= $value->day ?></td>
                    <td><?= $value->total_salary ?></td>
                </tr>
            <?php endforeach; ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

