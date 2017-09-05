
<section id="bank">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-12">
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427788045_SmartLink.png" alt="smartlink" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427788024_paypal.png" alt="paypal" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427788085_vietcombank.png" alt="vietcombank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427788056_techcombank.png" alt="techcombank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427788096_viettinbank.png" alt="viettinbank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427788071_vibbank.png" alt="vibbank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427788001_mbbank.png" alt="Mbbank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427787927_eximbank.png" alt="Eximbank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427787978_maritimebank.png" alt="Maritimebank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427788106_visacard.png" alt="visacard" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427788033_sacombank.png" alt="sacombank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427787956_hdbank.png" alt="Hdbank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427787945_gpbank.png" alt="Gpbank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427787907_acbbank.png" alt="ACB Bank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427788012_navibank.png" alt="navibank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427789061_vpbank.png" alt="vpbank" /></a>
                <a href="index.htm#"><img src="<?php bloginfo('template_directory') ?>/static/pagehay/templates/pictures/galleries/1427787990_mastercard.png" alt="Mastercard" /></a>
            </div>
        </div>
    </div>
</section>

<footer class="wow fadeIn">
    <div class="container-fluid">
        <div class="row">
            <div class="col-sm-3 fo1 mpr0">
                <h2>Đăng ký nhận tin</h2>
                <form method="post" action="index.htm" id="form_receive">
                    <div class="form-group">
                        <input type="text" class="form-control" name="name" placeholder="Tên của bạn">
                    </div>
                    <div class="form-group">
                        <input type="email" class="form-control" name="emaildk" placeholder="Địa chỉ email của bạn">
                    </div>
                    <button type="submit" class="btn">Đăng ký ngay</button>
                </form>
            </div>
            <div class="col-sm-3 fo2">
                <h3>Quy định</h3>

                <p><a href="#"><i class="fa fa-chevron-circle-right"></i> Mục đích và phạm vi thu thập TT</a></p>

                <p><a href="#"><i class="fa fa-chevron-circle-right"></i> Chính sách & Quy định chung</a></p>

                <p><a href="#"><i class="fa fa-chevron-circle-right"></i> Chính sách bảo hành</a></p>

                <p><a href="#"><i class="fa fa-chevron-circle-right"></i> Chính sách đổi trả và hoàn tiền</a></p>

            </div>
            <div class="col-sm-3 fo3 mp0">
                <h3>Thông tin liên hệ</h3>
                <div>
                    <b>Văn Phòng</b><br />
                    CÔNG TY CỔ PHẦN PageHay<br />
                    <div>
                        Tầng 7 - Tòa nhà CT1</div>
                    <div>
                        Khu Đô Thị Tân Tây Đô</div>
                    Hotline: 01694470593<br />

                    Email: contact@pagehay.com</br>
                    Gmail: pagehay@gmail.com
                </div>
            </div>
            <div class="col-sm-3 fo4">
                <h3>Social Network</h3>


                <div class="linkour">
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Google plus"><i  class="fa fa-google-plus"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Facebook"><i class="fa fa-facebook"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Youtube"><i class="fa fa-youtube"></i></a>
                    <a href="#" data-toggle="tooltip" data-placement="top" title="Twitter"><i class="fa fa-twitter"></i></a>
                </div>
            </div>
        </div>
    </div>

    <div class="clearfix"></div>
    <div class="coppyright col-sm-12">
        © 2017 PageHay.com</a>
    </div>

</footer>

<script>
    $(function () {

        $("#form_contact").validate({
            rules: {
                title: "required",
                name: "required",
                email: {
                    required: true,
                    email: true
                },
                code: "required",
                message: "required",

            },
            messages: {
                title: "Nhập tiêu đề!",
                name: "Nhập họ tên!",
                email: "Nhập Email!",
                code: "Nhập mã xác nhận!",
                message: "Nhập nội dung!",
            }
        });

        $("#form_receive").validate({
            rules: {
                name: "required",
                emaildk: {
                    required: true,
                    email: true
                },


            },
            messages: {
                name: "Nhập họ tên",
                emaildk: "Nhập Email!",
            }
        });
        $("#form_login").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: "required",

            },
            messages: {
                email: "Nhập Email!",
                password: "Nhập mật khẩu!",
            }
        });


        $("#form_register").validate({
            rules: {
                email: {
                    required: true,
                    email: true
                },
                password: "required",
                re_password: "required",

                name: "required",
                company: "required",
                phone: "required",
                address: "required",
                code: "required",

            },
            messages: {
                email: "Nhập Email!",
                password: "Nhập Mật khẩu!",
                re_password: "Nhập Nhập lại mật khẩu!",

                name: "Nhập Họ tên!",
                company: "Nhập Công ty!",
                phone: "Nhập Điện thoại!",
                address: "Nhập Địa chỉ!",
                code: "Nhập Mã xác nhận!",
            }
        });

    });
