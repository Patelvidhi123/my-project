<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Toy Shop</title>
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            display: flex;
            min-height: 100vh;
            background-color: #f4f4f4;
            flex-direction: column;
        }

        .header {
            width: calc(100% - 250px);
            background-color: #fff;
            color: #000;
            display: flex;
            justify-content: space-between;
            align-items: center;
            padding: 15px 20px;
            position: fixed;
            top: 0;
            left: 250px;
            right: 0;
            z-index: 1000;
            height: 150px;
        }

        .header-left img {
            height: 120px;
            width: auto;
        }

        .header-right {
            display: flex;
            align-items: center;
        }

        .header-right .icon {
            margin-left: 15px;
        }

        .header-right .icon img {
            height: 35px;
            width: auto;
        }

        .container {
            display: flex;
            margin-top: 150px;
            width: 100%;
        }

        .sidebar {
            width: 250px;
            background-color: #333;
            color: #fff;
            display: flex;
            flex-direction: column;
            align-items: center;
            padding-top: 30px;
            position: fixed;
            height: 100%;
            transition: width 0.3s;
            top: 0;
            left: 0;
        }

        .logo-section {
            text-align: center;
            margin-bottom: 20px;
        }

        .logo-section img {
            height: 100px;
            width: 100px;
            margin-bottom: 10px;
            border-radius: 50%;
        }

        .logo-section p {
            margin: 0;
            color: #fff;
            font-weight: bold;
        }

        .sidebar ul {
            list-style: none;
            width: 100%;
        }

        .sidebar ul li {
            width: 100%;
        }

        .sidebar ul li a {
            display: block;
            padding: 15px;
            color: #fff;
            text-decoration: none;
            text-align: center;
            transition: background 0.3s;
        }

        .sidebar ul li a:hover {
            background-color: #575757;
        }

        .main-content {
            margin-left: 250px;
            padding: 20px;
            flex-grow: 1;
            background-color: #fff;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            border-radius: 10px;
            width: calc(100% - 270px);
            transition: margin-left 0.3s, width 0.3s;
        }

        .card {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
            margin-bottom: 20px;
            text-align: center;
        }

        .card h3 {
            margin: 0;
            color: #333;
        }

        .card p {
            font-size: 24px;
            color: #555;
        }

        .card-icon {
            font-size: 40px;
            color: #007bff;
            margin-bottom: 10px;
        }

        .recent-activity {
            background: #fff;
            border-radius: 8px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
            padding: 20px;
        }

        .recent-activity h3 {
            margin-top: 0;
            color: #333;
        }

        .recent-activity ul {
            list-style: none;
            padding: 0;
        }

        .recent-activity ul li {
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }

        .recent-activity ul li:last-child {
            border-bottom: none;
        }


        
    </style>
</head>
<body>
    <header class="header">
        <div class="header-left">
            <img src="image/toyloa.png" alt="Logo"> <!-- Replace with your logo path -->
        </div>
        <h1>Admin Dashboard</h1>
        <div class="header-right">
            <a href="#" class="icon"><img src="image/notification.png" alt="Notifications"></a> <!-- Replace with your notification icon path -->
            <a href="#" class="icon"><img src="image/help.png" alt="Help"></a> <!-- Replace with your question mark icon path -->
            <a href="#" class="icon"><img src="image/email.png" alt="Email"></a> <!-- Replace with your email icon path -->
        </div>
    </header>
    <div class="container">
        <nav class="sidebar">
            <div class="logo-section">
                <img src="image/33.jpg" alt="Logo"> <!-- Replace with your logo path -->
                <p>Your Name</p>
            </div>
            <ul>
            <li><a href="dashboard.php">Dashboard</a></li>
                <li><a href="0-6a.php">Page 0-6</a></li>
                <li><a href="713a.php">Page 7-13</a></li>
                <li><a href="1419a.php">Page 14-19</a></li>
                <li><a href="1928a.php">Page 19-28</a></li>
                <li><a href="2939a.php">Page 29-39</a></li>
                <li><a href="contacta.php">Contact Us</a></li>
                <li><a href="servicea.php">services</a></li>
            </ul>
        </nav>
        <div class="main-content">
            <h2>Dashboard Overview</h2>
            <div class="card-container">
                <div class="card">
                    <div class="card-icon">📦</div>
                    <h3>Total Products</h3>
                    <p id="total-products">3400</p>
                </div>
                <div class="card">
                    <div class="card-icon">💰</div>
                    <h3>Total Sales of average(yearly)</h3>
                    <p id="total-sales">$250000.75</p>
                </div>
                <div class="card">
                    <div class="card-icon">📈</div>
                    <h3>Total Orders of average(yearly)</h3>
                    <p id="total-orders">2380</p>
                </div>
                <div class="card">
                    <div class="card-icon">📊</div>
                    <h3>Stock Status</h3>
                    <p id="stock-status">Most Of Items in Stock</p>
                </div>
            </div>

            <div class="recent-activity">
                <h3>Recent Activities</h3>
                <ul id="activity-log">
                    <!-- Recent activity items will be inserted here dynamically -->
                    
                </ul>
            </div>
        </div>
    </div>

    <script>
      
        // Example data fetching and display
        document.addEventListener('DOMContentLoaded', () => {
            // Simulate fetching data
            const totalProducts = 1200; // Example value
            const totalSales = 2500.75; // Example value
            const totalOrders = 50; // Example value
            const stockStatus = 'Most of Items in Stock'; // Example value
            
            // Update dashboard statistics
            document.getElementById('total-products').innerText = totalProducts;
            document.getElementById('total-sales').innerText = `$${totalSales.toFixed(2)}`;
            document.getElementById('total-orders').innerText = totalOrders;
            document.getElementById('stock-status').innerText = stockStatus;

            // Example recent activities
            const recentActivities = [
                "¤ Added new toy 'Super Racer Car'",
                "¤ Updated price for 'Teddy Bear'",
                "¤ New order received: #12345",
                "¤ Stock updated for 'Building Blocks'",
            ];

            // Populate recent activities
            const activityLog = document.getElementById('activity-log');
            recentActivities.forEach(activity => {
                const li = document.createElement('li');
                li.innerText = activity;
                activityLog.appendChild(li);
            });
        });
    </script>
</body>
</html>
