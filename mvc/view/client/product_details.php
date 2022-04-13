<?php 
require_once('mvc/view/client/layout.php'); 
require_once('mvc/Model/database.php');     
$conn = new databse();
$conns = $conn->database();
// if(isset($_GET['id'])){
//     $id = $_GET['id'];
// }else{
//     $id = '';
// }
$sql_chitiet = "SELECT * FROM prodcts_sale where id = 49";
$stmt = $conns->prepare($sql_chitiet);
$stmt->execute();
$result = $stmt->fetch(PDO::FETCH_ASSOC);
// var_dump($result);
// die;
?>
<div class="content">
    <div class="container">
        <div class="container-product_details">
            <div class="img-product_details">
                <img src="./img/<?php echo($result['image']);?>" alt="">
            </div>
            <div class="infor-product_details">
                <div class="name-product_details">
                    <h2><?php echo($result['products_name']);?></h2>
                </div>
                <div class="status-product_details">
                    <p>Tình trạng:<span>Còn hàng</span></p>
                </div>
                <div class="price-product_details">
                    <span><?php  echo number_format(($result['price'])).' vnđ';?></span>
                </div>
                <div class="quantity-product_details">
                    <form action="#">
                        <div class="table-quantity">
                            <table>
                                <tr>
                                    <td><input type="button" value="-"></td>
                                    <td><span>1</span></td>
                                    <td><input type="button" value="+"></td>
                                </tr>
                            </table>
                            <input type="submit" value="Đặt hàng">
                        </div>
                        
                    </form>
                </div>
                <div class="description-product_details">
                    <p><?php echo($result['content']);?></p>
                </div>
            </div>
        </div>
        <div class="comment">
            <form action="#">
                <input type="text" placeholder="Viết bình luận">
                <input type="submit" value="Gửi">
            </form>
        </div>
    </div>

</div>
<?php require_once('mvc/view/client/footer.php'); ?>