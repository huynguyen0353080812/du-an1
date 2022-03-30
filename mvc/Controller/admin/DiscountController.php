<?php
    require_once('mvc/Model/database.php'); 
    require_once('mvc/Model/Base.php'); 

    class DiscountController{
        public function index(){
            date_default_timezone_set('Asia/Ho_Chi_minh');
            $now =  date('d-m-Y H:i:s');
            $time =  date('27-03-2022 16:20:00');
            if($time == $now) {
                 $mes = "End";
            };
            $customer = new Base();
            $result = $customer->all('discount');
            include_once("mvc/view/admin/component/Discount/list.php");
        }

        public function addForm() {
            include_once("mvc/view/admin/component/Discount/add-form.php");
        }

        public function saveAdd() {
            extract($_POST);
            $customer = new Base();
            $result = $customer->insert('discount',["name='$name',quantity='$quantity',begin='$begin',finish='$finish',code='$code'"]);
            header('location:list_discount');
        }

        public function editForm() {
            require_once("mvc/view/admin/component/Discount/edit-form.php");
        }

        public function saveEdit() {

        }

        public function checkTime() {
            
        }
    }
