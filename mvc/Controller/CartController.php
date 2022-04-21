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
        
        // unset($_SESSION['Cart']);
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
        $products = $customer->find('prodcts_sale',$id);//lấy trường duy nhất dựa theo id sản phẩm 
        $Cart = [
            'id'=> $products['id'],
            'image'=> $products['image'],
            'products_name'=> $products['products_name'],
            'price' => $products['price'],
            'quantity' => $quantity = 1,
        ]; // thằng $Cart nó sẽ khởi tạo 1 mảng để lưu dữ liệu của thằng $products 
        if (array_key_exists($products['id'],$this->Cart) && isset($_GET['sss'])) {//nếu sản phẩm đã tồn trong mảng thì nó sẽ cộng quantity của sản phẩm đó 
            $this->Cart[$products['id']]['quantity'] += $quantity;
            // $this->Cart[$products['id']]['total'] = $price*$quantity;
        }elseif (array_key_exists($products['id'],$this->Cart) && isset($_GET['type'])) {
            if ($_SESSION['Cart'] == []) {
                $this->Cart[$products['id']]['quantity'] += $quantity;
            }else {
                $this->Cart[$products['id']]['quantity'] += $_GET['quantity'];
            }
        }else{
            $this->Cart[$products['id']] = $Cart;
        }
        $_SESSION['Cart'] = $this->Cart;//sẽ lưu thành mảng 2 chiều
        // echo "<pre>";
        echo 'huyngueyn';
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
        // echo "<pre>";
        // var_dump($_SESSION['user_name']['email']);
        // die;
            extract($_POST);
            $total= $this->Cart_total;
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
            include 'public/Email/library.php'; // include the library file
            require_once 'public/Email/vendor/autoload.php';
            $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
            try {
                //Server settings
                $mail->CharSet = "UTF-8";
                $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                $mail->isSMTP();                                      // Set mailer to use SMTP
                $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                $mail->SMTPAuth = true;                               // Enable SMTP authentication
                $mail->Username = SMTP_UNAME;                 // SMTP username
                $mail->Password = SMTP_PWORD;                           // SMTP password
                $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                //Recipients
                $mail->setFrom(SMTP_UNAME, "Coffee House");
                $mail->addAddress($_SESSION['user_name']['email'], 'Tên người nhận');     // Add a recipient | name is option
                $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                $mail->isHTML(true);                                  // Set email format to HTML
                $mail->Subject ='chào bạn';
                $mail->Body = $d;
                $mail->AltBody = 'cảm ỏn'; //None HTML
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
            $total= $this->Cart_total;
            // echo $total;
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