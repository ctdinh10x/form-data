<?php
    session_start();
    require('db/connect.php');
    if(isset($_POST['login'])){
        $username = $_POST['username'];
        $fullname = $_POST['fullname']; 
        $email = $_POST['email'];
        $address = $_POST['address'];
        $userid = $_POST['userid'];
    }
    $sql = "UPDATE  `tbl_users` SET userName ='$username', fullName ='$fullname', email = '$email', address = '$address' WHERE userId='$userid'";
    if($conn->query($sql) === TRUE){
        echo "chỉnh sửa tài khoản thành công";
    }
    else{
        echo "Lỗi {$sql}".$conn->error;
    }

?>