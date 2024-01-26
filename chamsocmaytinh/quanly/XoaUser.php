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

// Check if mand is set and is a valid integer
if (isset($_GET['mand']) && is_numeric($_GET['mand'])) {
    $mand = $_GET['mand'];

    // Prepare and bind the DELETE statement
    $stmt = $conn->prepare("DELETE FROM user WHERE mand = ?");
    $stmt->bind_param("i", $mand);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: user.php");
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
