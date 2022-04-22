<?php include_once("mvc/view/client/layout.php"); ?>
<link rel="stylesheet" href="<?= PUBLIC_URL ?>css/buil.css">
<style>
    .infomation_bill{
        /* display: grid;
        grid-template-columns: repeat(3,1fr); */
        /* align-items: center;
        justify-content: center;
        grid-gap: 30px; */
    }
    .total ul{
       position: absolute;
       right: 5%;
       list-style: none;
    }
    .total ul li{
        margin-top:20px;
    }
    article .manger_user_detail article{
        width: 100%;
        position: relative;
        /* height: 300px; */
        background:rgb(230, 228, 228);
        padding: 0px 0px 170px 0px;
    }
</style>
<article>
    <div class="comtainer">
        <div class="menu_list">
            <div class="avatar_user">
                <div class="avatar">
                    <img src="" alt="">
                    <p>tài khoản</p>
                    <p>huynguyen</p>
                </div>
            </div>
            <!-- <div class="name">
                        <span>huynguyen</span>
                    </div> -->
            <ul>
                <li>
                    <i class="fa-solid fa-user"></i>
                    <a href="">
                        Thông Tin Tài Khoản</a>
                </li>
                <li><i class="fa-solid fa-bell"></i>
                    <a href="">Thông Báo Của Tôi</a>
                </li>
                <li>
                    <i class="fa-solid fa-file-invoice-dollar"></i>
                    <a href="">Quản Lý Đơn Hàng</a>
                </li>
                <li><i class="fa-solid fa-location-dot"></i>
                    <a href="">Địa Chỉ</a>
                </li>
            </ul>
        </div>
        <div class="manger_user_detail">
            <h4>Chi tiết đơn hàng id - status</h4>
            <div class="information_details">
                <div>
                    <span>Địa chỉ người nhận</span>
                    <div class="description">
                        <p>Tên: <?php echo $result['name'] ?></p>
                        <p>Địa chỉ: <?php echo $result['address'] ?></p>
                        <p>Số điện thoại: <?php echo $result['phone'] ?></p>
                    </div>
                </div>
                <div>
                    <span>Hình thức giao hàng</span>
                    <div class="description">
                        <p>artemia vĩnh châu chất lượng cao dành cho cá,tôm,cua giống và tất cả các loại cá cảnh</p>
                    </div>
                </div>
                <div>
                    <span>Hình thức thanh toán</span>
                    <div class="description">
                        <p>Vietcombank</p>
                    </div>
                </div>
            </div>
            <article>
                <?php foreach ($result1 as $key => $value):?>
                <div class="infomation_bill">
                    <div class="image-detail">
                        <div class="img">
                            <img src="public/img/<?= $value['image'] ?>" class="user_image" style="width:90px">
                            <div>
                                <span><?php echo $value['products_name'] ?></span>
                                <p><?php echo number_format($value['price'],0,",",".") ?></p>
                            </div>
                        </div>
                        <div class="price">
                            <span>số lượng sản phẩm: <?php echo $value['quantity'] ?></span>
                        </div>
                    </div>

                    <div class="price-btn">
                        <p>Tổng tiền: <?php echo number_format($value['price']*$value['quantity'],0,",",".") ?></p>
                        <div class="btn">
                            <button class = "box1" data-id="<?php echo $value['id'] ?>">Mua lại</button>
                        </div>
                    </div>
                </div>
                <?php endforeach; ?>
                <hr>
                <div class = "total">
                    <ul>
                        <li><strong>Tổng: </strong><span><?php echo number_format($result['total'],0,",",".") ?></span></li>
                        <li><strong>Trạng Thái: </strong><span>xu ly</span></li>
                        <li><strong>Ngày Mua: </strong><span><?php echo $value['created_time'] ?></span></li>
                        <li><button style = "border-radius: 3px;
                                            border: 1px solid #4242f5;
                                            color: #4242f5;
                                            outline: none;
                                            background: transparent;
                                            cursor: pointer;
                                            padding: 5px;"
                                >Hủy đơn hàng</button></li>
                    </ul>
                </div>
            </article>
        </div>
    </div>

</article>
<?php include_once("mvc/view/client/footer.php"); ?>
<script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
<script>
            $(document).ready(function () {
                $('.box1').on('click',function() {
                        var id_pro = $(this).data('id');
                        alert(id_pro);
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