</script>
<!-- include -->
<div class="back-top"><span class="glyphicon glyphicon-arrow-up" aria-hidden="true"></span></div>

<!-- Login -->
<div class="modal fade login-popup" id="ModalLogin" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">
            <form class="form-horizontal" method="post" action="thanh-vien/dang-nhap/index.htm" id="form_login">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel"><i class="fa fa-user"></i> Đăng nhập</h4>
                </div>

                <div class="modal-body">

                    <div class="col-sm-12">

                        <div class="form-group">
                            <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                            <div class="col-sm-9">
                                <input type="email" class="form-control" name="email" placeholder="Email">
                            </div>
                        </div>

                        <div class="form-group">
                            <label for="inputPassword3" class="col-sm-3 control-label">Mật khẩu</label>
                            <div class="col-sm-9">
                                <input type="password" class="form-control" name="password" placeholder="Mật khẩu">
                            </div>
                        </div>

                        <div class="form-group">
                            <div class="col-sm-9 col-sm-offset-3"><a href="thanh-vien/quen-mat-khau/index.htm">Quên mật khẩu</a></div>
                        </div>

                    </div>

                    <div class="clearfix"></div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Đăng nhập</button>
                    <!--a href="" class="btn  btn-primary">Đăng nhập Facebook</a-->
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="hidden" name="pageURL" value="http://www.vinasite.vn/"/>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- Register -->
<div class="modal fade" id="ModalRegister" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <form class="form-horizontal" method="post" action="thanh-vien/dang-ky/index.htm" id="form_register">

                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                    <h4 class="modal-title text-center" id="myModalLabel"><i class="fa fa-user"></i> Đăng ký</h4>
                </div>

                <div class="modal-body">
                    <h3 class="col-sm-10 col-sm-offset-1"><i class="fa fa-user"></i> Thông tin tài khoản</h3>

                    <div class="form-group">
                        <label for="inputEmail3" class="col-sm-3 control-label">Email</label>
                        <div class="col-sm-8">
                            <input type="email" class="form-control" name="email" placeholder="Email" id="email_val">
                            <label id="email-avalible" class="error" for="email">Email Tồn tại!</label>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Mật khẩu</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="password" placeholder="Mật khẩu" id="email_check">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Nhập lại mật khẩu</label>
                        <div class="col-sm-8">
                            <input type="password" class="form-control" name="re_password" placeholder="Nhập lại mật khẩu">
                        </div>
                    </div>

                    <h3 class="col-sm-10 col-sm-offset-1"><i class="fa fa-user"></i> Thông tin cá nhân</h3>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Họ tên</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="name" placeholder="Họ tên">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Giới tính</label>
                        <div class="col-sm-8">
                            <select name="gioitinh" class="form-control">
                                <option value="nam">Nam</option>
                                <option value="nu">Nữ</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Công ty</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="company" placeholder="Công ty">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Điện thoại</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="phone" placeholder="Điện thoại">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Địa chỉ</label>
                        <div class="col-sm-8">
                            <input type="text" class="form-control" name="address" placeholder="Địa chỉ">
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Tỉnh | Thành phố</label>
                        <div class="col-sm-8">
                            <select name="country" class="form-control">
                                <option value="1">Hồ Chí Minh</option>
                                <option value="2">Hà Nội</option>
                                <option value="3">An Giang</option>
                                <option value="4">Bà Rịa - Vũng Tàu</option>
                                <option value="5">Bắc Cạn</option>
                                <option value="6">Bắc Giang</option>
                                <option value="7">Bạc Liêu</option>
                                <option value="8">Bắc Ninh</option>
                                <option value="9">Bến Tre</option>
                                <option value="10">Bình Định</option>
                                <option value="11">Bình Dương</option>
                                <option value="12">Bình Phước</option>
                                <option value="13">Bình Thuận</option>
                                <option value="14">Cà Mau</option>
                                <option value="15">Cần Thơ</option>
                                <option value="16">Cao Bằng</option>
                                <option value="17">Đà Nẵng</option>
                                <option value="18">Đắc Lắc</option>
                                <option value="19">Đắk Nông</option>
                                <option value="20">Điện Biên</option>
                                <option value="21">Đồng Nai</option>
                                <option value="22">Đồng Tháp</option>
                                <option value="23">Gia Lai</option>
                                <option value="24">Hà Giang</option>
                                <option value="25">Hà Nam</option>
                                <option value="26">Hà Tĩnh</option>
                                <option value="27">Hải Dương</option>
                                <option value="28">Hải Phòng</option>
                                <option value="29">Hậu Giang</option>
                                <option value="30">Hòa Bình</option>
                                <option value="31">Hưng Yên</option>
                                <option value="32">Khánh Hòa</option>
                                <option value="33">Kiên Giang</option>
                                <option value="34">Kon Tum</option>
                                <option value="35">Lai Châu</option>
                                <option value="36">Lâm Đồng</option>
                                <option value="37">Lạng Sơn</option>
                                <option value="38">Lào Cai</option>
                                <option value="39">Long An</option>
                                <option value="40">Nam Định</option>
                                <option value="41">Nghệ An</option>
                                <option value="42">Ninh Bình</option>
                                <option value="43">Ninh Thuận</option>
                                <option value="44">Phú Thọ</option>
                                <option value="45">Phú Yên</option>
                                <option value="46">Quảng Bình</option>
                                <option value="47">Quảng Nam</option>
                                <option value="48">Quảng Ngãi</option>
                                <option value="49">Quảng Ninh</option>
                                <option value="50">Quảng Trị</option>
                                <option value="51">Sóc Trăng</option>
                                <option value="52">Sơn La</option>
                                <option value="53">Tây Ninh</option>
                                <option value="54">Thái Bình</option>
                                <option value="55">Thái Nguyên</option>
                                <option value="56">Thanh Hoá</option>
                                <option value="57">Thừa Thiên - Huế</option>
                                <option value="58">Tiền Giang</option>
                                <option value="59">Trà Vinh</option>
                                <option value="60">Tuyên Quang</option>
                                <option value="61">Vĩnh Long</option>
                                <option value="62">Vĩnh Phúc</option>
                                <option value="63">Yên Bái</option>
                            </select>
                        </div>
                    </div>

                    <div class="form-group">
                        <label for="inputPassword3" class="col-sm-3 control-label">Mã xác nhận</label>
                        <div class="col-sm-5">
                            <input type="text" class="form-control" name="code" placeholder="Mã xác nhận">
                        </div>
                        <div class="col-sm-3">
                            <img src="captcha/captcha_code_file.php-rand=.htm-" class="img_capcha" id="img_capcha" height="30" value=""/>
                            <input type="hidden" name="val_capcha" id="val_capcha" value=""/>
                            <img src="images/refresh.png" class="refresh_capcha" style="cursor: pointer;"/>
                        </div>
                    </div>

                </div>

                <div class="modal-footer">
                    <button type="submit" class="btn btn-success btn-sm">Đăng ký</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
                    <input type="hidden" name="pageURL" value="http://www.vinasite.vn/"/>
                </div>

            </form>
        </div>
    </div>
