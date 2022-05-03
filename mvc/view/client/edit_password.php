<?php require_once('mvc/view/client/layout.php'); ?>\
<?php if ($erros == 'Mật khẩu của bạn không đúng'): ?>
    <script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
    <script>
        Swal.fire({
        icon: 'error',
        title: 'Oops...',
        text:  <?php echo json_encode($erros)?>,
        footer: '<a href="">Why do I have this issue?</a>'
        })

    </script>
<?php endif; ?>
        <section>

        <style>
            .btn {
                width: 50%;
                height: 35px;
                border: 1px solid gray;
                background: #2291ff;
                color: white;
                margin-bottom: 10px;
                border-radius: 15px;
            }
            .btn:hover {
                background: #2c6baa;
            }
            .ip {
                width: 300px;
                height: 35px;
                margin-bottom: 15px;
                border-radius: 5px;
                border: 1px solid gray;
                padding-left: 10px;
            }
        </style>

            <div class="comtainer">
                <div class="menu_list">
                    <div class="avatar_user">
                        <div class="avatar">
                            <img src="" alt="">
                            <p>tài khoản</p>
                            <p><?= $result['user_name'] ?></p>
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
                    <h4>Thay đổi mật khẩu</h4>
                    <div class="infomation">
                        <div class="infomation_acount" style="margin-top: 100px;">
                            <form action="update_password" method="post">
                                <div class="form-info">
                                <input type="hidden" name="id" value="<?= $result['id'] ?>">

                                    <div class="form-group">
                                        <div class="form-control">
                                            <label for="">Mật khẩu cũ</label> <br>
                                            <input type="password" class="ip" name="old_password">
                                        </div>

                                        <div class="form-control">
                                            <label for="">Mật khẩu mới</label> <br>
                                            <input type="password" class="ip" autocomplete="new_password" name="new_password">
                                        </div>

                                        <div class="form-control">
                                            <label for="">Xác nhận mật khẩu</label> <br>
                                            <input type="password" class="ip" autocomplete="new_password" name="confirm_new_password">
                                        </div>

                                        <div class="form-control">
                                            
                                        </div>

                                        <div class="form-group">
                                            <button type="submit" class="btn btn-primary">Cập nhật</button>
                                        </div>

                                    </div>

                                </div>
                            </form>
                        </div>

                    </div>
                </div>
            </div>
        </section>
        <?php require_once('mvc/view/client/footer.php'); ?> 