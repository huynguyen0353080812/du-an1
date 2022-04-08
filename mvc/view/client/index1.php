<?php require_once('commons/helpers.php'); ?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="">
    <link rel="stylesheet" href="<?=PUBLIC_URL?>css/style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
</head>

<body onscroll="myfunction()">
    <div class="header">
        <div class="header-img">
            <img src="<?=PUBLIC_URL?>/img/blog3.webp" alt="">
        </div>
        <div class="nav">
            <div class="logo">
                <img src="./img/logo.png" alt="">
            </div>
            <div class="menu">
                <ul>
                    <li><a href="./index.html">Trang chủ</a></li>
                    <li><a href="#">Giới thiệu</a></li>
                    <li class="menu_link"><a href="#">Sản phẩm &#8744;</a>
                        <ul class="menu_dow">
                            <table>
                                <tr>
                                    <th><a href="#">Coffee</a></th>
                                    <th><a href="#">Nước ép</a></th>
                                    <th><a href="#">Trà sữa</a></th>
                                    <th><a href="#">Cocktail</a></th>

                                </tr>
                                <tr>
                                    <td><a href="#">Esspero</a></td>
                                    <td><a href="#">Dưa hấu</a></td>
                                    <td><a href="#">Kiwi</a></td>
                                    <td><a href="#">Cocktail B-52</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Esspero</a></td>
                                    <td><a href="#">Dưa hấu</a></td>
                                    <td><a href="#">Kiwi</a></td>
                                    <td><a href="#">Cocktail B-52</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Esspero</a></td>
                                    <td><a href="#">Dưa hấu</a></td>
                                    <td><a href="#">Kiwi</a></td>
                                    <td><a href="#">Cocktail B-52</a></td>
                                </tr>
                                <tr>
                                    <td><a href="#">Esspero</a></td>
                                    <td><a href="#">Dưa hấu</a></td>
                                    <td><a href="#">Kiwi</a></td>
                                    <td><a href="#">Cocktail B-52</a></td>
                                </tr>
                            </table>
                        </ul>
                    </li>
                    <li><a href="#">Tin tức</a></li>
                    <li><a href="#">Liên hệ</a></li>
                </ul>
            </div>
            
            <div class="acount">
                <div class="search">
                    <form action="search.php" method="GET">
                    <input type="text" placeholder="Search" name="key">
                    <input type="submit" name="search" value="Search">
                    </form>
                    
                </div>
                <div class="user">
                    <?php if(isset($user['user_name'])){?>
                    <i class='bx bxs-user' style='color:#fff9f9'></i>
                    <div class="login-form">
                        <h3><?php echo($user['user_name']);?></h3>
                        <!-- <a href="./login.php">Đăng nhập</a>
                        <a href="./register.php">Đăng kí</a> -->
                        <a href="./logout.php">Đăng xuất</a>
                    </div>
                    <?php }else {?>
                    <i class='bx bxs-user' style='color:#fff9f9'></i>
                    <div class="login-form">
                        <a href="./login.php">Đăng nhập</a>
                        <a href="./register.php">Đăng kí</a>
                    </div>
                    <?php }?>
                </div>
                <div class="cart">
                    <a href="#"><i class='bx bxs-cart' style='color:#ffffff'></i></a>
                </div>
            </div>
        </div>
    </div>
    <!-- end header -->
    <div class="content">
        <div class="top-content">
            <div class="container">
                <div class="top-content-item">
                    <a href="#"><img class="new-img" src="<?=PUBLIC_URL?>/img/2.jpg" alt="">
                        <span>Coffee hương vị mới</span>
                        <input type="button" value="Tìm hiểu">
                    </a>
                </div>
                <div class="top-content-item1">
                    <div class="top-content-item">
                        <a href="#"><img class="new-img1" src="<?=PUBLIC_URL?>/img/2.jpg" alt="">
                            <span>Coffee hương vị mới</span>
                            <input type="button" value="Tìm hiểu">
                        </a>
                    </div>
                    <div class="top-content-item">
                        <a href="#"><img class="new-img1" src="<?=PUBLIC_URL?>/img/2.jpg" alt="">
                            <span>Coffee hương vị mới</span>
                            <input type="button" value="Tìm hiểu">
                        </a>
                    </div>
                </div>

            </div>
        </div>
        <div class="mid-content">
            <div class="container">
                <h2>Khám phá menu</h2>
                <p>Có gì đặc biệt ở đây</p>
                <div class="container-item">
                    <div class="mid-content-item">
                        <div class="infor">
                            <div class="img">
                                <img src="<?=PUBLIC_URL?>/img/4.jpg" alt="">
                            </div>
                            <div class="text">
                                <div class="name">
                                    <a href="#">Cofee Latte</a>
                                </div>
                                <div class="price">
                                    <span>68.000Đ</span>
                                </div>
                                <div class="description">
                                    <p>------------------------------------------</p>
                                    <p>Cà phê đậm vị hơn với những nguyên liệu đặc biệt</p>
                                </div>
                            </div>
                        </div>
                        <div class="infor">
                            <div class="img">
                                <img src="./img/4.jpg" alt="">
                            </div>
                            <div class="text">
                                <div class="name">
                                    <a href="#">Cofee Latte</a>
                                </div>
                                <div class="price">
                                    <span>68.000Đ</span>
                                </div>
                                <div class="description">
                                    <p>------------------------------------------</p>
                                    <p>Cà phê đậm vị hơn với những nguyên liệu đặc biệt</p>
                                </div>
                            </div>
                        </div>

                    </div>
                    <div class="mid-content-item">
                        <div class="infor">
                            <div class="img">
                                <img src="./img/4.jpg" alt="">
                            </div>
                            <div class="text">
                                <div class="name">
                                    <a href="#">Cofee Latte</a>
                                </div>
                                <div class="price">
                                    <span>68.000Đ</span>
                                </div>
                                <div class="description">
                                    <p>------------------------------------------</p>
                                    <p>Cà phê đậm vị hơn với những nguyên liệu đặc biệt</p>
                                </div>
                            </div>
                        </div>
                        <div class="infor">
                            <div class="img">
                                <img src="./img/4.jpg" alt="">
                            </div>
                            <div class="text">
                                <div class="name">
                                    <a href="#">Cofee Latte</a>
                                </div>
                                <div class="price">
                                    <span>68.000Đ</span>
                                </div>
                                <div class="description">
                                    <p>------------------------------------------</p>
                                    <p>Cà phê đậm vị hơn với những nguyên liệu đặc biệt</p>
                                </div>
                            </div>
                        </div>

                    </div>
                </div>
                <div class="list-menu">
                    <a href="#">Xem thêm menu</a>
                </div>
            </div>
        </div>
        <div class="bot-content">

        </div>
    </div>
    <div class="footer">
        <div class="container">
            <div class="logo">
                <a href="./index.php"><img src="./img/logo.png" alt=""></a>
            </div>
            <div class="infor-footer">
                <div class="footer-item">
                    <h3>Kết nối với chúng tôi</h3>
                    <p>Chúng tôi mong muốn tạo nên hương vị thức uống tuyệt vời nhất. Là điểm đến đầu tiên dành cho bạn
                        khi muốn thưởng thức trọn vẹn của tách Coffee</p>
                </div>
                <div class="footer-item">
                    <h3>Kết nối với chúng tôi</h3>
                    <p>Chúng tôi mong muốn tạo nên hương vị thức uống tuyệt vời nhất. Là điểm đến đầu tiên dành cho bạn
                        khi muốn thưởng thức trọn vẹn của tách Coffee</p>
                </div>
                <div class="footer-item">
                    <h3>Kết nối với chúng tôi</h3>
                    <p>Chúng tôi mong muốn tạo nên hương vị thức uống tuyệt vời nhất. Là điểm đến đầu tiên dành cho bạn
                        khi muốn thưởng thức trọn vẹn của tách Coffee</p>
                </div>
                <div class="footer-item">
                    <h3>Kết nối với chúng tôi</h3>
                    <p>Chúng tôi mong muốn tạo nên hương vị thức uống tuyệt vời nhất. Là điểm đến đầu tiên dành cho bạn
                        khi muốn thưởng thức trọn vẹn của tách Coffee</p>
                </div>
            </div>
            
           
            
        </div>
    </div>
    <div class="back-to-top">
        <button onclick="back_to_top()" id="back-to-top"><i class='bx bx-chevrons-up bx-fade-up'></i></i></button>
    </div>
    <script>
        var nav = document.querySelector('.nav');
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
        function back_to_top() {
            document.body.scrollTop = 0;
            document.documentElement.scrollTop = 0;
        }
    </script>
</body>

</html>