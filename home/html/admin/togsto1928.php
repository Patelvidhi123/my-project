<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inter6";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$id = $_GET['id'];
$status = $_GET['status'];

$sql = "UPDATE t1928 SET stock_status=? WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("si", $status, $id);

if ($stmt->execute()) {
    echo "Stock status updated successfully";
} else {
    echo "Error updating stock status: " . $conn->error;
}

$stmt->close();
$conn->close();
header("Location: 1928a.php"); // redirect to the main page
?>
