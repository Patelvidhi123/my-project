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

// Get the product ID and new status from the query string
$id = $_GET['id'];
$status = $_GET['status'];

// Update the stock status
$sql = "UPDATE `713` SET stock_status = ? WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $id);

if ($stmt->execute()) {
    echo "Stock status updated successfully!";
} else {
    echo "Error updating stock status: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
