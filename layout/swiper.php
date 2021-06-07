<!--SWIPER-->
<link rel="stylesheet" href="css/pic.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">
<link rel="stylesheet" href="https://unpkg.com/swiper/swiper-bundle.min.css">

<!--file css cho chỗ này đâu, có đó k, k t out à có-->
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