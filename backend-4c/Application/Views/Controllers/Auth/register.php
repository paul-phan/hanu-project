<!-- BEGIN PAGE LEVEL PLUGINS -->
<link href="dashboard/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/select2.min.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/clockface.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/morris.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<!-- END PAGE LEVEL PLUGINS -->


<div class="row">
    <div class="col-md-12">
        <div class="portlet light bordered" id="form_wizard_1">
            <div class="portlet-title">
                <div class="caption">
                    <i class=" icon-layers font-red"></i>
                    <span class="caption-subject font-red bold uppercase"> Đăng ký thành viên mới -
                                            <span class="step-title"> Bước 1 của 4 </span>
                                        </span>
                </div>

            </div>
            <div class="portlet-body form">
                <form role="form" class="form-horizontal" id="submit_form" method="POST" enctype="multipart/form-data">
                    <div class="form-wizard">
                        <div class="form-body">
                            <ul class="nav nav-pills nav-justified steps">
                                <li>
                                    <a href="#tab1" data-toggle="tab" class="step">
                                        <span class="number"> 1 </span>
                                        <span class="desc">
                                                                <i class="fa fa-check"></i> Thiết lập tài khoản </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab2" data-toggle="tab" class="step">
                                        <span class="number"> 2 </span>
                                        <span class="desc">
                                                                <i class="fa fa-check"></i> Thông tin cá nhân </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab3" data-toggle="tab" class="step active">
                                        <span class="number"> 3 </span>
                                        <span class="desc">
                                                                <i class="fa fa-check"></i> Cài đặt giao dịch </span>
                                    </a>
                                </li>
                                <li>
                                    <a href="#tab4" data-toggle="tab" class="step">
                                        <span class="number"> 4 </span>
                                        <span class="desc">
                                                                <i class="fa fa-check"></i> Xác nhận đăng ký </span>
                                    </a>
                                </li>
                            </ul>
                            <div id="bar" class="progress progress-striped" role="progressbar">
                                <div class="progress-bar progress-bar-success"></div>
                            </div>
                            <div class="tab-content">
                                <div class="alert alert-danger display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                    Bạn có một số lỗi, vui lòng kiểm tra lại!
                                </div>
                                <div class="alert alert-success display-none">
                                    <button class="close" data-dismiss="alert"></button>
                                    Thông tin hợp lệ!
                                </div>
                                <div class="tab-pane active" id="tab1">
                                    <h3 class="block">Nhập thông tin tài khoản:</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tên tài khoản
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="username"
                                                   value="<?= isset($form['username']) ? $form['username'] : '' ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Mật khẩu
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="password" class="form-control" name="password"
                                                   id="submit_form_password"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Xác nhận mất khẩu
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="password" class="form-control" name="rpassword"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="email"
                                                   value="<?= isset($form['email']) ? $form['email'] : '' ?>"/>
                                        </div>
                                    </div>

                                </div>
                                <div class="tab-pane" id="tab2">
                                    <h3 class="block">Vui lòng cung cấp thông tin thêm:</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tên đầy đủ
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="fullname"
                                                   value="<?= isset($form['fullname']) ? $form['fullname'] : '' ?>"/>

                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Số điện thoại
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="phone"
                                                   value="<?= isset($form['phone']) ? $form['phone'] : '' ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Giới tính</label>
                                        <div class="col-md-9">
                                            <input checked
                                                   name="gender" type="checkbox" class="make-switch" data-on-text="Nam"
                                                   data-off-text="Nữ" data-on-color="success" data-off-color="warning">
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Ngày sinh</label>
                                        <div class="col-md-5">
                                            <div class="input-group input-medium date date-picker"
                                                 data-date-format="dd-mm-yyyy"
                                                 data-date="06-05-1995">
                                                <input type="text" class="form-control" name="birthday"
                                                       value="<?= isset($form['birthday']) ? $form['birthday'] : '' ?>">
                                                <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                            </div>
                                            <!-- /input-group -->
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Địa chỉ
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="address"
                                                   value="<?= isset($form['address']) ? $form['address'] : '' ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Thành phố/Thị trấn
                                            <span class="required"> * </span>
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="city"
                                                   value="<?= isset($form['city']) ? $form['city'] : '' ?>"/>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Quốc gia</label>
                                        <div class="col-md-4">
                                            <select name="country" class="form-control country_list">
                                                <option value=""></option>
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
                                                <option value="IO">British Indian Ocean Territory</option>
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
                                                <option value="CD">Congo, the Democratic Republic of the</option>
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
                                                <option value="VA">Holy See (Vatican City State)</option>
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
                                                <option value="KP">Korea, Democratic People's Republic of</option>
                                                <option value="KR">Korea, Republic of</option>
                                                <option value="KW">Kuwait</option>
                                                <option value="KG">Kyrgyzstan</option>
                                                <option value="LA">Lao People's Democratic Republic</option>
                                                <option value="LV">Latvia</option>
                                                <option value="LB">Lebanon</option>
                                                <option value="LS">Lesotho</option>
                                                <option value="LR">Liberia</option>
                                                <option value="LY">Libyan Arab Jamahiriya</option>
                                                <option value="LI">Liechtenstein</option>
                                                <option value="LT">Lithuania</option>
                                                <option value="LU">Luxembourg</option>
                                                <option value="MO">Macau</option>
                                                <option value="MK">Macedonia, The Former Yugoslav Republic of</option>
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
                                                <option value="FM">Micronesia, Federated States of</option>
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
                                                <option value="VC">Saint Vincent and the Grenadines</option>
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
                                                <option value="GS">South Georgia and the South Sandwich Islands</option>
                                                <option value="ES">Spain</option>
                                                <option value="LK">Sri Lanka</option>
                                                <option value="SH">St. Helena</option>
                                                <option value="PM">St. Pierre and Miquelon</option>
                                                <option value="SD">Sudan</option>
                                                <option value="SR">Suriname</option>
                                                <option value="SJ">Svalbard and Jan Mayen Islands</option>
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
                                                <option value="UM">United States Minor Outlying Islands</option>
                                                <option value="UY">Uruguay</option>
                                                <option value="UZ">Uzbekistan</option>
                                                <option value="VU">Vanuatu</option>
                                                <option value="VE">Venezuela</option>
                                                <option value="VN" selected>Viet Nam</option>
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
                                    <div class="form-group last">
                                        <label class="control-label col-md-3">Ảnh đại diện </label>
                                        <div class="col-md-9">
                                            <div class="fileinput fileinput-new" data-provides="fileinput">
                                                <div class="fileinput-new thumbnail"
                                                     style="width: 200px; height: 150px;">
                                                    <img
                                                        src="http://www.placehold.it/200x150/EFEFEF/AAAAAA&amp;text=no+image"
                                                        alt=""/></div>
                                                <div class="fileinput-preview fileinput-exists thumbnail"
                                                     style="max-width: 200px; max-height: 150px;"></div>
                                                <div>
                                                            <span class="btn default btn-file">
                                                                <span class="fileinput-new"> Chon ảnh </span>
                                                                <span class="fileinput-exists"> Thay đổi </span>
                                                                <input type="file" name="image"> </span>
                                                    <a href="javascript:;" class="btn red fileinput-exists"
                                                       data-dismiss="fileinput"> Xóa </a>
                                                </div>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab3">
                                    <h3 class="block">Cung cấp thông tin thanh toán nếu có:</h3>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Họ tên chủ thẻ
                                            <!--                                    <span class="required"> * </span>-->
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="card_name"/>
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Số thẻ
                                            <!--                                    <span class="required"> * </span>-->
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" class="form-control" name="card_number"/>
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CVC
                                            <!--                                    <span class="required"> * </span>-->
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="" class="form-control" name="card_cvc"/>
                                            <span class="help-block"> </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Thời hạn(MM/YYYY)
                                            <!--                                    <span class="required"> * </span>-->
                                        </label>
                                        <div class="col-md-4">
                                            <input type="text" placeholder="MM/YYYY" maxlength="7" class="form-control"
                                                   name="card_expiry_date"/>
                                            <span class="help-block"> e.g 11/2020 </span>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Phương thức thanh toán
                                            <!--                                    <span class="required"> * </span>-->
                                        </label>
                                        <div class="col-md-4">
                                            <div class="checkbox-list">
                                                <label>
                                                    <input type="checkbox" name="payment[]" value="1"
                                                           data-title="Tự động thanh toán bằng thẻ này."/> Tự động trả
                                                </label>
                                                <label>
                                                    <input type="checkbox" name="payment[]" value="2"
                                                           data-title="Email cho tôi về cước hàng tháng."/> Mail cho tôi mỗi khi
                                                    thanh
                                                    toán
                                                </label>
                                            </div>
                                            <div id="form_payment_error"></div>
                                        </div>
                                    </div>
                                </div>
                                <div class="tab-pane" id="tab4">
                                    <h3 class="block">Xác nhận tài khoản của bạn</h3>
                                    <h4 class="form-section">Account</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Tên đăng nhập:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="username"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Email:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="email"></p>
                                        </div>
                                    </div>
                                    <h4 class="form-section">Thôn tin cá nhân</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Họ & tên:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="fullname"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Giới tính:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="gender"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Ngày sinh:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="birthday"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Số điện thoại:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="phone"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Địa chỉ:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="address"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Thành Phố/Thị Trấn:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="city"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Quốc gia:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="country"></p>
                                        </div>
                                    </div>

                                    <h4 class="form-section">Thông tin giao dịch</h4>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Chủ thẻ:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_name"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Số thẻ:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_number"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">CVC:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_cvc"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Thời hạn:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="card_expiry_date"></p>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label class="control-label col-md-3">Hình thức thanh toán:</label>
                                        <div class="col-md-4">
                                            <p class="form-control-static" data-display="payment[]"></p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="form-actions">
                            <div class="row">
                                <div class="col-md-offset-3 col-md-9">
                                    <a href="javascript:;" class="btn default button-previous">
                                        <i class="fa fa-angle-left"></i> Quay lại </a>
                                    <a href="javascript:;" class="btn btn-outline green button-next"> Tiếp tục
                                        <i class="fa fa-angle-right"></i>
                                    </a>
                                    <button type="submit" class="btn green button-submit" id="bsubmit"> Đăng ký
                                        <i class="fa fa-check"></i>
                                    </button>
                                </div>
                            </div>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>

