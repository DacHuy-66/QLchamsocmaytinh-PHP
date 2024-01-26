<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "quanlychamsocmaytinh";
// khởi tạo kết nối
$conn = new mysqli($servername, $username, $password, $dbname);
//kiểm tra kết nối
if ($conn->connect_error) {
  die("kết nối thất bại: " . $conn->connect_error);
}
//đăng nhập
$uname = $_POST["uname"];
$psw = $_POST["psw"];

//kiểm tra username và password có tồn tại k
$sql = "SELECT * FROM user WHERE username=? AND password= ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("ss", $uname, $psw);
$stmt->execute();
$result = $stmt->get_result();


if ($result->num_rows > 0) {
  // nạp dữ liệu người dùng
  $user = $result->fetch_assoc();

  // kiển tra user role
  $role = $user['role'];


  if ($role == '1') {
    header("Location: index.php");
    exit();
  } elseif ($role == '0') {
    header("Location: ../giaodien/trangchu.php");
    exit();
  }
} else {
  header("Location: login.php?loi=Đăng nhập thất bại. Vui lòng kiểm tra lại tên đăng nhập và mật khẩu!");
  exit();
  // đóng kết nối
}
$conn->close();
$stmt->close();
