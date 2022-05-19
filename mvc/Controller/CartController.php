<?php
require_once('mvc/Model/Base.php'); 
require_once('mvc/Model/database.php');
use PHPMailer\PHPMailer\PHPMailer;
use PHPMailer\PHPMailer\Exception;
class CartController {
    private $Cart = [];
    private $Cart_total;
    private $id;
    private $customer;
    private $category;
    public function __construct(){
        $this->customer = new Base();
        if (isset($_SESSION['Cart'])) {
            $this->Cart = $_SESSION['Cart'];
        }else{
            $this->Cart = $_SESSION['Cart']=[];
        }
        foreach ($this->Cart as $key => $value) {
           $this->Cart_total +=$value['quantity']*$value['price'];
        }
    }
    public function Cartshow()
    {
        require_once('mvc/view/client/newCart.php');
    }
    public function showquantity()
    {
        $car = count($_SESSION['Cart']);
        $cartquantity = '';
        $cartquantity.='<span>'.$car.'</span>
        <a href="Cartshow"><i class="fa-solid fa-cart-shopping"></i></a>';
        echo $cartquantity;
    }
    public function add(){
        $id = $_GET['id'];
        $customer = new Base();
        $products = $customer->find('products',$id);
        $Cart = [
            'id'=> $products['id'],
            'image'=> $products['image'],
            'products_name'=> $products['products_name'],
            'price' => $products['price'],
            'quantity' => $quantity = 1,
        ];
        if (array_key_exists($products['id'],$this->Cart) && isset($_GET['sss'])) {
            $this->Cart[$products['id']]['quantity'] += $quantity;
        }elseif (array_key_exists($products['id'],$this->Cart) && isset($_GET['type'])) {
            if ($_SESSION['Cart'] == []) {
                $this->Cart[$products['id']]['quantity'] += $quantity;
            }else {
                $this->Cart[$products['id']]['quantity'] += $_GET['quantity'];
            }
        }else{
            $this->Cart[$products['id']] = $Cart;
        }
        $_SESSION['Cart'] = $this->Cart;
    }
    public function update(){
        $id = $_GET['id'];
        $this->Cart[$id]['quantity'] = $_GET['quantity'];
        $_SESSION['Cart'] = $this->Cart;
    }
    public function clear(){
        return session(['Cart'=>[]]);
    }
    public function sssss(Type $var = null)
    {   
        if ($this->Cart_total>0) {
            echo $this->Cart_total;
        }else {
            echo $this->Cart_total = 0;
        }
    }
    public function xxx()
    {
        echo 500000;
    }
    public function remove(){
        $id = $_GET['id'];
       if (isset($_SESSION['Cart']["$id"])) {
           unset($_SESSION['Cart']["$id"]);
       }
    }
    public function price_protducts()
    {
        $id = $_GET['id'];
        echo $id;
    }
    public function bill()
    {
        include ('mvc/view/client/CartBill.php');
    }
    public function order()
    {
            extract($_POST);
            if (isset($id_discount)) {
                if ($id_discount!=='') {

                    $result1 = $this->customer->where('','discount','code = "'.$id_discount.'"');
                    if ($result1) {
                        $tt = $result1['quantity']-1;
                        $products = new databse();
                        $rows = $products->database();
                        $sql = "UPDATE discount SET quantity = $tt WHERE code = '$id_discount'";
                        $stmt = $rows->prepare($sql);
                        $stmt->execute();    
                    }
                }
            }       
            $g = "
                <div class='infomation'style='display:grid; grid-template-columns: repeat(2,1fr);text-align: center;width:230px'>
                    <div class='name'>
                        <strong>Thông Tin :</strong>
                        <strong>$name_user</strong>
                        <span>$number_phone</span>
                    </div>
                    <div class='adreess'>
                        <strong>Địa chỉ :</strong>
                        <span>$adress_user</span>
                    </div>
                </div>
            ";
            $a = "
            <table style ='text-align: center;'border=1>
                <tr>
                    <th>Tên sản phẩm</th>
                    <th>số lượng</th>
                    <th>đơn giá</th>
                </tr>
            ";
            $c = "
            <tr>
                    <td colspan='4'>Tông Tiền :" . number_format($total) . "đ</td>
            </tr>
            </table>
            ";
            $b = '';
            $tong = 0;
            foreach ($_SESSION['Cart'] as $key => $value) {
                $tong += $value['price'];
                $b .= "
                        <tr>
                            <td>" . $value['products_name']."</td>
                            <td>" . $value['quantity'] . "</td>
                            <td>" . number_format($value['price']) . "đ</td>
                        </tr>
                        ";
            }

            $d =$g . $a . $b . $c ;
            echo $d;
            include 'public/Email/library.php'; 
            require_once 'public/Email/vendor/autoload.php';
            $mail = new PHPMailer(true);                              
            try {
                
                $mail->CharSet = "UTF-8";
                $mail->SMTPDebug = 0;                                
                $mail->isSMTP();                                      
                $mail->Host = SMTP_HOST;
                $mail->SMTPAuth = true;                               
                $mail->Username = SMTP_UNAME;                 
                $mail->Password = SMTP_PWORD;                      
                $mail->SMTPSecure = 'ssl';                            
                $mail->Port = SMTP_PORT;                                    
                $mail->setFrom(SMTP_UNAME, "Halu Coffee");
                $mail->addAddress($_SESSION['user_name']['email'], 'Tên người nhận');     
                $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
                $mail->isHTML(true);                          
                $mail->Subject ='chào bạn';
                $mail->Body = $d;
                $mail->AltBody = 'cảm ỏn';
                $result = $mail->send();
                if (!$result) {
                    $error = "Có lỗi xảy ra trong quá trình gửi mail";
                }else{
                    $products = new databse();
                    $rows = $products->database();
                    $sql = "UPDATE feedback SET status = 0 WHERE email = '$email'";
                    $stmt = $rows->prepare($sql);
                    $stmt->execute();    
                }
                echo 'gửi thành công';
            } catch (Exception $e) {
                echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
            }
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date_create();
            $products = new databse();
            $rows = $products->database();
            $sql = "INSERT INTO orders SET name = '$name_user',phone=$number_phone,address = '$adress_user',total= $total,status='115/x',user_id =8";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $id = $rows->lastInsertId();
            foreach ($_SESSION['Cart'] as $key => $value) {
                $sql1 = "INSERT INTO orders_detail SET order_id = $id,produrt_id = ".$value['id'].",quantity=".$value['quantity'].",price=".$value['price']."";
                $stmt1 = $rows->prepare($sql1);
                $stmt1->execute();
            }
            unset($_SESSION['Cart']);
    }
}