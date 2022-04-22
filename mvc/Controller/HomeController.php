<?php
require_once('mvc/Model/database.php');
// require_once('CategoryController.php');
require_once('mvc/Model/Base.php'); 
session_start();
class HomeController{
    public function index(Type $var = null)
    {
        // unset($_SESSION['Cart']);
        // die;
        $products = new databse();
        $rows = $products->database();
        $sql = "SELECT * FROM `products`";
        $stmt = $rows->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        // die;
        require_once("mvc/view/client/index.php");
    }
    public function login($erros = '')
    {
        require_once("mvc/view/client/login.php");
    }
    public function profile() {
        $this->customer = new Base();
        $id = $_GET['id'];
        $result = $this->customer->find('manage_user',$id);
        require_once("mvc/view/client/manger_user.php");
    }
    public function saveProfile() {
        $this->customer = new Base();
        extract($_POST);
        $id = $id;
        $result = $this->customer->update('manage_user',["number_phone='$number_phone',email='$email'"],$id);
        header('location:'.BASE_URL.'');
    }
    public function editPassword() {
        $this->customer = new Base();
        $id = $_GET['id'];
        $result = $this->customer->find('manage_user',$id);
        require_once("mvc/view/client/edit_password.php");
    }
    public function updatePassword() {
        $this->customer = new Base();
        extract($_POST);
        $id = $id;
        $result = $this->customer->find('manage_user',$id);
        $result['password'];

        if($result['password'] != $_POST['old_password']){
            if($_POST['new_password'] == $_POST['confirm_new_password']) {
                $password = password_hash($_POST['confirm_new_password'],PASSWORD_DEFAULT);
                $result1 = $this->customer->update('manage_user',["password='$password'"],$id);
            } else {
                $erros = "Mật khẩu của bạn không đúng";
            }
        } else {
            $erros = "Mật khẩu của bạn không đúng";
        }
        // var_dump($result1);
        // die;
        header('location:'.BASE_URL.'');
    }
    // public function list_user()
    // {
    //     require_once("mvc/view/admin/component/user/list_user.php");
    // }
    // // private $category;
    // // public function __construct()
    // // {
    // //     $category = new CategoryController();
    // //     $this->category = $category->category();
    // // }
    // public function indexx($erros = '',$info = '')
    // {
    //     $url = $_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI'];
    //     // $this->category;
    //     $products = new databse();
    //     $rows = $products->database();
    //     try {        
    //         $sql = "SELECT orders.name,products.products_name,orders_detail.order_id,products.price FROM `orders_detail`JOIN products ON orders_detail.produrt_id = products.id JOIN orders ON orders_detail.order_id = orders.id HAVING orders_detail.order_id = 85;";
    //         $stmt = $rows->prepare($sql);
    //         $stmt->execute();
    //         $i = 0;
    //         $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
    //         foreach ($result as $key => $value) {
    //             var_dump($value['products_name']);
    //         }
    //         // var_dump($result);   
    //         die;
    //         // $sql1 = "SELECT* FROM products LIMIT 10";
    //         // $stmt1 = $rows->prepare($sql1);
    //         // $stmt1->execute();
    //         // $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
    //         // $sql2 = "SELECT* FROM products WHERE `products_name` LIKE '%phụ kiện%' LIMIT 5";
    //         // $stmt2 = $rows->prepare($sql2);
    //         // $stmt2->execute();
    //         // $result2 = $stmt2->fetchAll(PDO::FETCH_ASSOC);
    //     } catch (\Throwable $th) {
    //         echo "Lỗi: " . $e->getMessage();    
    //     }
    //     include ('mvc/view/client/component/index.php');
    // }
    public function product_details(){
        // $this->category;
        $products = new databse();
        $rows = $products->database();
        $id = $_GET['id'];
        // $category = $this->category;
        $sql = "SELECT * FROM products WHERE id = $id";
        $stmt = $rows->prepare($sql);
        $stmt->execute();
        try {
            $sql = "SELECT * FROM products WHERE id = $id";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $i = 0;
            $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // 
            $sql = "SELECT * FROM image_library WHERE products_id = $id";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $i = 0;
            $image_library = $stmt->fetchAll(PDO::FETCH_ASSOC);
            $id = 1;
            $id_img = 1;
            // 
            $id_get = $_GET['id'];
            $sql = "SELECT comment.user_id,comment.id,manage_user.image,manage_user.user_name,comment.text,comment.created_time FROM `comment` INNER JOIN manage_user ON comment.user_id = manage_user.id WHERE comment.products_id = $id_get";
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $comment = $stmt->fetchAll(PDO::FETCH_ASSOC);
            // var_dump($comment);
            // die;
            include ('mvc/view/client/products_detail.php');
        } catch (\Throwable $th) {
            echo "Lỗi: " . $e->getMessage();    
        }
    }
    public function savelogin()
    {
        extract($_POST);
        // echo 'ok';
        // die;
        if ($bnt) {
            $products = new databse();
            $rows = $products->database();
            $sql = "SELECT * FROM `manage_user` WHERE user_name= '".$username."'";
            // var_dump($sql);
            $stmt = $rows->prepare($sql);
            $stmt->execute();
            $result = $stmt->fetch(PDO::FETCH_ASSOC);
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
    // public function login(){
    //     extract($_POST);
    //     if ($bnt) {
    //         $products = new databse();
    //         $rows = $products->database();
    //         $sql = "SELECT * FROM `manage_user` WHERE user_name= '".$Email."'";
    //         $stmt = $rows->prepare($sql);
    //         $stmt->execute();
    //         $result = $stmt->fetch(PDO::FETCH_ASSOC);
    //         if ($result) {
    //            if (password_verify($Password,$result['password'])) {
    //                if ($result['status'] == 'on') {
    //                     $time = time()+10;
    //                     $sql1 = "UPDATE `manage_user` SET last_login = $time WHERE id = '".$result['id']."'";
    //                     $stmt1 = $rows->prepare($sql1);
    //                     $stmt1->execute();
    //                     $_SESSION['user_name'] = $result;
    //                     $info = $_SESSION['user_name'];
    //                     return $this->index('',$info);
    //                }else {
    //                 return $this->index($erros = 'Tài Khoản Chưa Kích Hoạt!');
    //                }
    //            }else {
    //                 return $this->index($erros = 'Password Không Tồn Tại!');
    //            }
    //         }else{
    //             return $this->index($erros = 'Email không Tồn Tại!');
    //         }
    //     }
    // }
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
        $conn = new databse();
        $conns = $conn->database();
        if($user_id){
            $sql = "INSERT INTO `comment` SET products_id = $products_id , user_id = $user_id , text = '$content_comment'";
            $stmt = $conns->prepare($sql);
            $stmt->execute();
            header("location:product_details?id=$products_id");
        }else{
            header("location:page_login");
        }
    }
        
}
    public function Delete_comment()
    {
        if(isset($_GET['id'])){
            $id = $_GET['id'];
        }
        $id_pro = $_GET['pro_id'];
        // echo $id_pro;
        // die;
        $conn = new databse();
        $conns = $conn->database();
        $sql = "DELETE FROM comment WHERE id = $id";
        $stmt = $conns->prepare($sql);
        $stmt->execute();
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
        // echo $email;
        $products = new databse();
        $rows = $products->database();
        $sql = "INSERT INTO `feedback` SET user_name = '$user_name',number_phone = $phone ,email = '$email',note='$note',status = 1";
        $stmt = $rows->prepare($sql);
        $stmt->execute();
        header('location:'.BASE_URL);
    }
    public function manger_bill()
    {
        // var_dump($_SESSION['user_name']);
        $id = $_SESSION['user_name']['id'];
        $products = new databse();
        $rows = $products->database();
        // $sql = "SELECT * FROM `orders_detail` JOIN orders ON orders_detail.order_id = orders.id WHERE orders.user_id =8";
        $sql = "SELECT * FROM `orders` WHERE user_id =$id ORDER BY `orders`.`created_time` DESC";
        $stmt = $rows->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        
        $sql1 = "SELECT * FROM `orders_detail` JOIN products ON orders_detail.produrt_id = products.id";
        $stmt1 = $rows->prepare($sql1);
        $stmt1->execute();
        $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // var_dump($result);
        // die;    
        require_once("mvc/view/client/manger_bill.php");
    }
    public function bill_detail()
    {
        $id = $_GET['id'];
        $products = new databse();
        $rows = $products->database();
        $sql = "SELECT * FROM `orders` WHERE id = $id";
        $stmt = $rows->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetch(PDO::FETCH_ASSOC);
        $sql1 = "SELECT * FROM `orders_detail` JOIN products ON orders_detail.produrt_id = products.id WHERE orders_detail.order_id = $id ";
        $stmt1 = $rows->prepare($sql1);
        $stmt1->execute();
        $result1 = $stmt1->fetchAll(PDO::FETCH_ASSOC);
        // echo "<pre>";
        // var_dump($result1);
        // die; 
        require_once("mvc/view/client/manger_bill_detail.php");
    }
    public function cancel_order()
    {
        // echo 'huynguye';
        $id = $_GET['id'];
        $id_order = $id.'/h';
        $products = new databse();
        $rows = $products->database();
        $sql = "UPDATE `orders` SET status = '$id_order' WHERE id = $id";
        $stmt = $rows->prepare($sql);
        $stmt->execute();
        header('location:manger_bill');
    }
    public function news()
    {
        $products = new databse();
        $rows = $products->database();
        $sql = "SELECT * FROM news";
        $stmt = $rows->prepare($sql);
        $stmt->execute();
        $result = $stmt->fetchAll(PDO::FETCH_ASSOC);
        // var_dump($result);
        // die;
        require_once("mvc/view/client/tin-tuc.php");
    }
}
?>
