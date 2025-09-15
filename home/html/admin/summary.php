<?php
// Start the session to retrieve stored data
session_start();

if (!isset($_SESSION['order_data'])) {
    // Redirect if no data found
    header("Location: buy.html");
    exit();
}

// Retrieve data from the session
$orderData = $_SESSION['order_data'];
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link rel="stylesheet" href="summary.css">
</head>
<body>
    <div class="container">
        <h2>Order Summary</h2>

        <div class="product-details">
            <img src="<?php echo htmlspecialchars($orderData['item-image']); ?>" alt="Product Image">
            <p>Product Name: <?php echo htmlspecialchars($orderData['item-name']); ?></p>
            <p>Price: <?php echo htmlspecialchars($orderData['item-price']); ?></p>
            <p>Quantity: <?php echo htmlspecialchars($orderData['quantity']); ?></p>
        </div>

        <div class="customer-details">
            <h3>Customer Details</h3>
            <p>Name: <?php echo htmlspecialchars($orderData['customer-name']); ?></p>
            <p>Email: <?php echo htmlspecialchars($orderData['customer-email']); ?></p>
            <p>Address: <?php echo htmlspecialchars($orderData['customer-address']); ?></p>
        </div>
    </div>
</body>
</html>
















<style>



body {
    font-family: Arial, sans-serif;
    background-color: #f4f4f9;
    margin: 0;
    padding: 20px;
    display: flex;
    justify-content: center;
    align-items: center;
    flex-direction: column;
}

.container {
    background-color: #fff;
    border-radius: 8px;
    box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
    padding: 20px;
    width: 100%;
    max-width: 600px;
    text-align: center;
}

h2, h3 {
    color: #333;
}

.product-details, .customer-details {
    margin: 20px 0;
}

.product-details img {
    max-width: 100px;
    border-radius: 50%;
    margin-bottom: 10px;
}

p {
    margin: 10px 0;
}



    </style>