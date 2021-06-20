<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Đăng Ký - Coffee Cake</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
        require "layout/header.php";
        require "layout/menu.php";
    ?>

    <!-------------FORM ĐĂNG KÝ SQL--------------->
    <?php
    require('database.php');

    if (isset($_REQUEST['signup'])){
        $name = stripslashes($_REQUEST['name']);
        $name = mysqli_real_escape_string($con,$name);

        $username = stripslashes($_REQUEST['username']);
        $username = mysqli_real_escape_string($con,$username);

        $email = stripslashes($_REQUEST['email']);
        $email = mysqli_real_escape_string($con,$email);

        $phone = stripslashes($_REQUEST['phone']);
        $phone = mysqli_real_escape_string($con,$phone);

        $password = stripslashes($_REQUEST['password']);
        $password = mysqli_real_escape_string($con,$password);

        $repassword = stripslashes($_REQUEST['repassword']);
        $repassword = mysqli_real_escape_string($con,$repassword);

        $address = stripslashes($_REQUEST['address']);
        $address = mysqli_real_escape_string($con,$address);

        $sqli = "SELECT * FROM users WHERE  email = '$email'";
        $resultemail = mysqli_query($con, $sqli);

        $sqli = "SELECT * FROM users WHERE  username = '$username'";
        $resultusername = mysqli_query($con, $sqli);

        ///KIỂM TRA USERNAME
        if(mysqli_num_rows($resultusername) > 0){
            ?>
            <div class= "alert-warning-username">
                <strong>Cảnh báo!</strong> Tên đăng nhập này đã tồn tại
            </div>
            <?php
        }
        ///KIỂM TRA EMAIL
        elseif(mysqli_num_rows($resultemail) > 0){
            ?>
            <div class= "alert-warning-email">
                <strong>Cảnh báo!</strong> Email này đã tồn tại
            </div>
            <?php
        }
        ///KIỂM TRA PASSWORD
        elseif($password != $repassword){
            ?>
            <div class= "alert-warning-pass">
                <strong>Cảnh báo!</strong> Mật khẩu và xác nhận mật khẩu không trùng khớp
            </div>
            <?php
        }
        ///THỎA 3 ĐK TRÊN ĐK THÀNH CÔNG
        else{
            $query = "INSERT into users (name, username, email, phone, password, repassword, address) VALUES ('$name','$username', '$email','$phone','".md5($password)."','".md5($repassword)."','$address')";
            $result = mysqli_query($con,$query);
            ?>
            <div class="alert-success">
                <strong>Chúc mừng!</strong> <strong>Bạn đã tạo tài khoản thành công. vui lòng quay lại <a href="index.php" style="text-decoration: none; color: #4D5656 ; ">trang chủ</a> để đăng nhập</strong>
            </div>
            <?php
        }
    }
    ?>

    <div class="container">
        <div class="title">TẠO TÀI KHOẢN</div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Họ và Tên</span>
                        <input type="text" name="name" placeholder="Nhập họ và tên" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Tên Đăng Nhập</span>
                        <input type="text" name="username" placeholder="Nhập tên đăng nhập" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Email</span>
                        <input type="email" name="email" placeholder="Nhập email" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Số Điện Thoại</span>
                        <input type="text" name="phone" placeholder="Nhập số điện thoại" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mật Khẩu</span>
                        <input type="password" name="password" placeholder="Nhập mật khẩu" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nhập Lại Mật Khẩu</span>
                        <input type="password"name="repassword" placeholder="Nhập lại mật khẩu" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Địa chỉ</span>
                        <input type="address" name="address" placeholder="Nhập địa chỉ" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Đăng Ký" name="signup">
                </div>
            </form>
        </div>
    </div>
    <link rel="stylesheet" href="css/regis.css">

    <?php

    require "layout/footer.php";
    ?>
</body>
</html>