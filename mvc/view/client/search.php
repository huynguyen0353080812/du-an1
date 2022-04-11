<?php 
    session_start();
    require_once('./../../Model/database.php');
    include "../../Model/pdo.php";
    include "../../Model/sanpham.php";
    include "../../Model/danhmuc.php";
    include "global.php";
    include "header.php";

    $conn = new databse();
    $conns = $conn->database();

    // var_dump($conns);
    // die;
    if(isset($_GET['search'])){
        $key = $_GET['key'];
        $sql_search = "SELECT * FROM `prodcts_sale` WHERE `products_name` LIKE '%$key%'";
            // var_dump($sql_search);
            // die;
        $stmt = $conns->prepare($sql_search);
        $stmt->execute();
        
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        // die;
    }
    
?>
    <div class="container-product">
        <div class="row">
            <div class="col-3 primary">
                <div class="sidenav">
                    <div class="aside-title">
                        <h2><span>DANH MỤC</span></h2>
                    </div>
                    <?php
                        $dsdm=loadall_danhmuc();
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm="controller_view.php?act=product&iddm=".$id;
                            echo   '<a href="'.$linkdm.'">
                                        <button class="dropdown-btn">'.$name.'</button>
                                    </a>';
                        }
                    ?>
                    
                    <button class="dropdown-btn">Nước ép
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <button class="dropdown-btn">Trà sữa
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <button class="dropdown-btn">Cocktail
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div>
                    <a href="#contact">Search</a>
                </div>
            </div>
            <div class="col-9 warning">
                <div class="sortBar">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8"></div>
                        <div class="col-2">
                            <div class="btn-group ">
                                <button type="button" class="btn btn-warning dropdown-toggle color-333" data-bs-toggle="dropdown" aria-expanded="false">
                                    Sắp xếp
                                </button>
                                <ul class="dropdown-menu">
                                    <li><a class="dropdown-item" href="#">Mặc định</a></li>
                                    <li><a class="dropdown-item" href="#">A -> Z</a></li>
                                    <li><a class="dropdown-item" href="#">Z -> A</a></li>
                                    <li><a class="dropdown-item" href="#">Giá tăng dần</a></li>
                                    <li><a class="dropdown-item" href="#">Giá giảm dần</a></li>
                                    <li><a class="dropdown-item" href="#">Hàng mới nhất</a></li>
                                    <li><a class="dropdown-item" href="#">Hàng cũ nhất</a></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="product-view">
                    <div class="row">
                    <?php if($result){
        foreach($result as $value){
            extract($value);
            global $img_path;
            $hinh = $img_path . $image;
            echo '<div class="col-4 border-1">
                    <p class="product-price"><span>' . $value['price'] . '</span>VNĐ</p>
                    <div class="img-product">
                        <img src="' . $hinh . '" alt="">
                    </div>
                    <div class="product-name">
                        <a href="#">' . $value['products_name'] . '</a>
                    </div>
                    <form action="controller_view.php?act=addtocart" method="post">
                        <input type="number" name="soluong" min="1" max="10" value="1">
                        <input type="hidden" name="id" value="'.$value['id'].'">
                        <input type="hidden" name="products_name" value="'.$value['products_name'].'">
                        <input type="hidden" name="image" value="'.$image.'">
                        <input type="hidden" name="price" value="'.$value['price'].'"> 
                        <input class="btn btn-warning float-end" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                    </form>
                    <br>
                    </div>';
        }
        } ?>
        
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <button class="dathang btn btn-warning float-end color-333">Thêm vào giỏ hàng</button> -->
