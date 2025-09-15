<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inter6";

// Create connection
$conn = new mysqli("localhost", "root", "", "inter6");

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $fullName = trim($_POST['full-name']);
    $email = trim($_POST['email']);
    $subject = trim($_POST['subject']);
    $message = trim($_POST['message']);

    if (!empty($fullName) && !empty($email) && !empty($subject) && !empty($message)) {
        $stmt = $conn->prepare("INSERT INTO contacts (full_name, email, subjects, message) VALUES (?, ?, ?, ?)");
        $stmt->bind_param("ssss", $fullName, $email, $subject, $message);

        if ($stmt->execute()) {
            echo "New record created successfully";
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required.";
    }
}

$conn->close();
?>
