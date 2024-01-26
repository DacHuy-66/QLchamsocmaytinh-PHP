<?php
// Kết nối đến cơ sở dữ liệu
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "quanlychamsocmaytinh"; // Thay thế 'ten_database' bằng tên thực của bạn

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Kết nối thất bại: " . $conn->connect_error);
}

// Lấy dữ liệu từ form đăng ký
$tenkh = $_POST['name'];
$sdt = $_POST['phone'];
$email = $_POST['email'];
$ngayhen = $_POST['ngayhen'];

// Chuẩn bị truy vấn SQL
$sql = "INSERT INTO khachhang (tenkh, sdt, email, ngayhen) VALUES (?, ?, ?, ?)";
$stmt = $conn->prepare($sql);

if ($stmt) {
    // Bind các tham số
    $stmt->bind_param("ssss", $tenkh, $sdt, $email, $ngayhen);

    // Thực hiện truy vấn
    if ($stmt->execute()) {
        // Đóng câu lệnh chuẩn bị
        $stmt->close();

        // Đóng kết nối đến MySQL
        $conn->close();

        // Xuất thông báo JavaScript
        echo "<script>alert('Đăng ký thành công!'); window.location.href = 'trangchu.php';</script>";
        exit(); // Kết thúc script để ngăn chặn các câu lệnh tiếp theo thực hiện
    } else {
        echo "Đăng ký thất bại: " . $stmt->error;
    }

    // Đóng câu lệnh chuẩn bị
    $stmt->close();
} else {
    echo "Lỗi câu lệnh chuẩn bị: " . $conn->error;
}

// Đóng kết nối đến MySQL
$conn->close();
