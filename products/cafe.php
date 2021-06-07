<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Cafe - Coffee Cake</title>
    <link href="../css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link rel="stylesheet" href="../css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
    include "layout/header.php";
    include "layout/menu.php";
?>
<!--MAIN-->
<div class="product">

    <ul id="category">
        <h2>Thể loại</h2>
        <li><a href="../products.php">Tất cả</a> </li>
        <li><a href="../products/milktea.php">Trà sữa</a> </li>
        <li><a href="../products/cafe.php">Cafe</a> </li>
        <li><a href="../products/cake.php">Bánh ngọt</a> </li>
        <li><a href="../products/topping.php">Topping</a> </li>
    </ul>
</div>

<?php
    include "layout/footer.php";
?>
</body>
</html>