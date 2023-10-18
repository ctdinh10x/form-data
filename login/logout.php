<?php
session_start();
session_destroy();
header("location:login.php"); // Chuyển hướng về trang đăng nhập sau khi đăng xuất
exit();
?>
