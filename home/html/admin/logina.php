<!DOCTYPE html>
<html lang="en"> 
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <style>
        body {
            background-image: url('image/1.jpg');
            background-size: cover;
            background-repeat: no-repeat;
        }
        form {
            border: 3px solid #f1f1f1;
            width: 300px;
            margin: 0 auto;
            padding: 20px;
            background-color: #bdfce1;
            opacity: 0.9;
            border-radius: 30px;
        }
        input[type="text"], input[type="password"] {
            width: 100%;
            padding: 12px 20px;
            margin: 8px 0;
            display: inline-block;
            border: 1px solid #ccc;
            box-sizing: border-box;
        }
        input[type="submit"] {
            background-color: #213245;
            color: white;
            padding: 14px 20px;
            margin: 8px 0;
            border: none;
            cursor: pointer;
            width: 100%;
        }
    </style>
</head>
<body>
    <form method="post" name="loginform" action="" >
        <center><h1>LOGIN</h1></center>
        USERNAME: <input type="text" name="un" placeholder="Enter username" required><br><br>
        PASSWORD: <input type="password" name="passs" placeholder="Enter your password" required><br><br>
        <input type="submit" name="submit" value="LOGIN">
    </form>
</body>
</html>
















<?php
session_start(); // Start the session

if (isset($_POST["submit"])) {
    $u = $_POST["un"];
    $p = $_POST["passs"];
    
    if (empty($u) || empty($p)) {
        echo "<script>alert('Please enter both username and password');</script>";
    } else {
        $cn = mysqli_connect("localhost", "root", "", "inter6");

        if (!$cn) {
            die("Connection failed: " . mysqli_connect_error());
        }

        // Check if username and password match an existing record
        $stmt = $cn->prepare("SELECT * FROM logina WHERE username = ? AND password = ?");
        $stmt->bind_param("ss", $u, $p);
        $stmt->execute();
        $result = $stmt->get_result();

        if ($result->num_rows > 0) {
            // Username and password match
            $_SESSION['username'] = $u; // Store the username in the session
            header("Location: admin.php");
            exit();
        } else {
            echo "<script>alert('Invalid username or password');</script>";
        }

        $stmt->close();
        $cn->close();
    }
}
?>
