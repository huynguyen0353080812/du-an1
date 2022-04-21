<?php
 require_once('mvc/Model/Base.php'); 
 require_once('mvc/Model/database.php');
class OrderController{
    private $customer;
    public function __construct()
    {
        $this->customer = new Base();
    }
    public function index()
    {
        $data = new databse();
        $conn = $data->database();
        $item_perpage = isset($_GET['per_page'])? $_GET['per_page']:4;
        $current_page = isset($_GET['page'])? $_GET['page']:1;
        $offset = ($current_page - 1)*$item_perpage;
        $sql = "SELECT* FROM orders ORDER BY `orders`.`id` ASC lIMIT $item_perpage OFFSET $offset";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $i = 0;
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $result1 = $this->customer->all('orders');
        $count = count($result1);
        $countotal = ceil($count/$item_perpage);
        //
        // $customer = new Base();
        // $result = $customer->all('orders');
        include ('mvc/view/admin/component/Order/Order.php');
    }
    public function order_detail()
    {
            $id = $_GET['id'];
            $products = new databse();
            $rows = $products->database();
            $sql = "SELECT orders.status,orders.name,prodcts_sale.products_name,orders_detail.order_id,prodcts_sale.price,orders.phone,orders.address,orders_detail.quantity,prodcts_sale.image,orders.total,orders.note FROM `orders_detail`JOIN prodcts_sale ON orders_detail.produrt_id = prodcts_sale.id JOIN orders ON orders_detail.order_id = orders.id HAVING orders_detail.order_id = $id";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $i = 0;
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            include ('mvc/view/admin/component/Order/Order_detail.php');
    }
    private $result1;
    public function Status()
    {
            $arr1 = $_GET['id'];
            $arr = explode("/",$arr1);
            $customer = new Base(); 
            $id = $arr[0];
            // foreach ($arr as $key => $value) {
            //     // echo $value;
            //     $result = $customer->update('orders',["status = '$value'"],$id);
            // }
            echo $id;
            $result = $customer->update('orders',["status = '$arr1'"],$id);
        // var_dump($arr);
        // print_r($arr);
    }
    public function delete_order()
    {
        $id = $_GET['id'];
        $customer = new Base();
        $customer->delete('orders',$id);
    }
    public function showstatus(Type $var = null)
    {
        // $customer = new Base();
        // $result1 = $customer->all('orders');
        // $arrxx = [];
        // var_dump($result1);
        // var_dump($result1['status']);
    }
}