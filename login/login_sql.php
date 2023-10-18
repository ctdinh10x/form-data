<?php
session_start();

require '../db/connect.php';

if ($conn->connect_error) {
    die("Lỗi kết nối: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Kiểm tra thông tin đăng nhập trong cơ sở dữ liệu
    $sql = "SELECT * FROM tbl_users WHERE userName='$username' AND passWord='$password'";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // echo "Đăng nhập thành công";
        $row = $result->fetch_assoc();
        $_SESSION['login']["username"] = $username;
        $_SESSION['login']["fullname"] = $row['fullName'];
        $_SESSION['login']["email"] = $row['email'];
        $_SESSION['login']["address"] = $row['address'];
        $_SESSION['login']["userId"] = $row['userId'];
        header("location:../trang_chu.php"); // Chuyển hướng đến trang chủ
        exit();
    } else {
        header("location:login.php"); // Chuyển hướng lại form đăng nhập
        echo "Đăng nhập thất bại! Xin hay thử lại";
        exit();
    }
}
?>