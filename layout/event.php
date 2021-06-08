<!--EVENT-->
<link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
<link rel="stylesheet" href="css/events.css">

<script src="https://unpkg.com/swiper/swiper-bundle.min.js"></script>

<h1 style="text-align: center; font-family:Verdana, Geneva, Tahoma, sans-serif;">Tin Tức và Sự Kiện</h1>
<div class="event">
    <div class="swiper-container mySwiper1">
        <div class="swiper-wrapper">
            <!--1-->
            <div class="swiper-slide">
                <div class="container-fa">
                    <img src="https://dayphache.edu.vn/wp-content/uploads/2020/02/mon-tra-sua-tran-chau.jpg" alt="">
                    <div class="content-fa">
                        <h1><a href="http://localhost:8080/coffee-cake/products.php" style="color: #a1a19f; text-decoration:none;">Sale 30/4-1/5</a></h1>
                        <p>Sale khủng từ 30% -50% nhanh chân lên nào số lượng cực kì có hạn ưu đãi vouncher khủng</p>
                    </div>
                </div>
            </div>
            <!--2-->
            <div class="swiper-slide">
                <div class="container-fb">
                    <img src="https://i.pinimg.com/originals/66/fc/ef/66fcefe474a02067dcd972bd2bd43733.jpg" alt="">
                    <div class="content-fb">
                        <h1><a href="http://localhost:8080/coffee-cake/products.php" style="color: #a1a19f; text-decoration:none;">Valentime Day (14-2)</a></h1>
                        <p>Mua 2 tặng 1 nhanh chân lên nào và nhìu phần quà hấp dẫn cho các couple</p>
                    </div>
                </div>
            </div>
            <!--3-->
            <div class="swiper-slide">
                <div class="container-fc">
                    <img src="https://marketingreview.vn/wp-content/uploads/2017/10/852.jpg" alt="">
                    <div class="content-fc">
                        <h1><a href="http://localhost:8080/coffee-cake/products.php" style="color: #a1a19f; text-decoration:none;">Mừng Khai Trương</a></h1>
                        <p>Khai trương tưng bừng trà sữa ngập tràng nhanh chân lên nào</p>
                    </div>
                </div>
            </div>
            <!--4-->
            <div class="swiper-slide">
                <div class="container-fd">
                    <img src="https://beptruong.edu.vn/wp-content/uploads/2016/02/capuchino.jpg" alt="">
                    <div class="content-fd">
                        <h1><a href="http://localhost:8080/coffee-cake/products.php" style="color: #a1a19f ;text-decoration:none;">CAPUCHINO</a></h1>
                        <p>Hương vị mới bất ngờ mới đậm đà và bức phá, thưởng thức ngay nào</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="swiper-pagination"></div>
    </div>
</div>
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