<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Chính sách - Coffee Cake</title>
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
    <link rel="stylesheet" href="css/shipper.css">
    <div class="mid-background">
        <div class="background">
            <div class="text-background">
                <h1>CHÍNH SÁCH GIAO HÀNG</h1>
            </div><img src="https://previews.123rf.com/images/lisaalisaill/lisaalisaill1902/lisaalisaill190200197/124960698-coffee-concept-on-wooden-background-white-coffee-cup-top-view-with-doodle-illustration-about-coffee-.jpg" alt="" width="100%" height="250px">
        </div>
    </div>

    <div class="container">
        <div class="row">
            <div id="Main" class="col-sm-9">
                <p style="text-align: justify;"><span style="font-size: 16px;"><strong>CHÍNH SÁCH GIAO HÀNG</strong></span></p>
                <ul style="list-style-type: disc; text-align: justify;">
                    <li><span style="font-size: 14px;">Dịch vụ giao hàng hoạt động từ <span style="text-decoration: underline;"><strong>9:00 - 18:00</strong></span> và chỉ áp dụng cho đơn hàng <span style="text-decoration: underline;"><strong>trên 200.000 VNĐ;</strong></span></span></li>
                    <li style="text-align: justify;"><span style="font-size: 14px;">Để đảm bảo chất lượng dịch vụ và hàng hoá, đơn hàng sẽ được giao <span style="text-decoration: underline;"><strong>ít nhất 1 tiếng sau</strong></span> </span></li>
                    <li style="text-align: justify;"><span style="font-size: 14px;">Số liệu về khoảng cách được xác minh cụ thể bằng Google Maps cùng khách hàng;</span></li>
                    <li><span style="font-size: 14px;">Với đơn hàng trên Website, hệ thống sẽ tự tính phí giao hàng dựa vào vị trí của quý khách đến cửa hàng gần nhất. Trong những trường hợp hệ thống không xác định được địa chỉ, chúng tôi sẽ liên hệ và báo phí giao hàng riêng với quý khách;</span></li>
                    <li style="text-align: justify;"><span style="font-size: 14px;">Phí giao hàng thường dao động từ <span style="text-decoration: underline;"><strong>15.000 đến 40.000 VNĐ</strong></span>. </span></li>
                </ul>
                <p style="text-align: justify;"><strong>1. Đơn hàng từ dưới 200.000 VNĐ</strong></p>
                <p style="text-align: justify; color:grey;">Khách hàng vui lòng thanh toán hoặc chuyển khoản trước. Hỗ trợ book xe giúp khách hàng. Khách hàng sẽ thanh toán chi phí riêng với đơn vị vận chuyển.</p>
                <p style="text-align: justify;"><strong>2. Đơn hàng từ 200.000 đến dưới 500.000 VNĐ</strong></p>
                <p style="text-align: justify;color:grey;">- Bán kính 1 km: Miễn phí;</p>
                <p style="text-align: justify;color:grey;">- Bán kính 1-5km: 15.000 VNĐ;</p>
                <p style="text-align: justify;color:grey;">- Bán kính 5-10km: 30.000 VNĐ;</p>
                <p style="text-align: justify;color:grey;">- Bán kính dưới 13km: 40.000 VNĐ.</p>
                <p style="text-align: justify;"><strong>3. Đơn hàng trên 500.000 VNĐ</strong></p>
                <p style="text-align: justify;color:grey;">- Bán kính 5km: Miễn phí;</p>
                <p style="text-align: justify;color:grey;">- Bán kính 5-10km: 20.000 VNĐ;</p>
                <p style="text-align: justify;color:grey;">- Bán kính dưới 13km: 30.000 VNĐ;</p>
                <p style="text-align: justify;"><strong>4. Chính sách giao hàng đặc biệt</strong></p>
                <p style="text-align: justify;color:grey;">- Đơn hàng từ <strong>1.500.000 VNĐ</strong> trở lên: Giao hàng miễn phí trong bán kính 13km.</p>
                <p style="text-align: justify;color:grey;">+ Giao hàng riêng không ghép đơn hàng khác;</p>
                <p style="text-align: justify;color:grey;">+ Thời gian giao hàng nhanh nhất;</p>
                <p style="text-align: justify;color:grey;">+ Ưu tiên giao hàng so với các đơn hàng khác.</p>
            </div>
        </div>
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