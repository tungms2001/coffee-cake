<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Coffee Cake</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src='https://kit.fontawesome.com/a076d05399.js' crossorigin='anonymous'></script>
</head>
<body>
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

    <div class="menu">
        <hr width="90%" size="1px" align="center" color="white">
        <ul id="mega-menu-orange" class="mm-orange">
            <li><a href="index.php">Trang chủ</a> </li>
            <li><a href="products.php">Sản phẩm</a> </li>
            <li><a href="about.php">Giới thiệu</a> </li>
        </ul>
        <div id="regis">
            <a href="regis.php">Đăng Ký</a>
        </div>
        <div id="login">
            <a onclick="showLogin()" href="#">Đăng Nhập</a>
        </div>
    </div>
</body>
</html>