<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    // Sanitize POST data
    $itemName = htmlspecialchars($_POST['item-name']);
    $itemImage = htmlspecialchars($_POST['item-image']);
    $itemPrice = htmlspecialchars($_POST['item-price']);
    $customerName = htmlspecialchars($_POST['customer-name']);
    $customerEmail = htmlspecialchars($_POST['customer-email']);
    $customerAddress = htmlspecialchars($_POST['customer-address']);
    $quantity = htmlspecialchars($_POST['quantity']);
    $upiId = isset($_POST['upi_id']) ? htmlspecialchars($_POST['upi_id']) : '';

    // Database connection
    $conn = new mysqli("localhost", "root", "", "inter6");

    if ($conn->connect_error) {
        die("Connection failed: " . $conn->connect_error);
    }

    if (isset($_POST['pay_now'])) {
        // Insert order into database
        $stmt = $conn->prepare("INSERT INTO orders (item_name, item_image, item_price, customer_name, customer_email, customer_address, quantity, upi_id) VALUES (?, ?, ?, ?, ?, ?, ?, ?)");
        $stmt->bind_param("ssssssis", $itemName, $itemImage, $itemPrice, $customerName, $customerEmail, $customerAddress, $quantity, $upiId);

        if ($stmt->execute()) {
            // Redirect to success page
            header("Location: success.html");
            exit();
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    }

    $conn->close();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Summary</title>
    <link rel="stylesheet" href="upi.css">
    <script>
    function redirectToContacts() {
        window.location.href = "listcon.php"; // Page with contact list
    }
    </script>
</head>
<body>

<div class="container">
    <h2>Order Summary</h2>

    <div class="product-details">
        <div class="product-image">
            <img src="<?php echo htmlspecialchars($_POST['item-image']); ?>" alt="Product Image">
        </div>
        <div class="product-info">
            <p>Product Name: <?php echo htmlspecialchars($_POST['item-name']); ?></p>
            <p>Price: <?php echo htmlspecialchars($_POST['item-price']); ?></p>
            <p>Name: <?php echo htmlspecialchars($_POST['customer-name']); ?></p>
            <p>Email: <?php echo htmlspecialchars($_POST['customer-email']); ?></p>
            <p>Address: <?php echo htmlspecialchars($_POST['customer-address']); ?></p>
            <p>Quantity: <?php echo htmlspecialchars($_POST['quantity']); ?></p>

            <form method="post" action="">
                <input type="hidden" name="item-name" value="<?php echo htmlspecialchars($_POST['item-name']); ?>">
                <input type="hidden" name="item-image" value="<?php echo htmlspecialchars($_POST['item-image']); ?>">
                <input type="hidden" name="item-price" value="<?php echo htmlspecialchars($_POST['item-price']); ?>">
                <input type="hidden" name="customer-name" value="<?php echo htmlspecialchars($_POST['customer-name']); ?>">
                <input type="hidden" name="customer-email" value="<?php echo htmlspecialchars($_POST['customer-email']); ?>">
                <input type="hidden" name="customer-address" value="<?php echo htmlspecialchars($_POST['customer-address']); ?>">
                <input type="hidden" name="quantity" value="<?php echo htmlspecialchars($_POST['quantity']); ?>">

                <label for="payment-method">Select Payment Method:</label><br>

                <div class="payment-option">
                    <input type="radio" id="phonepe" name="upi_id" value="PhonePe" required>
                    <label for="phonepe">
                        <img src="image/phonepay1.png" alt="PhonePe">
                    </label>
                </div>

                <div class="payment-option">
                    <input type="radio" id="gpay" name="upi_id" value="GPay" onclick="redirectToContacts()">
                    <label for="gpay">
                        <img src="image/gpay1.png" alt="GPay">
                    </label>
                </div>

                <div class="payment-option">
                    <input type="radio" id="paytm" name="upi_id" value="Paytm">
                    <label for="paytm">
                        <img src="image/paytm.png" alt="Paytm">
                    </label>
                </div>

                <button type="submit" name="pay_now">Pay Now</button>
            </form>
        </div>
    </div>
</div>

</body>
</html>
