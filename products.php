<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Tất cả sản phẩm - Coffee Cake</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/product.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />

</head>
<body>
    <?php
        require "layout/header.php";
        require "layout/menu.php";
    ?>
    <!--MAIN-->
    <?php
        require_once 'database.php';

        $sql1 = "SELECT * FROM product inner join typeproduct on product.IDTYPE = typeproduct.IDTYPE";
        $query1 = mysqli_query($con, $sql1);

        $sql2 = "SELECT * FROM product inner join typeproduct on product.IDTYPE = typeproduct.IDTYPE";
        $query2 = mysqli_query($con, $sql2);

        $sql3 = "SELECT * FROM product inner join typeproduct on product.IDTYPE = typeproduct.IDTYPE";
        $query3 = mysqli_query($con, $sql3);

        $sql4 = "SELECT * FROM product inner join typeproduct on product.IDTYPE = typeproduct.IDTYPE";
        $query4 = mysqli_query($con, $sql4);

    ?>

    <div class="product">
        <h2>Thể loại<i class="fa fa-chevron-circle-down"></i></h2>
    </div>

    <div class="milktea">
        <h3>Trà sữa</h3>
        <hr width="80%" size="1px" align="center" color="green">
    </div>
    <div class="product-menu">
        <?php
        while($row = mysqli_fetch_assoc($query1))
        {?>
            <?php
            if($row['IDTYPE'] == 1){
            ?>
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
                                <form method="post" action="shopping.php?id=<?php echo $row['IDPR'];?>" class="add-to-cart">
                                    <input type="hidden" name="id" value="">
                                    <button type="submit" name="add" class="btn">
                                        <span class="icon icon-cart">Thêm vào giỏ hàng</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
        <?php
            }else{

            }
        }
        ?>
    </div>

    <div class="milktea">
        <h3>Cafe</h3>
        <hr width="80%" size="1px" align="center" color="green">
    </div>
    <div class="product-menu">
        <?php
        while($row = mysqli_fetch_assoc($query2))
        {?>
            <?php
            if($row['IDTYPE'] == 2){
                ?>
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
                                <form method="post" action="shopping.php?id=<?php echo $row['IDPR'];?>" class="add-to-cart">
                                    <input type="hidden" name="id" value="">
                                    <button type="submit" name="add" class="btn">
                                        <span class="icon icon-cart">Thêm vào giỏ hàng</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <div class="milktea">
        <h3>Bánh ngọt</h3>
        <hr width="80%" size="1px" align="center" color="green">
    </div>
    <div class="product-menu">
        <?php
        while($row = mysqli_fetch_assoc($query3))
        {?>
            <?php
            if($row['IDTYPE'] == 3){
                ?>
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
                                <form method="post" action="shopping.php?id=<?php echo $row['IDPR'];?>" class="add-to-cart">
                                    <input type="hidden" name="id" value="">
                                    <button type="submit" name="add" class="btn">
                                        <span class="icon icon-cart">Thêm vào giỏ hàng</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <div class="milktea">
        <h3>Topping</h3>
        <hr width="80%" size="1px" align="center" color="green">
    </div>
    <div class="product-menu">
        <?php
        while($row = mysqli_fetch_assoc($query4))
        {?>
            <?php
            if($row['IDTYPE'] == 4){
                ?>
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
                                <form method="post" action="shopping.php?id=<?php echo $row['IDPR'];?>" class="add-to-cart">
                                    <input type="hidden" name="id" value="">
                                    <button type="submit" name="add" class="btn">
                                        <span class="icon icon-cart">Thêm vào giỏ hàng</span>
                                    </button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
                <?php
            }
        }
        ?>
    </div>

    <?php
    require "layout/footer.php";
    ?>

<!--    <script src="js/product.js"></script>-->
</body>
</html>