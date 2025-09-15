<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inter6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

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
            header("Location: contacta.php");
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



































<!DOCTYPE html>
<html>
<head>
    <title>Add Contact</title>
    <link href="https://fonts.googleapis.com/css2?family=Lobster&family=Roboto:wght@300&display=swap" rel="stylesheet">
    <style>
        body {
            font-family: 'Roboto', sans-serif;
            background-color: #f5f5f5;
            margin: 0;
            padding: 0;
        }

        .header {
            background-color: #4CAF50;
            color: white;
            text-align: center;
            padding: 20px 0;
        }

        .container {
            max-width: 600px;
            margin: 20px auto;
            padding: 20px;
            background-color: white;
            box-shadow: 0 0 10px rgba(0,0,0,0.1);
            border-radius: 10px;
        }

        .form-group {
            margin-bottom: 15px;
        }

        .form-group label {
            display: block;
            margin-bottom: 5px;
        }

        .form-group input, .form-group textarea {
            width: 100%;
            padding: 10px;
            border: 1px solid #ddd;
            border-radius: 5px;
        }

        .form-group textarea {
            resize: vertical;
            height: 100px;
        }

        .submit-button {
            display: inline-block;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .submit-button:hover {
            background-color: #45a049;
        }
    </style>
</head>
<body>

<div class="header">
    <h1>Add New Contact</h1>
</div>

<div class="container">
    <form action="adcontact.php" method="post">
        <div class="form-group">
            <label for="full-name">Full Name</label>
            <input type="text" id="full-name" name="full-name" required>
        </div>
        <div class="form-group">
            <label for="email">Email</label>
            <input type="email" id="email" name="email" required>
        </div>
        <div class="form-group">
            <label for="subject">Subject</label>
            <input type="text" id="subject" name="subject" required>
        </div>
        <div class="form-group">
            <label for="message">Message</label>
            <textarea id="message" name="message" required></textarea>
        </div>
        <button type="submit" class="submit-button">Submit</button>
    </form>
</div>

</body>
</html>
