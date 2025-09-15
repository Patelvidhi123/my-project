<?php
if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    // Database connection
    $conn = new mysqli('localhost', 'root', '', 'inter6');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    // Update status
    $sql = "UPDATE t2939 SET status='$status' WHERE id=$id";
    if ($conn->query($sql) === TRUE) {
        echo "<script>alert('Stock status updated successfully'); window.location.href='2939a.php';</script>";
    } else {
        echo "Error updating status: " . $conn->error;
    }

    $conn->close();
} else {
    echo "Invalid request.";
}
?>
