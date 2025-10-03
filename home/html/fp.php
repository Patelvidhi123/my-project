<?php
session_start(); // Start the session

if (isset($_POST["submit"])) {
    $u = $_POST["un"];
    $p = $_POST["passs"];
    
    if (empty($u)) {
        echo "<script>alert('Please enter username');</script>";
    } elseif (empty($p)) {
        echo "<script>alert('Please enter password');</script>";
    } else {
        $cn = mysqli_connect("localhost", "root", "", "inter6");

        if (!$cn) {
            die("Connection failed: " . mysqli_connect_error());
        }
 
        // Check if username and password match an existing record
        $stmt = $cn->prepare("SELECT * FROM login WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $u, $p);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Username and password match
            $_SESSION['username'] = $u; // Store the username in the session
            header("Location: fp3.php");
            exit();
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }

        $stmt->close();
        $cn->close();
    }
}
?>
