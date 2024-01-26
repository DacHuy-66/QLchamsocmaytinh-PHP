<?php
$servername="localhost: 3308";
$username= "root";
$password = "";
$dbname = "quanlychamsocmaytinh";

$conn= new mysqli($servername, $username, $password, $dbname);


if($conn->connect_error){
    die("connection failed: ". $conn->connect_error);
}

if (isset($_GET['malhdv']) && is_numeric($_GET['malhdv'])) {
    $malhdv= $_GET['malhdv'];

    $stmt= $conn->prepare("DELETE FROM lichhendichvu WHERE malhdv = ?");
    $stmt->bind_param("i", $malhdv);

    if( $stmt->execute()){
        header("location: lichhendv.php");
    }else{
        echo"Error deleting customer: " . $stmt->error;
    }

    $stmt->close();
}else{
    echo "Invalid or missing customer ID.";
}

$stmt->close();
?>
