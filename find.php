<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Tất cả sản phẩm - Coffee Cake</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/find.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

</head>
<body>
<?php
require "layout/header.php";
require "layout/menu.php";
?>
<h1 style="text-align: center;">TÌM KIẾM SẢN PHẨM</h1>
<?php
require ('database.php');
if (isset($_POST['submit'])){
    $searchValue = $_POST['search'];

    if ($con->connect_error) {
        echo "connection Failed: " . $con->connect_error;
    }
    else {
        $sql = "SELECT * FROM product WHERE NAMEPR  LIKE '%$searchValue%'";
        $result = $con->query($sql);
        while ($row = $result->fetch_assoc()){
            ?>
            <div class="col-md-4">
                <div class="product-menu">
                    <div class="grid-item">
                        <div class="product-container">
                            <div class="product-image">
                                <a href="detailpd.php?id=<?php echo $row['IDPR'];?>" title="">
                                    <img class="back-img" src="images/<?php echo $row['IMAGE'];?>">
                                </a>
                            </div>
                            <div class="product-meta">
                                <div class="product-price">
                                    <span class="amount"><?php echo $row['PRICE'];?>₫</span>
                                    <h4 class="product-name">
                                        <a href="detailpd.php?id=<?php echo $row['IDPR'];?>" title="milktea"><?php echo $row['NAMEPR'];?></a>
                                    </h4>
                                </div>
                                <div class="add-to-cart-action">
                                    <form method="post" action="products.php?id=<?php echo $row['IDPR'];?>" class="add-to-cart">
                                        <input type="hidden" name="id" value="">
                                        <button type="submit" name="add" class="btn">
                                            <span class="icon icon-cart">Thêm vào giỏ hàng</span>
                                        </button>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <?php
        }
    }
}
?>
<?php
require "layout/footer.php";
?>

</body>
</html>