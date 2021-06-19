<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Chi tiết sản phẩm - Coffee Cake</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
    <link href="http://localhost:8080/coffee-cake/css/detailpd.css" rel="stylesheet"/>

</head>
<body>
<?php
require "layout/header.php";
require "layout/menu.php";
?>

<?php
    require_once 'database.php';

    $id = $_GET['id'];
    $sql_type = "SELECT * FROM typeproduct";
    $query_type = mysqli_query($con, $sql_type);
    $sql_up = "SELECT * FROM product where IDPR = $id";
    $query_up = mysqli_query($con, $sql_up);
    $row_up = mysqli_fetch_assoc($query_up);

?>

<div class="detail-product">
    <img class="detailpd-image" src="images/<?php echo $row_up['IMAGE'];?>">
    <div class="detail-right">
        <div class="detailpd-item">
            <h3 id="name-item"><?php echo $row_up['NAMEPR'];?></h3>
            <span class="detail-price"><?php echo $row_up['PRICE'];?>₫</span>
        </div>
        <div class="add-to-cart-action">
            <form method="post" action="shopping.php?id=<?php echo $row_up['IDPR'];?>" class="add-to-cart">
                <input type="hidden" name="id" value="">
                <button type="submit" name="add" class="btn">
                    <span class="icon icon-cart">Thêm vào giỏ hàng</span>
                </button>
            </form>
        </div>
        <div class="detailpd-depict">
            <h3 class="depict-top">Miêu tả</h3>
            <p class="depict"><?php echo $row_up['DESCRIPTION'];?></p>
        </div>
    </div>
</div>

<?php
require "layout/footer.php";
?>

</body>
</html>