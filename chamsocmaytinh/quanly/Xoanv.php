<?php
$servername = "localhost:3308";
$username = "root";
$password = "";
$dbname = "quanlychamsocmaytinh";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Check if manv is set and is a valid integer
if (isset($_GET['manv']) && is_numeric($_GET['manv'])) {
    $manv = $_GET['manv'];

    // Prepare and bind the DELETE statement
    $stmt = $conn->prepare("DELETE FROM nhanvien WHERE manv = ?");
    $stmt->bind_param("i", $manv);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: nhanvien.php");
    } else {
        echo "Error deleting customer: " . $stmt->error;
    }

    // Close the statement
    $stmt->close();
} else {
    echo "Invalid or missing customer ID.";
}

// Close the connection
$conn->close();
?>
