<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Select Contact</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f9;
            margin: 0;
            padding: 0;
            display: flex;
            flex-direction: column;
            align-items: center;
        }

        h2 {
            color: #333;
            margin-bottom: 40px;
        }

        ul {
            list-style: none;
            padding: 0;
            margin: 0;
        }

        li {
            margin: 15px 0;
            text-align: center;
        }

        a {
            text-decoration: none;
            color: #fff;
            background-color: #7ad4f5;
            padding: 5px 25px;
            border-radius: 8px;
            transition: all 0.3s ease, color 0.3s ease;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        }

        a:hover {
            background-color: #ffcc00;
            color: #333;
            transform: translateY(-3px);
            box-shadow: 0 6px 8px rgba(0, 0, 0, 0.15);
        }

        #payment-content {
            margin-top: 20px;
            width: 100%;
            max-width: 600px;
        }
    </style>
</head>
<body>
    <h2>Select a Contact</h2><br>
    <ul>
        <li><a href="#" onclick="loadPayment('Mayank')">Mayank Pandya</a></li>
        
        <li><a href="#" onclick="loadPayment('Nisha')">Soni Nisha</a></li>
        <li><a href="#" onclick="loadPayment('Yashvi')">Kachchhi Yashvi </a></li>
        <li><a href="#" onclick="loadPayment('Hasti')">Paliya Hasti</a></li>
        <li><a href="#" onclick="loadPayment('Vidhi')">Kalariya Vidhi</a></li>
    </ul>
    <div id="payment-content"></div>





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





    <script>
        function loadPayment(contactName) {
            const xhr = new XMLHttpRequest();
            xhr.open('GET', 'payment.php?contact=' + contactName, true);
            xhr.onload = function() {
                if (xhr.status === 200) {
                    document.getElementById('payment-content').innerHTML = xhr.responseText;
                }
            };
            xhr.send();
        }
    </script>
</body>
</html>