<script src="dashboard/js/bootstrap-datepicker.js" type="text/javascript"></script>
<script src="dashboard/js/bootstrap-datetimepicker.min.js" type="text/javascript"></script>
<script src="dashboard/js/bootstrap-maxlength.min.js" type="text/javascript"></script>
<script src="dashboard/js/jquery.fancybox.pack.js" type="text/javascript"></script>
<script src="dashboard/js/plupload.full.min.js" type="text/javascript"></script>
<script src="dashboard/js/clockface.js" type="text/javascript"></script>
<script src="dashboard/js/select2.full.min.js" type="text/javascript"></script>
<script src="dashboard/js/jquery.validate.min.js" type="text/javascript"></script>
<script src="dashboard/js/additional-methods.min.js" type="text/javascript"></script>
<script src="dashboard/js/jquery.bootstrap.wizard.min.js" type="text/javascript"></script>
<script src="dashboard/js/bootstrap-fileinput.js" type="text/javascript"></script>
<script src="dashboard/js/autosize.min.js" type="text/javascript"></script>
<script src="dashboard/js/morris.min.js" type="text/javascript"></script>
<!-- END PAGE LEVEL PLUGINS -->
<!-- BEGIN THEME GLOBAL SCRIPTS -->
<script src="dashboard/js/app.min.js" type="text/javascript"></script>
<!-- END THEME GLOBAL SCRIPTS -->
<!-- BEGIN PAGE LEVEL SCRIPTS -->
<script src="dashboard/js/table-datatables-responsive.min.js" type="text/javascript"></script>
<script src="dashboard/js/components-date-time-pickers.min.js" type="text/javascript"></script>
<script src="dashboard/js/form-wizard.min.js" type="text/javascript"></script>

