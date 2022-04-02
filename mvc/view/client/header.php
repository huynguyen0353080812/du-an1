<?php
    session_start();
    if(isset($_SESSION['giohang'])) $slsp=sizeof($_SESSION['giohang'])
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link rel="stylesheet" href="./css/bootstrap.css">
    <link rel="stylesheet" href="./css/product.css">
    <link rel="stylesheet" href="./css/cart.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <script src="./js/thuvien.js"></script>
    <script src="./js/bootstrap.min.js"></script>
    <script src="./js/bootstrap.bundle.min.js"></script>
    <script src="./js/jquery.min.js"></script>
    <script>
        $(document).ready(function () {
            $(".dathang").click(function (e) { 
                e.preventDefault();
                    var boxsp = $(this).parent();
                    var tensp = boxsp.children("a").text();
                    var dongia = boxsp.children("p").children("span").text();
                    var soluong = boxsp.children("input").val();
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
    </script>
</head>

<body>
    <div class="nav-control">
        <div class="container">
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
                    <input type="text" placeholder="Search">
                </div>
                <div class="user">
                    <i class='bx bxs-user' style='color:#fff9f9'></i>
                    <div class="login-form">
                        <a href="#">Đăng nhập</a>
                        <a href="#">Đăng kí</a>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class='bx bxs-cart' style='color:#ffffff'>
                            <div class="boxcart" id="boxcart">
                                <span id="carticon" class="badge bg-danger rounded-pill"><?=$slsp?></span>
                            </div>
                        </i></a>
                </div>
            </div>
        </div>

    </div>