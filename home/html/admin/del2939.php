<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    $conn = new mysqli('localhost', 'root', '', 'inter6');
    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }
    $sql = "DELETE FROM t2939 WHERE id = $id";
    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }
    $conn->close();
    header("Location: 2939a.php");
}
?>
