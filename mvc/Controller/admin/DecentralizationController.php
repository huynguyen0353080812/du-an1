<?php
 require_once('mvc/Model/database.php'); 
 require_once('mvc/Model/Base.php');
class DecentralizationController{
    public function index()
    {
        $data = new databse();
        $conn = $data->database();
        $sql = "SELECT * FROM manage_user  WHERE role = 1";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        include ('mvc/view/admin/component/Decentralization/Decentralization.php');
    }
    public function checkPrivilege($uri = false)
    {
        $uri = $uri != false ? $uri : $_SERVER['REQUEST_URI'];
        // var_dump($uri);
        $privilieges = array(
            "decentralization",
            "list_user",
            "list_order",
            "Dashboard",
            "feedback_user",
            "du-an1"
        );
        $privilieges = implode("|",$privilieges);
        preg_match('/'.$privilieges.'/',$uri, $matches);
        return !empty($matches);
    }
    public function Edit()
    {
        include ('mvc/view/admin/component/Decentralization/Edit_Decentralization.php');
    }
    // public function contans()
    // {
    //     $id = $_GET['id'];
    //         $result = $this->customer->delete('prodcts_sale',$id_aa);
    //         return header('location:Products');
    // }
    // public function index()
    // {
    //         $id = $_GET['id'];
    //         $result2222 = $this->customer->delete('prodcts_sale',$id_pro);
    //         return header('location:Products');
    // }
}
