<?php

class databse {
    public function database ()
    {
                //sever chứa database
                $host = "localhost";
                //tên cơ sở dữ liệu
                $dbname = "huy_php";
                //tài khoản truy cập database
                $username = "root";
                //Mật khẩu truy cập 
                $password = "";
                try {
                    //sử dụng PDO để kết nối dữ liệu
                    $conn = new PDO("mysql:host=$host;dbname=$dbname",$username ,$password);
                    $conn -> setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
                    return $conn;
                } catch (PDOException $e) {
                    //nếu kết nối dữ liệu có 
                    echo"lỗi không thể kết nối<br>";
                    echo "thông tin lỗi" .$e -> getMessage();
                }
                $url = $_SERVER;
    }
} 