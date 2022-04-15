    <div class="container-product">
        <main class="main">
            <!-- <header class="main_header">
                <div class="logo_left">
                    <h1 class="shop_name">
                        <a href="./index.html">
                            Coffee
                        </a>
                    </h1>
                </div>
            </header> -->
            <div class="row">
                <div class="col-6">
                    <h2 class="section_title">Thông tin nhận hàng</h2>
                    <form name="frmReg" onsubmit="return validate()" action="controller_view.php?act=order" method="post">
                        <?php
                            if(isset($_SESSION['user'])){
                                $user_name=$_SESSION['user']['user_name'];
                                $number_phone=$_SESSION['user']['number_phone'];
                                $email=$_SESSION['user']['email'];
                            }else{
                                $user_name="";
                                $number_phone="";
                                $email="";
                            }
                        ?>
                        <div class="row">
                            <div class="col-11">
                                <input class="form-control" type="text" name="email" value="<?=$email?>" placeholder="Email">
                                <div class="error" id="emailErr"></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-11">
                                <input class="form-control" type="text" name="name" value="<?=$user_name?>" placeholder="Họ tên">
                                <div class="error" id="nameErr"></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-11">
                                <input class="form-control" type="text" name="phone" value="<?=$number_phone?>" placeholder="Số điện thoại">
                                <div class="error" id="mobileErr"></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-7">
                                <input class="form-control ml-10" placeholder="Mã giảm giá" type="text">
                                
                            </div>
                            <div class="col-4">
                            <input type="button" class="btn btn-primary " value="Sử dụng">
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-11">
                                <input class="form-control" type="text" name="address" placeholder="Địa chỉ (tùy chọn)">
                                <div class="error" id="addressErr"></div>
                            </div>
                        </div>
                        <br>
                        <div class="row">
                            <div class="col-11">
                                <input class="form-control" name="note" type="text" placeholder="Ghi chú (tùy chọn)">
                            </div>
                        </div>
                        
                        <br>
                        <input type="submit" name="dongydathang" class="btn btn-warning" value="Đặt hàng">
                    </form>
                </div>
                <div class="col-6">
                    <h2 class="section_title">Vận chuyển</h2>
                    <div class="form-control">
                        <div class="form-check">
                            <input class="form-check-input" type="radio" value="" id="flexCheckChecked" checked="checked">
                            <label class="form-check-label" for="flexCheckChecked">
                                Giao hàng tận nơi
                            </label>
                        </div>
                    </div>
                    <br>
                    <br>
                    <div class="col-12">
                        <h2 class="section_title">Thanh toán</h2>
                        <div class="form-control">
                            <div class="form-check">
                                <input class="form-check-input" type="radio" value="" id="flexCheckChecked" checked="checked">
                                <label class="form-check-label" for="flexCheckChecked">
                                    Thanh toán khi giao hàng (COD)
                                </label>
                            </div>
                        </div>
                    </div>
                </div>
        </main>
        <div class="row">
            <div class="col-8">
                <table class="table">
                    <?php
                        cart(0);
                    ?>
                </table>
            </div>
        </div>
        
        <script>
            function validate() {
                var name = document.frmReg.name.value;
                var email = document.frmReg.email.value;
                var mobile = document.frmReg.phone.value;
                var address = document.frmReg.address.value;
                //----------
                var msgName = document.getElementById("nameErr");
                var msgEmail = document.getElementById("emailErr");
                var msgMobile = document.getElementById("mobileErr");
                var msgAddress = document.getElementById("addressErr");
                //----------
                var conloiName = true;
                var conloiEmail = true;
                var conloiMobile = true;
                var conloiAddress = true;
                //Validate name
                if (name == "") {
                    msgName.innerHTML = "Họ tên không được để trống";
                } else {
                    msgName.innerHTML = "";
                    conloiName = false;
                }
                //Validate số điện thoại
                var regex = /^0\d{9}$/;
                if (regex.test(mobile) == false) {
                    msgMobile.innerHTML = "Sai định dạng số điện thoại (có 10 ký tự số và bắt đầu bằng số 0)";
                } else {
                    msgMobile.innerHTML = "";
                    conloiMobile = false;
                }
                //Validate email
                var regexEmail = /^[a-z0-9\.]{3,}@\w+\.\w{2,6}$/;
                if (regexEmail.test(email) == false) {
                    msgEmail.innerHTML = "Sai định dạng email";
                } else {
                    msgEmail.innerHTML = "";
                    conloiEmail = false;
                }
                //-------------
                if (address ==""){
                    msgAddress.innerHTML = "Địa chỉ không được để trống";
                } else {
                    msgAddress.innerHTML = "";
                    conloiAddress = false;
                }
                if (conloiName || conloiEmail || conloiMobile || conloiAddress) {
                    return false;
                } else {
                    // alert("Đặt hàng thành công");
                    return true;
                }
            }
        </script>
    </div>