<?php
if (isset($_GET['id'])) {
    $id = $_GET['id'];
    
    $cn = mysqli_connect("localhost", "root", "", "inter6");
    if (!$cn) {
        die("Connection failed: " . mysqli_connect_error());
    }
     
    $query = "DELETE FROM toys WHERE id='$id'";
    if (mysqli_query($cn, $query)) {
        echo "<script>alert('Toy deleted successfully'); window.location.href='0-6a.php';</script>";
    } else {
        echo "<script>alert('Error deleting toy');</script>";
    }
    
    mysqli_close($cn);
}
?>
 