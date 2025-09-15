<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys for 29-39 Years</title>
    <link rel="stylesheet" type="text/css" href="29-29.css">
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

        table {
            width: 100%;
            border-collapse: collapse;
            margin: 20px 0;
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
        }

        .toy-item img {
            max-width: 100px;
            height: auto;
        }

        .btn {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .buy-btn {
            background-color: #28a745;
            color: white;
        }

        .wishlist-btn {
            background-color: #ff851b;
            color: white;
        }

        .update-btn {
            background-color: #007bff;
            color: white;
        }

        .delete-btn {
            background-color: #dc3545;
            color: white;
        }

        .toggle-stock-btn {
            background-color: #ffc107;
            color: white;
        }

        .add-btn {
            background-color: #17a2b8;
            color: white;
            margin: 20px;
        }

        .btn:hover {
            opacity: 0.8;
        }

        /* Responsive Styles */
        @media (max-width: 768px) {
            .header {
                width: 100%;
                left: 0;
            }

            .sidebar {
                width: 200px;
            }

            .main-content {
                margin-left: 200px;
                width: calc(100% - 220px);
            }

            .header-left img {
                height: 80px;
            }

            .header-right .icon img {
                height: 25px;
            }
        }

        @media (max-width: 480px) {
            .header {
                flex-direction: column;
                align-items: flex-start;
                height: auto;
            }

            .header-left img {
                height: 60px;
            }

            .header-right {
                margin-top: 10px;
            }

            .sidebar {
                width: 100px;
            }

            .main-content {
                margin-left: 100px;
                width: calc(100% - 120px);
            }

            .sidebar ul li a {
                padding: 10px;
                text-align: left;
            }

            .profile-section .profile-pic {
                height: 80px;
                width: 80px;
            }
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
        <div class="main-content" id="main-content">
            <h2>Toys for 29-39 Years</h2>
            <table>
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Name</th>
                        <th>Price</th>
                        <th>Status</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    // Database connection
                    $conn = new mysqli('localhost', 'root', '', 'inter6');
                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    // Fetch data from t2939 table
                    $sql = "SELECT * FROM t2939";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo '<tr>';
                            echo '<td><img src="' . $row['image'] . '" alt="' . $row['name'] . '"></td>';
                            echo '<td>' . $row['name'] . '</td>';
                            echo '<td>$' . $row['price'] . '</td>';
                            echo '<td>' . $row['status'] . '</td>';
                            echo '<td>';
                            echo '<button class="btn buy-btn" onclick="buyItem(' . $row['id'] . ')">Buy</button>';
                            echo '<button class="btn wishlist-btn" onclick="addToWishlist(' . $row['id'] . ')">Wishlist</button>';
                            echo '<button class="btn update-btn" onclick="updateItem(' . $row['id'] . ')">Update</button>';
                            echo '<button class="btn delete-btn" onclick="deleteItem(' . $row['id'] . ')">Delete</button>';
                            echo '<button class="btn toggle-stock-btn" onclick="toggleStock(' . $row['id'] . ', \'' . $row['status'] . '\')">Toggle Stock</button>';
                            echo '</td>';
                            echo '</tr>';
                        }
                    } else {
                        echo "<tr><td colspan='5'>No toys available for this age group.</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
            <button class="btn add-btn" onclick="addItem()">Add New Toy</button>
        </div>
    </div>

    <script>
        

        function buyItem(id) {
            location.href = `buy.html?id=${id}`;
        }

        function addToWishlist(id) {
            // Implement wishlist functionality here
            alert('Item added to wishlist!');
        }

        function updateItem(id) {
            location.href = `up2939.php?id=${id}`;
        }

        function deleteItem(id) {
            if (confirm('Are you sure you want to delete this item?')) {
                location.href = `del2939.php?id=${id}`;
            }
        }
 
        function toggleStock(id, currentStatus) {
            let newStatus = currentStatus === 'In Stock' ? 'Out of Stock' : 'In Stock';
            location.href = `togsto2939.php?id=${id}&status=${newStatus}`;
        }

        function addItem() {
            location.href = 'add2939.php';
        }
    </script>
</body>
</html>
