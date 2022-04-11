<?php
    require_once('./../../Model/database.php');     
    $conn = new databse();
    $conns = $conn->database();
    // if(isset($_GET['id'])){
    //     $id = $_GET['id'];
    // }else{
    //     $id = '';
    // }
    $sql_chitiet = "SELECT * FROM prodcts_sale where id = 49";
    $stmt = $conns->prepare($sql_chitiet);
    $stmt->execute();
    $result = $stmt->fetch(PDO::FETCH_ASSOC);
    // var_dump($result);
    // die;
?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="./style.css">
    <link href='https://unpkg.com/boxicons@2.1.2/css/boxicons.min.css' rel='stylesheet'>
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
                        <a href="./login.html">Đăng nhập</a>
                        <a href="./register.html">Đăng kí</a>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class='bx bxs-cart' style='color:#ffffff'></i></a>
                </div>
            </div>
        </div>

    </div>
    
    <div class="content">
        <div class="container">
            <div class="container-product_details">
                <div class="img-product_details">
                    <img src="./img/<?php echo($result['image']);?>" alt="">
                </div>
                <div class="infor-product_details">
                    <div class="name-product_details">
                        <h2><?php echo($result['products_name']);?></h2>
                    </div>
                    <div class="status-product_details">
                        <p>Tình trạng:<span>Còn hàng</span></p>
                    </div>
                    <div class="price-product_details">
                        <span><?php  echo number_format(($result['price'])).' vnđ';?></span>
                    </div>
                    <div class="quantity-product_details">
                        <form action="#">
                            <div class="table-quantity">
                                <table>
                                    <tr>
                                        <td><input type="button" value="-"></td>
                                        <td><span>1</span></td>
                                        <td><input type="button" value="+"></td>
                                    </tr>
                                </table>
                                <input type="submit" value="Đặt hàng">
                            </div>
                            
                        </form>
                    </div>
                    <div class="description-product_details">
                        <p><?php echo($result['content']);?></p>
                    </div>
                </div>
            </div>
            <div class="comment">
                <form action="#">
                    <input type="text" placeholder="Viết bình luận">
                    <input type="submit" value="Gửi">
                </form>
            </div>
        </div>

    </div>
    <div class="footer-product_details">
        <div class="container">
            <div class="logo">
                <a href="./index.html"><img src="./img/logo.png" alt=""></a>
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
</body>

</html>