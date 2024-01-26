<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "quanlychamsocmaytinh";
$registration_message = ""; // Biến để giữ thông báo đăng ký

// khởi tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
//kiểm tra kết nối
if ($conn->connect_error) {
    die("kết nối thất bại: " . $conn->connect_error);
}

// Xử lý đăng ký khi nhấn nút đăng ký
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Lấy dữ liệu từ form
    $username = $_POST["username"];
    $password = $_POST["password"];
    $confirmPassword = $_POST["confirm_password"]; // Thêm dòng này để lấy mật khẩu xác nhận

    // Kiểm tra xem mật khẩu và mật khẩu xác nhận có giống nhau không
    if ($password != $confirmPassword) {
        header("Location: dangky.php?thongbao=Mật khẩu và mật khẩu xác nhận không khớp. Vui lòng thử lại.");
        exit(); // Kết thúc xử lý để ngăn chặn các câu lệnh tiếp theo thực hiện
    }

    // Role mặc định là 0
    $role = 0;

    // Kiểm tra xem username đã tồn tại chưa
    $checkQuery = "SELECT * FROM user WHERE username = ?";
    $checkStmt = $conn->prepare($checkQuery);
    $checkStmt->bind_param("s", $username);
    $checkStmt->execute();
    $checkResult = $checkStmt->get_result();

    if ($checkResult->num_rows > 0) {
        header("Location: dangky.php?thongbao=Tên đăng nhập đã tồn tại. Vui lòng chọn một tên đăng nhập khác.");
    } else {
        // Chuẩn bị truy vấn SQL
        $sql = "INSERT INTO user (role, username, password) VALUES (?, ?, ?)";
        $stmt = $conn->prepare($sql);

        // Kiểm tra nếu câu lệnh chuẩn bị thành công
        if ($stmt) {
            // Bind các tham số
            $stmt->bind_param("iss", $role, $username, $password);

            // Thực hiện truy vấn
            if ($stmt->execute()) {
                header("Location: dangky.php?thongbao=Đăng ký thành công!");
            } else {
                echo "Đăng ký thất bại: " . $stmt->error;
            }

            // Đóng câu lệnh chuẩn bị
            $stmt->close();
        } else {
            echo "Lỗi câu lệnh chuẩn bị: " . $conn->error;
        }
    }

    // Đóng câu lệnh kiểm tra
    $checkStmt->close();
}
// Đóng kết nối đến MySQL
$conn->close();
