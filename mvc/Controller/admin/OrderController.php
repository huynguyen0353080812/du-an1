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
}