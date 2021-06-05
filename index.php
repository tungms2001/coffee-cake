<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Coffee Cake</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
<!--CSS-->
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
    <link rel="stylesheet" href="css/events.css">
    <link rel="stylesheet" href="css/gallery.css">
    <link rel="stylesheet" href="css/pic.css">
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

<!--SWIPER-->
    <div class="swiper-container mySwiper">
        <div class="swiper-wrapper">
            <div class="swiper-slide"><img src="https://dayphache.edu.vn/wp-content/uploads/2020/02/mon-tra-sua-tran-chau.jpg" alt=""></div>
            <div class="swiper-slide"><img src="https://www.hoteljob.vn/files/6-loai-ly-tach-chuyen-phuc-vu-ca-phe-barista-can-biet-4.jpg" alt=""></div>
            <div class="swiper-slide"><img src="https://cdnsg.kilala.vn/data/upload/article/5263/Starbucks%20Nhat%20Ban%20(4).jpg" alt=""></div>
        </div>
        <div class="swiper-button-next"></div>
        <div class="swiper-button-prev"></div>
        <div class="swiper-pagination"></div>
    </div>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper", {
            cssMode: true,
            navigation: {
                nextEl: ".swiper-button-next",
                prevEl: ".swiper-button-prev",
            },
            pagination: {
                el: ".swiper-pagination",
            },
            mousewheel: true,
            keyboard: true,
        });
    </script>

<!--GALLERY-->
    <div class="responsive">
        <div class="gallery">
            <div class="container1">
                <a target="_blank" href="#">
                    <img src="https://dayphache.edu.vn/wp-content/uploads/2020/02/mon-tra-sua-tran-chau.jpg" alt="" width="100%" height="400" class="image1">
                </a>
            </div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <div class="container2">
                <a target="_blank" href="#">
                    <img src="https://www.hoteljob.vn/files/6-loai-ly-tach-chuyen-phuc-vu-ca-phe-barista-can-biet-4.jpg" alt="" width="100%" height="400" class="image2">
                </a>
            </div>
        </div>
    </div>
    <div class="responsive">
        <div class="gallery">
            <div class="container3">
                <a target="_blank" href="#">
                    <img src="https://cdnsg.kilala.vn/data/upload/article/5263/Starbucks%20Nhat%20Ban%20(4).jpg" alt="" width="100%" height="400" class="image3">
                </a>
            </div>
        </div>
    </div>
<div class="clear"></div>

<!--MAIN PICTURE-->
    <div class="pic1">
        <img src="https://tocotocotea.com/wp-content/themes/tocotocotea/assets/images/banner_about_us.png" alt="">
        <div class="text-block">
            <h1>VỀ CHÚNG TÔI</h1>
            <p style="color: black;">Bên cạnh niềm tự hào về ly trà sữa ngon-sạch-tươi<br>
                Chúng tôi luôn mang đến khách hàng trải nghiệm tốt nhất về dịch vụ và không gian</p>
            <div class="more">
                <a href="about.php" class="next">Xem thêm &raquo;</a>
            </div>
        </div>
    </div>

<!--EVENT-->
    <h1 style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif;">Tin Tức và Sự Kiện</h1>
    <div class="event">
        <div class="swiper-container mySwiper1">
            <div class="swiper-wrapper">
                <!--1-->
                <div class="swiper-slide">
                    <div class="container-fa">
                        <img src="https://dayphache.edu.vn/wp-content/uploads/2020/02/mon-tra-sua-tran-chau.jpg" alt="">
                        <div class="content-fa">
                            <h1><a href="#" style="color: #a1a19f; text-decoration:none;">Sale 30/4-1/5</a></h1>
                            <p>Sale khủng từ 30% -50% nhanh chân lên nào số lượng cực kì có hạn ưu đãi vouncher khủng</p>
                        </div>
                    </div>
                </div>
                <!--2-->
                <div class="swiper-slide">
                    <div class="container-fb">
                        <img src="https://i.pinimg.com/originals/66/fc/ef/66fcefe474a02067dcd972bd2bd43733.jpg" alt="">
                        <div class="content-fb">
                            <h1><a href="#" style="color: #a1a19f; text-decoration:none;">Valentime Day (14-2)</a></h1>
                            <p>Mua 2 tặng 1 nhanh chân lên nào và nhìu phần quà hấp dẫn cho các couple</p>
                        </div>
                    </div>
                </div>
                <!--3-->
                <div class="swiper-slide">
                    <div class="container-fc">
                        <img src="https://marketingreview.vn/wp-content/uploads/2017/10/852.jpg" alt="">
                        <div class="content-fc">
                            <h1><a href="#" style="color: #a1a19f; text-decoration:none;">Mừng Khai Trương</a></h1>
                            <p>Khai trương tưng bừng trà sữa ngập tràng nhanh chân lên nào</p>
                        </div>
                    </div>
                </div>
                <!--4-->
                <div class="swiper-slide">
                    <div class="container-fd">
                        <img src="https://beptruong.edu.vn/wp-content/uploads/2016/02/capuchino.jpg" alt="">
                        <div class="content-fd">
                            <h1><a href="#" style="color: #a1a19f ;text-decoration:none;">CAPUCHINO</a></h1>
                            <p>Hương vị mới bất ngờ mới đậm đà và bức phá, thưởng thức ngay nào</p>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- Swiper JS -->
    <script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>
    <!-- Initialize Swiper -->
    <script>
        var swiper = new Swiper(".mySwiper1", {
            slidesPerView: 3,
            spaceBetween: 30,
            pagination: {
                el: ".swiper-pagination",
                clickable: true,
            },
        });
    </script>

<!---FOOTER-->
    <footer class="footer">
        <div class="footer-left">
            <img src="logo.png" alt="">
            <p>ĐẶNG NGUYỄN ANH TÚ<br> MAI SƠN TÙNG</p>
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