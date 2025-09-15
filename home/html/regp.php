<?php
if (isset($_POST["OK"])) {
    // Initialize variables
    $username = $gender = $email = $password = $confirm_password = "";
 
    if (empty($_POST["un"])) {
        echo "<script>alert('Please enter firstname');</script>";
    } else {
        $username = $_POST["un"];
    }

    if (empty($_POST["gender"])) {
        echo "<script>alert('Please select gender');</script>";
    } else {
        $gender = $_POST["gender"];
    }
    
    $email = $_POST["em"];
    $pattern = "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/";
    
    if (empty($_POST["em"])) {
        echo "<script>alert('Please enter email');</script>";
    } elseif (!preg_match($pattern, $email)) {
        echo "<script>alert('Email is not valid');</script>";
    } else {
        $email = $_POST["em"];
    }

    if (empty($_POST["pass"])) {
        echo "<script>alert('Please enter password');</script>";
    } else {
        $password = $_POST["pass"];
        if (!preg_match("/^[0-9]*$/", $password)) {
            echo "<script>alert('Only numeric value is allowed');</script>";
        } else {
            $password = $_POST["pass"];
        }
    }

    if (empty($_POST["pass1"])) {
        echo "<script>alert('Please enter confirm password');</script>";
    } else {
        $confirm_password = $_POST["pass1"];
        if ($confirm_password != $_POST["pass"]) {
            echo "<script>alert('Passwords do not match');</script>";
        } else {
            $confirm_password = $_POST["pass1"];
        }
    }
   
    if (!empty($username) && !empty($gender) && !empty($email) && !empty($password) && !empty($confirm_password)) {
        $cn = mysqli_connect("localhost", "root", "", "inter6");

        if (!$cn) {
            die("Connection failed: " . mysqli_connect_error());
        }
    
        // Use prepared statements to prevent SQL injection
        $stmt_reg = $cn->prepare("INSERT INTO reg (username, gender, email, password) VALUES (?, ?, ?, ?)");
        $stmt_login = $cn->prepare("INSERT INTO login (username, password) VALUES (?, ?)");

        if (!$stmt_reg || !$stmt_login) {
            echo "<script>alert('Prepare failed: " . $cn->error . "');</script>";
        } else {
            // Bind parameters for registration
            $stmt_reg->bind_param("ssss", $username, $gender, $email, $password);
            // Bind parameters for login
            $stmt_login->bind_param("ss", $username, $password);

            // Execute statements
            if ($stmt_reg->execute() && $stmt_login->execute()) {
                header("Location: f.php");
                exit(); // Ensure script stops executing after redirect
            } else {
                echo "<script>alert('Execute failed: " . $stmt_reg->error . "');</script>";
            }

            // Close statements and connection
            $stmt_reg->close();
            $stmt_login->close();
        }

        $cn->close();
    }
}
?>
