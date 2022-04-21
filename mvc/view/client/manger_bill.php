<?php include_once("mvc/view/client/layout.php"); ?>
<link rel="stylesheet" href="mvc/view/client/css/buil.css">
<style>
    .manger_user {
        /* width: 100%; */
        /* height: 100%; */
        position: relative;
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
        <div class="manger_user">
            <h4>Thông Tin Tài Khoản</h4>
            <!-- <div class="ok"></div> -->
        <?php foreach ($result as $key => $value):?>
            <div class="infomation_bill">
            <i class="fa-solid fa-truck-fast"></i>
                <div class="status">
                    <?php $arr = explode("/",$value['status']); ?>
                    <p style = "margin-right: 60%;">
                    <?php if ($arr[1] == 'x'):?>
                    <?php echo 'xu ly'; ?>
                    <?php elseif ($arr[1] == 'y'):?>
                    <?php echo 'đóng gói'; ?>
                    <?php elseif ($arr[1] == 'z'):?>
                    <?php echo 'thanh công'; ?>
                    <?php elseif ($arr[1] == 's'):?>
                    <?php echo 'đang giao hàng'; ?>
                    <?php elseif ($arr[1] == 'h'):?>
                    <?php echo 'đã hủy'; ?>
                    <?php endif; ?>
                    </p>
                    <p><?php echo $value['created_time'] ?></p>
                </div>
                <div class="image-detail">
                    <?php foreach ($result1 as $key => $value1): ?>
                        <?php if ($value1['order_id']==$value['id']):?>
                            <div class="img">
                                <img src="public/img/<?= $value1['image'] ?>" class="user_image" style="width:90px">
                                <div>
                                    <span><?php echo $value1['products_name'] ?></span>
                                    <p><?php echo number_format($value1['price'],0,",",".") ?></p>
                                </div>
                            </div>   
                        <?php endif; ?>
                    <?php endforeach; ?>
                </div>
                <div class="price-btn">
                    <p>Tổng:<?php echo number_format($value['total'],0,",",".") ?></p>
                    <div class="btn">
                        <a href=""></a><button class = "repurchase">Mua lại</button>
                        <a href="bill_detail?id=<?php echo $value['id'] ?>"><button>Xem chi tiết</button></a>
                        <?php if ($arr[1] == 'x'):?>
                            <a href="cancel_order?id=<?php echo $value['id'] ?>"><button>Hủy đơn hàng</button></a>
                        <?php endif; ?>
                    </div>
                </div>
            </div>
        <?php endforeach; ?>
        </div>
    </div>
    
</article>
<?php include_once("mvc/view/client/footer.php"); ?>
<script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
<script>
            $(document).ready(function () {
                // alert('huy');
                $('.repurchase').on('click',function() {
                        alert('ok');
                        // $.ajax({
                        //     url: "cart",
                        //     method:"GET",
                        //     data:{
                        //         id:id_pro,
                        //         sss:null
                        //     },  
                        //     success:function(data){
                        //         $('html, body').animate({
                        //             scrollTop:0
                        //         },1000);
                        //         show_cart();
                        //     }
                        // });
                });
            });
        </script>