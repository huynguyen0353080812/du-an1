<?php
    if (!isset($_SESSION['user_name'])) {
        header('location:'.BASE_URL.'page_login');
    }
?>
<?php include_once("mvc/view/client/layout.php"); ?>
<link rel="stylesheet" href="http://localhost:81/du-an1/public/css/test.css">  
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<style>
    article{
        width: 100%;
    }
    .quantity{
        margin-bottom:10px;
    }
    a{
        text-decoration: none;
    }
    .icongift{
        position: relative;
        bottom: 18px;
    }
    main{
        display: grid;
        grid-template-columns: 1fr 30%;
        grid-gap: 0px 20px;
        width: 90%;
        margin: auto;
        margin-top: 20px;
    }
    .content{
        width: 500px;
        height: 600px;
        margin: auto;
    }
    .chu{
        font-size: 20px;
    }
    /* danh ky */
    .xx1 {
        margin-top: 5px;
        margin-left: -15px;
    }
    table {
       width: 100%;
    }
    .discount{
        height: 20px;

    }
    #order{
        margin-top:20px;
    }
</style>
    <main>
        <article>
            <div class="card" id="cart2">
                <div class="card-body">
                    <table>
                        <tr>
                            <th>ảnh sản phẩm</th>
                            <th>tên sản phẩm</th>
                            <th>giá sản phẩm</th>
                            <th>số lượng </th>
                        </tr>
                        <?php foreach ($_SESSION['Cart'] as $key => $value):?>
                            <div class="card-order" id="box">
                                <tr>
                                    <td>
                                        <img src="<?php  echo PUBLIC_URL ?>/img/<?php echo $value['image']?>" alt=""style="width:120px">
                                    </td>
                                    <td>
                                        <?php echo $value['products_name'] ?>
                                    </td>
                                    <td>
                                       <?php echo $value['price'] ?>
                                    </td>
                                    <td>
                                        <?php echo $value['quantity'] ?>
                                    </td>
                                </tr>
                            </div>
                        <?php endforeach; ?>
                    </table>
                </div>
            </div>
            <div class="card" id="cart3">
                <div class="card-body">
                <h5 class="card-title">Chọn hình thức giao hàng</h5>
                <p class="card-text">
                   <input type="checkbox"><label for="">khi giao hàng</label><br>
                   <input type="checkbox"><label for="">Qua thẻ</label>
                </p>
                </div>
            </div>
            <button type="button" class="btn btn-success" id = "order">Success</button>
        </article>
        <section>
          <div class="card" id="cart1">
            <div class="card-body">
              <h5 class="card-title">Địa chỉ giao Hàng</h5>
                <form action="" method="POST">
                  <span>tên ngươi nhận:</span><input type="text" id="user_name"  class="user_name" value = "<?= isset($user_name)?$user_name:'' ?>"><br>
                  <span>Địa Chỉ:</span><br><input type="text" name="adress_user" id="" class ="adress_user" ><br>
                  <span>Số điện thoại:</span><input type="text" name="number_phone" id="" class ="number_phone" style = "margin-top: 10px;">
                </form>
            </div>
          </div>
          <div class="card" id="cart6">
            <div class="card-body" style = "di">
                 <h5 class="card-title">Mã Giảm Giá</h5>
                 <div style = "display:flex;">
                    <form action=""style= "display:flex">
                        <input type="text" class="form-control" id="Discount" name = "Discount" placeholder="Discount" aria-label="Username" aria-describedby="basic-addon1" style = "margin-right:10px;">
                        <button type="button" id = "bnt_Discount" class="btn btn-primary">Discount</button>
                    </form>
                </div>
                <span class='erro' style = "color:red;"><?php echo isset($_GET['action']) ? $_GET['action'] :'' ?></span>
            </div>
          </div>
          <div class="card" id="cart4">
            <div class="card-body">
              <h5 class="card-title">Đơn Hàng</h5>
              <p class="card-text">
                    <span class = "giam">giam:0</span><br>
                    <span>Phí vận chuyển</span><br>
                    <strong class="total"></strong><br>
              </p>
            </div>
          </div>
    </main>
    <script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
<?php include_once("mvc/view/client/footer.php"); ?>
<script>
            $(document).ready(function () {
                total(); 
                function total(tt) {
                    $.ajax({
                        url: "showquantity",
                        method:"GET",
                        success:function(data) {
                            if (tt) {
                                var ttt = parseInt(data)-parseInt(tt);
                                var pattern =ttt.toString().replace(/\B(?!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
                                $('.giam').html('Giảm: -'+tt);
                                $('.total').html('thành tiền: '+pattern);
                            }else{
                                var pattern =data.toString().replace(/\B(?!\.\d*)(?=(\d{3})+(?!\d))/g, ",");
                                 $('.giam').html('Giảm:0');
                                $('.total').html('thành tiền: '+pattern);
                            }
                        }
                    });
                }
                // $('.btn-success').on('click',()=>{
                //     var name_user = $('#user_name').val()
                //     var adress_user = $('.adress_user').val()
                //     var number_phone = $('.number_phone').val()
                //     $.ajax({
                //             url: "order",
                //             method:"POST",
                //             data:{
                //               name_user:name_user,
                //               adress_user:adress_user,
                //               number_phone:number_phone
                //             },  
                //             success:function(data){
                //                 location.assign("<?php echo BASE_URL?>");
                //             }
                //         });
                // })
                $('#bnt_Discount').on('click',()=>{
                    var discount = $('#Discount').val();
                    $.ajax({
                            url: "CheckDiscount",
                            method:"POST",
                            data:{
                                discount:discount
                            },  
                            success:function(data){
                                if (isNaN(data)==false) {
                                   var tt = parseInt(data)
                                   $('.erro').html('');
                                   total(tt);
                                }else{
                                    total();
                                    $('.erro').html(data);
                                }
                            }
                        });
                })

            });
        </script>