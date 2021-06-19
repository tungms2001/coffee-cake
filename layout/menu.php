<!--MENU-->
<link href="http://localhost:8080/coffee-cake/css/style.css" rel="stylesheet" type="text/css" media="all"/>

<div class="menu">
    <hr width="90%" size="1px" align="center" color="white">
    <ul id="mega-menu-orange" class="mm-orange">
        <li><a href="http://localhost:8080/coffee-cake/index.php">Trang chủ</a> </li>
        <li><a href="http://localhost:8080/coffee-cake/products.php">Sản phẩm</a> </li>
        <li><a href="http://localhost:8080/coffee-cake/about.php">Giới thiệu</a> </li>
    </ul>

    <!--LOGIN-SIGNUP-->
    <ul class="menu-right">
        <?php include("login.php");
        if (isset($_SESSION['username'])==true) {
            ?>
            <?php
            echo "<ul class='username'><a href='http://localhost:8080/coffee-cake/userprofile.php'>$_SESSION[username]</a></ul>";
            echo "<ul class='logout'><a href='http://localhost:8080/coffee-cake/logout.php'><li>Đăng xuất</li></a></ul>";
            ?>
            <?php
        }
        else{
            ?>
            <ul id="login">
                <a onclick="showLogin()" href="#"><li>Đăng Nhập</li></a>
            </ul>
            <ul id="regis">
                <a href="http://localhost:8080/coffee-cake/regis.php"><li>Đăng ký</li></a>
            </ul>
            <?php
        }
        ?>
    </ul>

    <div class="clear"></div>
</div>

<div id="popup" class="modal">
    <form class="modal-content animate" method="POST">
        <div id="container">
            <span id="close" onClick="closeLogin()">&times;</span>
            <input type="text" placeholder="Tài khoản" name="username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" required>
            <input type="password" placeholder="Mật khẩu" name="password"value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" required>
            <button type="submit" name="login" id="login-btn">Đăng nhập</button>
            <div id="sub-feature">
                <label>
                    <input type="checkbox" name="remember">Nhớ đăng nhập
                </label>
            </div>
        </div>
    </form>
</div>

<link href="http://localhost:8080/coffee-cake/css/login.css" rel="stylesheet" type="text/css" media="all"/>
<script src="http://localhost:8080/coffee-cake/js/login.js"></script>