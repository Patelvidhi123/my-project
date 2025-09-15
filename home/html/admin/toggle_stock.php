<?php
if (isset($_GET['id']) && isset($_GET['status'])) {
    $id = $_GET['id'];
    $status = $_GET['status'];

    $cn = mysqli_connect("localhost", "root", "", "inter6");
    if (!$cn) {
        die("Connection failed: " . mysqli_connect_error());
    }
 
    $query = "UPDATE toys SET status='$status' WHERE id='$id'";
    if (mysqli_query($cn, $query)) {
        echo "success";
    } else {
        echo "error";
    }

    mysqli_close($cn);
}
?>
 