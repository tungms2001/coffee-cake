<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Sửa sản phẩm - Coffee Cake</title>
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
$id = $_GET['id'];

$sql_type = "SELECT * FROM typeproduct";
$query_type = mysqli_query($con, $sql_type);
$sql_up = "SELECT * FROM product where IDPR = $id";
$query_up = mysqli_query($con, $sql_up);
$row_up = mysqli_fetch_assoc($query_up);

if (isset($_POST['sbm'])){
    $NAMEPR = $_POST['NAMEPR'];

    if($_FILES['IMAGE']['name']==''){
        $IMAGE = $row_up['IMAGE'];
    }else{
        $IMAGE = $_FILES['IMAGE']['name'];
        $image_tmp = $_FILES['IMAGE']['tmp_name'];
        move_uploaded_file($image_tmp, '../images/'.$IMAGE);
    }

    $PRICE = $_POST['PRICE'];
    $DESCRIPTION = $_POST['DESCRIPTION'];
    $IDTYPE = $_POST['IDTYPE'];

    $sql = "UPDATE product SET NAMEPR = '$NAMEPR', IMAGE = '$IMAGE', PRICE = $PRICE, DESCRIPTION = '$DESCRIPTION' where IDPR = $id";
    $query = mysqli_query($con, $sql);
    header('location: listproduct.php');
}
?>

<div class="container-fluid" style="margin-top: 20px; margin-bottom: 20px">
    <div class="card">
        <div class="card-header">
            <h2>Sửa sản phẩm</h2>
        </div>
        <div class="card-body">
            <form method="POST" enctype="multipart/form-data">
                <div class="form-group">
                    <label for="">Tên sản phẩm</label>
                    <input type="text" name="NAMEPR" class="form-control" required value="<?php echo $row_up['NAMEPR']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Hình ảnh</label> <br>
                    <input type="file" name="IMAGE">
                </div>

                <div class="form-group">
                    <label for="">Giá sản phẩm</label>
                    <input type="number" name="PRICE" class="form-control" required value="<?php echo $row_up['PRICE']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Mô tả</label>
                    <input type="text" name="DESCRIPTION" class="form-control" required value="<?php echo $row_up['DESCRIPTION']; ?>">
                </div>

                <div class="form-group">
                    <label for="">Thể loại</label>
                    <select class="form-control" name="IDTYPE">
                        <?php
                        while ($row_type = mysqli_fetch_assoc($query_type)){?>
                            <option value="<?php echo $row_type['IDTYPE']; ?>"><?php echo $row_type['NAMETYPE']; ?></option>
                        <?php } ?>
                    </select>
                </div>

                <button name="sbm" class="btn btn-success" type="submit">Sửa</button>
            </form>
        </div>
    </div>
</div>

<?php
require "../layout/footer.php";
?>
</body>
</html>
