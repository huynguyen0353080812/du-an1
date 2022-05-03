<?php
        require_once('mvc/Model/database.php');     
        $conn = new databse();
        $conns = $conn->database();
        $err = [];
    
        if(isset($_POST['user_name'])){
            $sql = "SELECT * FROM manage_user where user_name=?";
            $user_name = $_POST['user_name'];
            $stmt = $conns->prepare($sql);
            $stmt->execute([$user_name]);
            $out = $stmt->fetchColumn();
            if($out){
                $err['user_name'] = "Tên tài khoản đã tồn tại";
            }
            $email = $_POST['email'];
            $password = $_POST['password'];
            $repassword = $_POST['repassword'];
            if(empty($user_name)){
                $err['user_name'] = "Bạn chưa nhập tên";
            }else if(strlen($user_name)<6){
                $err['user_name'] = "Không được để ngắn hơn 6 kí tự";
            }else if(strlen($user_name)>15){
                $err['user_name'] = "Không được để dài hơn 15 kí tự";
            }
            if(empty($email)){
                $err['email'] = "Bạn chưa nhập email";
            }
            if(empty($password)){
                $err['password'] = "Bạn chưa nhập password";
            }else if(strlen($password)<6){
                $err['password'] = "Không được để ngắn hơn 6 kí tự";
            }
            if($password != $repassword){
                $err['repassword'] = "Nhập lại không khớp";
            }
            
            if(empty($err)){
            $pass = password_hash($password,PASSWORD_DEFAULT);
            $sql = "INSERT INTO manage_user(user_name,email,password) VALUES ('$user_name','$email','$pass')";
            $stmt = $conns->prepare($sql);
            $stmt->execute();
            $mess = 'thànhcông';
            header('location:page_login?mess='.$mess);
            }
        }

    
?>
<?php include_once("mvc/view/client/layout.php"); ?>
    <div class="content-item">
        <div class="container">
            <div class="login">
                <h1>Đăng kí</h1>
                <form action="" method="post">
                    <div class="form-control">
                        <input type="text" placeholder="Username" name="user_name">
                        <span></span>
                        <small><?php echo(isset($err['user_name'])) ? $err['user_name'] : '' ?></small>
                    </div>
                    <div class="form-control">
                        <input type="email" placeholder="Email" name="email">
                        <span></span>
                        <small><?php echo(isset($err['email'])) ? $err['email'] : '' ?></small>
                    </div>
                    <div class="form-control">
                        <input type="password" placeholder="Password" name="password">
                        <span></span>
                        <small><?php echo(isset($err['password'])) ? $err['password'] : '' ?></small>
                    </div>
                    <div class="form-control">
                        <input type="password" placeholder="Re password" name="repassword">
                        <span></span>
                        <small><?php echo(isset($err['repassword'])) ? $err['repassword'] : '' ?></small>
                    </div>

                    <input type="submit" value="Register" name="register">
                    <div class="signup_link">
                        I have a account
                        <a href="page_login">Signin</a>
                    </div>
                </form>
            </div>
        </div>

    </div>
    <?php include_once("mvc/view/client/footer.php"); ?>