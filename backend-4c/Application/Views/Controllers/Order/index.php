<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>Cart Page</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html">Home</a></li>
                    <li class="active">Cart</li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="cart-view">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="cart-view-area">
                    <div class="cart-view-table">
                        <form action="/order/update_cart" method="post">
                            <div class="table-responsive">
                                <table class="table">
                                    <thead>
                                    <tr>
                                        <th></th>
                                        <th></th>
                                        <th>Product</th>
                                        <th>Price</th>
                                        <th>Quantity</th>
                                        <th>Total</th>
                                    </tr>
                                    </thead>
                                    <tbody>
                                    <?php foreach ($products as $product) { ?>
                                        <tr>
                                            <td><a class="remove" href="order/update_cart/<?= $product->id ?>">
                                                    <i class="fa fa-close"></i>
                                                </a></td>
                                            <td><a href="#"><img src="<?= UPLOAD_DIR . $product->iurl ?>" alt="img"></a>
                                            </td>
                                            <td><a class="aa-cart-title" href="#"><?= $product->title ?></a></td>
                                            <td><?= number_format(($product->sale > 0) ? $product->sale : $product->price, 0, ",", ".") ?>
                                                .000 VNĐ
                                            </td>
                                            <td><input name="<?= $product->id ?>" class="aa-cart-quantity" type="number"
                                                       value="<?= $product->quantity ?>"></td>
                                            <td><?= number_format((($product->sale > 0) ? $product->sale : $product->price) * $product->quantity, 0, ",", ".") ?>
                                                .000 VNĐ
                                            </td>
                                        </tr>
                                    <?php } ?>
                                    <tr>
                                        <td colspan="6" class="aa-cart-view-bottom">
                                            <div class="aa-cart-coupon">
                                                <input name="coupoun" class="aa-coupon-code" type="text" placeholder="Mã giảm giá">
                                                <input name="use_coupoun" class="aa-cart-view-btn" type="submit" value="Dùng mã giảm giá">
                                            </div>
                                            <input name="update_cart" class="aa-cart-view-btn" type="submit" value="Cập nhật giỏ hàng">
                                        </td>
                                    </tr>
                                    </tbody>
                                </table>
                            </div>
                        </form>
                        <!-- Cart Total view -->
                        <div class="cart-view-total">
                            <h4>Cart Totals</h4>
                            <table class="aa-totals-table">
                                <tbody>
                                <tr>
                                    <th>Subtotal</th>
                                    <td><?= number_format($total, 0, ",", ".") ?>.000 VNĐ</td>
                                </tr>
                                <tr>
                                    <th>Total</th>
                                    <td><?= number_format($total, 0, ",", ".") ?>.000 VNĐ</td>
                                </tr>
                                </tbody>
                            </table>
                            <a href="/gio-hang/checkout.html" class="aa-cart-view-btn">Thanh toán</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->