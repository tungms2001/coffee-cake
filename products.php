<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Tất cả sản phẩm - Coffee Cake</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

</head>
<body>
    <?php
        include "layout/header.php";
        include "layout/menu.php";
    ?>
    <!--MAIN-->
    <div class="product">

        <ul id="category">
            <a class="cate"><h2>Thể loại  <i class="fa fa-chevron-circle-down"></i></h2></a>
            <!--            đem thẻ li vào trong thẻ a, tự làm những cái còn lại, gì nữa k-->
            <a href="products.php"><li>Tất cả</li></a>
            <a href="products/milktea.php"><li>Trà sữa</li></a>
            <a href="products/cafe.php"><li>Cafe</li></a>
            <a href="products/cake.php"><li>Bánh ngọt</li></a>
            <a href="products/topping.php"><li>Topping</li></a>
        </ul>
    </div>

    <?php
    include "layout/footer.php";
    ?>
</body>
</html>