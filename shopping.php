<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Giỏ hàng của tôi - Coffee Cake</title>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">

</head>
<body>
<?php
require "layout/header.php";
?>
<link href="http://localhost:8080/coffee-cake/css/style.css" rel="stylesheet" type="text/css" media="all"/>

<div class="menu" style="height: 70px">
    <hr width="90%" size="1px" align="center" color="white">
    <ul id="mega-menu-orange" class="mm-orange">
        <li><a href="http://localhost:8080/coffee-cake/index.php">Trang chủ</a> </li>
        <li><a href="http://localhost:8080/coffee-cake/products.php">Sản phẩm</a> </li>
        <li><a href="http://localhost:8080/coffee-cake/about.php">Giới thiệu</a> </li>
    </ul>

    <!--LOGIN-SIGNUP-->
    <ul class="menu-right">
        <?php include("login.php");
        if (isset($_SESSION['username'])==true) {
            ?>
            <?php
            echo "<ul class='username'><a href='http://localhost:8080/coffee-cake/userprofile.php'>$_SESSION[username]</a></ul>";
            echo "<ul class='logout'><a href='http://localhost:8080/coffee-cake/logout.php'><li style='margin-top: -6px'>Đăng xuất</li></a></ul>";
            ?>
            <?php
        }
        else{
            ?>
            <ul id="login">
                <a onclick="showLogin()" href="#"><li>Đăng Nhập</li></a>
            </ul>
            <ul id="regis">
                <a href="http://localhost:8080/coffee-cake/regis.php"><li>Đăng ký</li></a>
            </ul>
            <?php
        }
        ?>
    </ul>

    <div class="clear"></div>
</div>

<div id="popup" class="modal">
    <form class="modal-content animate" method="POST">
        <div id="container">
            <span id="close" onClick="closeLogin()">&times;</span>
            <input type="text" placeholder="Tài khoản" name="username" value="<?php if(isset($_COOKIE["member_login"])) { echo $_COOKIE["member_login"]; } ?>" required>
            <input type="password" placeholder="Mật khẩu" name="password"value="<?php if(isset($_COOKIE["member_password"])) { echo $_COOKIE["member_password"]; } ?>" required>
            <button type="submit" name="login" id="login-btn">Đăng nhập</button>
            <div id="sub-feature">
                <label>
                    <input type="checkbox" name="remember">Nhớ đăng nhập
                </label>
            </div>
        </div>
    </form>
</div>

<link href="http://localhost:8080/coffee-cake/css/login.css" rel="stylesheet" type="text/css" media="all"/>
<script src="http://localhost:8080/coffee-cake/js/login.js"></script>


<!--MAIN-->
<?php
//session_start();
require_once 'database.php';

    $id = intval($_GET['id']);

    if(isset($_SESSION['cart'][$id])){
        $_SESSION['cart'][$id]['quantum']++;
    }else{
        $sql_s="SELECT * FROM product WHERE IDPR = $id";
        $query_s=mysqli_query($con, $sql_s);

        $row_s=mysqli_fetch_array($query_s);
        $_SESSION['cart'][$row_s['IDPR']]=array(
            "quantum" => 1,
            "PRICE" => $row_s['PRICE']
        );
    }
?>

<?php
    if(isset($_POST['submit'])){

        foreach($_POST['quantum'] as $key => $val) {
            if($val==0) {
                unset($_SESSION['cart'][$key]);
            }else{
                $_SESSION['cart'][$key]['quantum']=$val;
            }
        }
    }
?>

    <div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px">
        <div class="card">
            <div class="card-header">
                <h2>Giỏ hàng của tôi</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Số lượng</th>
                            <th>Giá sản phẩm</th>
                            <th>Thành tiền</th>
                        </tr>
                    </thead>
                    <tbody>
                    <?php
                        $sql = "SELECT * FROM product WHERE IDPR IN (";
                            foreach ($_SESSION['cart'] as $id => $value){
                                $sql.=$id.",";
                            }
                            $sql=substr($sql, 0, -1).") ORDER BY namepr ASC";
                            $query=mysqli_query($con, $sql);
                            $totalprice=0;
                            while($row=mysqli_fetch_array($query)){
                                $subtotal=$_SESSION['cart'][$row['IDPR']]['quantum']*$row['PRICE'];
                                $totalprice+=$subtotal;
                            ?>
                                <tr>
                                    <td>#</td>
                                    <td><?php echo $row['NAMEPR']?></td>
                                    <td>
                                        <img style="width: 100px"; src="images/<?php echo $row['IMAGE'];?>">
                                    </td>
                                    <td>
                                        <input type="text" name="quantum[<?php echo $row['IDPR'];?>]" size="5" value="<?php echo $_SESSION['cart'][$row['IDPR']]['quantum'];?>"/>
                                    </td>
                                    <td><?php echo $row['PRICE']?></td>
                                    <td><?php echo $_SESSION['cart'][$row['IDPR']]['quantum']*$row['PRICE'];?></td>
                                </tr>
                        <?php
                            }
                        ?>
                    </tbody>
                    <tr>
                        <td colspan="4">Tổng thành tiền: <?php echo $totalprice ?></td>
                    </tr>
                </table>

                <br/>
                <button type="submit" name="submit">Cập nhật</button>
<!--            </div>-->
<!--            <br>-->
<!--            <div class="card-body">-->
<!--                <div><label>Người nhận: </label><input type="text" value="" name="name"/></div>-->
<!--                <div><label>Điện thoại: </label><input type="text" value="" name="phone"/></div>-->
<!--                <div><label>Địa chỉ: </label><input type="text" value="" name="address"/></div>-->
<!--                <div><label>Ghi chú: </label><textarea name="note" cols="40" rows="5"></textarea></div>-->
<!--                <input type="submit" name="order_click" value="Đặt hàng"/>-->
<!--            </div>-->
        </div>
    </div>

<?php
require "layout/footer.php";
?>
</body>
</html>