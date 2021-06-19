<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Danh sách sản phẩm - Coffee Cake</title>
    <link rel="stylesheet" href="//netdna.bootstrapcdn.com/bootstrap/4.5.0/css/bootstrap.min.css">
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

</head>
<body>
<?php
require "../layout/header.php";
?>
<!--MENU-->
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
        <?php include("../login.php");
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
    require_once '../database.php';
    $sql = "SELECT * FROM product inner join typeproduct on product.IDTYPE = typeproduct.IDTYPE";
    $query = mysqli_query($con, $sql);
?>

    <div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px">
        <div class="card">
            <div class="card-header">
                <h2>Danh sách sản phẩm</h2>
            </div>
            <div class="card-body">
                <table class="table">
                    <thead class="thead-dark">
                        <tr>
                            <th>#</th>
                            <th>Tên sản phẩm</th>
                            <th>Hình ảnh</th>
                            <th>Giá sản phẩm</th>
                            <th>Miêu tả</th>
                            <th>Thể loại</th>
                            <th>Sửa</th>
                            <th>Xóa</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $i = 1;
                            while($row = mysqli_fetch_assoc($query)){?>
                                <tr>
                                    <td><?php echo $i++; ?></td>
                                    <td><?php echo $row['NAMEPR'];?></td>

                                    <td>
                                        <img style="width: 100px"; src="../images/<?php echo $row['IMAGE'];?>">

                                    </td>
                                    <td><?php echo $row['PRICE'];?></td>
                                    <td><?php echo $row['DESCRIPTION'];?></td>
                                    <td><?php echo $row['NAMETYPE'];?></td>
                                    <td>
                                        <a href="editproduct.php?id=<?php echo $row['IDPR']; ?>">Sửa</a>
                                    </td>
                                    <td>
                                        <a onclick="return Del('<?php echo $row['NAMEPR']; ?>')" href="deleteproduct.php?id=<?php echo $row['IDPR']; ?>">Xóa</a>
                                    </td>
                                </tr>
                            <?php } ?>
                    </tbody>
                </table>
                <a class="btn btn-primary" href="addproduct.php">Tạo sản phẩm</a>
            </div>
        </div>
    </div>

    <script>
        function Del(name){
            return confirm("Bạn có chắc chắn muốn xóa sản phẩm: " + name + " ?");
        }
    </script>

<?php
require "../layout/footer.php";
?>
</body>
</html>
