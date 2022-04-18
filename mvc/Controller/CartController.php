<?php
require_once('mvc/Model/Base.php'); 
require_once('mvc/Model/database.php');
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
            echo number_format("$this->Cart_total",0,",",".");
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
            $total= $this->Cart_total;
            echo $total;
            date_default_timezone_set('Asia/Ho_Chi_Minh');
            $date = date_create();
            $products = new databse();
            $rows = $products->database();
            $sql = "INSERT INTO orders SET name = '$adress_user',phone=$number_phone,address = '$adress_user',total= $total,status='115/x'";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $id = $rows->lastInsertId();
            foreach ($_SESSION['Cart'] as $key => $value) {
                $sql1 = "INSERT INTO orders_detail SET order_id = $id,produrt_id = ".$value['id'].",quantity=".$value['quantity']."";
                $stmt1 = $rows->prepare($sql1);
                $stmt1->execute();
            }
            unset($_SESSION['Cart']);
    }
}