<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>fontawesome-free-6.0.0/css/all.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>css/css1.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="header">
                <div class="logo">
                    <img src="<?= PUBLIC_URL ?>img/logo.png" alt="" class="image_logo">
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="<?php  echo BASE_URL ?>">Trang Chủ</a></li>
                        <li><a href="">Giới Thiệu</a></li>
                        <li>
                            <a href="mvc/view/client/controller_view.php">Sản Phẩm</a>
                            <div class="categores">
                                <div class="boxx"></div>
                                <ul class="level0">
                                    <li>
                                        <a href="">COFFEE</a>
                                        <ul class="level1">
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">NƯỚC ÉP</a>
                                        <ul class="level1">
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">TRÀ SỮA</a>
                                        <ul class="level1">
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                    <li>
                                        <a href="">COCKTAIL</a>
                                        <ul class="level1">
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                            <li><a href="">
                                                    Espresso
                                                </a>
                                            </li>
                                        </ul>
                                    </li>
                                </ul>
                                <div class="banner_menu">
                                    <div class="imga">
                                        <img src="<?= PUBLIC_URL ?>img/mega-menu-images1.webp" alt="" class="image_menu">
                                    </div>
                                    <div class="imga">
                                        <img src="<?= PUBLIC_URL ?>img/mega-menu-images2.webp" alt="" class="image_menu">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="">Tin Tức</a></li>
                        <li><a href="feedback">Liên Hệ</a></li>
                    </ul>
                </div>
                <div class="buy">
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="cart">
                        <i class="fa-solid fa-cart-shopping"></i>
                    </div>
                    <div class="user">
                        <?php if (!isset($_SESSION['user_name'] )): ?>
                            <i class="fa-solid fa-user"></i>
                            <div class="option" style="margin-right:0px;margin-top: 5px;">
                                <div class="xx"></div>
                                <ul>
                                    <li><a href="page_login">Đăng Nhập</a></li>
                                    <li><a href="">Đăng Ký</a></li>
                                </ul>
                            </div>
                        <?php else: ?>
                        <!-- <style>
                            .infomation_user{
                                position: absolute;
                                color:#fff;
                                top:19%;
                                right:5%;
                            }
                            .infomation_user .avatar{
                                width: 40px;
                                height: 40px;
                                border-radius: 50%;
                                background:red;
                            }
                            .infomation_user .avatar .bbb{
                                display: block;
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            }
                        </style> -->
                            <div class="infomation_user">
                                <div class="avatar">
                                    <img src="<?= PUBLIC_URL ?>img/module_banner3.png" alt=""class ="bbb"> 
                                </div>
                                <p><?php echo $_SESSION['user_name']['user_name'] ?></p>
                                <div class="option" style="margin-right:-20px;">
                                <div class="xx"></div>
                                <ul>
                                    <li><a href="manage_user">Thông Tin Tài</a></li>
                                    <li><a href="">Thông Tin Đơn</a></li>
                                    <li><a href="">Yêu Thích</a></li>
                                    <?php if ($_SESSION['user_name']['role']==1 || $_SESSION['user_name']['role']==3): ?>
                                        <li><a href="Dashboard">Quản Lý</a></li>
                                    <?php endif; ?>
                                    <li><a href="log_out">Đăng Xuất</a></li>
                                </ul>
                            </div> 
                        <?php endif; ?>
                        </div>
                    </div>
                </div>
            </div>
            <div class="category">
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>img/header_category1_image.jpg" alt="">
                    <span>Coffee</span>
                </div>
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>img/header_category2_image.webp" alt="">
                    <span>Coffee</span>
                </div>
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>img/header_category3_image.webp" alt="">
                    <span>Coffee</span>
                </div>
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>img/header_category4_image.webp" alt="">
                    <span>Coffee</span>
                </div>
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>img/header_category5_image.webp" alt="">
                    <span>Coffee</span>
                </div>
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>img/header_category6_image.webp" alt="">
                    <span>Coffee</span>
                </div>
            </div>
            <div class="banner">
                <!-- <img src="<?= PUBLIC_URL ?>img/3.jpg" alt="" class="image_banner"> -->
            </div>
        </header>
        <section>
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
                                    <div class="avatar_info">

                                    <input type="hidden" name="id" value="<?= $result['id'] ?>">

                                    </div>
                                    <div class="form-group">
                                        <div class="form-control">
                                            <label for="">Mật khẩu cũ</label>
                                            <input type="password" name="old_password">
                                        </div>

                                        <div class="form-control">
                                            <label for="">Mật khẩu mới</label>
                                            <input type="password" autocomplete="new_password" name="new_password">
                                        </div>

                                        <div class="form-control">
                                            <label for="">Xác nhận mật khẩu</label>
                                            <input type="password" autocomplete="new_password" name="confirm_new_password">
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
        <footer>
            <div class="image">
                <img src="<?= PUBLIC_URL ?>img/footer.webp" alt="" class="image_footer">
            </div>
            <div class="content">
                <div class="logo">
                    <img src="<?= PUBLIC_URL ?>img/logo.png" alt="" class="image_logo">
                </div>
                <div class="describe">
                    <div class="block">
                        <ul>
                            <li>KẾT NỐI VỚI CHÚNG TÔI</li>
                            <li>
                                <p>Chúng tôi mong muốn tạo nên hương vị thức uống tuyệt vời nhất. Là điểm đến đầu tiên
                                    dành cho bạn khi muốn thưởng thức trọn vẹn của tách Coffee</p>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="block">
                        <ul>
                            <li>HỆ THỐNG CỬA HÀNG</li>
                            <li>
                                <span>Địa chỉ: Ladeco Building, 266 Doi Can</span><br>
                                <span>Street, Ba Dinh District, Ha Noi</span><br>
                                <span>Hotline: 19006750</span><br>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="block">
                        <ul>
                            <li>CHÍNH SÁCH</li>
                            <li>
                                <span>Trang chủ</span><br>
                                <span>Giới thiệu</span><br>
                                <span>Sản phẩm</span><br>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                    <div class="block">
                        <ul>
                            <li>LIÊN HỆ</li>
                            <li>
                                <span>Thứ 2 - Thứ 6: 6am - 9pm</span><br>
                                <span>Thứ Bảy - Chủ Nhật: 6am - 10pm</span><br>
                                <span>Mở cửa toàn bộ các ngày trong năm( Chỉ đóng cửa vào ngày lễ)</span><br>
                            </li>
                            <li></li>
                        </ul>
                    </div>
                </div>
            </div>
        </footer>
    </div>
    <div class="back-to-top">
        <button onclick="back_to_top()" id="back-to-top"><img src="<?= PUBLIC_URL ?>img/top.webp" alt="" class="ccc"></button>
    </div>
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <script>
        var swiper = new Swiper('.swiper', {
            slidesPerView: 4,
            direction: getDirection(),
            navigation: {
                nextEl: '.swiper-button-next',
                prevEl: '.swiper-button-prev',
            },
            on: {
                resize: function () {
                    swiper.changeDirection(getDirection());
                },
            },
        });

        function getDirection() {
            var windowWidth = window.innerWidth;
            var direction = window.innerWidth <= 760 ? 'vertical' : 'horizontal';

            return direction;
        }
    </script>
    <!-- Initialize Swiper -->
    <!-- <script>
        var swiper = new Swiper(".mySwiper_pro", {
          scrollbar: {
            el: ".swiper-scrollbar",
            hide: true,
          },
        });
      </script> -->
    <script>
        var nav = document.querySelector('.header');
        var backToTop = document.querySelector('#back-to-top');
        window.onscroll = function () { scrollFunction() }
        function scrollFunction() {
            if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
                backToTop.style.display = "block";
                nav.classList.add("show");
            } else {
                backToTop.style.display = "none";
                nav.classList.remove("show");
            }
        }
        scrollFunction();
        function back_to_top() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>