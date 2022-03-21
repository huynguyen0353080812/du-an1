<?php
 require_once('mvc/Model/Base.php'); 
 require_once('mvc/Model/database.php');
class OrderController{
    public function index()
    {
        $customer = new Base();
        $result = $customer->all('orders');
        include ('mvc/view/admin/component/Order/Order.php');
    }
    public function order_detail()
    {
            $id = $_GET['id'];
            $products = new databse();
            $rows = $products->database();
            $sql = "SELECT orders.name,prodcts_sale.products_name,orders_detail.order_id,prodcts_sale.price,orders.phone,orders.address,orders_detail.quantity,prodcts_sale.image,orders.total,orders.note FROM `orders_detail`JOIN prodcts_sale ON orders_detail.produrt_id = prodcts_sale.id JOIN orders ON orders_detail.order_id = orders.id HAVING orders_detail.order_id = $id;";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $i = 0;
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($result);   
            // die;
            include ('mvc/view/admin/component/Order/Order_detail.php');
    }
}