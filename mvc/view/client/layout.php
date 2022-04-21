<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>fontawesome-free-6.0.0/css/all.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>css/user.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css" />
    <link rel="stylesheet" href="<?= PUBLIC_URL ?>css/style.css">
</head>

<body>
    <div class="wrapper">
        <header>
            <div class="header">
                <div class="logo">
                    <img src="<?= PUBLIC_URL ?>/img/logo.png" alt="" class="image_logo">
                </div>
                <div class="nav">
                    <ul>
                        <li><a href="<?php  echo BASE_URL ?>">Trang Chủ</a></li>
                        <li><a href="">Giới Thiệu</a></li>
                        <li>
                            <a href="">Sản Phẩm</a>
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
                                        <img src="<?= PUBLIC_URL ?>/img/mega-menu-images1.webp" alt="" class="image_menu">
                                    </div>
                                    <div class="imga">
                                        <img src="<?= PUBLIC_URL ?>/img/mega-menu-images2.webp" alt="" class="image_menu">
                                    </div>
                                </div>
                            </div>
                        </li>
                        <li><a href="">Tin Tức</a></li>
                        <li><a href="">Liên Hệ</a></li>
                    </ul>
                </div>
                <style>
                    .cart span  {
                        width: 19px;
                        /* left: 300px;
                        bottom: 38px; */
                        top: 35px;
                        right:224px;
                        height: 19px;
                        background: #fed700;
                        position: absolute;
                        border-radius:50%;
                        text-align: center;
                                            
                    }
                    .option {
                        position: absolute;
                        display: none;
                        width: 113px;
                        height: 60px;
                        right: 74px;    
                        margin-top: 7px;
                        /* margin-right: 130px; */
                        background: #fff;
                        border-radius: 3px;
                    }
                    .option ul{
                        margin-top:0px;
                        margin-left:-16px;
                    }
                    .option .xx {
                        margin-top: -5px;
                    }
                </style>
                <div class="buy">
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                    </div>
                    <div class="cart">
                        
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
                            <style>
                                .cart span {
                                    margin-right: -10px;
                                }
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
                                margin-left: 10px;
                            }
                            .infomation_user .avatar .bbb{
                                display: block;
                                width: 100%;
                                height: 100%;
                                object-fit: cover;
                            }
                                .option {
                                    position: absolute;
                                    /* display: none; */
                                    width: 137px;
                                    height: 252px;
                                    right: 51px;
                                    margin-top: 7px;
                                    /* margin-right: 130px; */
                                    background: #fff;
                                    border-radius: 3px;
                                    /* left: 20%; */
                                    margin-top: -13px;
                                    box-shadow: 0 4px 8px 0 rgb(0 0 0 / 20%), 0 6px 20px 0 rgb(0 0 0 / 19%);
                                }
                            </style>
                            <div class="infomation_user">
                                <div class="avatar">
                                    <img src="<?= PUBLIC_URL ?>img/module_banner3.png" alt=""class ="bbb"> 
                                </div>
                                <p style = "margin-top: 46px;"><?php echo $_SESSION['user_name']['user_name'] ?></p>
                                <div class="option" style="margin-right: -87px;">
                                <div class="xx"></div>
                                <ul style="margin-left: -24px;">
                                    <li><a href="page_login">Thông Tin Tài</a></li>
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
                    <img src="<?= PUBLIC_URL ?>/img/header_category1_image.jpg" alt="">
                    <span>Coffee</span>
                </div>
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>/img/header_category2_image.webp" alt="">
                    <span>Coffee</span>
                </div>
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>/img/header_category3_image.webp" alt="">
                    <span>Coffee</span>
                </div>
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>/img/header_category4_image.webp" alt="">
                    <span>Coffee</span>
                </div>
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>/img/header_category5_image.webp" alt="">
                    <span>Coffee</span>
                </div>
                <div class="block_category">
                    <img src="<?= PUBLIC_URL ?>/img/header_category6_image.webp" alt="">
                    <span>Coffee</span>
                </div>
            </div>
            <div class="banner">
                <!-- <img src="<?= PUBLIC_URL ?>/img/3.jpg" alt="" class="image_banner"> -->
            </div>
        </header>
        <script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
        <script>
            $(document).ready(function () {
                // alert('huy');
                show_cart();
                function show_cart () {
                    // alert('huy');   
                    $.ajax({
                        url: "cartquantity",
                        method:"GET",
                        success:function(data) {
                            $('.cart').html(data);
                        }
                    });
                }
                $('.box1').on('click',function() {
                    // alert('huy');
                        var id_pro = $(this).data('id');
                        // alert(id);
                        $.ajax({
                            url: "cart",
                            method:"GET",
                            data:{
                            //key => value
                                id:id_pro,
                                sss:null
                            },  
                            success:function(data){
                                // alert(data)
                                // alert("insert thành công"+data);
                                $('html, body').animate({
                                    scrollTop:0
                                },1000);
                                show_cart();
                            }
                        });
                });
            });
        </script>