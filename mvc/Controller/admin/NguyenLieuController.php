<?php
    require_once('mvc/Model/database.php'); 
    require_once('mvc/Model/Base.php'); 

    class NguyenLieuController{
        public function index(){
            $customer = new Base();
            $result = $customer->all('nguyenlieu');
            include_once("mvc/view/admin/component/NguyenLieu/list.php");
        }

        public function addForm() {
            include_once("mvc/view/admin/component/NguyenLieu/add-form.php");
        }

        public function saveAdd() {
            extract($_POST);
            $customer = new Base();
            $result = $customer->insert('nguyenlieu',["name='$name',quantity='$quantity',donvi='$donvi'"]);
            header('location:list_nguyenlieu');
        }

        public function editForm() {
            $id= $_GET['id'];
            $customer = new Base();
            $result = $customer->find('nguyenlieu',$id);
            include_once("mvc/view/admin/component/NguyenLieu/edit-form.php");
        }

        public function saveEdit() {
            extract($_POST);
            $id = $id;
            $customer = new Base();
            $result = $customer->update('nguyenlieu',["name='$name',quantity='$quantity',donvi='$donvi'"],$id);
            header('location:list_nguyenlieu');
        }

        public function remove() {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->delete('nguyenlieu',$id);
            header('location:list_nguyenlieu');
        }

    }
