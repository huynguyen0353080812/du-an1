    <div class="container-product">
        <div class="row">
            <div class="col-3 primary">
                <div class="sidenav">
                    <div class="aside-title">
                        <h2><span>DANH MỤC</span></h2>
                    </div>
                    <?php
                        foreach ($dsdm as $dm) {
                            extract($dm);
                            $linkdm="controller_view.php?act=product&iddm=".$id;
                            echo   '<a href="'.$linkdm.'">
                                        <button class="dropdown-btn">'.$name.'</button>
                                    </a>';
                        }
                    ?>
                    
                    <!-- <button class="dropdown-btn">Nước ép
                        <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-container">
                        <a href="#">Link 1</a>
                        <a href="#">Link 2</a>
                        <a href="#">Link 3</a>
                    </div> -->
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
                        <?php
                        foreach ($spnew as $sp) {
                            extract($sp);
                            $hinh = $img_path . $image;
                            echo '<div class="col-4 border-1">
                                        <p class="product-price"><span>' . $price . '</span>VNĐ</p>
                                        <div class="img-product">
                                            <img src="' . $hinh . '" alt="">
                                        </div>
                                        <div class="product-name">
                                            <a href="">' . $products_name . '</a>
                                        </div>
                                        <form action="controller_view.php?act=addtocart" method="post">
                                            <input type="number" name="soluong" min="1" max="10" value="1">
                                            <input type="hidden" name="id" value="'.$id.'">
                                            <input type="hidden" name="products_name" value="'.$products_name.'">
                                            <input type="hidden" name="image" value="'.$image.'">
                                            <input type="hidden" name="price" value="'.$price.'"> 
                                            <input class="btn btn-warning float-end" type="submit" name="addtocart" value="Thêm vào giỏ hàng">
                                        </form>
                                        <br>
                                    </div>';
                        }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- <button class="dathang btn btn-warning float-end color-333">Thêm vào giỏ hàng</button> -->