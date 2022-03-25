<?php
    require_once('mvc/Model/database.php'); 
    require_once('mvc/Model/Base.php'); 

    class DiscountController{
        public function index()
        {
            $customer = new Base();
            $result = $customer->all('discount');
            require_once("mvc/view/admin/component/Discount/list.php");
        }
    }