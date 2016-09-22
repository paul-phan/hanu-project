<!-- BEGIN EXAMPLE TABLE PORTLET-->
<div class="btn-group" style="padding-bottom: 10px">
    <a href="admin/user/add/" class="btn blue"> Add New
        <i class="fa fa-plus"></i>
    </a>
</div>
<div class="portlet box green">
    <div class="portlet-title">
        <div class="caption">
            <i class="fa fa-globe"></i>Danh sách thành viên
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
                <th class="all">Tên đăng nhập</th>
                <th class="min-phone-l">Ngày tham gia</th>
                <th class="min-tablet">Quyền</th>
                <th class="desktop">Option</th>

                <th class="none">Fullname:</th>
                <th class="none">Activation</th>
                <th class="none">Last login</th>
                <th class="none">Email</th>
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
                    <td> <?= $user->rname ?> </td>

                    <td style="width: 20%">
                        <a href="javascript:;" class="btn btn-outline btn-circle btn-sm purple">
                            <i class="fa fa-edit"></i> Edit </a>
                        <a href="javascript:;" class="btn btn-outline btn-circle dark btn-sm black">
                            <i class="fa fa-trash-o"></i> Delete </a>
                    </td>
                    <td><?= $user->full_name ?></td>
                    <td><?= $user->active ?></td>
                    <td><?= $user->last_login ?></td>

                    <td><?= $user->email ?></td>
                </tr>
            <?php } ?>
            </tbody>
        </table>
    </div>
</div>
<!-- END EXAMPLE TABLE PORTLET-->

