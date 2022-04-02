<?php
    require_once('mvc/Model/database.php'); 
    require_once('mvc/Model/Base.php'); 

    class NewsController{
        public function index(){
            $customer = new Base();
            $result = $customer->all('news');
            include_once("mvc/view/admin/component/News/list.php");
        }

        public function addForm() {
            date_default_timezone_set('Asia/Ho_Chi_minh');
            $now = date('d-m-Y H:i:s');
            include_once("mvc/view/admin/component/News/add-form.php");
        }

        public function saveAdd() {
            extract($_POST);
            $now = date('d-m-Y H:i:s');
            $customer = new Base();
            $result = $customer->insert('news',["title='$title',description='$description',content='$content',created_time='$created_time'"]);
            header('location:list_news');
        }

        public function editForm() {
            $id= $_GET['id'];
            $now = date('d-m-Y H:i:s');
            $customer = new Base();
            $result = $customer->find('news',$id);
            include_once("mvc/view/admin/component/News/edit-form.php");
        }

        public function saveEdit() {
            extract($_POST);
            $id = $id;
            $now = date('d-m-Y H:i:s');
            $customer = new Base();
            $result = $customer->update('news',["title='$title',description='$description',content='$content',created_time='$created_time'"],$id);
            header('location:list_news');
        }

        public function remove() {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->delete('news',$id);
            header('location:list_news');
        }

    }
