<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
            <form id="payment-form" method="GET"><div style="margin:0;padding:0;display:inline"></div>

                <!--1-12 BUTTON-->
                <div class='form-row'>
                    <div class='col-xs-12 form-group required'>
                        <label class='control-label'>Tháng</label>
                        <select class="form-control" name="year">

                            <?php  $now = time();
                            $month = date('m', $now);
                            for($i=1; $i<=$month; $i++): ?>
                                <option value="<?= $i ?>"> <?= $i ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>

                <!--SUBMIT BUTTON-->
                <div class='form-row'>
                    <div class='col-md-12'>
                        <input class='form-control total btn btn-info' type="submit" value="Xem Doanh Thu" />
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