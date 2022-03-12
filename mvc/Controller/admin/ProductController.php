<?php
    require_once('mvc/Model/Base.php'); 
    require_once('mvc/Model/database.php');
    class ProductController{
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
                $sql = "SELECT* FROM prodcts_sale ORDER BY `prodcts_sale`.`price` ASC lIMIT $item_perpage OFFSET $offset";
                $stmt = $conn->prepare($sql);
                $stmt->execute();
                $i = 0;
                $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
                $result1 = $this->customer->all('prodcts_sale');
                $count = count($result1);
                $countotal = ceil($count/$item_perpage);
                include ('mvc/view/admin/component/Products/Products.php'); 
        }
        public function edit()
        {
            $id = $_GET['id'];
            $result = $this->customer->find('prodcts_sale',$id);
            $category = $this->customer->all('categories');
            $libary = $this->customer->where('image_pro','image_library','products_id ',$id);
            include ('mvc/view/admin/component/Products/Products_edit.php'); 
        }
        public function editproducts()
        {
            extract($_POST);
            $now =  date('d-m-Y H:i:s');
            $file = $_FILES['Avatar'];
            if ($file['size'] > 0) {
                $avatar = $file['name'];
                move_uploaded_file($file['tmp_name'],"public/img/".$avatar);
            }else{
                $avatar = $img;
            }
            $result = $this->customer->update('prodcts_sale',["discount_code = '$discount_code',products_name= '$products_name',price = '$price',discount=$discount,image='$avatar',categories_id=$select,dac_biet=$dac_biet,content='$content_products'"],$id);
            // 
            $files = $_FILES['Avatars'];
            if ($files['size'][0] > 0) {
                $result = $this->customer->delete('image_library',$id);
                $avatars = $files['name'];
                foreach ($avatars as $key => $value) {
                    move_uploaded_file($files['tmp_name'][$key],"public/libary/".$value);
                }
                foreach ($avatars as $key => $value) {
                    $result1 = $this->customer->insert('image_library',["products_id  = '$id',image_pro= '$value',created_time = '$now'"]);
                }
            }
            $messgae = 'huynguyen';
            return header('location:Products');
        }
        public function insert()
        {
            $category = $this->customer->all('categories');
            include ('mvc/view/admin/component/Products/insert_products.php'); 
        }
        public function insertproduct()
        {
            extract($_POST);
            // var_dump($discount);
            // die;
            $now =  date('d-m-Y H:i:s');
            $file = $_FILES['Avatar'];
            if ($file['size'] > 0) {
                $avatar = $file['name'];
                move_uploaded_file($file['tmp_name'],"public/img/".$avatar);
            }else{
                $avatar = "";
            }
            $result = $this->customer->insert('prodcts_sale',["discount_code = '$discount_code',products_name= '$products_name',price = '$price',discount=$discount,image='$avatar',categories_id=$select,dac_biet=$dac_biet,content='$content_products'"]);
            $files = $_FILES['Avatars'];
            if ($files['size'] > 0) {
                $avatars = $files['name'];
                foreach ($avatars as $key => $value) {
                    move_uploaded_file($files['tmp_name'][$key],"public/libary/".$value);
                }
            }else{
                $avatars = "";
            }
            foreach ($avatars as $key => $value) {
                $result1 = $this->customer->insert('image_library',["products_id  = '$result',image_pro= '$value',created_time = '$now'"]);
            }
            return header('location:Products');
        }
        public function Delete()
        {
            $id = $_GET['id'];
            $result = $this->customer->delete('prodcts_sale',$id);
            return header('location:Products');
        }
    }