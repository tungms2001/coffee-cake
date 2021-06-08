<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Đăng Ký - Coffee Cake</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
    <?php
        require "layout/header.php";
        require "layout/menu.php";
    ?>

    <div class="container">
        <div class="title">TẠO TÀI KHOẢN</div>
        <div class="content">
            <form action="#">
                <div class="user-details">
                    <div class="input-box">
                        <span class="details">Họ và Tên</span>
                        <input type="text" name="text" placeholder="Nhập họ và tên" required>
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
                        <input type="text" name="phonenmuber" placeholder="Nhập số điện thoại" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Mật Khẩu</span>
                        <input type="password" name="password" placeholder="Nhập mật khẩu" required>
                    </div>
                    <div class="input-box">
                        <span class="details">Nhập Lại Mật Khẩu</span>
                        <input type="password"name="re-password" placeholder="Nhập lại mật khẩu" required>
                    </div>
                </div>
                <div class="button">
                    <input type="submit" value="Đăng Ký">
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