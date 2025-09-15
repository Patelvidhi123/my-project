<?php
$contactName = $_GET['contact'];
?>

<div class="container">
    <h2><?php echo htmlspecialchars($contactName); ?></h2>
    <img src="image/conimg.jpg" alt="Contact Image"> <!-- Add contact image path -->

    <button onclick="showPaymentForm()">Pay</button>
    <button onclick="cancel()">Cancel</button>
    <button onclick="message()">Message</button>

    <div id="payment-form" style="display:none;">
        <form method="post" action="success.php">
            <label for="amount">Enter Amount:</label>
            <input type="text" name="amount" required>

            <label>Select Bank:</label><br>
            <input type="radio" id="sbi" name="bank" value="SBI" required>SBI<br>

            <input type="radio" id="icici" name="bank" value="ICICI">ICICI<br>


            <label for="pin">Enter 4-digit PIN:</label>
            <input type="password" name="pin" pattern="\d{4}" required>


            <button type="submit">Pay</button>
        </form>
    </div>
</div>

<script>
    function showPaymentForm() {
        document.getElementById('payment-form').style.display = 'block';
    }

    function cancel() {
        document.getElementById('payment-form').style.display = 'none';
    }

    function message() {
        alert("Message functionality not implemented yet.");
    }
</script>











<style>


body {
    font-family: Arial, sans-serif;
    background-color: #f0f2f5;
    margin: 0;
    padding: 0;
    display: flex;
    justify-content: center;
    align-items: center;
    height: 100vh;
}

.container {
    max-width: 400px;
    margin: 20px;
    padding: 20px;
    background-color: #fff;
    border-radius: 12px;
    box-shadow: 0 6px 12px rgba(0, 0, 0, 0.1);
    text-align: center;
}

h2 {
    color: #333;
    margin-bottom: 20px;
}

img {
    width: 80px;
    height: 80px;
    margin-bottom: 20px;
    border-radius: 50%;
    object-fit: cover;
    border: 2px solid #ddd;
}

button {
    margin: 10px;
    padding: 10px 20px;
    color: #fff;
    background-color: #7ff5a5;
    border: none;
    border-radius: 8px;
    cursor: pointer;
    transition: background-color 0.3s ease, transform 0.2s ease;
}

button:hover {
    background-color: #f5605d;
    transform: translateY(-2px);
}

#payment-form {
    margin-top: 20px;
    text-align: left;
}

label {
    display: block;
    margin: 10px 0 5px;
    color: #555;
    font-weight: bold;
}

input[type="text"],
input[type="password"] {
    width: 100%;
    padding: 10px;
    margin-bottom: 15px;
    border: 1px solid #ccc;
    border-radius: 8px;
}

input[type="radio"] {
    margin-right: 5px;
}

input[type="radio"] + label {
    margin-right: 15px;
    color: #333;
    font-weight: normal;
}

form button[type="submit"] {
    background-color: #28a745;
}

form button[type="submit"]:hover {
    background-color: #218838;
}

</style>