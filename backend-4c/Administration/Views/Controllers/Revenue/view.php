<div class="container">
    <div class='row'>
        <div class='col-md-4'></div>
        <div class='col-md-4'>
            <script src='https://js.stripe.com/v2/' type='text/javascript'></script>
            <table id="user" class="table table-bordered table-striped">
                <tbody>
                <tr>
                    <td style="width:25%"> Doanh Thu Tháng</td>
                    <td>
                        <h4><b>
                                <?php
                                    if(isset($revenue)){
                                        var_dump($revenue);
                                    }else{
                                        echo "no value";
                                    }
                                ?></b> </h4>
                    </td>
                </tr>
                </tbody>
            </table>

            <form method="get">
                <input type="number" name="month"/>
                <input type="submit" name="submit"  value="SUBMIT"/>
            </form>
        </div>
        <div class='col-md-4'></div>
    </div>
</div>