<?php
// Kết nối đến cơ sở dữ liệu
require('db/connect.php');

// Kiểm tra xem có tham số 'id' trong URL hay không
if (isset($_GET['userId'])) {
    $user_id = $_GET['userId'];
    
    // Truy vấn cơ sở dữ liệu để lấy thông tin người dùng dựa trên 'id'
    $sql = "SELECT * FROM tbl_users WHERE userId = '$user_id'";
    $result = $conn->query($sql);

    if ($result->num_rows == 1) {
        $row = $result->fetch_assoc();

        // Hiển thị biểu mẫu để chỉnh sửa thông tin
        echo "<form method='post' action='edit.php'>";
        echo "Họ và tên: <input type='text' name='fullname' value='" . $row['fullName'] . "'><br>";
        echo "Tên người dùng: <input type='text' name='username' value='" . $row['userName'] . "'><br>";
        echo "Email: <input type='text' name='email' value='" . $row['email'] . "'><br>";
        echo "Địa chỉ: <input type='text' name='address' value='" . $row['address'] . "'><br>";
        echo "<input type='hidden' name='userid' value='" . $user_id . "'>";
        echo "<input type='submit' value='Cập nhật' name='login'>";
        echo "</form>";
        echo "<a href='trang_chu.php'>Quay lại trang chủ</a>";
    } else {
        echo "Không tìm thấy người dùng với ID: " . $user_id;
    }
}

$conn->close();
?>
