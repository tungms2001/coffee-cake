<?php
ob_start()
?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf8">
    <title>Tất cả sản phẩm - Coffee Cake</title>
    <link href="css/style.css" rel="stylesheet" type="text/css" media="all"/>
    <link href="//maxcdn.bootstrapcdn.com/font-awesome/4.1.0/css/font-awesome.min.css" rel="stylesheet">
    <link rel="stylesheet" href="css/update.css">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.1/css/all.min.css" />
</head>
<body>
<?php
include "layout/header.php";
include "layout/menu.php";
?>
<!-------- LẤY LẠI THÔNG TIN----->
<?php
require("database.php");
$username = $_SESSION['username'];
$query = "SELECT * from users WHERE username='$username'";
$result = mysqli_query($con,$query);
$rows= mysqli_fetch_assoc($result)

?>
<h1><a class="title-upuser" style="border-bottom: 2px solid #00B000;
padding-bottom: 5px;"> CẬP NHẬT THÔNG TIN</a></h1>
<form id="update-form" method="POST">
    <?php
    echo "<input type='text' name='name' placeholder='Họ và tên' value='" . $rows['NAME'] . "' required/>";
    echo "<input type='text' name='email' placeholder='Email' value='" . $rows['EMAIL'] . "' required/>";
    echo "<input type='text' name='phone' placeholder='Điện thoại' value='" . $rows['PHONE'] . "' required/>";
    echo "<input type='text' name='address' placeholder='Điạ chỉ' value='" . $rows['ADDRESS'] . "' required/>";
    ?>
    <div id="change-password">
        <input type='checkbox' name='change-password' value='change' id="check-change">
        <label for='change'>Đổi mật khẩu</label>
        <div id="change-section">
            <input type="password" name='old_password' placeholder="Mật khẩu cũ" id="oldpasspwrd">
            <input type="password" name='new_password' placeholder='Mật khẩu mới'>
            <input type="password" name='re_new_password' placeholder='Nhập lại mật khẩu'>
        </div>
    </div>
    <button type="submit" id="btn-save" name="update">Lưu thay đổi</button>
</form>

<!-------- THAY ĐỔI THÔNG TIN CÁ NHÂN----->
<?php
require('database.php');
if (isset($_POST['update'])){
    $username = $_SESSION['username'];
    $name=$_POST['name'];
    $email=$_POST['email'];
    $phone=$_POST['phone'];
    $address=$_POST['address'];

    if ($con->connect_error){
        die("Connection failed: " . $con->connect_error);
    }
    else {
        if (isset($_POST['change-password'])){
            $old_password = md5($_POST['old_password']);
            $new_password = md5($_POST['new_password']);
            $query = "SELECT * FROM users WHERE username='$username' and password='".$old_password."' LIMIT 1";
            $result = mysqli_query($con,$query);
            $rows = mysqli_num_rows($result);
            if($rows > 0){
                $sql1="UPDATE users SET name='$name', email='$email', phone='$phone' , address='$address' WHERE username='$username'";
                $sql2="UPDATE users SET username='$username' , password='".$new_password."' WHERE username='$username'";
                mysqli_query($con,$sql1);
                mysqli_query($con,$sql2);
                if ($con->query($sql1) === TRUE && $con->query($sql2) === TRUE) {
                    ?>
                    <div class= "alert-success-update">
                        <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                        <strong>Chúc mừng!</strong> Bạn đã thay đổi mật khẩu <strong>vui lòng nhấn <a href="logout.php" style="text-decoration: none; color: #4D5656 ; "> Đăng xuất</a> để đăng nhập lại</strong>
                    </div>
                    <?php
                }
                else {
                    echo "Error updating record: " . $con->error;
                }
            }
            else{
                ?>
                <div class= "alert-warning-oldpass">
                    <span class="closebtn" onclick="this.parentElement.style.display='none';">&times;</span>
                    <strong>Cảnh báo!</strong> Mật khẩu cũ không khớp
                </div>
                <?php
            }
        }
        else {
            $sqli = "UPDATE users SET name='$name', email='$email', phone='$phone', address='$address' WHERE username='$username'";
            if ($con->query($sqli) === TRUE){
                header("location: userprofile.php");
            }
            else{
                echo "Error updating record: " . $con->error;
            }
        }
    }
    $con->close();
}

?>

