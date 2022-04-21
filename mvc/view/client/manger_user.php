<?php require_once('mvc/view/client/layout.php'); ?>
        <section>

        <style>
            .btn {
                width: 30%;height: 
                35px;border: 1px solid gray;
                background: #2291ff;
                color: white;
                margin-bottom: 10px;
                border-radius: 15px;
            }
            .btn:hover {
                background: #2c6baa;
            }
        </style>
            <div class="comtainer">
                <div class="menu_list">
                    <div class="avatar_user">
                        <div class="avatar">
                            <img src="" alt="">
                            <p>tài khoản</p>
                            <p>huynguyen</p>
                        </div>
                    </div>
                    <!-- <div class="name">
                        <span>huynguyen</span>
                    </div> -->
                    <ul>
                        <li>
                            <i class="fa-solid fa-user"></i>
                            <a href="">
                                Thông Tin Tài Khoản</a>
                        </li>
                        <li><i class="fa-solid fa-bell"></i>
                            <a href="">Thông Báo Của Tôi</a>
                        </li>
                        <li>
                            <i class="fa-solid fa-file-invoice-dollar"></i>
                            <a href="">Quản Lý Đơn Hàng</a>
                        </li>
                        <li><i class="fa-solid fa-location-dot"></i>
                            <a href="">Địa Chỉ</a>
                        </li>
                    </ul>
                </div>
                <div class="manger_user">
                    <h4>Thông Tin Tài Khoản</h4>
                    <div class="infomation">
                        <div class="infomation_acount">
                            
                                <div class="form-info">
                                    <div class="avatar_info">

                                    </div>
                                    <div class="input">
                                        <div class="form-control">
                                            <label for="">Tên đăng nhập</label>
                                            <h3><?= $result['user_name'] ?></h3>
                                        </div>
                                    </div>

                                </div>
                            
                        </div>
                        <div class="contac">
                        <form action="update_user" method="POST">
                            <input type="hidden" name="id" value="<?= $result['id'] ?>">
                            <h3>Số điện thoại và email</h3> <br>
                            <div class="phone" style="margin-bottom: 20px;">
                                <div class="cc">
                                <i class='bx bx-phone'></i>
                                    <label for="">Số Điện thoại</label> <br>
                                    <input type="tel" style="width: 80%;height: 35px;border: 1px solid gray;border-radius: 10px;padding-left: 10px;" value="<?= $result['number_phone'] ?>" name="number_phone">
                                </div>
                            </div>
                            <div class="email"  style="margin-bottom: 20px;">
                                <div class="cc">
                                <i class='bx bx-envelope' ></i>
                                    <label for="">Địa chỉ Email</label> <br>
                                    <input type="text" style="width: 80%;height: 35px;border: 1px solid gray;margin-bottom: 20px;border-radius: 10px;padding-left: 10px;" value="<?= $result['email'] ?>" name="email">
                                </div>

                                <button type="submit" class="btn btn-primary">Lưu</button>
                                </form>

                            </div>
                        <div class="">
                            <a href="edit_password?id=<?= $result['id'] ?>"><button style="width: 40%;" class="btn btn-primary">Đổi mật khẩu</button></a>
                        </div>                
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <?php require_once('mvc/view/client/footer.php'); ?>