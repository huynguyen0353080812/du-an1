<?php
    require_once('mvc/Model/Base.php'); 
    require_once('Recusive.php'); 
    class CategoryController{
        public function addForm(){
            $customer = new Base();
            $result = $customer->all('categories');
            $htmlOption = $this->getCategory($category = '');
            include_once('mvc/view/admin/component/Category/add-form.php');
        }
        public function index(){
            $customer = new Base();
            $result = $customer->all('categories');
            include_once('mvc/view/admin/component/Category/list.php');
        }
        public function erorr($row){
            return $htmlSpan ="<option>".$row."</option >" ;
        }
        public function saveAdd(){
            extract($_POST);
            $customer = new Base();
            $result = $customer->insert('categories',["name='$name',parent_id = '$select',slug='$name'"]);
            header('location:list_category');
        }
        
        public function getCategory($prend_id){
            if (isset($_GET['id'])) {
                $id = $_GET['id'];
            }else{
                $id = null;
            }
            $customer = new Base();
            $result = $customer->all('categories');
            $Recusive = new Recusive($result,$id_dm = $id);
            $htmlOption = $Recusive->categories($prend_id);
            return $htmlOption;
        }
        
        public function editForm(){
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->find('categories',$id);
            $htmlOption = $this->getCategory($category = $result['parent_id']);
            include_once('mvc/view/admin/component/Category/edit-form.php');
        }
        public function saveEdit(){
            extract($_POST);
            $id = $id;
            $customer = new Base();
            $result = $customer->update('categories',["name='$name',parent_id=$select"],$id);
            header('location:list_category');
        }
        public function remove(){
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->delete('categories',$id);
            header('location:list_category');
        }
    }