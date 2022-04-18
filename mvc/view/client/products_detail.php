<?php include_once("mvc/view/client/layout.php"); ?>
<style>
    .wrapper{
        background: #f5f5f5;
    }
    .image_avatar{
        width:340px;
        height: 320px;
        /* border: 1px solid black; */
        margin-left: 100px;
        margin-top: 25px;
        /* background:red; */
        position: relative;
    }
</style>
<link rel="stylesheet" href="<?= PUBLIC_URL ?>css/products.css">
<main style = "background: #f5f5f5;">
                <article class="top" style = "position: relative;">
                        <div class="product">
                            <div class="imagebig">
                                <?php foreach($image_library as $row_library):?>
                                    <div class="image">
                                        <img src="<?= PUBLIC_URL ?>img/<?php echo $row_library['image_pro']?>" alt="" onclick="changeImage('<?= $id_img++?>')" id="<?php echo $id++?>" class="image_details">
                                    </div>
                                <?php endforeach;?>
                            </div>
                        </div>
                    <?php foreach($result as $row):?>
                        <div class ="image_avatar"> 
                                <img src="<?= PUBLIC_URL ?>img/<?php echo $row['image']?>" alt=""style="width:320px">
                            </div>
                        <div class="Price-information">
                            <p class="font"> <?php echo $row['products_name']?></p>
                            <div class="danhgia">
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star checked"></span>
                                <span class="fa fa-star"></span>
                                <span class="fa fa-star"></span>
                            </div>
                            <p class="gia"><?php echo number_format($row['price'],0,",",".") ?> VNĐ</p>
                            <div class="introduce">Quay Vlog giờ đây đã trở nên cực kỳ dễ dàng với Sony ZV-1 chiếc máy ảnh compact
                                nhỏ gọn được sinh ra để dành riêng cho các Vlogger sáng tạo nội dung video hay những người hay
                                livestream để bán hàng, sản xuất video chơi game... Tốc độ lấy nét nhanh, Eye AF liên tục và một
                                thiết kế nhỏ gọn để bạn có thể mang tới bất cứ nơi đâu trong chuyến đi của mình.
                            </div>
                            <div class="amount">
                                <p class="sl">Số Lượng</p>
                                <input type="number" min="1" max="100" id="quantity" value="1">
                            </div>
                            <div class="Pay">
                                <div class="oder">
                                        <center><span class="DH" data-id=<?php echo $_GET['id'] ?>>ĐẶT HÀNG</span>
                                    </center>
                                </div>
                                <div class="oder1"><a href="">
                                        <center><span class="DH">RỎ HÀNG</span>
                                    </a></center>
                                </div>
                            </div>
                        </div>
                    <?php endforeach;?>
                </article>
        <aside class="pro">
            <section class="left_details">
                <div class="tabs">
                    <ul class="nav-tabs">
                        <li class="active"><a href="#menu_1">Tổng Quan</a></li>
                        <li><a href="#menu_2">Bình Luận</a></li>
                    </ul>
                    <div class="tabs-content">
                        <div id="menu_1" class="tabs-content-item">
                            <div class="content_details">
                                <?php foreach($result as $row):?>
                                    <?php echo $row['content'] ?>
                                <?php endforeach;?>
                            </div>
                        </div>
                        <div id="menu_2" class="tabs-content-item">
                            <div class="content_details">
                                    <form id = "formId">
                                        <input type="hidden" name="products_id " value = "<?php echo $_GET['id']?>" class = "products_id">
                                        <input type="hidden" name="user_id" value = "<?php echo isset($_SESSION['user_name']['id'])?$_SESSION['user_name']['id']:''; ?>" class = "user_id">
                                        <textarea name="" id="" cols="30" rows="10" placeholder="Hãy viết bình luận......"></textarea>
                                        <button class = "bnt_comment">gửi</button>
                                        <!-- <button type="reset" class = "bnt_comment">gửi</button> -->
                                    </form>
                                    <div class="hr"></div>
                                    <?php foreach ($comment as $key => $value): ?>
                                        <div class="comment">
                                            <div class="info">
                                                <div class="user_id">
                                                    <img src="<?= PUBLIC_URL ?>img/<?= $value['image'] ?>" class="user_image">
                                                </div><br>
                                                <h5 style = "margin-left:60px"><?= $value['user_name'] ?></h5>
                                            </div>
                                            <div class="content_comment">
                                            <h6 class = "date"><?= $value['created_time'] ?></h6>
                                                <p><?= $value['text'] ?></p>
                                                <?php if (!isset($_SESSION['user_name'])):?>
                                                    <p>huynguyen</p>
                                                <?php else: ?>
                                                    <?php if ($_SESSION['user_name']['id']==$value['user_id']):?>
                                                        <a href="delete_comment?id=<?= $value['id'] ?>"><button class = "delete_comment">xóa</button></a>
                                                    <?php endif; ?>
                                                <?php endif; ?>

                                            </div>
                                        </div>
                                    <?php endforeach; ?>
                                    
                            </div>
                        </div>
                        <div id="menu_3" class="tabs-content-item">
                        </div>
                    </div>
                </div>
            </section>
            <section class="right_details">
                <div class="related-products">
                    <img src="anh/sony-01.jpg" alt="" class="anh2">
                    <p></p>
                    <div class="danhgia1">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p class="chu1">Máy Compact Ricoh GR III</p>
                    <p class="gia1">20.000.000 đ</p>
                </div>
                <div class="related-products">
                    <img src="anh/sony-01.jpg" alt="" class="anh2">
                    <p></p>
                    <div class="danhgia1">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p class="chu1">Máy Compact Ricoh GR III</p>
                    <p class="gia1">20.000.000 đ</p>
                </div>
                <div class="related-products1">
                    <img src="anh/sony-01.jpg" alt="" class="anh2">
                    <p></p>
                    <div class="danhgia1">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <p class="chu1">Máy Compact Ricoh GR III</p>
                    <p class="gia1">20.000.000 đ</p>
                </div>
            </section>
        </aside>
        <h3 class="TD">SẢN PHẨM TƯƠNG TỰ</h3>
        <article class="sptg" >
        <div class="danhsachsp1" style = "bottom: 160px;">
            <p class="tieude">
                FLASH SALE <i class="fas fa-bolt"
                    style="margin-left: 10px;transform: rotate(20deg); font-size: 40px;position: relative;top: 10px;transform: skewY(-80px);"></i>
            </p>
        </div>
            <div class="baobi12">
                <div class="smalltin2">
                    <div class="sale">
                        <div class="smallsale">
                            <span class="magiam"> 20%</span>
                        </div>
                    </div>
                    <img src="anh/mayanh1.jpg" alt="" class="iphone1">
                    <div class="buy">
                        <div class="iconshoping">
                        </div>
                        <span class="giohang">Thêm vào rỏ hàng </span>
                    </div>
                    <p class="name">Máy ảnh </p>
                    <div class="danhgia">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="tonggia">
                        <p class="gia">20.000.000 đ</p>
                        <P class="giamgia">25.000.000 đ</P>
                    </div>

                </div>
                <div class="smalltin2">
                    <div class="sale">
                        <div class="smallsale">
                            <span class="magiam"> 20%</span>
                        </div>
                    </div>
                    <img src="anh/mayanh1.jpg" alt="" class="iphone1">
                    <div class="buy">
                        <div class="iconshoping">
                        </div>
                        <span class="giohang">Thêm vào rỏ hàng </span>
                    </div>
                    <p class="name">Máy ảnh </p>
                    <div class="danhgia">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="tonggia">
                        <p class="gia">20.000.000 đ</p>
                        <P class="giamgia">25.000.000 đ</P>
                    </div>

                </div>
                <div class="smalltin2">
                    <div class="sale">
                        <div class="smallsale">
                            <span class="magiam"> 20%</span>
                        </div>
                    </div>
                    <img src="anh/mayanh1.jpg" alt="" class="iphone1">
                    <div class="buy">
                        <div class="iconshoping">
                        </div>
                        <span class="giohang">Thêm vào rỏ hàng </span>
                    </div>
                    <p class="name">Máy ảnh </p>
                    <div class="danhgia">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="tonggia">
                        <p class="gia">20.000.000 đ</p>
                        <P class="giamgia">25.000.000 đ</P>
                    </div>

                </div>
                <div class="smalltin2">
                    <div class="sale">
                        <div class="smallsale">
                            <span class="magiam"> 20%</span>
                        </div>
                    </div>
                    <img src="anh/mayanh1.jpg" alt="" class="iphone1">
                    <div class="buy">
                        <div class="iconshoping">
                        </div>
                        <span class="giohang">Thêm vào rỏ hàng </span>
                    </div>
                    <p class="name">Máy ảnh </p>
                    <div class="danhgia">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="tonggia">
                        <p class="gia">20.000.000 đ</p>
                        <P class="giamgia">25.000.000 đ</P>
                    </div>

                </div>
                <div class="smalltin2">
                    <div class="sale">
                        <div class="smallsale">
                            <span class="magiam"> 20%</span>
                        </div>
                    </div>
                    <img src="anh/mayanh1.jpg" alt="" class="iphone1">
                    <div class="buy">
                        <div class="iconshoping">
                        </div>
                        <span class="giohang">Thêm vào rỏ hàng </span>
                    </div>
                    <p class="name">Máy ảnh </p>
                    <div class="danhgia">
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star checked"></span>
                        <span class="fa fa-star"></span>
                        <span class="fa fa-star"></span>
                    </div>
                    <div class="tonggia">
                        <p class="gia">20.000.000 đ</p>
                        <P class="giamgia">25.000.000 đ</P>
                    </div>

                </div>
            </div>
        </article>
    </main>
