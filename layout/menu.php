<!--MENU-->
<div class="menu">
    <hr width="90%" size="1px" align="center" color="white">
    <ul id="mega-menu-orange" class="mm-orange">
        <li><a href="http://localhost:8080/coffee-cake/index.php">Trang chủ</a> </li>
        <li><a href="http://localhost:8080/coffee-cake/products.php">Sản phẩm</a> </li>
        <li><a href="http://localhost:8080/coffee-cake/about.php">Giới thiệu</a> </li>
    </ul>
    <!--LOGIN-SIGNUP-->
    <div id="regis">
        <a href="http://localhost:8080/coffee-cake/regis.php">Đăng Ký</a>
    </div>
    <div id="login">
        <a onclick="showLogin()" href="#">Đăng Nhập</a>
    </div>
    <div class="clear"></div>
</div>

<div id="popup" class="modal">
    <form class="modal-content animate" method="POST">
        <div id="container">
            <span id="close" onClick="closeLogin()">&times;</span>
            <input type="text" placeholder="Tên đăng nhập" name="username" required>
            <input type="password" placeholder="Mật khẩu" name="password" required>
            <button type="submit">Đăng nhập</button>
            <label>
                <input type="checkbox" checked>Nhớ tài khoản
            </label>
        </div>
    </form>
</div>

<link href="http://localhost:8080/coffee-cake/css/login.css" rel="stylesheet" type="text/css" media="all"/>
<script src="http://localhost:8080/coffee-cake/js/login.js"></script>