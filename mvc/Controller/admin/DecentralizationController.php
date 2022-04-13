<?php
 require_once('mvc/Model/database.php'); 
 require_once('mvc/Model/Base.php');
class DecentralizationController{
    private $recusion = '';
    public function __construct()
    {
        $data = new databse();
        $conn = $data->database();
        $sql = "SELECT * FROM `user_privilege` JOIN privilege ON user_privilege.privilege_id = privilege.id WHERE user_id = 8";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        $total = [];
        foreach ($result as $key => $value) {
            $total ['privilege'][] = $value['url_match'];
            // die;
        }
        $_SESSION['user_name'] = $total;
        // echo "<pre>";
        // var_dump($_SESSION['user_name']);
        // die;
        // var_dump($_SESSION['user_name']);
        // include ('mvc/view/admin/component/Decentrali
    }
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
        $privilieges = $_SESSION['user_name']['privilege'];
    
        // $privilieges = array(
        //     "Manage_user",
        //     "list_user",
        //     "Created_acount",
        //     "Delete_acount",
        //     "Edit_acount\?id=\d",
        //     //end user
        //     "Dashboard",
        //     //
        //     "Feedback",
        //     "feedback_user",
        //     "Comment",
        //     "comment_details\?id=\d",
        //     "delete_comment",
        //     //
        //     "Products",
        //     "list_product",
        //     "edit_product\?id=\d",
        //     "add_product",
        //     "remove_product",
        //     //
        //     "Category",
        //     "list_category",
        //     "edit_category\?id=\d",
        //     "add_category",
        //     "remove_category",
        //     //
        //     "Statistical",
        //     "list_Statistical",
        //     "show_charts",
        //     //
        //     "Order",
        //     "list_order",
        //     "order_detail\?id=\d",
        //     //
        //     "Discount",
        //     "list_discount",
        //     "edit_discount\?id=\d",
        //     "add_discount",
        //     "remove_discount",
        //     //
        //     "quan_ly",
        //     "list_nguyenlieu",
        //     "edit_nguyenlieu\?id=\d",
        //     "add_discount",
        //     "remove_nguyenlieu",
        //     //
        //     "News",
        //     "list_news",
        //     "edit_news\?id=\d",
        //     "add_news",
        //     "remove_news",
        //     //
        //     "decentralization",
        //     "list_decentralization",
        //     "Edit_Decentralization\?id=\d",
        //     // "feedback_user",
        //     // "Edit_acount\?id=\d",
        //     // "Edit_Decentralization\?id=\d"
        //     // "http://localhost:81/du-an1/",       
        //     // "du-an1"
        // );
        $privilieges = implode("|",$privilieges);
        // var_dump($privilieges);
        // die;
        preg_match('/'.$privilieges.'/',$uri, $matches);
        // return true;
        return !empty($matches);
    }
    public function datatree($data,$id,$data2,$text='-')
    {
    //    echo 'huynguyen';
    //    die;
    // var_dump($data2);
        // echo $id_prvi;
        // die;
        $array = [];
        $a = 'không tồn tại';
        $b = 'tồn tại';
       foreach($data as $key => $value ){
        // if ($value['group_id']==$id_prvi) {
        //     echo $value['name']."</br>";
        //                  if (!$value['parent_id']==0) {
        //                     if (!in_array($value['parent_id'],$data2) || !in_array($value['id'],$data2)) {
        //                         $this->recusion .= "<input type = 'checkbox' disabled  value='" .$value['id']. "'>".$text.$value['name'].$value['id'].">";
        //                     }else {
        //                         $this->recusion .= "<input type = 'checkbox' checked = '' value='" .$value['id']. "'>".$text.$value['name'].$value['id'].">";
        //                     }
        //                 }else {
        //                     if (!in_array($value['id'],$data2)) {
        //                         $this->recusion .= "<input type = 'checkbox' value='" .$value['id']. "'>".$text.$value['name'].$value['id'].">";
        //                     }else {
        //                         $this->recusion .= "<input type = 'checkbox' checked value='" .$value['id']. "'>".$text.$value['name'].$value['id']." >";
        //                     }
        //                 }
        //  }
         
        // die; 
            // if ($value['parent_id']==$id) {
            //     // echo $text='|'.$value['name'];
            //     // die;
            //     // echo  "<option value='" .$value['id']. "'>".$text.$value['name']."</option >";
            //     // die;
                if ( !empty($prend_id) && $prend_id == $value['id']) {
                    $this->recusion .= "<option selected value='" .$value['id']. "'>".$text.$value['name'].$a."</option >";   
                }else{
                    // echo "<pre>";
                //    var_dump($value['name']);
                    if (!$value['parent_id']==0) {
                        if (!in_array($value['parent_id'],$data2) || !in_array($value['id'],$data2)) {
                            $this->recusion .= "<input type = 'checkbox' disabled  value='" .$value['id']. "'>".$text.$value['name'].$value['id'].$a.">";
                        }else {
                            $this->recusion .= "<input type = 'checkbox' checked = '' value='" .$value['id']. "'>".$text.$value['name'].$value['id'].$b.">";
                        }
                    }else {
                        if (!in_array($value['id'],$data2)) {
                            $this->recusion .= "<input type = 'checkbox' value='" .$value['id']. "'>".$text.$value['name'].$value['id'].$a.">";
                        }else {
                            $this->recusion .= "<input type = 'checkbox' checked value='" .$value['id']. "'>".$text.$value['name'].$value['id'].$b." >";
                        }
                    }
            //         // if (!($this->id_dm == $value['id'])) {
            //         //     $this->recusion .= "<option value='" .$value['id']. "'>".$text.$value['name']."</option >";   
            //         // }
                    
            //     //   $this->recusion .= "<option value='" .$value['id']. "'>".$text.$value['name'].$value['id']."</option >";
            //     //   var_dump($data2);
                }
                $this->datatree($data,$value['id'],$data2,$text.'-');
            // }
         }
        // die;
       return $this->recusion;
    }
    public function Edit()
    {
        $data = new databse();
        $conn = $data->database();
        $sql = "SELECT * FROM privilege_group";
        $stmt = $conn->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        $sql = "SELECT * FROM privilege";
        $stmt1 = $conn->prepare($sql);
        $stmt1->execute();
        $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        $sql = "SELECT * FROM user_privilege";
        $stmt2 = $conn->prepare($sql);
        $stmt2->execute();
        $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
        $checked = [];
        foreach ($result2 as $key => $value) {
            // var_dump($value['privilege_id']);
            $checked[] = $value['privilege_id'];
        }
        // echo $this->datatree($result1,0,$checked);
        // die;
        // foreach ($result as $key => $value) {
        //     // var_dump($value);
        //     // die;
        //     echo $value['name']."</br>";
        //     echo $this->datatree($result1,0,$checked,$value['id']);
        //     // die;
        // }
        // die;
        // echo "<pre>";
        // var_dump($checked);
        // die;
        include ('mvc/view/admin/component/Decentralization/Edit_Decentralization.php');
    }
    public function save_Decentralization()
    {
        extract($_POST);
        // var_dump($decentralization);
        // die;
        $data = new databse();
        $conn = $data->database();
        $sql = "DELETE FROM user_privilege WHERE user_id = 8";
        $stmt2 = $conn->prepare($sql);
        $stmt2->execute();
        foreach ($decentralization as $key => $value) {
            $sql = "INSERT INTO `user_privilege` SET privilege_id='$value',user_id=8,created_time=1632970609,last_update=1632970609";
            $stmt = $conn->prepare($sql);
            $stmt->execute();
        }
        header('location:list_decentralization');
        
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