<script type="text/javascript" >
            $(document).ready(function () {
                // $('.tabs-content-item').hide();
                // $('.tabs-content-item:first-child').fadeIn();
                // $('.nav-tabs li').
                // (function() {
                //     $('.nav-tabs li').removeClass('active')
                //     $(this).addClass('active');
                //     let item_content = $(this).children('a').attr('href')
                //     $('.tabs-content-item').hide();
                //     $(item_content).fadeIn()
                //     return false;
                // })
                $('.DH').click(function() {
                        var quantity = $('#quantity').val();
                        var id = $(this).data('id');
                        // alert(quantity);
                        $.ajax({
                            url: "cart",
                            method:"GET",
                            data:{
                                id:id,
                                quantity:quantity,
                                type:1
                            },  
                            success:function(data){
                                // alert(data);
                                $('html, body').animate({
                                    scrollTop:0
                                },1000);
                                location.reload();
                            }
                        });
                })
                $('.bnt_comment').on('click',function() {
                    var textarea = $('textarea').val();
                    var products_id = $('.products_id').val();
                    var user_id = $('.user_id').val();
                    $.ajax({
                            url: "inser_comment",
                            method:"POST",
                            data:{
                                textarea:textarea,
                                products_id:products_id,
                                user_id:user_id
                            },  
                            success:function(data){
                                // alert(data);
                                // $("#formId")[0].reset();
                                location.reload();
                            }
                        });
                })

            });
        </script>