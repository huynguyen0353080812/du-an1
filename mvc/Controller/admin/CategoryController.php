<?php
    require_once('mvc/Model/Base.php'); 
    // require_once('Recusive.php'); 
    class CategoryControllers{
        public function created(){
            $customer = new Base();
            $result = $customer->all('categories');
            $htmlOption = $this->getCategory($category = '');
            include ('mvc/view/admin/component/Category/CreatedCategory.php');
        }
        public function index(){
            $customer = new Base();
            $result = $customer->all('categories');
            include ('mvc/view/admin/component/Category/Category.php');
        }
        public function erorr($row){
            return $htmlSpan ="<option>".$row."</option >" ;
        }
        public function store(){
            extract($_POST);
            $customer = new Base();
            $result = $customer->insert('categories',["name='$name',parent_id = '$select',slug='$name'"]);
            return header('location:Category');
        }
        // 
        public function getCategory($prend_id){
            $customer = new Base();
            $result = $customer->all('categories');
            $Recusive = new Recusive($result);
            $htmlOption = $Recusive->categories($prend_id);
            // var_dump($htmlOption);
            // die;
            return $htmlOption;
        }
        // 
        public function edit(){
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->find('categories',$id);
            $htmlOption = $this->getCategory($category = $result['parent_id']);
            include ('mvc/view/admin/component/Category/EditCategory.php');
        }
        public function update(){
            extract($_POST);
            $customer = new Base();
            $result = $customer->update('categories',["name='$name',parent_id=$select"],$id);
            return header('location:Category');
        }
        public function delete(){
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->delete('categories',$id);
            return header('location:Category');
        }
    }