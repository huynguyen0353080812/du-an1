    <div class="container-cart">
        <!-- <div class="boxcart" id="boxcart">
            <img src="img/cart.png" class="carticon"><span></span>
        </div> -->
        <div class="boxcenter">
            <table class="table">
                <thead class="thead-warning">
                    <tr>
                        <th>Sản phẩm</th>
                        <th>Hình</th>
                        <th>Đơn giá</th>
                        <th>Số lượng</th>
                        <th>Thành tiền</th>
                        <th>Xóa</th>
                    </tr>
                </thead>
                <tbody id="giohang">
                    <?php
                        $tong=0;
                        $i=0;
                        foreach ($_SESSION['mycart'] as $cart) {
                            $hinh = $img_path.$cart[2];
                            $ttien=$cart[3]*$cart[4];
                            $tong+=$ttien;
                            $xoasp='<a href="controller_view.php?act=delcart&idcart='.$i.'"><input type="button" class="btn btn-danger" value="Xóa"></a>';
                            echo '<tr>
                                    <td>'.$cart[1].'</td>
                                    <td><img src="'.$hinh.'"></td>
                                    <td>'.$cart[3].'</td>
                                    <td>'.$cart[4].'</td>
                                    <td>'.$ttien.'</td>
                                    <td>'.$xoasp.'</td>
                                </tr>';
                            $i+=1;
                        }
                    ?>
                </tbody>
                <?php       
                    echo '  <tbody id="tongdonhang">
                                <tr>
                                    <td colspan="4">Tổng đơn hàng</td>
                                    <td>'.$tong.'</td>
                                    <td></td>
                                </tr>
                            </tbody>';
                ?> 
                    <!-- <tr>
                        <td>Sản phẩm 2</td>
                        <td><img src="img/cocktail-b52.jpg"></td>
                        <td>200</td>
                        <td><input type="number" min="1" max="10" value="2" class="num"></td>
                        <td>400</td>
                        <td><img src="img/removeicon.png" class="remo"></td>
                    </tr> -->
            </table>
            <div class="row">
                <div class="col-3">
                    <a href="./controller_view.php"><button type="button" class="btn btn-warning">TIẾP TỤC MUA HÀNG</button></a>
                </div>
                <div class="col-5"></div>
                <div class="col-4">
                    <a href="./check-out.html"><button type="button" class="btn-lg btn-warning">TIẾN HÀNH THANH TOÁN</button></a>
                </div>
            </div>
        </div>
    </div>
</body>

</html>