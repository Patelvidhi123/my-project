<?php
// Database configuration
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inter6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$status = $_GET['status'];

// Validate inputs
if (!isset($id) || !isset($status)) {
    echo "Invalid request.";
    exit();
}

// Update stock status
$sql = "UPDATE `t1419` SET `stock_status` = ? WHERE `id` = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $id);

if ($stmt->execute()) {
    echo "success";
} else {
    echo "error";
}

$stmt->close();
$conn->close();
?>
