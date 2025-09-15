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
$sql = "DELETE FROM t1928 WHERE id=?";
$stmt = $conn->prepare($sql);
$stmt->bind_param("i", $id);

if ($stmt->execute()) {
    echo "Record deleted successfully";
} else {
    echo "Error deleting record: " . $conn->error;
}

$stmt->close();
$conn->close();
header("Location: 1928a.php"); // redirect to the main page
?>
