<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="btn-group" style="padding-bottom: 10px">
    <button class="btn blue"> Add New
        <i class="fa fa-plus"></i>
    </button>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh sách thành viên
        </div>
        <div class="tools"></div>
    </div>
    <div class="portlet-body">
        <table class="table table-striped table-bordered table-hover dt-responsive" id="sample_3"
               cellspacing="0" width="100%">
            <thead>
            <tr>
                <th class="all">Tên đăng nhập</th>
                <th class="min-phone-l">Ngày tham gia</th>
                <th class="min-tablet">Quyền</th>
                <th class="desktop">Option</th>
                <th class="none">Age</th>
                <th class="none">Start date</th>
                <th class="none">Salary</th>
                <th class="none">Extn.</th>
            </tr>
            </thead>
            <tbody>
            <?php foreach ($users as $user) { ?>
                <tr>
                    <td>
                        <div class="success"></div>
                        <a href="javascript:;"> <?= $user->username ?> </a>
                    </td>
                    <td> <?= $user->created ?> </td>
                    <td> <?= $user->id_role ?> </td>

                    <td style="width: 20%">
                        <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                            <i class="fa fa-edit"></i> Edit </a>
                        <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                            <i class="fa fa-trash-o"></i> Delete </a>
                    </td>
                    <td>Test</td>
                    <td>2016</td>
                    <td>999</td>
                    <td>aasdasd</td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

