<?php
require_once('mvc/Model/database.php');
require_once('mvc/Model/Base.php'); 
session_start();
class HomeController{
    private $customer;
    public function __construct()
    {
        $this->customer = new Base();
    }
    public function index()
    {
        $result = $this->customer->all('products');
        require_once("mvc/view/client/index.php");
    }
    public function login($erros = '')
    {
        require_once("mvc/view/client/login.php");
    }
    public function profile() {
        $id = $_GET['id'];
        $result = $this->customer->find('manage_user',$id);
        require_once("mvc/view/client/manger_user.php");
    }
    public function saveProfile() {

        extract($_POST);
        $id = $id;
        $result = $this->customer->update('manage_user',["number_phone='$number_phone',email='$email'"],$id);
        header('location:'.BASE_URL.'');
    }
    public function editPassword() {
        $id = $_GET['id'];
        $result = $this->customer->find('manage_user',$id);
        require_once("mvc/view/client/edit_password.php");
    }
    public function updatePassword() {
        extract($_POST);
        $id = $id;
        $result = $this->customer->find('manage_user',$id);
        $result['password'];
        if($result['password'] !== $_POST['old_password']){
            if($_POST['new_password'] == $_POST['confirm_new_password']) {
                $password = password_hash($_POST['confirm_new_password'],PASSWORD_DEFAULT);
                $result1 = $this->customer->update('manage_user',["password='$password'"],$id);
            } else {
                $his->editPassword($erros = "Mật khẩu của bạn không đúng");
            }
        } else {
            $his->editPassword($erros = "Mật khẩu của bạn không đúng");
        }
        header('location:'.BASE_URL.'');
    }
    public function product_details(){
        $id = $_GET['id'];
        try {
            $result = $this->customer->find('products','id = '.$id.'');
            $image_library = $this->customer->where('','image_library','products_id = '.$id.'');
            $comment = $this->customer->where('comment.user_id,comment.id,manage_user.image,manage_user.user_name,comment.text,comment.created_time','comment INNER JOIN manage_user ON comment.user_id = manage_user.id','comment.products_id = '.$id.'');
            include ('mvc/view/client/products_detail.php');
        } catch (\Throwable $th) {
            echo "Lỗi: " . $e->getMessage();    
        }
    }
    public function savelogin()
    {
        extract($_POST);
        if ($bnt) {
            $result = $this->customer->find('manage_user','user_name= "'.$username.'"');
            if ($result) {
               if (password_verify($password,$result['password'])) {
                         $_SESSION['user_name'] = $result;
                         header('location:'.BASE_URL);
               }else {
                    return $this->login($erros = 'Password');
               }
            }else{
                return $this->login($erros = 'Email');
            }
        }
    }
    public function register()
    {
        require_once("mvc/view/client/register.php");
    }
    public function delete()
    {
        unset($_SESSION['user_name']);
        return header("Location:".BASE_URL);
    }
    public function search()
    {
            // $keyword = $_GET['keyword'];
            // $products = new databse();
            // $rows = $products->database();
            // $sql = "SELECT * FROM `products` WHERE `products_name` LIKE '%$keyword%'";
            // $stmt = $rows->prepare($sql);
            // $stmt->execute();
            // $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            include ('mvc/view/client/search.php');
        
    }
    public function send_comment()
    {
        if(isset($_POST['send_comment'])){
            extract($_POST);
            $d =  htmlEntities($_POST['content_comment'], ENT_QUOTES);
            if($user_id){
                $this->customer->insert('comment',["products_id = $products_id,user_id= $user_id,text ='$d'"]);
                header("location:product_details?id=$products_id");
            }else{
                header("location:page_login?action=comment");
            }
        }
        
    }
    public function Delete_comment()
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $id_pro = $_GET['pro_id'];
        $this->customer->delete('comment','id = '.$id.'');
        header("location:product_details?id=$id_pro");
    }
    public function product_detail()
    {
        require_once("mvc/view/client/products_detail.php");
    }
    public function feedback()
    {
        require_once("mvc/view/client/feedback.php");
    }
    public function Send_Feedback()
    {
        extract($_POST);
        $this->customer->insert('feedback',["user_name = '$user_name',number_phone = $phone,email = '$email',note='$note',status = 1"]);
        header('location:'.BASE_URL);
    }
    public function manger_bill()
    {
        $id = $_SESSION['user_name']['id'];
        $result = $this->customer->where('','orders','user_id ='.$id.' ORDER BY `orders`.`created_time` DESC');
        $result1 = $this->customer->all('orders_detail JOIN products ON orders_detail.produrt_id = products.id');  
        require_once("mvc/view/client/manger_bill.php");
    }
    public function bill_detail()
    {
        $id = $_GET['id'];
        $result =  $this->customer->find('orders','id = '.$id.'');
        $result1 =  $this->customer->where('','orders_detail JOIN products ON orders_detail.produrt_id = products.id','orders_detail.order_id = '.$id.'');
        require_once("mvc/view/client/manger_bill_detail.php");
    }
    public function cancel_order()
    {
        $id = $_GET['id'];
        $id_order = $id.'/h';
        $this->customer->update('orders',['status = '.$id_order.''],'id = '.$id.'');
        header('location:manger_bill');
    }
    public function news()
    {
        $result = $this->customer->all('news');
        require_once("mvc/view/client/tin-tuc.php");
    }
}
?>