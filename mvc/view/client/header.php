<?php
    // session_start();
    // if(isset($_SESSION['giohang'])) $slsp=sizeof($_SESSION['giohang'])
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link rel="stylesheet" href="./css/check-out.css">
    <link rel="stylesheet" href="../../../public/fontawesome-free-6.0.0/css/all.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="css/css.css">
    <link rel="stylesheet" href="../../../public/css/css1.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src="./js/thuvien.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <!-- <script>
        $(document).ready(function () {
            $(".dathang").click(function (e) { 
                e.preventDefault();
                    var boxsp = $(this).parent().parent();
                    var tensp = boxsp.children("a").text();
                    var dongia = boxsp.children("p").children("span").text();
                    var soluong = boxsp.children("form").children("input").val();
                    var hinhanh= boxsp.children("div").children("img").attr("src");
                    $.post("addcart.php", {
                        tensp:tensp,
                        dongia:dongia,
                        soluong:soluong,
                        hinhanh:hinhanh
                    },
                        function (result) {
                            var countsp = $("#carticon");
                            countsp.text(result);
                        }
                    );
            });
        });
    </script> -->
</head>

<body>
    <div class="header">
        <div class="logo">
            <img src="../../../public/img/logo.png" alt="" class="image_logo">
        </div>
        <div class="nav">
            <ul>
                <li><a href="../../../index.php">Trang Chủ</a></li>
                <li><a href="">Giới Thiệu</a></li>
                <li>
                    <a href="./controller_view.php">Sản Phẩm</a>
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
                                <img src="../../../public/img/mega-menu-images1.webp" alt="" class="image_menu">
                            </div>
                            <div class="imga">
                                <img src="../../../public/img/mega-menu-images2.webp" alt="" class="image_menu">
                            </div>
                        </div>
                    </div>
                </li>
                <li><a href="">Tin Tức</a></li>
                <li><a href="">Liên Hệ</a></li>
            </ul>
        </div>
        <div class="buy">
            <div class="search">
                <i class="fa-solid fa-magnifying-glass"></i>
            </div>
            <div class="cart">
                <a href="./controller_view.php?act=addtocart"><i class="fa-solid fa-cart-shopping"></i></a>
            </div>
            <div class="user">
                <i class="fa-solid fa-user"></i>
                <div class="option">
                    <div class="xx"></div>
                    <ul>
                        <li><a href="login">Đăng Nhập</a></li>
                        <li><a href="">Đăng Xuất</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>