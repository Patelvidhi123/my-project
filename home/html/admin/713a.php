<?php
// Database configuration
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

// Fetch data from table '713'
$sql = "SELECT * FROM `713`";
$result = $conn->query($sql);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>
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
            background: white;
            box-shadow: 0 2px 5px rgba(0, 0, 0, 0.1);
        }

        th, td {
            border: 1px solid #ddd;
            padding: 12px;
            text-align: center;
        }

        th {
            background-color: #f2f2f2;
            color: #555;
        }

        td {
            background-color: #fff;
        }

        .btn {
            padding: 10px 20px;
            margin: 5px;
            border: none;
            border-radius: 5px;
            cursor: pointer;
            color: white;
            font-size: 14px;
            transition: background-color 0.3s ease;
        }

        .buy-btn {
            background-color: #28a745;
        }

        .wishlist-btn {
            background-color: #ff851b;
        }

        .update-btn {
            background-color: #007bff;
        }

        .delete-btn {
            background-color: #dc3545;
        }

        .stock-btn {
            background-color: #ffc107;
        }

        .add-btn {
            background-color: #17a2b8;
        }

        .btn:hover {
            opacity: 0.8;
        }

        .no-data {
            color: #888;
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
            <h1>Toys for 7-13 Years</h1>
            <table>
                <thead>
                    <tr>
                        <?php
                        if ($result->num_rows > 0) {
                            // Output column names as table headers
                            $fields = $result->fetch_fields();
                            foreach ($fields as $field) {
                                echo "<th>{$field->name}</th>";
                            }
                            echo "<th>Actions</th>";
                            echo "</tr>";
                        } else {
                            echo "<tr><td colspan='100%' class='no-data'>No data found</td></tr>";
                        }
                        ?>
                </thead>
                <tbody>
                    <?php
                    // Output data of each row
                    while($row = $result->fetch_assoc()) {
                        echo "<tr>";
                        foreach ($row as $key => $value) {
                            echo "<td>{$value}</td>";
                        }
                        // Buttons for actions
                        echo "<td>
                                <button onclick=\"buyItem('{$row['image']}', '{$row['name']}', '{$row['price']}')\" class='btn buy-btn'>Buy</button>
                                <button onclick=\"addToWishlist('{$row['image']}', '{$row['name']}', '{$row['price']}')\" class='btn wishlist-btn'>Wishlist</button>
                                <button onclick=\"updateItem('{$row['id']}')\" class='btn update-btn'>Update</button>
                                <button onclick=\"deleteItem('{$row['id']}')\" class='btn delete-btn'>Delete</button>
                                <button onclick=\"toggleStock('{$row['id']}', '{$row['stock_status']}')\" class='btn stock-btn'>Toggle Stock</button>
                              </td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
            <br>
            <button onclick="addItem()" class="btn add-btn">Add Product</button>
        </div>
    </div>
    <script>
       

        function buyItem(image, name, price) {
            location.href = `buy.html?image=${encodeURIComponent(image)}&name=${encodeURIComponent(name)}&price=${encodeURIComponent(price)}`;
        }

        function addToWishlist(image, name, price) {
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            wishlist.push({ image, name, price });
            localStorage.setItem('wishlist', JSON.stringify(wishlist));
            alert('Wishlist updated successfully!');
        }

        function updateItem(id) {
            location.href = `up713.php?id=${id}`;
        }

        function deleteItem(id) {
            if (confirm('Are you sure you want to delete this item?')) {
                location.href = `del713.php?id=${id}`;
            }
        } 

        function toggleStock(id, currentStatus) {
            let newStatus = currentStatus === 'In Stock' ? 'Out of Stock' : 'In Stock';
            fetch(`togsto713.php?id=${id}&status=${newStatus}`)
                .then(response => response.text())
                .then(data => {
                    if (data === 'success') {
                        alert('Status updated successfully!');
                        location.reload();
                    } else {
                        alert('Error updating status.');
                    }
                });
        }

        function addItem() {
            location.href = 'add713.php';
        }
    </script>
</body>
</html>
<?php
$conn->close();
?>
