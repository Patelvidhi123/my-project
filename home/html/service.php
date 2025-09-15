<?php
// Database credentials
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

// Initialize variables
$image = $_POST['image'] ?? '';
$comments = $_POST['comments'] ?? '';

// Prepare and bind
$stmt = $conn->prepare("INSERT INTO feedback (image, comments) VALUES (?, ?)");
$stmt->bind_param("ss", $image, $comments);

// Execute the query
if ($stmt->execute()) {
    $message = "Feedback submitted successfully!";
} else {
    $message = "Error: " . $stmt->error;
}

// Close connections
$stmt->close();
$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback Status</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .success-message {
            background-color: #d4edda;
            color: #155724;
            border: 1px solid #c3e6cb;
            border-radius: 5px;
            padding: 20px;
            max-width: 400px;
            text-align: center;
            
            position: relative;
            display: flex;
            align-items: center;
            justify-content: center;
            overflow: hidden; /* Ensure the pseudo-element is contained */
        }
        .success-message img {
            width: 40px;
            height: 40px;
            margin-right: 10px;
            transform: scale(0); /* Start with the icon scaled down */
            animation: zoomIn 0.5s forwards; /* Apply the animation */
        }
        .success-message p {
            margin: 0;
        }
        .success-message::before {
            content: '';
            position: absolute;
            top: -10px;
            left: 50%;
            transform: translateX(-50%);
            width: 0;
            height: 0;
            border-left: 10px solid transparent;
            border-right: 10px solid transparent;
            border-bottom: 10px solid #d4edda;
        }
        @keyframes zoomIn {
            to {
                transform: scale(1); /* Scale to original size */
            }
        }
    </style>
</head>
<body>
    <div class="success-message">
        <img src="https://img.icons8.com/ios/50/checked.png" alt="Success Icon">
        <p><?php echo htmlspecialchars($message); ?></p>
    </div>
</body>
</html>
