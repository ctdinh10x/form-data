<!DOCTYPE html>
<html>
<head>
    <title>Thông Tin Người Dùng</title>
</head>
<body>
    <?php
    require('db/connect.php');
    if (isset($_GET['userId'])) {
        // Kết nối đến cơ sở dữ liệu và truy vấn thông tin người dùng
        
        // Lấy tên người dùng từ tham số truyền qua URL
        $userId = $_GET['userId'];
        if ($conn->connect_error) {
                    die("Lỗi kết nối: " . $conn->connect_error);
                }
        $sql = "SELECT * FROM tbl_users WHERE userId='$userId'";
        $result = $conn->query($sql);
        if ($result->num_rows > 0) {
            $row = $result->fetch_assoc();
            // Hiển thị thông tin người dùng
            echo "<h2>Thông Tin Người Dùng</h2>";
            echo "Họ và tên: " . $row["fullName"] . "<br>";
            echo "Tên người dùng: " . $row["userName"] . "<br>";
            echo "Email: " . $row["email"] . "<br>";
            echo "Địa chỉ: " . $row["address"] . "<br>";
            // Thêm thông tin khác cần thiết
        } else {
            echo "Không tìm thấy người dùng.";
        }

        $conn->close();
    } else {
        echo "Thiếu tham số 'username' trong URL.";
    }
    ?>
    <a href="edit_infor.php?userId=<?php echo $_GET['userId']?>">CHỉnh sửa thông tin cá nhân</a>
    <a href="trang_chu.php">Quay lại trang chủ</a>
</body>
</html>
