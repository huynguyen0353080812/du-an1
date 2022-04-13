<?php
    require_once('mvc/Model/Base.php'); 
    require_once('mvc/Model/database.php');
    require_once('Recusive.php'); 
    class ProductController{
        private $customer;
        public function __construct()
        {
            $this->customer = new Base();
        }
        public function index()
        {
            $category = $this->customer->all('categories');
                $data = new databse();
                $conn = $data->database();
                $item_perpage = isset($_GET['per_page'])? $_GET['per_page']:10;
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
                include('mvc/view/admin/component/Products/list.php'); 
        }
        public function editForm()
        {
            $id = $_GET['id'];
            $result = $this->customer->find('prodcts_sale',$id);
            $htmlOption = $this->getCategory($category = '');
            $library = $this->customer->where('image_pro','image_library','products_id ='.$id.' ');
            
            include ('mvc/view/admin/component/Products/edit-form.php'); 
        }
        public function saveEdit()
        {
            extract($_POST);
            $file = $_FILES['image'];
            $anhcu= $_POST['anhcu'];
            if ($file['size'] > 0) {
                $avatar = $file['name'];
                move_uploaded_file($file['tmp_name'],"public/img/".$avatar);
            }else{
                $avatar = $anhcu;
            }
            $id = $id;
            $result = $this->customer->update('prodcts_sale',["products_name='$products_name',price ='$price',image='$avatar',categories_id=$categories_id,content='$content',categories_id='$categories_id'"],$id);
            $files = $_FILES['images'];
            if ($files['size'][0] > 0) {
                $id = $id;
                $result = $this->customer->delete('image_library',$id);
                $avatars = $files['name'];
                foreach ($avatars as $key => $value) {
                    move_uploaded_file($files['tmp_name'][$key],"public/library_img/".$value);
                }
                foreach ($avatars as $key => $value) {
                    $result1 = $this->customer->insert('image_library',["products_id ='$id',image_pro='$value'"]);                    
                }
            }
             header('location:list_product');
        }
        public function addForm()
        {
            $category = $this->customer->all('categories');
            $htmlOption = $this->getCategory($category = '');
            include ('mvc/view/admin/component/Products/add-form.php'); 
        }
        public function saveAdd()
        {
            extract($_POST);
            $file = $_FILES['image'];
            if ($file['size'] > 0) {
                $avatar = $file['name'];
                move_uploaded_file($file['tmp_name'],"public/img/".$avatar);
            }else{
                $avatar = "";
            }
            $result = $this->customer->insert('prodcts_sale',["products_name='$products_name',price ='$price',image='$avatar',content='$content',categories_id='$categories_id'"]);
            $files = $_FILES['images'];
            if ($files['size'] > 0) {
                $avatars = $files['name'];
                foreach ($avatars as $key => $value) {
                    move_uploaded_file($files['tmp_name'][$key],"public/library_img/".$value);
                }
            }else{
                $avatars = "";
            }
            foreach ($avatars as $key => $value) {
                $result1 = $this->customer->insert('image_library',["products_id  = '$result',image_pro= '$value',created_time = '$now'"]);
            }
            header('location:list_product');
        }
        public function remove()
        {
            $id = $_GET['id'];
            $result = $this->customer->delete('prodcts_sale',$id);
            header('location:list_product');
        }

        public function getCategory($prend_id){
            $customer = new Base();
            $result = $customer->all('categories');
            $Recusive = new Recusive($result);
            $htmlOption = $Recusive->categories($prend_id);
            return $htmlOption;
        }
    }