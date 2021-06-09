<!--MENU-->
<div class="menu">
    <hr width="90%" size="1px" align="center" color="white">
    <ul id="mega-menu-orange" class="mm-orange">
        <li><a href="http://localhost:8080/coffee-cake/index.php">Trang chủ</a> </li>
        <li><a href="http://localhost:8080/coffee-cake/products.php">Sản phẩm</a> </li>
        <li><a href="http://localhost:8080/coffee-cake/about.php">Giới thiệu</a> </li>
    </ul>

    <!--LOGIN-SIGNUP-->
    <ul id="menu-and-right" class="menu-r">
        <?php
            if (!isset($_SESSION['username'])) {
                echo "<a onclick='showLogin()'href='#'><li class='menu-rightl' id='login-btn'>Đăng Nhập</li></a>";
                echo "<a href='http://localhost:8080/coffee-cake/regis.php'> <li class='menu-right' id='signup-btn'>Đăng Ký</li></a>";
            }
            else {
                echo "<a href='http://localhost:8080/coffee-cake/index.php?controller=user&action=get_detail'>
                    <li class='menu-rightl'>" . $_SESSION['name'] . "</li>
                  </a>";
                echo "<a href='http://localhost:8080/coffee-cake/index.php?controller=user&action=logout'>
                    <li class='menu-right' id='logout-btn'>Đăng Xuất</li>
                  </a>";
            }
        ?>
    </ul>
</div>

<div id="popup" class="modal">
    <form id="login-form" class="modal-content animate" action="http://localhost:8080/coffee-cake/index.php?controller=user&action=login" method="POST">
        <div id="container">
            <span id="close" onClick="closeLogin()">&times;</span>
<!--            <input type='text' name='username' value='$username' placeholder='Tài khoản' required/>-->
<!--            <input type='password' name='password' value='$pasword' placeholder='Mật khẩu' required/>-->
            <?php
                $username = $password = "";
                if (isset($_COOKIE['account'])) {
                    $account = explode('_', $_COOKIE['account']);   // split account cookie
                    $username = $account[0];
                    $password = $account[1];
                }
                echo "<input type='text' name='username' value='$username' placeholder='Tài khoản' required/>";
                echo "<input type='password' name='password' value='$password' placeholder='Mật khẩu' required/>";
                ?>
            <button type="submit" value="submit">Đăng nhập</button>
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