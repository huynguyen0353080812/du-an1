<?php
    require_once('mvc/Model/Base.php');
    require_once('mvc/Model/database.php'); 
    use PHPMailer\PHPMailer\PHPMailer;
    use PHPMailer\PHPMailer\Exception;
    class CommentController{
        private $data;
        private $recusion = '';
        public function __construct(){ 
            $customer = new Base();
            // $result = $customer->all('comment');
            // var_dump($result);
            // die;
            $this->data = $customer->all('comment');
        }
        public function index()
        {
            $customer = new Base();
            $result = $customer->Group(['prodcts_sale.products_name,prodcts_sale.image,prodcts_sale.id, COUNT(*) AS SOLUONG,MAX(comment.created_time) AS datenew,MIN(comment.created_time) AS datelate'],'comment',);
            include ('mvc/view/admin/component/Comment/Comment.php');
        }
        public function comment_details()
        {
            $i = 1;
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->Group2($id);
            include ('mvc/view/admin/component/Comment/Comment_details.php');
        }
        public function delete_comment()
        {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->delete('comment',$id);
            return header("location:Comment");
        }
        public function feedback_user()
        {
            $customer = new Base();
            $result = $customer->all('feedback');
            include ('mvc/view/admin/component/Comment/Feedback_User.php');
        }
        public function SendMail()
        {
            // echo $_GET['tieude'];
            echo $a=
            "<table>
            <tr>
                <th>huynugyen</th>
            </tr>
            <tr>
                <td>huynugyen</td>
            </tr>
        </table>";
            // die;
            if (isset($_GET['sendto'])) {
                $email = $_GET['sendto'];
                include 'public/Email/library.php'; // include the library file
                require_once 'public/Email/vendor/autoload.php';
                $mail = new PHPMailer(true);                              // Passing `true` enables exceptions
                try {
                    //Server settings
                    $mail->CharSet = "UTF-8";
                    $mail->SMTPDebug = 0;                                 // Enable verbose debug output
                    $mail->isSMTP();                                      // Set mailer to use SMTP
                    $mail->Host = SMTP_HOST;  // Specify main and backup SMTP servers
                    $mail->SMTPAuth = true;                               // Enable SMTP authentication
                    $mail->Username = SMTP_UNAME;                 // SMTP username
                    $mail->Password = SMTP_PWORD;                           // SMTP password
                    $mail->SMTPSecure = 'ssl';                            // Enable TLS encryption, `ssl` also accepted
                    $mail->Port = SMTP_PORT;                                    // TCP port to connect to
                    //Recipients
                    $mail->setFrom(SMTP_UNAME, "Coffee House");
                    $mail->addAddress($_GET['sendto'], 'Tên người nhận');     // Add a recipient | name is option
                    $mail->addReplyTo(SMTP_UNAME, 'Tên người trả lời');
//                    $mail->addCC('CCemail@gmail.com');
//                    $mail->addBCC('BCCemail@gmail.com');
                    $mail->isHTML(true);                                  // Set email format to HTML
                    $mail->Subject = $_GET['tieude'];

                    $mail->Body = $a;
                    $mail->AltBody = 'cảm ỏn'; //None HTML
                    $result = $mail->send();
                    if (!$result) {
                        $error = "Có lỗi xảy ra trong quá trình gửi mail";
                    }else{
                        $products = new databse();
                        $rows = $products->database();
                        $sql = "UPDATE feedback SET status = 0 WHERE email = '$email'";
                        $stmt = $rows->prepare($sql);
                        $stmt->execute();    
                    }
                    echo 'gửi thành công';
                } catch (Exception $e) {
                    echo 'Message could not be sent. Mailer Error: ', $mail->ErrorInfo;
                }
            }
        }
        public function comment($id=0,$text='-'){
            foreach($this->data as $value){
                if ($value['parent_id']==$id) {
                    echo "<pre>";
                    print_r($value);    
                    echo "</pre>";
                    $this->comment($value['id'],$text.'-');
                }
            }
            // return $this->recusion;
        }
        public function delete_feed()
        {
            $id = $_GET['id'];
            $customer = new Base();
            $result = $customer->delete('feedback',$id);
        }
    }