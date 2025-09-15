<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $amount = $_POST['amount'];
    $bank = $_POST['bank'];
    $message = "Payment of $amount via $bank successful!";
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Success</title>
    <style>
        body {
            text-align: center;
            font-family: Arial, sans-serif;
            background-color: #f0f8ff;
            margin: 0;
            padding: 20px;
        }

        h1 {
            color: #28a745;
            margin-bottom: 20px;
        }

        .message-box {
            max-width: 500px;
            margin: 20px auto;
            padding: 20px;
            background-color: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .message {
            font-size: 18px;
            color: #333;
            margin-bottom: 20px;
        }

        .message.success {
            color: #28a745;
            font-weight: bold;
        }

        .price-circle {
            height: 150px;
            width: 150px;
            border: 1px solid transparent;
            border-radius: 50%;
            margin: 0 auto;
            display: flex;
            align-items: center;
            justify-content: center;
            transform: scale(0);
            animation: zoomIn 0.5s forwards;
            background-color: #fff;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        @keyframes zoomIn {
            to {
                transform: scale(1);
            }
        }

        .price-circle:hover {
            transform: translateY(-10px) scale(1.05);
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.3);
        }

        img {
            margin-top: 20px;
            width: 200px;
        }
    </style>
</head>
<body>
    <h1>Order Placed Successfully!</h1>
    <div class="price-circle">
        <!-- This value should be fetched dynamically -->
        <img src="image/tick.png" alt="Success Icon" style="width: 100px;">
    </div>
    <div class="message-box">
        <div class="message success">
            <?php if (isset($message)) echo htmlspecialchars($message); ?>
        </div>
    </div>
    <img src="https://media.giphy.com/media/5GoVLqeAOo6PK/giphy.gif" alt="Success GIF">
</body>
</html>
