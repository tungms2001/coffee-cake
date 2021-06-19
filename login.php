<?php
session_start();
require('database.php');
if (isset($_POST["login"])) {
    if (isset($_POST['username'])){
        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);
        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);
        $query = "SELECT * FROM `users` WHERE username='$username' and password='".md5($password)."'";
        $result = mysqli_query($con,$query);
        $rows = mysqli_num_rows($result);
        if($rows==1){
            // ĐĂNG NHẬP THÀNH CÔNG
            $_SESSION['username'] = $username;
            // Ghi Nhớ tài khoản mật khẩu đăng nhập
            if($username){
                if(!empty($_POST["remember"])){
                    setcookie ("member_login",$username,time()+ (10 * 365 * 24 * 60 * 60));
                    setcookie ("member_password",$password,time()+ (10 * 365 * 24 * 60 * 60));
                    $_SESSION["username"] = $username;
                }
                else{
                    if(isset($_COOKIE["member_login"])){
                        setcookie ("member_login","");
                    }
                    if(isset($_COOKIE["member_password"])){
                        setcookie ("member_password","");
                    }
                }
            }
        }

        if ($rows==0){
            ?>
            <!-- Sai tài khoản và mật khẩu-->
            <div class= "alert-warning-login">
                <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                <strong>Cảnh báo!</strong> Sai tài khoản hoặc mật Khẩu
            </div>
            <?php
        }
    }
}
?>