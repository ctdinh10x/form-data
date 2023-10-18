<?php
session_start();

// Kiểm tra xem người dùng đã đăng nhập hay chưa
if (!isset($_SESSION['login']["username"])) {
    header("location:login/login.php"); // Nếu chưa đăng nhập, chuyển hướng về trang đăng nhập
    exit();
}
// Nếu đã đăng nhập, hiển thị trang chủ
?>
<!DOCTYPE html>
<html>
<head>
    <title>Trang Chủ</title>
</head>
<body>
    <h2>Xin chào, <?php echo $_SESSION['login']['username']; ?></h2>
    <p>Đây là trang chủ.</p>
    <a href="login/logout.php">Đăng Xuất</a>
    <a href="infor_user.php?userId=<?php echo $_SESSION['login']['userId']?>" >Thông tin cá nhân</a>
</body>
</html>