<!--------SET RÀNG BUỘC USER----->
<script>
    // HỌ VÀ TÊN TRỐNG
    const fullname = document.querySelector("[name='name']");
    fullname.addEventListener('blur', () => {
        if (fullname.value =="") {
            if (document.getElementById('match-error') === null) {
                const matchError = document.createElement('p');
                matchError.setAttribute('id', 'match-error');
                matchError.setAttribute('class', 'error');
                matchError.innerHTML = "Vui lòng nhập họ và tên";
                fullname.parentNode.insertBefore(matchError, fullname.nextSibling);
            }
        }
        else {
            const matchError = document.getElementById('match-error');
            if (matchError !== "")
                matchError.remove();
        }
    });

    // Email TRỐNG
    const email = document.querySelector("[name='email']");
    email.addEventListener('blur', () => {
        if (email.value =="") {
            if (document.getElementById('match-error') === null) {
                const matchError = document.createElement('p');
                matchError.setAttribute('id', 'match-error');
                matchError.setAttribute('class', 'error');
                matchError.innerHTML = "Vui lòng nhập email";
                email.parentNode.insertBefore(matchError, email.nextSibling);
            }
        }
        else {
            const matchError = document.getElementById('match-error');
            if (matchError !== "")
                matchError.remove();
        }
    });

    //  SĐT TRỐNG
    const phone = document.querySelector("[name='phonenumber']");
    phone.addEventListener('blur', () => {
        if (phone.value =="") {
            if (document.getElementById('match-error') === null) {
                const matchError = document.createElement('p');
                matchError.setAttribute('id', 'match-error');
                matchError.setAttribute('class', 'error');
                matchError.innerHTML = "Vui lòng nhập email";
                phone.parentNode.insertBefore(matchError, phone.nextSibling);
            }
        }
        else {
            const matchError = document.getElementById('match-error');
            if (matchError !== "")
                matchError.remove();
        }
    });

    // Địa chỉ TRỐNG
    const address = document.querySelector("[name='address']");
    address.addEventListener('blur', () => {
        if (address.value =="") {
            if (document.getElementById('match-error') === null) {
                const matchError = document.createElement('p');
                matchError.setAttribute('id', 'match-error');
                matchError.setAttribute('class', 'error');
                matchError.innerHTML = "Vui lòng nhập địa chỉ";
                address.parentNode.insertBefore(matchError, address.nextSibling);
            }
        }
        else {
            const matchError = document.getElementById('match-error');
            if (matchError !== "")
                matchError.remove();
        }
    });
</script>

<!--------SET RÀNG BUỘC PASSWORD----->
<script>
    // ĐỘ DÀI PASSWORD
    const password = document.querySelector("[name='new_password']");
    password.addEventListener('blur', () => {
        if (password.value.length < 5) {
            if (document.getElementById('length-error') === null) {
                const lengthError = document.createElement('p');
                lengthError.setAttribute('id', 'length-error');
                lengthError.setAttribute('class', 'error');
                lengthError.innerHTML = "Mật khẩu mới phải có ít nhất 5 ký tự!";
                password.parentNode.insertBefore(lengthError, password.nextSibling);
            }
        }
        else {
            const lengthError = document.getElementById('length-error');
            if (lengthError !== "")
                lengthError.remove();
        }
    });
    // OLD_PASSWORD TRỐNG
    const oldpassword = document.querySelector("[name='old_password']");
    oldpassword.addEventListener('blur', () => {
        if (oldpassword.value =="") {
            if (document.getElementById('match-error') === null) {
                const matchError = document.createElement('p');
                matchError.setAttribute('id', 'match-error');
                matchError.setAttribute('class', 'error');
                matchError.innerHTML = "Vui lòng nhập mật khẩu cũ";
                oldpassword.parentNode.insertBefore(matchError, oldpassword.nextSibling);
            }
        }
        else {
            const matchError = document.getElementById('match-error');
            if (matchError !== "")
                matchError.remove();
        }
    });

    // KIỂM TRA GIỮA NEW_PASSWORD & RE_NEW_PASSWORD
    const rePassword = document.querySelector("[name='re_new_password']");
    rePassword.addEventListener('blur', () => {
        if (password.value !== rePassword.value) {
            if (document.getElementById('match-error') === null) {
                const matchError = document.createElement('p');
                matchError.setAttribute('id', 'match-error');
                matchError.setAttribute('class', 'error');
                matchError.innerHTML = 'Mật khẩu không khớp!';
                rePassword.parentNode.insertBefore(matchError, rePassword.nextSibling);
            }
        }
        else {
            const matchError = document.getElementById('match-error');
            if (matchError !== null)
                matchError.remove();
        }
    });

</script>

<?php
include "layout/footer.php";
?>
</body>
</html>