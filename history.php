<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Lịch sử - Coffee Cake</title>
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
<link rel="stylesheet" href="css/history.css">
    <article class="articleBlock" >
        <h1 class="articleBlock__header" >Tuyên bố về sứ mệnh của chúng tôi</h1>
        <div class="articleBlock_border">
            <h2 class="articleBlock__summaryHeadline" > Sứ mệnh của chúng tôi: khơi nguồn cảm hứng và nuôi dưỡng tinh thần con người – một người, một cốc cà phê và một tình hàng xóm vào một thời điểm</h2>
            <div class="articleBlock__text rtf">
                <div >
                    <p>Dưới đây là các nguyên lý về cách thức chúng tôi hoạt động hàng ngày:</p>
                    <h3>Cà phê của chúng tôi</h3>
                    <p>Chúng tôi đã, đang và sẽ luôn chú trọng vào chất lượng. Chúng tôi say mê tìm nguồn cung ứng cà phê hạt ngon nhất theo cách có đạo đức, rang chúng một cách cực kỳ cẩn thận và cải thiện cuộc sống của những người trồng cà phê. Chúng tôi quan tâm sâu sắc đến tất cả các hoạt động này; công việc của chúng tôi không bao giờ kết thúc.</p>
                    <h3>Cộng sự của chúng tôi</h3>
                    <p>Chúng tôi đã kêu gọi các tối tác vì đó không chỉ là công việc mà còn là niềm đam mê của chúng tôi. Đồng thời, chúng tôi nắm lấy sự đa dạng để tạo ra một nơi mà mỗi chúng ta có thể là chính mình. Chúng tôi luôn đối xử với nhau một cách tôn trọng và đường hoàng. Và chúng tôi giữ cho nhau ở trong chuẩn mực đó.</p>
                    <h3>Khách hàng của chúng tôi</h3>
                    <p>Khi chúng tôi tham gia hoàn toàn, chúng tôi giao thiệp, tươi cười và nâng cao cuộc sống của khách hàng – ngay cả khi chỉ là một vài khoảnh khắc. Chắc chắn là thế, điều này bắt đầu bằng lời hứa về đồ uống được pha hoàn hảo. Tuy nhiên, công việc của chúng tôi vượt xa điều đó. Đó thực sự là về kết nối nhân văn.</p>
                    <h3>Cửa hàng của chúng tôi</h3>
                    <p>Khi khách hàng của chúng tôi cảm nhận được cảm giác gần gũi, các cửa hàng của chúng tôi trở thành nơi trú ẩn, nghỉ ngơi cho những lo lắng bên ngoài, một nơi bạn có thể gặp gỡ bạn bè. Đó là về sự tận hưởng tốc độ của cuộc sống – đôi khi chậm và đậm đà hương vị, đôi khi lại nhanh hơn. Luôn tràn đầy tính nhân văn.</p>
                    <h3>Tình hàng xóm của chúng tôi</h3>
                    <p>Mỗi cửa hàng là một phần của cộng đồng và chúng tôi có trách nhiệm là những người láng giềng tốt một cách nghiêm túc. Chúng tôi muốn được chào đón ở mọi nơi chúng tôi tiến hành kinh doanh. Chúng tôi có thể là một lực lượng cho hành động tích cực – kết nối các cộng sự, khách hàng của chúng tôi và cộng đồng với nhau để đóng góp hàng ngày. Giờ đây, chúng tôi thấy rằng trách nhiệm của chúng tôi – và tiềm năng của chúng tôi cho những điều tốt đẹp – thậm chí còn lớn hơn. Một lần nữa, thế giới đang mong đợi đưa ra chuẩn mực mới. Chúng tôi sẽ lãnh đạo.</p>
                    <h3>Cổ đông của chúng tôi</h3>
                    <p>Chúng tôi biết rằng khi chúng tôi phân phối ở một trong những khu vực này, chúng tôi sẽ đạt được thành công. Sự thành công này sẽ là phần thưởng cho các cổ đông của chúng tôi. Chúng tôi chịu trách nhiệm hoàn toàn về việc đưa từng yếu tố này vào đúng vị trí – và mọi người tiếp cận – đều có thể tồn tại và phát triển mạnh.</p>
                    <h3>Tuyên bố về Sứ mệnh Môi trường</h3>
                    <p>Cam kết đóng vai trò lãnh đạo môi trường trong tất cả các khía cạnh kinh doanh của chúng tôi.</p>
                    <h3>Chúng tôi thực hiện sứ mệnh này bằng cam kết:</h3>
                    <ul>
                        <li>Hiểu các vấn đề về môi trường và chia sẻ thông tin với cộng sự của chúng tôi.</li>
                        <li>Phát triển các giải pháp sáng kiến và linh hoạt để đưa ra thay đổi.</li>
                        <li>Phấn đấu mua, bán và sử dụng các sản phẩm thân thiện với môi trường.</li>
                        <li>Nhận thấy trách nhiệm về tài chính là cần thiết cho tương lai môi trường của chúng ta.</li>
                        <li>Đưa trách nhiệm về môi trường thành giá trị của công ty.</li>
                        <li>Đo và theo dõi tiến độ của chúng tôi cho từng dự án.</li>
                        <li>Khuyến khích tất cả cộng sự tham gia vào sứ mệnh của chúng tôi.</li>
                    </ul>
                </div>
            </div>
        </div>
    </article>

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