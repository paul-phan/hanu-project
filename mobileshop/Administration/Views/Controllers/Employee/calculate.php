<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
            <form id="payment-form" method="post"><div style="margin:0;padding:0;display:inline"></div>
                <!--GET ID of EMPLOYEE-->
                <input type="hidden" name="employee_id" value="<?= $employee->id ?>" />
                <div class='form-row'>
                    <div class='col-xs-12 form-group required'>
                        <h3>Nhân viên <b><?= $employee->employee_name ?></b></h3>

                        <blockquote>
                             <?= "Mã nhân viên: ".$employee->id ?> <br/>
                             <?= "Ngày sinh: ".$employee->dob ?> <br/>
                             <?= "Địa chỉ: ".$employee->address ?> <br/>
                        </blockquote>
                    </div>
                </div>

                <div class='form-row'>
                    <div class='col-xs-12 form-group required'>
                        <label class='control-label'>Năm</label>
                        <select class="form-control" name="year">
                            <?php for($i=2016; $i<=2100; $i++): ?>
                            <option value="<?= $i ?>"> <?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>

                <div class='form-row'>
                    <div class='col-xs-12 form-group required'>
                        <label class='control-label'>Tháng</label>
                        <select class="form-control" name="month">
                            <?php for($j=1; $j<=12; $j++): ?>
                                <option value="<?= $j ?>"> <?= "Tháng ".$j ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
                <div class='form-row'>
                    <div class='col-xs-12 form-group card required'>
                        <label class='control-label'>Số ngày công</label>
                        <input class='form-control' name="day" min="0" max="31" size='20' maxlength="2" type='number'>
                    </div>
                </div>

                <div class='form-row'>
                    <div class='col-md-12'>
                        <input class='form-control total btn btn-info' type="submit" value="Tính lương" />
                    </div>
                </div>

                <div class='form-row'>
                    <div class='col-md-12 error form-group hide'>
                        <div class='alert-danger alert'>
                            Please correct the errors and try again.
                        </div>
                    </div>
                </div>
            </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>