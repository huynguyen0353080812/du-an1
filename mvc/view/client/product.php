    <div class="container-product">
        <div class="row">
            <div class="col-3 primary">

            </div>
            <div class="col-9 warning">
                <div class="sortBar">
                    <div class="row">
                        <div class="col-2"></div>
                        <div class="col-8"></div>
                        <div class="col-2">
                            <div class="btn-group ">
                                <button type="button" class="btn btn-warning dropdown-toggle" data-bs-toggle="dropdown"
                                    aria-expanded="false">
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
                            foreach ($spnew as $sp){
                                extract($sp);
                                $hinh=$img_path.$image;
                                echo '<div class="col-4 border-1">
                                        <p class="product-price"><span>'.$price.'</span>VNĐ</p>
                                        <div class="img-product">
                                            <img src="'.$hinh.'" alt="">
                                        </div>
                                        <div class="product-name">
                                            <a href="#">'.$products_name.'</a>
                                        </div>
                                        <input type="number" name="soluong" min="1" max="10" value="1">
                                        <button class="dathang btn btn-warning float-end">Đặt hàng</button>
                                        <br>
                                        <br>
                                    </div>';
                            }
                        ?>
                    </div>
                </div>
            </div>
        </div>
    </div>