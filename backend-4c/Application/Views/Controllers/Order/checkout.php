<!-- catg header banner section -->
<section id="aa-catg-head-banner">
    <img src="img/fashion/fashion-header-bg-8.jpg" alt="fashion img">
    <div class="aa-catg-head-banner-area">
        <div class="container">
            <div class="aa-catg-head-banner-content">
                <h2>Checkout Page</h2>
                <ol class="breadcrumb">
                    <li><a href="index.html"><?= $viewTitle ?></a></li>
                    <li class="active"><?= $viewSiteName ?></li>
                </ol>
            </div>
        </div>
    </div>
</section>
<!-- / catg header banner section -->

<!-- Cart view section -->
<section id="checkout">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="checkout-area">

                    <div class="row">
                        <div class="col-md-8">
                            <div class="checkout-left">
                                <div class="panel-group" id="accordion">
                                    <!-- Coupon section -->
                                    <?php if (!isset($_SESSION['coupon'])): ?>
                                        <div class="panel panel-default aa-checkout-coupon">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseOne">
                                                        Bạn có mã giảm giá?
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseOne"
                                                 class="panel-collapse collapse ">
                                                <div class="panel-body">

                                                    <input type="text" placeholder="Nhập mã giảm giá.." class="aa-coupon-code">
                                                    <input type="submit" value="Áp dụng mã giảm giá" class="aa-browse-btn">
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <!-- Login section -->
                                    <?php if (!isset($_SESSION['User'])): ?>
                                        <div class="panel panel-default aa-checkout-login">
                                            <div class="panel-heading">
                                                <h4 class="panel-title">
                                                    <a data-toggle="collapse" data-parent="#accordion"
                                                       href="#collapseTwo">
                                                        Khách hàng đăng nhập
                                                    </a>
                                                </h4>
                                            </div>
                                            <div id="collapseTwo"
                                                 class="panel-collapse collapse in">
                                                <div class="panel-body">
                                                    <p>Vui lòng đăng nhập.</p>
                                                    <form action="auth/login" method="post">
                                                        <input name="login" type="text" placeholder="Tên đăng nhập">
                                                        <input name="password" type="password" placeholder="Mật khẩu">
                                                        <button type="submit" class="aa-browse-btn">Đăng nhập</button>
                                                        <label for="rememberme"><input type="checkbox" id="rememberme">
                                                            Ghi nhớ </label>
                                                        <p class="aa-lost-password"><a href="#">Quên mật khẩu?</a></p>
                                                        <div class="aa-register-now">
                                                            Không có tài khoản? &nbsp; <a href="auth/register"> Đăng
                                                                ký!</a>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    <?php endif; ?>
                                    <!-- Billing Details -->
                                    <div class="panel panel-default aa-checkout-billaddress">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion"
                                                   href="#collapseThree">
                                                    Thông tin đơn hàng
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseThree" class="panel-collapse collapse">
                                            <div class="panel-body">
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
                                                                        <td><a class="remove"
                                                                               href="order/update_cart/<?= $product->id ?>">
                                                                                <i class="fa fa-close"></i>
                                                                            </a></td>
                                                                        <td><a href="#"><img width="50"
                                                                                             src="<?= UPLOAD_DIR . $product->iurl ?>"
                                                                                             alt="img"></a>
                                                                        </td>
                                                                        <td><a class="aa-cart-title"
                                                                               href="#"><?= $product->title ?></a></td>
                                                                        <td><?= number_format(($product->sale > 0) ? $product->sale : $product->price, 0, ",", ".") ?>
                                                                            .000 VNĐ
                                                                        </td>
                                                                        <td><input name="<?= $product->id ?>"
                                                                                   class="aa-cart-quantity"
                                                                                   type="number"
                                                                                   value="<?= $product->quantity ?>">
                                                                        </td>
                                                                        <td><?= number_format((($product->sale > 0) ? $product->sale : $product->price) * $product->quantity, 0, ",", ".") ?>
                                                                            .000 VNĐ
                                                                        </td>
                                                                    </tr>
                                                                <?php } ?>
                                                                <tr>
                                                                    <td colspan="6" class="aa-cart-view-bottom">

                                                                        <input name="update_cart"
                                                                               class="aa-cart-view-btn" type="submit"
                                                                               value="Cập nhật giỏ hàng">
                                                                    </td>
                                                                </tr>
                                                                </tbody>
                                                            </table>
                                                        </div>
                                                    </form>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Shipping Address -->
                                    <div class="panel panel-default aa-checkout-billaddress">
                                        <div class="panel-heading">
                                            <h4 class="panel-title">
                                                <a data-toggle="collapse" data-parent="#accordion"
                                                   href="#collapseFour">
                                                    Địa chỉ giao hàng
                                                </a>
                                            </h4>
                                        </div>
                                        <div id="collapseFour"
                                             class="panel-collapse collapse <?= isset($_SESSION['User']) ? 'in' : '' ?>">
                                            <div class="panel-body">
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="aa-checkout-single-bill">
                                                            <input
                                                                value="<?= (!empty($profile->full_name)) ? $profile->full_name : '' ?>"
                                                                name="profile[full_name]"
                                                                type="text" placeholder="Họ và Tên*">
                                                        </div>
                                                    </div>

                                                </div>

                                                <div class="row">
                                                    <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input
                                                                value="<?= (!empty($profile->email)) ? $profile->email : '' ?>"
                                                                name="profile[email]" type="email" placeholder="Email*">
                                                        </div>
                                                    </div>
                                                    <div class="col-md-6">
                                                        <div class="aa-checkout-single-bill">
                                                            <input
                                                                value="<?= (!empty($profile->phone)) ? $profile->phone : '' ?>"
                                                                type="tel" name="profile[phone]"
                                                                placeholder="Số điện thoại*">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="aa-checkout-single-bill">
                                                            <textarea name="profile[address]" cols="8"
                                                                      rows="3"><?= (!empty($profile->address)) ? $profile->address : 'Địa chỉ*' ?></textarea>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col-md-12">
                                                        <div class="aa-checkout-single-bill">
                                                            <select name="profile[country]"
                                                                    class="form-control country_list">
                                                                <option
                                                                    value="<?= (!empty($profile->country)) ? $profile->country : '' ?>"><?= (!empty($profile->country)) ? $profile->country : '' ?></option>
                                                                <option value="AF">Afghanistan</option>
                                                                <option value="AL">Albania</option>
                                                                <option value="DZ">Algeria</option>
                                                                <option value="AS">American Samoa</option>
                                                                <option value="AD">Andorra</option>
                                                                <option value="AO">Angola</option>
                                                                <option value="AI">Anguilla</option>
                                                                <option value="AR">Argentina</option>
                                                                <option value="AM">Armenia</option>
                                                                <option value="AW">Aruba</option>
                                                                <option value="AU">Australia</option>
                                                                <option value="AT">Austria</option>
                                                                <option value="AZ">Azerbaijan</option>
                                                                <option value="BS">Bahamas</option>
                                                                <option value="BH">Bahrain</option>
                                                                <option value="BD">Bangladesh</option>
                                                                <option value="BB">Barbados</option>
                                                                <option value="BY">Belarus</option>
                                                                <option value="BE">Belgium</option>
                                                                <option value="BZ">Belize</option>
                                                                <option value="BJ">Benin</option>
                                                                <option value="BM">Bermuda</option>
                                                                <option value="BT">Bhutan</option>
                                                                <option value="BO">Bolivia</option>
                                                                <option value="BA">Bosnia and Herzegowina</option>
                                                                <option value="BW">Botswana</option>
                                                                <option value="BV">Bouvet Island</option>
                                                                <option value="BR">Brazil</option>
                                                                <option value="IO">British Indian Ocean Territory
                                                                </option>
                                                                <option value="BN">Brunei Darussalam</option>
                                                                <option value="BG">Bulgaria</option>
                                                                <option value="BF">Burkina Faso</option>
                                                                <option value="BI">Burundi</option>
                                                                <option value="KH">Cambodia</option>
                                                                <option value="CM">Cameroon</option>
                                                                <option value="CA">Canada</option>
                                                                <option value="CV">Cape Verde</option>
                                                                <option value="KY">Cayman Islands</option>
                                                                <option value="CF">Central African Republic</option>
                                                                <option value="TD">Chad</option>
                                                                <option value="CL">Chile</option>
                                                                <option value="CN">China</option>
                                                                <option value="CX">Christmas Island</option>
                                                                <option value="CC">Cocos (Keeling) Islands</option>
                                                                <option value="CO">Colombia</option>
                                                                <option value="KM">Comoros</option>
                                                                <option value="CG">Congo</option>
                                                                <option value="CD">Congo, the Democratic Republic of the
                                                                </option>
                                                                <option value="CK">Cook Islands</option>
                                                                <option value="CR">Costa Rica</option>
                                                                <option value="CI">Cote d'Ivoire</option>
                                                                <option value="HR">Croatia (Hrvatska)</option>
                                                                <option value="CU">Cuba</option>
                                                                <option value="CY">Cyprus</option>
                                                                <option value="CZ">Czech Republic</option>
                                                                <option value="DK">Denmark</option>
                                                                <option value="DJ">Djibouti</option>
                                                                <option value="DM">Dominica</option>
                                                                <option value="DO">Dominican Republic</option>
                                                                <option value="EC">Ecuador</option>
                                                                <option value="EG">Egypt</option>
                                                                <option value="SV">El Salvador</option>
                                                                <option value="GQ">Equatorial Guinea</option>
                                                                <option value="ER">Eritrea</option>
                                                                <option value="EE">Estonia</option>
                                                                <option value="ET">Ethiopia</option>
                                                                <option value="FK">Falkland Islands (Malvinas)</option>
                                                                <option value="FO">Faroe Islands</option>
                                                                <option value="FJ">Fiji</option>
                                                                <option value="FI">Finland</option>
                                                                <option value="FR">France</option>
                                                                <option value="GF">French Guiana</option>
                                                                <option value="PF">French Polynesia</option>
                                                                <option value="TF">French Southern Territories</option>
                                                                <option value="GA">Gabon</option>
                                                                <option value="GM">Gambia</option>
                                                                <option value="GE">Georgia</option>
                                                                <option value="DE">Germany</option>
                                                                <option value="GH">Ghana</option>
                                                                <option value="GI">Gibraltar</option>
                                                                <option value="GR">Greece</option>
                                                                <option value="GL">Greenland</option>
                                                                <option value="GD">Grenada</option>
                                                                <option value="GP">Guadeloupe</option>
                                                                <option value="GU">Guam</option>
                                                                <option value="GT">Guatemala</option>
                                                                <option value="GN">Guinea</option>
                                                                <option value="GW">Guinea-Bissau</option>
                                                                <option value="GY">Guyana</option>
                                                                <option value="HT">Haiti</option>
                                                                <option value="HM">Heard and Mc Donald Islands</option>
                                                                <option value="VA">Holy See (Vatican City State)
                                                                </option>
                                                                <option value="HN">Honduras</option>
                                                                <option value="HK">Hong Kong</option>
                                                                <option value="HU">Hungary</option>
                                                                <option value="IS">Iceland</option>
                                                                <option value="IN">India</option>
                                                                <option value="ID">Indonesia</option>
                                                                <option value="IR">Iran (Islamic Republic of)</option>
                                                                <option value="IQ">Iraq</option>
                                                                <option value="IE">Ireland</option>
                                                                <option value="IL">Israel</option>
                                                                <option value="IT">Italy</option>
                                                                <option value="JM">Jamaica</option>
                                                                <option value="JP">Japan</option>
                                                                <option value="JO">Jordan</option>
                                                                <option value="KZ">Kazakhstan</option>
                                                                <option value="KE">Kenya</option>
                                                                <option value="KI">Kiribati</option>
                                                                <option value="KP">Korea, Democratic People's Republic
                                                                    of
                                                                </option>
                                                                <option value="KR">Korea, Republic of</option>
                                                                <option value="KW">Kuwait</option>
                                                                <option value="KG">Kyrgyzstan</option>
                                                                <option value="LA">Lao People's Democratic Republic
                                                                </option>
                                                                <option value="LV">Latvia</option>
                                                                <option value="LB">Lebanon</option>
                                                                <option value="LS">Lesotho</option>
                                                                <option value="LR">Liberia</option>
                                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                                <option value="LI">Liechtenstein</option>
                                                                <option value="LT">Lithuania</option>
                                                                <option value="LU">Luxembourg</option>
                                                                <option value="MO">Macau</option>
                                                                <option value="MK">Macedonia, The Former Yugoslav
                                                                    Republic
                                                                    of
                                                                </option>
                                                                <option value="MG">Madagascar</option>
                                                                <option value="MW">Malawi</option>
                                                                <option value="MY">Malaysia</option>
                                                                <option value="MV">Maldives</option>
                                                                <option value="ML">Mali</option>
                                                                <option value="MT">Malta</option>
                                                                <option value="MH">Marshall Islands</option>
                                                                <option value="MQ">Martinique</option>
                                                                <option value="MR">Mauritania</option>
                                                                <option value="MU">Mauritius</option>
                                                                <option value="YT">Mayotte</option>
                                                                <option value="MX">Mexico</option>
                                                                <option value="FM">Micronesia, Federated States of
                                                                </option>
                                                                <option value="MD">Moldova, Republic of</option>
                                                                <option value="MC">Monaco</option>
                                                                <option value="MN">Mongolia</option>
                                                                <option value="MS">Montserrat</option>
                                                                <option value="MA">Morocco</option>
                                                                <option value="MZ">Mozambique</option>
                                                                <option value="MM">Myanmar</option>
                                                                <option value="NA">Namibia</option>
                                                                <option value="NR">Nauru</option>
                                                                <option value="NP">Nepal</option>
                                                                <option value="NL">Netherlands</option>
                                                                <option value="AN">Netherlands Antilles</option>
                                                                <option value="NC">New Caledonia</option>
                                                                <option value="NZ">New Zealand</option>
                                                                <option value="NI">Nicaragua</option>
                                                                <option value="NE">Niger</option>
                                                                <option value="NG">Nigeria</option>
                                                                <option value="NU">Niue</option>
                                                                <option value="NF">Norfolk Island</option>
                                                                <option value="MP">Northern Mariana Islands</option>
                                                                <option value="NO">Norway</option>
                                                                <option value="OM">Oman</option>
                                                                <option value="PK">Pakistan</option>
                                                                <option value="PW">Palau</option>
                                                                <option value="PA">Panama</option>
                                                                <option value="PG">Papua New Guinea</option>
                                                                <option value="PY">Paraguay</option>
                                                                <option value="PE">Peru</option>
                                                                <option value="PH">Philippines</option>
                                                                <option value="PN">Pitcairn</option>
                                                                <option value="PL">Poland</option>
                                                                <option value="PT">Portugal</option>
                                                                <option value="PR">Puerto Rico</option>
                                                                <option value="QA">Qatar</option>
                                                                <option value="RE">Reunion</option>
                                                                <option value="RO">Romania</option>
                                                                <option value="RU">Russian Federation</option>
                                                                <option value="RW">Rwanda</option>
                                                                <option value="KN">Saint Kitts and Nevis</option>
                                                                <option value="LC">Saint LUCIA</option>
                                                                <option value="VC">Saint Vincent and the Grenadines
                                                                </option>
                                                                <option value="WS">Samoa</option>
                                                                <option value="SM">San Marino</option>
                                                                <option value="ST">Sao Tome and Principe</option>
                                                                <option value="SA">Saudi Arabia</option>
                                                                <option value="SN">Senegal</option>
                                                                <option value="SC">Seychelles</option>
                                                                <option value="SL">Sierra Leone</option>
                                                                <option value="SG">Singapore</option>
                                                                <option value="SK">Slovakia (Slovak Republic)</option>
                                                                <option value="SI">Slovenia</option>
                                                                <option value="SB">Solomon Islands</option>
                                                                <option value="SO">Somalia</option>
                                                                <option value="ZA">South Africa</option>
                                                                <option value="GS">South Georgia and the South Sandwich
                                                                    Islands
                                                                </option>
                                                                <option value="ES">Spain</option>
                                                                <option value="LK">Sri Lanka</option>
                                                                <option value="SH">St. Helena</option>
                                                                <option value="PM">St. Pierre and Miquelon</option>
                                                                <option value="SD">Sudan</option>
                                                                <option value="SR">Suriname</option>
                                                                <option value="SJ">Svalbard and Jan Mayen Islands
                                                                </option>
                                                                <option value="SZ">Swaziland</option>
                                                                <option value="SE">Sweden</option>
                                                                <option value="CH">Switzerland</option>
                                                                <option value="SY">Syrian Arab Republic</option>
                                                                <option value="TW">Taiwan, Province of China</option>
                                                                <option value="TJ">Tajikistan</option>
                                                                <option value="TZ">Tanzania, United Republic of</option>
                                                                <option value="TH">Thailand</option>
                                                                <option value="TG">Togo</option>
                                                                <option value="TK">Tokelau</option>
                                                                <option value="TO">Tonga</option>
                                                                <option value="TT">Trinidad and Tobago</option>
                                                                <option value="TN">Tunisia</option>
                                                                <option value="TR">Turkey</option>
                                                                <option value="TM">Turkmenistan</option>
                                                                <option value="TC">Turks and Caicos Islands</option>
                                                                <option value="TV">Tuvalu</option>
                                                                <option value="UG">Uganda</option>
                                                                <option value="UA">Ukraine</option>
                                                                <option value="AE">United Arab Emirates</option>
                                                                <option value="GB">United Kingdom</option>
                                                                <option value="US">United States</option>
                                                                <option value="UM">United States Minor Outlying Islands
                                                                </option>
                                                                <option value="UY">Uruguay</option>
                                                                <option value="UZ">Uzbekistan</option>
                                                                <option value="VU">Vanuatu</option>
                                                                <option value="VE">Venezuela</option>
                                                                <option value="VN">Viet Nam</option>
                                                                <option value="VG">Virgin Islands (British)</option>
                                                                <option value="VI">Virgin Islands (U.S.)</option>
                                                                <option value="WF">Wallis and Futuna Islands</option>
                                                                <option value="EH">Western Sahara</option>
                                                                <option value="YE">Yemen</option>
                                                                <option value="ZM">Zambia</option>
                                                                <option value="ZW">Zimbabwe</option>
                                                            </select>
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">

                                                    <div class="col-md-12">
                                                        <div class="aa-checkout-single-bill">
                                                            <input
                                                                value="<?= (!empty($profile->city)) ? $profile->city : '' ?>"
                                                                type="text" name="profile[city]"
                                                                placeholder="Thành phố / Thị trấn*">

                                                        </div>
                                                    </div>

                                                </div>


                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                        </div>
                        <form method="post">
                            <div class="col-md-4">
                                <div class="checkout-right">
                                    <h4>Order Summary</h4>
                                    <div class="aa-order-summary-area">
                                        <table class="table table-responsive">
                                            <thead>
                                            <tr>
                                                <th>Product</th>
                                                <th>Total</th>
                                            </tr>
                                            </thead>
                                            <tbody>
                                            <?php foreach ($products as $product): ?>
                                                <tr>
                                                    <td><?= $product->title ?> <strong>
                                                            x <?= $product->quantity ?></strong>
                                                    </td>
                                                    <td><?= number_format(($product->sale > 0) ? $product->sale : $product->price, 0, ",", ".") ?>
                                                        .000 VNĐ
                                                    </td>
                                                </tr>
                                            <?php endforeach; ?>

                                            </tbody>
                                            <tfoot>
                                            <tr>
                                                <th>Subtotal</th>
                                                <td><?= number_format($total, 0, ",", ".") ?>.000 VNĐ</td>
                                            </tr>
                                            <tr>
                                                <th>Ship Price</th>
                                                <td>0 VNĐ</td>
                                            </tr>
                                            <tr>
                                                <th>Total</th>
                                                <td><?= number_format($total, 0, ",", ".") ?>.000 VNĐ</td>
                                            </tr>
                                            </tfoot>
                                        </table>
                                    </div>

                                    <label class="col-md-4">Ghi chú:</label>
                                    <div class="col-md-8">

                                        <textarea name="order[description]" rows="3"></textarea>

                                    </div>
                                    <input type="hidden" value="<?= (!empty($profile->id)) ? $profile->id : '' ?>"
                                           name="order[profile_id]">
                                    <?php foreach ($products as $k => $product): ?>
                                        <input type="hidden" value="<?= (!empty($product->id)) ? $product->id : '' ?>"
                                               name="product_id[<?= $k ?>]">
                                        <input type="hidden" value="<?= (!empty($product->quantity)) ? $product->quantity : '' ?>"
                                               name="product_quantity[<?= $k ?>]">
                                        <input type="hidden" value="<?= (!empty($product->sale)) ? $product->sale : $product->price ?>"
                                               name="product_price[<?= $k ?>]">
                                    <?php endforeach; ?>
                                    <h4>Payment Method</h4>
                                    <div class="aa-payment-method">
                                        <label for="cashdelivery"><input value="Cash on Delivery" checked type="radio"
                                                                         id="cashdelivery"
                                                                         name="order[order_type]"> Cash on Delivery
                                        </label>
                                        <label for="paypal"><input value="Via Paypal" type="radio" id="paypal"
                                                                   name="order[order_type]"
                                            > Via Paypal </label>
                                        <img src="https://www.paypalobjects.com/webstatic/mktg/logo/AM_mc_vs_dc_ae.jpg"
                                             border="0" alt="PayPal Acceptance Mark">
                                        <input name="submit_order" type="submit" value="Place Order"
                                               class="aa-browse-btn">
                                    </div>
                                </div>
                            </div>
                        </form>
                    </div>

                </div>
            </div>
        </div>
    </div>
</section>
<!-- / Cart view section -->