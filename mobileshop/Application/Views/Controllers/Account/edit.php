<!-- BEGIN CONTENT -->
<div class="page-content-wrapper">
    <!-- BEGIN CONTENT BODY -->
    <div class="page-content">
        <!-- BEGIN PAGE HEADER-->
        <div class="container profile-page-container">
            <!-- BEGIN PAGE TITLE-->
            <h3 class="page-title"> <?= $user->username ?>
                <small>Trang cá nhân</small>
            </h3>
            <!-- END PAGE TITLE-->
            <!-- END PAGE HEADER-->
            <div class="row">
                <div class="col-md-12">
                    <!-- BEGIN PROFILE SIDEBAR -->
                    <div class="profile-sidebar">
                        <!-- PORTLET MAIN -->
                        <div class="portlet light profile-sidebar-portlet ">
                            <!-- SIDEBAR USERPIC -->
                            <div class="profile-userpic">
                                <img
                                    src="<?= !empty($profile->avatar) ? UPLOAD_DIR . 'avatar/' . $profile->avatar : UPLOAD_DIR . 'avatar/updatelater.jpg' ?>"
                                    class="img-responsive" alt="profilepic">
                            </div>
                            <!-- END SIDEBAR USERPIC -->
                            <!-- SIDEBAR USER TITLE -->
                            <div class="profile-usertitle">
                                <div class="profile-usertitle-name"> <?= $profile->full_name ?></div>
                                <div class="profile-usertitle-job"> <?= $role->name ?></div>
                            </div>
                            <!-- END SIDEBAR USER TITLE -->
                            <!-- SIDEBAR BUTTONS -->
                            <div class="profile-userbuttons">
                                <button type="button" class="btn btn-circle green btn-sm">Theo dõi</button>
                                <button type="button" class="btn btn-circle red btn-sm">Hộp thư</button>
                            </div>
                            <!-- END SIDEBAR BUTTONS -->
                            <!-- SIDEBAR MENU -->
                            <div class="profile-usermenu">
                                <ul class="nav">
                                    <li class="active">
                                        <a href="javascript:;">
                                            <i class="icon-home"></i> Thông tin cơ bản </a>
                                    </li>
                                    <li>
                                        <a href="account/edit">
                                            <i class="icon-settings"></i> Cài đặt tài khoản </a>
                                    </li>
                                    <li>
                                        <a>
                                            <i class="icon-info"></i> Hỗ trợ </a>
                                    </li>
                                </ul>
                            </div>
                            <!-- END MENU -->
                        </div>
                        <!-- END PORTLET MAIN -->
                        <!-- PORTLET MAIN -->
                        <div class="portlet light ">
                            <!-- STAT -->
                            <div class="row list-separated profile-stat">
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 37</div>
                                    <div class="uppercase profile-stat-text"> Người theo dõi</div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 51</div>
                                    <div class="uppercase profile-stat-text"> Yêu thích</div>
                                </div>
                                <div class="col-md-4 col-sm-4 col-xs-6">
                                    <div class="uppercase profile-stat-title"> 61</div>
                                    <div class="uppercase profile-stat-text"> Đã mua</div>
                                </div>
                            </div>
                            <!-- END STAT -->
                            <div>
                                <h4 class="profile-desc-title">Về <?= $profile->full_name ?></h4>
                                <span
                                    class="profile-desc-text"> Lorem ipsum dolor sit amet diam nonummy nibh dolore. </span>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-github"></i>
                                    <a target="_blank" href="http://www.github.com/gangstara2">Github</a>
                                </div>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-twitter"></i>
                                    <a target="_blank" href="http://www.twitter.com/_gangstar_a2_/">@_gangstar_a2_</a>
                                </div>
                                <div class="margin-top-20 profile-desc-link">
                                    <i class="fa fa-facebook"></i>
                                    <a target="_blank" href="http://www.facebook.com/gangstar.a2">www.facebook.com</a>
                                </div>
                            </div>
                        </div>
                        <!-- END PORTLET MAIN -->
                    </div>
                    <!-- END BEGIN PROFILE SIDEBAR -->
                    <!-- BEGIN PROFILE CONTENT -->
                    <div class="profile-content">
                        <div class="row">
                            <div class="col-md-12">
                                <div class="portlet light ">
                                    <div class="portlet-title tabbable-line">
                                        <div class="caption caption-md">
                                            <i class="icon-globe theme-font hide"></i>
                                            <span class="caption-subject font-blue-madison bold uppercase">Cài đặt tài khoản</span>
                                        </div>
                                        <ul class="nav nav-tabs">
                                            <li class="active">
                                                <a href="#tab_1_1" data-toggle="tab">Thông tin cá nhân</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_2" data-toggle="tab">Ảnh đại diện</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_3" data-toggle="tab">Mật khẩu</a>
                                            </li>
                                            <li>
                                                <a href="#tab_1_4" data-toggle="tab">Riêng tư</a>
                                            </li>
                                        </ul>
                                    </div>
                                    <div class="portlet-body">
                                        <div class="tab-content">
                                            <!-- PERSONAL INFO TAB -->
                                            <div class="tab-pane active" id="tab_1_1">
                                                <form role="form" method="post">
                                                    <div class="form-group">
                                                        <label class="control-label">Họ và Tên<span
                                                                class="required"> * </span></label>
                                                        <input name="Profile[full_name]" type="text"
                                                               value="<?= $profile->full_name ?>" class="form-control"/>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Email<span
                                                                class="required"> * </span></label>
                                                        <input name="Profile[email]" type="text"
                                                               value="<?= $profile->email ?>"
                                                               class="form-control"/></div>
                                                    <div class="form-group">
                                                        <label class="control-label">Số điện thoại<span
                                                                class="required"> * </span></label>
                                                        <input name="Profile[phone]" type="text"
                                                               value="<?= $profile->phone ?>"
                                                               class="form-control"/></div>
                                                    <div class="form-group">
                                                        <label class="control-label">Giới tính
                                                            &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </label>
                                                        <input <?= (isset($profile->gender) && ($profile->gender == 1)) ? 'checked' : '' ?>
                                                            name="Profile[gender]" type="checkbox" class="make-switch"
                                                            data-on-text="Nam"
                                                            data-off-text="Nữ" data-on-color="success"
                                                            data-off-color="warning">
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label"
                                                               style="float: left; margin-right: 13px">Ngày
                                                            sinh </label>
                                                        <span
                                                            class="input-group input-medium date date-picker col-md-offset-1"
                                                            data-date-format="yyyy-mm-dd">
                                                            <input type="text" class="form-control"
                                                                   name="Profile[birthday]"
                                                                   value="<?= isset($profile->birthday) ? $profile->birthday : '' ?>">
                                                            <span class="input-group-btn">
                                                            <button class="btn default" type="button">
                                                                <i class="fa fa-calendar"></i>
                                                            </button>
                                                        </span>
                                                        </span>
                                                    </div>
                                                    <div class="form-group">
                                                        <label class="control-label">Địa chỉ<span
                                                                class="required"> * </span></label>
                                                        <input name="Profile[address]" type="text"
                                                               value="<?= $profile->address ?>"
                                                               class="form-control"/></div>
                                                    <div class="form-group">
                                                        <label class="control-label">Thành phố<span
                                                                class="required"> * </span></label>
                                                        <input name="Profile[city]" type="text"
                                                               value="<?= $profile->city ?>"
                                                               class="form-control"/></div>
                                                    <div class="form-group">
                                                        <label class="control-label">Quốc gia</label>
                                                        <select name="Profile[country]"
                                                                class="form-control country_list">
                                                            <option
                                                                value="<?= $profile->country ?>"><?= $profile->country ?></option>
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
                                                            <option value="KP">Korea, Democratic People's Republic of
                                                            </option>
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
                                                            <option value="MK">Macedonia, The Former Yugoslav Republic
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
                                                            <option value="GS">South Georgia and the South Sandwich
                                                                Islands
                                                            </option>
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

                                                    <div class="margiv-top-10">
                                                        <button type="submit" class="btn green"> Lưu lại</button>
                                                        <a href="account.html" class="btn default"> Hủy </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PERSONAL INFO TAB -->
                                            <!-- CHANGE AVATAR TAB -->
                                            <div class="tab-pane" id="tab_1_2">
                                                <p> Thay đổi ảnh đại điện của bạn. </p>
                                                <form method="post" role="form" enctype="multipart/form-data">
                                                    <div class="form-group">
                                                        <div class="fileinput fileinput-new" data-provides="fileinput">
                                                            <div class="fileinput-new thumbnail"
                                                                 style="width: 200px; height: 150px;">
                                                                <img
                                                                    src="<?= !empty($profile->avatar) ? UPLOAD_DIR . 'avatar/' . $profile->avatar : UPLOAD_DIR . 'avatar/updatelater.jpg' ?>"
                                                                    alt=""/></div>
                                                            <div class="fileinput-preview fileinput-exists thumbnail"
                                                                 style="max-width: 200px; max-height: 150px;"></div>
                                                            <div>
                                                                        <span class="btn default btn-file">
                                                                            <span
                                                                                class="fileinput-new"> Chọn ảnh </span>
                                                                            <span
                                                                                class="fileinput-exists"> Thay đổi </span>
                                                                            <input value="" type="file" name="avatar"> </span>
                                                                <a href="javascript:;"
                                                                   class="btn default fileinput-exists"
                                                                   data-dismiss="fileinput"> Xóa </a>
                                                            </div>
                                                        </div>
                                                    </div>
                                                    <div class="margin-top-10">
                                                        <button type="submit" class="btn green"> Lưu lại </button>
                                                        <a href="account.html" class="btn default"> Hủy </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE AVATAR TAB -->
                                            <!-- CHANGE PASSWORD TAB -->
                                            <div class="tab-pane" id="tab_1_3">
                                                <form method="post">
                                                    <div class="form-group">
                                                        <label class="control-label">Mật khẩu hiện tại</label>
                                                        <input name="cpw[password]" type="password" class="form-control"/></div>
                                                    <div class="form-group">
                                                        <label class="control-label">Mật khẩu mới</label>
                                                        <input name="cpw[npassword]" type="password" class="form-control"/></div>
                                                    <div class="form-group">
                                                        <label class="control-label">Nhập lại mật khẩu mới</label>
                                                        <input name="cpw[rnpassword]" type="password" class="form-control"/></div>
                                                    <div class="margin-top-10">
                                                        <button type="submit" class="btn green"> Đổi mật khẩu </button>
                                                        <a href="javascript:;" class="btn default"> Hủy </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END CHANGE PASSWORD TAB -->
                                            <!-- PRIVACY SETTINGS TAB -->
                                            <div class="tab-pane" id="tab_1_4">
                                                <form action="#">
                                                    <table class="table table-light table-hover">
                                                        <tr>
                                                            <td> Anim pariatur cliche reprehenderit, enim eiusmod high
                                                                life accusamus..
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <input type="radio" name="optionsRadios1"
                                                                           value="option1"/> Yes </label>
                                                                <label class="uniform-inline">
                                                                    <input type="radio" name="optionsRadios1"
                                                                           value="option2" checked/> No </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Enim eiusmod high life accusamus terry richardson ad
                                                                squid wolf moon
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <input type="checkbox" value=""/> Yes </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Enim eiusmod high life accusamus terry richardson ad
                                                                squid wolf moon
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <input type="checkbox" value=""/> Yes </label>
                                                            </td>
                                                        </tr>
                                                        <tr>
                                                            <td> Enim eiusmod high life accusamus terry richardson ad
                                                                squid wolf moon
                                                            </td>
                                                            <td>
                                                                <label class="uniform-inline">
                                                                    <input type="checkbox" value=""/> Yes </label>
                                                            </td>
                                                        </tr>
                                                    </table>
                                                    <!--end profile-settings-->
                                                    <div class="margin-top-10">
                                                        <a href="javascript:;" class="btn red"> Save Changes </a>
                                                        <a href="javascript:;" class="btn default"> Cancel </a>
                                                    </div>
                                                </form>
                                            </div>
                                            <!-- END PRIVACY SETTINGS TAB -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- END PROFILE CONTENT -->
                </div>
            </div>
        </div>
        <!-- END CONTENT BODY -->
    </div>
</div>
<!-- END CONTENT -->

<link href="dashboard/css/uniform.default.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/bootstrap-switch.min.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/select2.min.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/select2-bootstrap.min.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/bootstrap-datepicker3.min.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/clockface.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/morris.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/jquery.fancybox.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/bootstrap-fileinput.css" rel="stylesheet" type="text/css"/>
<link href="dashboard/css/profile.min.css" rel="stylesheet" type="text/css"/>
<script src="dashboard/js/jquery.sparkline.min.js" type="text/javascript"></script>

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

<script src="dashboard/js/app.min.js" type="text/javascript"></script>
<script src="dashboard/js/profile.min.js" type="text/javascript"></script>
<script src="dashboard/js/form-wizard.min.js" type="text/javascript"></script>

<script>
    $(".date-picker").datepicker({
        rtl: App.isRTL(),
        autoclose: !0
    })

    $('#update-user-info').click(function (e) {
//        console.log(e)
        console.log('hello')
        $(this).html('<i class="fa fa-spinner" aria-hidden="true"> Lưu lại </i>')
    })
</script>