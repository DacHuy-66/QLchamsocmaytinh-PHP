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

// Check if matt is set and is a valid integer
if (isset($_GET['matt']) && is_numeric($_GET['matt'])) {
    $matt = $_GET['matt'];

    // Prepare and bind the DELETE statement
    $stmt = $conn->prepare("DELETE FROM thanhtoan WHERE matt = ?");
    $stmt->bind_param("i", $matt);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: thanhtoan.php");
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
