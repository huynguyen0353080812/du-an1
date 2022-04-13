<?php
    require_once('mvc/Model/database.php'); 
    require_once('mvc/Model/Base.php'); 

    class DiscountController{
        public function __construct() {
            date_default_timezone_set('Asia/Ho_Chi_minh');
            $now =  date('Y-m-d H:i:s'); 
            $customer = new Base();
            $result = $customer->all('discount');
            
            foreach ($result as $key => $value) {
                $value['finish'];
                $value['begin'];
                $value['status'];
                if($value['status'] == "Trương trình đã dừng lại") {
                   break;
                } else if (strtotime($now) < strtotime($value['begin'])) {   
                    $status = "Chưa bắt đầu";   
                } else {
                if(strtotime($now) < strtotime($value['finish'])) {
                    $status = "Đang diễn ra";  
                } else {                    
                    $status = "Đã kết thúc";           
                }
                    $result = $customer->update('discount',["status='$status'"],$value['id']);    
                }                     
            }
        }
        public function index(){
            $customer = new Base();
            $result = $customer->all('discount');
            require_once("mvc/view/admin/component/Discount/list.php");
        }

        public function addForm() {
            date_default_timezone_set('Asia/Ho_Chi_minh');
            $now =  date('d-m-Y H:i:s');
            include_once("mvc/view/admin/component/Discount/add-form.php");
        }

        public function saveAdd() {
            extract($_POST);
            $customer = new Base();
            $result = $customer->insert('discount',["name='$name',quantity='$quantity',discount_number='$discount_number',begin='$begin',finish='$finish',code='$code',status='$status'"]);
            header('location:list_discount');
        }

        public function editForm() {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->find('discount',$id);
            require_once("mvc/view/admin/component/Discount/edit-form.php");
        }

        public function saveEdit() {
            extract($_POST);
            $id = $id;
            $customer = new Base();
            $result = $customer->update('discount',["name='$name',quantity='$quantity',discount_number='$discount_number',begin='$begin',finish='$finish',code='$code',status='$status'"],$id);
            header('location:list_discount');
        }

        public function remove() {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->delete('discount',$id);
            header('location:list_discount');
        }

        public function changeStatus() {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->update('discount',["status='$status'"],$id);
            header('location:list_discount');
        }

    }
