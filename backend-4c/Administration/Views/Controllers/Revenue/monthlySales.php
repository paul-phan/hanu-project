 <meta name="viewport" content="initial-scale=1.0; maximum-scale=1.0; width=device-width;">
    <style>
        @import url(http://fonts.googleapis.com/css?family=Roboto:400,500,700,300,100);

        body {
            background-color: #3e94ec;
            font-family: "Roboto", helvetica, arial, sans-serif;
            font-size: 16px;
            font-weight: 400;
            text-rendering: optimizeLegibility;
        }

        div.table-title {
            display: block;
            margin: auto;
            max-width: 600px;
            padding:5px;
            width: 100%;
        }

        .table-title h3 {
            color: #fafafa;
            font-size: 30px;
            font-weight: 400;
            font-style:normal;
            font-family: "Roboto", helvetica, arial, sans-serif;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
            text-transform:uppercase;
        }


        /*** Table Styles **/

        .table-fill {
            background: white;
            border-radius:3px;
            border-collapse: collapse;
            height: 320px;
            margin: auto;
            max-width: 600px;
            padding:5px;
            width: 100%;
            box-shadow: 0 5px 10px rgba(0, 0, 0, 0.1);
            animation: float 5s infinite;
        }

        th {
            color:#D5DDE5;;
            background:#1b1e24;
            border-bottom:4px solid #9ea7af;
            border-right: 1px solid #343a45;
            font-size:23px;
            font-weight: 100;
            padding:24px;
            text-align:left;
            text-shadow: 0 1px 1px rgba(0, 0, 0, 0.1);
            vertical-align:middle;
        }

        th:first-child {
            border-top-left-radius:3px;
        }

        th:last-child {
            border-top-right-radius:3px;
            border-right:none;
        }

        tr {
            border-top: 1px solid #C1C3D1;
            border-bottom-: 1px solid #C1C3D1;
            color:#666B85;
            font-size:16px;
            font-weight:normal;
            text-shadow: 0 1px 1px rgba(256, 256, 256, 0.1);
        }

        tr:hover td {
            background:#4E5066;
            color:#FFFFFF;
            border-top: 1px solid #22262e;
            border-bottom: 1px solid #22262e;
        }

        tr:first-child {
            border-top:none;
        }

        tr:last-child {
            border-bottom:none;
        }

        tr:nth-child(odd) td {
            background:#EBEBEB;
        }

        tr:nth-child(odd):hover td {
            background:#4E5066;
        }

        tr:last-child td:first-child {
            border-bottom-left-radius:3px;
        }

        tr:last-child td:last-child {
            border-bottom-right-radius:3px;
        }

        td {
            background:#FFFFFF;
            padding:20px;
            text-align:left;
            vertical-align:middle;
            font-weight:300;
            font-size:18px;
            text-shadow: -1px -1px 1px rgba(0, 0, 0, 0.1);
            border-right: 1px solid #C1C3D1;
        }

        td:last-child {
            border-right: 0px;
        }

        th.text-left {
            text-align: left;
        }

        th.text-center {
            text-align: center;
        }

        th.text-right {
            text-align: right;
        }

        td.text-left {
            text-align: left;
        }

        td.text-center {
            text-align: center;
        }

        td.text-right {
            text-align: right;
        }
    </style>
<body>
<table class="table-fill">
    <thead>
    <tr>
        <th class="text-left">Mặt hàng</th>
        <th class="text-left">Số lượng</th>
    </tr>
    </thead>
    <tbody class="table-hover">
    <?php
    var_dump($revenue);
    if(isset($revenue)):
    foreach ($revenue as $value):     ?>
    <tr>
        <td class="text-left"><?= $value->title ?></td>
        <td class="text-left"> <?= $value->SUM('order_product.item_count') ?></td>
    </tr>
    <?php endforeach; endif; ?>
    </tbody>

</table>

<form id="payment-form" method="GET"><div style="margin:0;padding:0;display:inline"></div>
    <!--1-12 BUTTON-->
    <div class='form-row'>
        <div class='col-xs-12 form-group required'>
            <label class='control-label'>Tháng</label>
            <select class="form-control" name="month">

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

</body>


