<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Đăng Ký</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
<!--HEADER-->
    <div class="header">
        <div class="header_top">
            <div class="logo">
                <a href="index.php"><img src="images/coffeecake.jpg" alt="" /></a>
            </div>
            <div class="header_top_right">
                <div class="search_box">
                    <form>
                        <span class="icon_search"><i class="fa fa-search"></i> </span>
                        <input type="text" id="search" placeholder="Nhập vào tìm kiếm..."/>
                    </form>
                </div>
                <div class="shopping_cart">
                    <div class="cart">
                        <span class="icon_cart"><i class="fas fa-shopping-basket"></i> </span>
                        <span class="no_product"> 0 </span>
                        <span class="cart_title">SẢN PHẨM</span>
                    </div>
                </div>
            </div>
        </div>
        <div class="clear"></div>
    </div>
    <div id="modal_pane">
        <div class="pane">
            <h2>Giỏ hàng</h2>
        </div>
    </div>
    <script src="js/shopping.js"></script>

<!--MENU-->
    <div class="menu">
        <hr width="90%" size="1px" align="center" color="white">
        <ul id="mega-menu-orange" class="mm-orange">
            <li><a href="index.php">Trang chủ</a> </li>
            <li><a href="products.php">Sản phẩm</a> </li>
            <li><a href="about.php">Giới thiệu</a> </li>
        </ul>
        <!--LOGIN-SIGNUP-->
        <div id="regis">
            <a href="regis.php">Đăng Ký</a>
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
    <link href="css/login.css" rel="stylesheet" type="text/css" media="all"/>
    <script src="js/login.js"></script>

    <!--MAIN-->
    <link rel="stylesheet" href="css/about.css">
    <div class="background" style="background-color: #f8f8ff;">
        <div class="row">
            <div class="column">
                <h2 class="content-title">Hài lòng của bạn, niềm vui của chúng tôi</h2>
                <p class="content-titlea">Bạn yêu cầu, chúng tôi làm </p>
            </div>
            <div class="column">
                <div class="content">
                    <div class="content-a">
                        <img src="https://www.starbucks.vn/media/our-espresso_tcm90-24616_w1024_n.png" alt="" style="width: 400px;">
                    </div>
                </div>
            </div>
        </div>

        <div class="row-b">
            <div class="column-b">
                <h2 class="content-title-b">Tận cùng hương vị</h2>
                <p class="content-titlea-b">Vị ngon hảo hạng - phong cách truyền thống - đậm đà hương vị</p>
            </div>
            <div class="column-b">
                <div class="content-b">
                    <div class="content-c">
                        <img src="https://i0.wp.com/www.eatthis.com/wp-content/uploads/2020/07/coffee-tea.jpg?fit=1200%2C879&ssl=1" alt="" style="width: 400px;">
                    </div>
                </div>
            </div>
        </div>
        <br><br><br><br><br><br><br><br><br>
    </div>

    <!---FOOTER-->
    <footer class="footer">
        <div class="footer-left">
            <img src="logo.png" alt="">
            <p>Đặng Nguyễn Anh Tú <br> Mai Sơn Tùng</p>
            <div class="socials">
                <a href="#"><i class="fa fa-facebook"></i></a>
                <a href="#"><i class="fa fa-twitter"></i></a>
                <a href="#"><i class="fa fa-youtube"></i></a>
            </div>
        </div>
        <ul class="footer-right">
            <li>
                <h2>Thông Tin-Chính Sách</h2>
                <ul class="box">
                    <li><a href="about.php">Giới Thiệu</a></li>
                    <li><a href="shipper.php">Chính sách giao hàng</a></li>
                    <li><a href="history.php">Sứ mệnh của chúng tôi</a></li>
                </ul>
            </li>
            <li class="features">
                <h2>Liên Hệ</h2>
                <ul class="box">
                    <li><a href="#">Hotline: 0778671340</a></li>
                    <li><a href="#">Email:abc@gmail.com</a></li>
                </ul>
            </li>
            <li>
                <h2>Địa Chỉ</h2>
                <ul class="box">
                    <li><a href="https://www.google.com/maps/place/173C+L%C3%AA+Th%E1%BB%8B+B%E1%BA%A1ch+C%C3%A1t,+Ph%C6%B0%E1%BB%9Dng+11,+Qu%E1%BA%ADn+11,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7650053,106.6473473,17z/data=!3m1!4b1!4m5!3m4!1s0x31752e947e8fee5f:0xa115739a571e6905!8m2!3d10.765!4d106.649536?hl=vi-VN" target="_blank">173C Lê Thị Bạch Cát P11 Q11 TPHCM</a></li>
                    <li><a href="https://www.google.com/maps/place/280+An+D.+V%C6%B0%C6%A1ng,+Ph%C6%B0%E1%BB%9Dng+4,+Qu%E1%BA%ADn+5,+Th%C3%A0nh+ph%E1%BB%91+H%E1%BB%93+Ch%C3%AD+Minh,+Vi%E1%BB%87t+Nam/@10.7613547,106.6800195,17z/data=!3m1!4b1!4m5!3m4!1s0x31752f1b888ab357:0xc469f6e800231314!8m2!3d10.7613494!4d106.6822082?hl=vi-VN" target="_blank">280 An Dương Vương Q5 TPHCM</a></li>
                </ul>
            </li>
        </ul>
        <div class="footer-bottom">
            <hr width="90%" size="1px" align="center" color="white">
            <p>&copy;2021.Bản quyền Coffee Cake Powered by Túdn & Tùngms</p>
        </div>
    </footer>
</body>
</html>