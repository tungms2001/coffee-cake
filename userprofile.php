<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Tất cả sản phẩm - Coffee Cake</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="css/profile.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>
<?php
include "layout/header.php";
include "layout/menu.php";
?>
<?php
require("database.php");
$username = $_SESSION['username'];
$query = "SELECT * from users WHERE username='$username'";
$result = mysqli_query($con,$query);
$rows= mysqli_fetch_assoc($result)
?>
<div class="profile">
    <h2 style="text-align: center;"><a>THÔNG TIN TÀI KHOẢN <?php echo "<a style='color: #00B000;'>". $rows['USERNAME'] ?></a></h2>
    <?php
    echo "<ul><li><span>Họ và tên:</span> ". "<a1 style='color: #00B000;'>" . $rows['NAME'] ."</a1>". "</li>";
    echo "<li><span>Email:</span> " . "<a1 style='color: #00B000;'>" .$rows['EMAIL'] ."</a1>". "</li>";
    echo "<li><span>Điện thoại:</span> ". "<a1 style='color: #00B000;'>" . $rows['PHONE']."</a1>" . "</li>" ."</ul>";
    ?>
</div>
<div id="edit" class="button">
    <a href="updateuser.php" style="color: #ffffff; text-decoration: none;">Cập nhật</a>
</div>
<div class="list">
    <a class="listprofile" href="http://localhost:8080/coffee-cake/listproduct/listproduct.php">Danh sách sản phẩm</a>
</div>

<?php
include "layout/footer.php";
?>
</body>
</html>