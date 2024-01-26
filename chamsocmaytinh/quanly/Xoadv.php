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

// Check if madv is set and is a valid integer
if (isset($_GET['madv']) && is_numeric($_GET['madv'])) {
    $madv = $_GET['madv'];

    // Prepare and bind the DELETE statement
    $stmt = $conn->prepare("DELETE FROM danhmucdichvu WHERE madv = ?");
    $stmt->bind_param("i", $madv);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: dichvu.php");
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
