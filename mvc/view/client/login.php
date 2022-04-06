<?php
    require_once('./../../Model/database.php');
    session_start();
    $conn = new databse();
    $conns = $conn->database();
    $err = [];
    if(isset($_POST['login'])){
        $user_name = $_POST['username'];
        $Password = $_POST['password'];
        $sqllogin = "SELECT * FROM manage_user WHERE user_name = '$user_name'";
        $stmt = $conns->prepare($sqllogin);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);

        if($result){
           if (password_verify($Password,$result['password'])) {
               $_SESSION['user'] = $result;
              header('Location: index.php');
           }else{
            $err['password'] = "Sai mật khẩu";
           }
        }else{
            $err['username'] = "User name không tồn tại";
        }
    }

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
                    <li><a href="./index.php">Trang chủ</a></li>
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
                        <a href="./login.php">Đăng nhập</a>
                        <a href="./register.php">Đăng kí</a>
                    </div>
                </div>
                <div class="cart">
                    <a href="#"><i class='bx bxs-cart' style='color:#ffffff'></i></a>
                </div>
            </div>
        </div>

    </div>
    <div class="content-item">
        <div class="container">
            <div class="login">
                <h1>Đăng nhập</h1>
                <form action="" method="post">
                    <div class="form-control">
                        <input type="text" placeholder="Username" name="username">
                        <span></span>
                        <small><?php echo(isset($err['username']))?$err['username']:''?></small>
                    </div>
                    <div class="form-control">
                        <input type="password" placeholder="Password" name="password">
                        <span></span>
                        <small><?php echo(isset($err['password']))?$err['password']:''?></small>
                    </div>
                    <input type="submit" value="Login" name="login">
                    <div class="signup_link">
                        Not a member?
                        <a href="./register.php">Signup</a>
                        or
                        <a href="#">Fogot password</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <div class="footer-login">
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
</body>

</html>