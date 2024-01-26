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

// Check if malh is set and is a valid integer
if (isset($_GET['malh']) && is_numeric($_GET['malh'])) {
    $malh = $_GET['malh'];

    // Prepare and bind the DELETE statement
    $stmt = $conn->prepare("DELETE FROM lichhen WHERE malh = ?");
    $stmt->bind_param("i", $malh);

    // Execute the statement
    if ($stmt->execute()) {
        header("Location: lichhen.php");
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
