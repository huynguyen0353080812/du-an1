<?php include_once("mvc/view/client/layout.php"); ?>
<!-- CSS only -->
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="http://localhost:81/Duanmau/public/css/test.css">    
<style>
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
    .dropdown {
    position: absolute;
    top: 0%;
    left: 100%;
    display: none;
    margin-top: -57px;
    }
ul.the li {
    width: 200px;
    height: 50px;
    background: #fff;
    list-style: none;
    cursor: pointer;
    z-index: 10;
    position: relative;
    left: -30px;
}
.the {
    width: 100%;
    height: 40px;
    /* border: 1px solid rgb(163, 156, 156); */
    border-radius: 5px;
    margin: 5px 0px;
    margin-left: -15px;
    margin-top: -5px;
}

</style>
<div class="showcart">
    <table class="table" style = "width:80%;margin:auto" id="text">
        <thead>
            <tr >
            <th scope="col">stt</th>
            <th scope="col">Ảnh</th>
            <th scope="col">tên sản phẩm</th>
            <th scope="col">số lượng</th>
            <th scope="col">Đơn Giá</th>
            <th scope="col">tổng</th>
            <th scope="col">xóa</th>
            <th></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($_SESSION['Cart'] as $key => $values):?>
                <tr>
                    <th scope="row">1</th>
                    <td><img src="<?= PUBLIC_URL ?>img/<?= $values['image'] ?>" alt="" style = "width:150px"></td>
                    <td><?php echo $values['products_name']; ?></td>
                    <td><input type="number" min = 1 value="<?php echo $values['quantity'] ?>" class="update_quantity" name="quantity" data-id="<?php echo $values['id']; ?>"style = "border:1px solid black;"></td>
                    <td><?php echo $values['price']; ?></td>
                    <td class ="price" data-id="<?php echo $values['price']; ?>">
                        <form action="" method="post" id = "form"> 
                            <input type="text">
                        </form>
                    </td>
                    <td><button class = "bnt_delete" data-id="<?php echo $values['id']; ?>">xóa</button></td>
                </tr>
            <?php endforeach; ?>
                <tr>
                    <td colspan="8" class="table-active"><p class = "total" style="margin-left:80%;"></p></td>
                </tr>
                <?php if (!empty($_SESSION['Cart'])): ?>
                    <tr>
                        <td colspan="8" class="table-active"><a href="bill"><button type="button" class="btn btn-warning" id="bnt_DH" style="margin-left:80%;">Đặt Hàng</button></a></td>
                    </tr>
                <?php endif; ?>
        </tbody>
    </table>
</div>
<?php $char_data = "huynguyen"; ?>
<script src="<?= PUBLIC_URL ?>plugins/jquery/jquery.min.js"></script>
<?php include_once("mvc/view/client/footer.php"); ?>
        <script type="text/javascript" >
            $(document).ready(function () {
                total(); 
                function total() {
                    $.ajax({
                        url: "showquantity",
                        method:"GET",
                        success:function(data) {
                            $('.total').html('Tổng:'+data);
                        }
                    });
                }
                function price() {
                    $('.price').each((index, data) => {
                        $('#form')[0].reset();
                     });
                }
                $('.bnt_delete').click(function () {
                    var id = $(this).data('id');
                    $.ajax({
                            url: "delete_protducts",
                            method:"GET",
                            data:{
                                id:id
                            },  
                            success:function(data){
                                // $(".table")[0].reset();
                                location.reload();  
                            }
                        });
                });
                $('.update_quantity').click(function() {
                        var quantity = $(this).val();
                        var id = $(this).data('id');
                        $.ajax({
                            url: "update_protducts",
                            method:"GET",
                            data:{
                                id:id,
                                quantity:quantity
                            },  
                            success:function(data){
                                $('html, body').animate({
                                    scrollTop:0
                                },1000);
                                total();
                                price();
                            }
                        });
                })

            });
        </script>