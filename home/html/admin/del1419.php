<?php
// delete.php

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

// Get the product ID from the query string
$id = $_GET['id'];

// Delete the product
$sql = "DELETE FROM `t1419` WHERE id = ?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Product deleted successfully!";
} else {
    echo "Error deleting product: " . $stmt->error;
}

$stmt->close();
$conn->close();
?>