</div>

<!-- contact -->
<div class="modal fade" id="ModalContact" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-body text-center">

                <p>Gửi liên hệ thành công</p>
                <p><a href="index.htm">Quay lại trang chủ</a></p>
                <div class="clearfix"></div>

            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
            </div>


        </div>
    </div>
</div>

<!-- order -->
<div class="modal fade" id="ModalOrder1" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <div class="modal-body text-center">
                <p>Sản phẩm của bạn đã được đưa vào giỏ hàng.</p>
                <p>Bạn muốn xem giỏ hàng không?</p>
            </div>

            <div class="modal-footer">
                <a href="gio-hang/danh-sach/index.htm" class="btn btn-danger">OK</a>
                <button type="button" class="btn btn-default" data-dismiss="modal">Cancel</button>
            </div>


        </div>
    </div>
</div>

<!-- voucher -->
<div class="modal fade" id="ModalVoucher" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-body text-center">
                <p>Không tìm thấy mã khuyến mãi!</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-danger" data-dismiss="modal">Close</button>
            </div>


        </div>
    </div>
</div>

<div class="modal fade" id="ModalVoucherAdd" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-body text-center">
                <p>Nhập mã khuyến mãi thành công!</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>


        </div>
    </div>
</div>

<!-- Payment -->
<div class="modal fade" id="ModalPayment" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-lg">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                <h4 class="modal-title text-center" id="myModalLabel">Thanh toán</h4>
            </div>

            <div id="load_payment" class="modal-body">

            </div>




        </div>
    </div>
</div>

<div class="modal fade" id="ModalPaymentSC" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
    <div class="modal-dialog modal-sm">
        <div class="modal-content">

            <div class="modal-body text-center">
                <p>Đặt hàng thành  công!</p>
            </div>

            <div class="modal-footer">
                <button type="button" class="btn btn-success" data-dismiss="modal">Close</button>
            </div>


        </div>
    </div>
</div>



</body>
</html>