<?php
require_once('mvc/Model/database.php');
class DecentralizationController{
    // public function index()
    // {
    //     include ('mvc/view/admin/component/Decentralization/Decentralization.php');
    // }
    // public function chart()
    // {
    //     include ('mvc/view/admin/component/Decentralization/Decentralization.php');
    // } phàn này là làm thêm 
    public function contans()
    {
        $id = $_GET['id'];
            $result = $this->customer->delete('prodcts_sale',$id);
            return header('location:Products');
    }
    public function index()
    {
        $id = $_GET['id'];
            $result = $this->customer->delete('prodcts_sale',$id_pro);
            return header('location:Products');
    }
}
