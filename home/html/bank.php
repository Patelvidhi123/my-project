<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $itemName = htmlspecialchars($_POST['item-name']);
    $itemImage = htmlspecialchars($_POST['item-image']);
    $itemPrice = htmlspecialchars($_POST['item-price']);
    $customerName = htmlspecialchars($_POST['customer-name']);
    $customerEmail = htmlspecialchars($_POST['customer-email']);
    $customerAddress = htmlspecialchars($_POST['customer-address']);
    $quantity = htmlspecialchars($_POST['quantity']);
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bank Transfer</title>
    <link rel="stylesheet" href="bank.css">
</head>
<body>

<div class="container">
    <h2>Bank Transfer</h2>

    <div class="product-details">
        <div class="product-image">
            <img src="<?php echo $itemImage; ?>" alt="Product Image">
        </div>
        <div class="product-info">
            <p>Product Name: <?php echo $itemName; ?></p>
            <p>Price: <?php echo $itemPrice; ?></p>
            <p>Name: <?php echo $customerName; ?></p>
            <p>Email: <?php echo $customerEmail; ?></p>
            <p>Address: <?php echo $customerAddress; ?></p>
            <p>Quantity: <?php echo $quantity; ?></p>
            <button onclick="showPaymentForm()">Pay Now</button>
        </div>
    </div>

    <div id="payment-form" style="display: none;">
        <h3>Payment Details</h3>
        <form action="success.html" method="post">
            <label for="account-number">Account Number:</label>
            <input type="text" id="account-number" name="account-number" required><br>

            <label for="bank">Choose Bank:</label>
            <select id="bank" name="bank" required>
                <option value="bank1">SBI</option>
                <option value="bank2">BOB</option>
                <option value="bank3">ICICI</option>
            </select><br>

            <label for="amount">Amount:</label>
            <input type="text" id="amount" name="amount" required><br>

            <input type="submit" value="Submit">
        </form>
    </div>

    <script>
        function showPaymentForm() {
            document.getElementById('payment-form').style.display = 'block';
        }
    </script>
</div>

</body>
</html>
