<?php require_once('mvc/view/client/layout.php'); ?>
    <div class="content-item">
        <div class="container">
            <div class="login">
                <h1>Đăng nhập</h1>
                <form action="login" method="POST">
                    <div class="form-control">
                        <input type="text" placeholder="Username" name="username">
                        <small><?php echo(isset($err['username']))?$err['username']:''?></small>
                    </div>
                    <div class="form-control">
                        <input type="password" placeholder="Password" name="password">
                        <small><?php echo(isset($err['password']))?$err['password']:''?></small>
                    </div>
                    <input type="submit" value="Login" name="login">
                    <div class="signup_link">
                        Not a member?
                        <a href="./register.php">Signup</a>
                        or
                        <a href="#">Fogot password</a>
                    </div>
                </form>
            </div>
        </div>
    </div>
    <?php require_once('mvc/view/client/footer.php'); ?>