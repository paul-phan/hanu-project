<?php
/**
 * Created by PhpStorm.
 * User: Hoan
 * Date: 12/17/2016
 * Time: 9:53 PM
 */

namespace Administration\Controllers;
use Administration\Controllers\AdminController as MainController;

class Revenue extends MainController
{
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Tính doanh thu từng tháng
     */
    public function viewAction(){
        global $connection;
        $co = $connection->getCo();
        $revenueModel = new \Administration\Models\Revenue($co);
        if(isset($_GET['month'])){
            $month=$_GET['month'];
            $revenue=$revenueModel->revenue($month);
            if(!empty($revenue)) {
                header("Refresh:3; url=/admin/revenue/view", true, 303);
                $this->addDataView(array(
                    'viewTitle' => 'Doanh Thu Tháng ' + $month,
                    'viewSiteName' => 'Doanh Thu',
                    'revenue' => $revenue
                ));
            }
        }
    }

    /**
     * Tính số lượng các loại mặt hàng đã được bán trong các tháng trong năm
     */
    public function monthlySalesAction(){
        global $connection;
        $co = $connection->getCo();
        $revenueModel = new \Administration\Models\Revenue($co);
        if(isset($_GET['monthlySales'])){
            $month=$_GET['monthlySales'];
            $monthlySales=$revenueModel->monthlySales($month);
            if(!empty($monthlySales)) {
                //header("Refresh:3; url=/admin/revenue/view", true, 303);
                $this->addDataView(array(
                    'viewTitle' => 'Thống Kê Bán Hàng Tháng ' + $month,
                    'viewSiteName' => 'Thống Kê Bán Hàng',
                    'revenue' => $monthlySales
                ));
            }
        }
    }
}