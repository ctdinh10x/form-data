<?php
require 'db/connect.php';
if(isset($_POST['btn-reg'])){
    $username = $_POST['username'];
    $fullname = $_POST['fullname'];
    $password = $_POST['password'];
    $email = $_POST['email'];
    $address = $_POST['address'];
    $userid = $username . time();
}
$sql = "INSERT INTO `tbl_users` (`fullName`, `passWord`,`userName`,`email`,`address`, `userId`) 
VALUES('$fullname','$password', '$username', '$email', '$address', md5('$userid'))";
if($conn->query($sql) === TRUE){
    echo "Đăng ký tài khoản thành công";
}
else{
    echo "Lỗi {$sql}".$conn->error;
}
?>