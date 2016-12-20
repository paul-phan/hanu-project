<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
            <table id="user" class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <td style="width:25%"> Doanh Thu Tháng <?php echo isset($_GET['month']) ? $_GET['month'] : '' ?></td>
                    <td>
                        <h4><b>
                                <?php
                                    if(isset($revenue)){
                                        foreach ($revenue[0] as $value){
                                            echo $value." VNĐ";
                                        }
                                    }else{
                                        echo "Không có số liệu, vui lòng chọn tháng để xem";
                                    }
                                ?>
                         </b> </h4>
                    </td>
                </tr>
                </tbody>
            </table>


                <div class="form-group">
                    <form method="get">
                    <label for="sel1">Xem doanh thu tháng</label>
                    <select class="form-control" name="month">
                        <?php for($i=1; $i<=12; $i++): ?>
                            <option value="<?= $i ?>">Tháng <?= $i ?></option>
                        <?php endfor; ?>
                    </select>
                <input class="btn btn-info" type="submit" name="submit"  value="XEM"/>
                    </form>
                </div>

        </div>
        <div class='col-md-4'></div>
    </div>
</div>