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
                    .search_input{
                        position: absolute;
                        right: 18%;
                        width: 100px;
                        top: 54%;
                        height: 100px;
                        display: none;
                    }
                    .search:hover .search_input{
                        display:block;
                    }
                </style>
                <div class="buy">
                    <div class="search">
                        <i class="fa-solid fa-magnifying-glass"></i>
                        <div class="search_input">
                            <form action="search" method="GET">
                            <input type="text" placeholder="Search" name="key" style="margin-top: 17px;margin-left: -100px;">
                            <input type="submit" name="search" style = "display:none">
                            </form>
                        </div>
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
                        </style>
                            <div class="infomation_user">
                                <div class="avatar">
                                    <img src="<?= PUBLIC_URL ?>img/module_banner3.png" alt=""class ="bbb"> 
                                </div>
                                <p><?php echo $_SESSION['user_name']['user_name'] ?></p>
                                <div class="option" style="margin-right:-20px;">
                                <div class="xx"></div>
                                <ul>
                                    <li><a href="manage_user?id=<?= $_SESSION['user_name']['id'] ?>">Thông Tin Tài</a></li>
                                    <li><a href="manger_bill">Thông Tin Đơn</a></li>
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
                <img src="<?= PUBLIC_URL ?>img/3.jpg" alt="" class="image_banner">
            </div>
        </header>
        <section>
            <div class="block1">
                <div class="image">
                    <img src="<?= PUBLIC_URL ?>img/module_banner1.webp" alt="" class="module_banner1">
                </div>
                <div class="xx"></div>
                <div class="title">
                    <h1>Coffee hương vị mới</h1>
                    <div class="box">
                        <span>Tìm Hiều Thêm</span>
                    </div>
                </div>
            </div>
            <div class="block2">
                <div class="smallblock1">
                    <div class="image">
                        <img src="<?= PUBLIC_URL ?>img/module_banner2.png" alt="" class="module_banner1">
                    </div>
                    <div class="xx"></div>
                    <div class="title">
                        <h1>Coffee hương vị mới</h1>
                        <div class="box">
                            <span>Tìm Hiều Thêm</span>
                        </div>
                    </div>
                </div>
                <div class="smallblock2">
                    <div class="image">
                        <img src="<?= PUBLIC_URL ?>img/module_banner3.png" alt="" class="module_banner1">
                    </div>
                    <div class="xx"></div>
                    <div class="title">
                        <h1>Coffee hương vị mới</h1>
                        <div class="box">
                            <span>Tìm Hiều Thêm</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <article>
            <img src="<?= PUBLIC_URL ?>img/bg-section.webp" alt="" class="image_content">
            <div class="title">
                <h2>Khám phá menu</h2>
            </div>
            <div class="content">
                <div class="products">
                    <div class="image">
                        <img src="<?= PUBLIC_URL ?>img/product6.webp" alt="" class="image_products">
                    </div>
                    <div class="detail_price">
                        <div class="price">
                            <p>CAFE ICE LATTE</p>
                            <p>60.000₫</p>
                        </div>
                        <div class="infomation_pro">
                            <p>Cà phê đậm phong cách Ý được phối hợp với kem giúp giữ hương vị và tạo sự thơm ngon.</p>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <div class="image">
                        <img src="<?= PUBLIC_URL ?>img/product4.webp" alt="" class="image_products">
                    </div>
                    <div class="detail_price">
                        <div class="price">
                            <p>CAFE ICE LATTE</p>
                            <p>60.000₫</p>
                        </div>
                        <div class="infomation_pro">
                            <p>Cà phê đậm phong cách Ý được phối hợp với kem giúp giữ hương vị và tạo sự thơm ngon.</p>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <div class="image">
                        <img src="<?= PUBLIC_URL ?>img/product3.webp" alt="" class="image_products">
                    </div>
                    <div class="detail_price">
                        <div class="price">
                            <p>CAFE ICE LATTE</p>
                            <p>60.000₫</p>
                        </div>
                        <div class="infomation_pro">
                            <p>Cà phê đậm phong cách Ý được phối hợp với kem giúp giữ hương vị và tạo sự thơm ngon.</p>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <div class="image">
                        <img src="<?= PUBLIC_URL ?>img/product2-10b0f2e1-6277-49c7-95ba-ceaac7f11091.webp" alt="" class="image_products">
                    </div>
                    <div class="detail_price">
                        <div class="price">
                            <p>CAFE ICE LATTE</p>
                            <p>60.000₫</p>
                        </div>
                        <div class="infomation_pro">
                            <p>Cà phê đậm phong cách Ý được phối hợp với kem giúp giữ hương vị và tạo sự thơm ngon.</p>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <div class="image">
                        <img src="<?= PUBLIC_URL ?>img/product5.webp" alt="" class="image_products">
                    </div>
                    <div class="detail_price">
                        <div class="price">
                            <p>CAFE ICE LATTE</p>
                            <p>60.000₫</p>
                        </div>
                        <div class="infomation_pro">
                            <p>Cà phê đậm phong cách Ý được phối hợp với kem giúp giữ hương vị và tạo sự thơm ngon.</p>
                        </div>
                    </div>
                </div>
                <div class="products">
                    <div class="image">
                        <img src="<?= PUBLIC_URL ?>img/product1.webp" alt="" class="image_products">
                    </div>
                    <div class="detail_price">
                        <div class="price">
                            <p>CAFE ICE LATTE</p>
                            <p>60.000₫</p>
                        </div>
                        <div class="infomation_pro">
                            <p>Cà phê đậm phong cách Ý được phối hợp với kem giúp giữ hương vị và tạo sự thơm ngon.</p>
                        </div>
                    </div>
                </div>
                <span>
                    <p>Xem thêm menu</p>
                </span>
            </div>
        </article>
        <aside>
            <!-- <h1></h1> -->
            <div class="container">
                <div class="title-text text-center">
                    <h1>Coffee là hương vị của bạn</h1><br>
                    <p>Có gì bất ngờ tại đây</p>
                </div>
                <div class="small_box">
                    <div class="swiper">
                        <div class="swiper-wrapper">
                            <?php foreach ($result as $key => $value): ?>
                                <div class="swiper-slide">
                                    <div class="products_detail">
                                        <div class="box1" data-id= <?php echo $value['id'] ?>>
                                            <i class="fa-solid fa-cart-arrow-down"></i>
                                        </div>
                                        <div class="box2">
                                            <a href="product_details?id=<?php echo  $value['id']?>"><i class="fa-solid fa-eye"></i></a>
                                        </div>
                                        <div class="image">
                                            <img src="<?= PUBLIC_URL ?>img/<?php echo $value['image'] ?>" alt="" class="image_products1">
                                        </div>
                                        <div class="price_products">
                                            <p><?php echo number_format($value['price'],0,",",".") ?></p>
                                        </div>
                                        <div class="name_products">
                                            <p><?php echo $value['products_name'] ?></p>
                                        </div>

                                    </div>
                                </div>
                            <?php endforeach; ?>
                            <div class="swiper-slide">
                                <div class="products_detail">
                                    <div class="image">
                                        <img src="<?= PUBLIC_URL ?>img/product4-ce.webp" alt="" class="image_products1">
                                    </div>
                                    <div class="price_products">
                                        <p>200000</p>
                                    </div>
                                    <div class="name_products">
                                        <p>200000</p>
                                        <p>VIETNAMESE COFFEE</p>
                                    </div>
                                </div>
                            </div>
                            
                            <!-- <div class="swiper-slide">Resize me!</div>
                            <div class="swiper-slide">Resize me!</div> -->
                        </div>
                        <div class="swiper-button-next"></div>
                        <div class="swiper-button-prev"></div>
                    </div>
                    <!-- <div class="products_detail">
                        <div class="image">
                            <img src="<?= PUBLIC_URL ?>img/product1-8e.webp" alt="" class="image_products1">
                        </div>
                        <div class="name_products">
                            <p>200000</p>
                            <p>VIETNAMESE COFFEE</p>
                        </div>
                    </div>
                    <div class="products_detail">
                        <div class="image">
                            <img src="<?= PUBLIC_URL ?>img/product2-9.webp" alt="" class="image_products1">
                        </div>
                        <div class="name_products">
                            <p>200000</p>
                            <p>VIETNAMESE COFFEE</p>
                        </div>
                    </div>
                    <div class="products_detail">
                        <div class="image">
                            <img src="<?= PUBLIC_URL ?>img/product3-e4.webp" alt="" class="image_products1">
                        </div>
                        <div class="name_products">
                            <p>200000</p>
                            <p>VIETNAMESE COFFEE</p>
                        </div>
                    </div>
                    <div class="products_detail">
                        <div class="image">
                            <img src="<?= PUBLIC_URL ?>img/product4-ce.webp" alt="" class="image_products1">
                        </div>
                        <div class="name_products">
                            <p>200000</p>
                            <p>VIETNAMESE COFFEE</p>
                        </div>
                    </div> -->

                </div>
            </div>
        </aside>
        <div class="news">
            <div class="container">
                <div class="small_box">
                    <div class="title">
                        <h2>Quy trình làm COFFEE</h2>
                        <p>Chúng tôi muốn bạn tự hào cho chính bản thân mình hương vị cà phê theo ý thích. Đó là bản
                            chất cơ bản nhất để có những tách cà phê thơm ngon nhất</p>
                        <div class="botum">
                            <p>Khám Phá Thêm</p>
                        </div>
                    </div>
                    <div class="image">
                        <img src="<?= PUBLIC_URL ?>img/icon-cf.webp" alt="">
                    </div>
                </div>
                <div class="small_box">
                    <img src="<?= PUBLIC_URL ?>img/blog3.webp" alt="" style="width: 100%;height: 100%;">
                </div>
            </div>
        </div>
        <div class="news1">
            <div class="small_box">
                <div class="title">
                    <h1>Tin Tức</h1>
                    <p>Mỗi tuần là mỗi một câu chuyện ấm áp, mỗi tuần là một câu chuyện tình. Nào cùng thưởng thức cà
                        phê và đọc nhé!</p>
                </div>
                <div class="content">
                    <div class="box">
                        <div class="image">
                            <img src="<?= PUBLIC_URL ?>img/blog3.webp" alt="">
                        </div>
                        <div class="content">
                            <h5>CHẾ BIẾN CÀ PHÊ</h5>
                            <P>cà phê sạch đơn giảm 10% cà phê, không pha trộn thêm chất</P>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="<?= PUBLIC_URL ?>img/blog3.webp" alt="">
                        </div>
                        <div class="content">
                            <h5>CHẾ BIẾN CÀ PHÊ</h5>
                            <P>cà phê sạch đơn giảm 10% cà phê, không pha trộn thêm chất</P>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="<?= PUBLIC_URL ?>img/blog3.webp" alt="">
                        </div>
                        <div class="content">
                            <h5>CHẾ BIẾN CÀ PHÊ</h5>
                            <P>cà phê sạch đơn giảm 10% cà phê, không pha trộn thêm chất</P>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="feddback">
            <div class="image">
                <img src="<?= PUBLIC_URL ?>img/bg-section-danhgia.webp" alt="" class="module_banner2">
            </div>
            <div class="content">
                <div class="title">
                    <h2>Khách hàng nói gì</h2>
                </div>
                <div class="feddback_user">

                    <!-- <div class="swiper mySwiper_pro">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="avatar"></div>
                                <span>name</span>
                                <p>ngon vl</p>
                            </div>
                            <div class="swiper-slide">
                                <div class="avatar"></div>
                                <span>name</span>
                                <p>ngon vl</p>
                            </div>
                            <div class="swiper-slide">
                                <div class="avatar"></div>
                                <span>name</span>
                                <p>ngon vl</p>
                            </div>
                            <div class="swiper-slide">
                                <div class="avatar"></div>
                                <span>name</span>
                                <p>ngon vl</p>
                            </div>
                            <div class="swiper-slide">Slide 5</div>
                            <div class="swiper-slide">Slide 6</div>
                            <div class="swiper-slide">Slide 7</div>
                            <div class="swiper-slide">Slide 8</div>
                            <div class="swiper-slide">Slide 9</div>
                        </div>
                        <div class="swiper-pagination-bnt"></div>
                    </div> -->
                </div>
            </div>
        </div>
        <div class="introduce">
            <div class="content">
                <div class="title">
                    <h2>Vì sao nên chọn HaluCafe</h2>
                    <p>Không những mang đến sự tuyệt vời thông qua các thức uống bí mật mà hơn thế nữa là cảm giác bạn
                        tận hưởng được chỉ khi đến với Halu Cafe.</p>
                </div>
                <div class="infomation">
                    <div class="box">
                        <div class="image">
                            <img src="<?= PUBLIC_URL ?>img/infomation.webp" alt="">
                        </div>
                        <div class="title">
                            <h5>COFFEE NGUYÊN CHẤT</h5>
                        </div>
                        <div class="content">
                            <p>Hạt cà phê được thu hoạch và rang xay theo quy trình khép kín đúng công thức đặc biệt đảm
                                bảo tính nguyên chất.</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="<?= PUBLIC_URL ?>img/infomation2.webp" alt="">
                        </div>
                        <div class="title">
                            <h5>COFFEE NGUYÊN CHẤT</h5>
                        </div>
                        <div class="content">
                            <p>Hạt cà phê được thu hoạch và rang xay theo quy trình khép kín đúng công thức đặc biệt đảm
                                bảo tính nguyên chất.</p>
                        </div>
                    </div>
                    <div class="box">
                        <div class="image">
                            <img src="<?= PUBLIC_URL ?>img/infomation3.webp" alt="">
                        </div>
                        <div class="title">
                            <h5>COFFEE NGUYÊN CHẤT</h5>
                        </div>
                        <div class="content">
                            <p>Hạt cà phê được thu hoạch và rang xay theo quy trình khép kín đúng công thức đặc biệt đảm
                                bảo tính nguyên chất.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
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
    <script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
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
        // alert('huynguyen');
        scrollFunction();
        function back_to_top() {
            document.body.scrollTop = 0;
            $('html, body').animate({
                scrollTop:0
            },1000);
        }
    </script>
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
                        var id_pro = $(this).data('id');
                        $.ajax({
                            url: "cart",
                            method:"GET",
                            data:{
                                id:id_pro,
                                sss:null
                            },  
                            success:function(data){
                                $('html, body').animate({
                                    scrollTop:0
                                },1000);
                                show_cart();
                            }
                        });
                });
            });
        </script>
</body>

</html>