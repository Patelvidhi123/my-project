<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard - Toys for 0-6 Years</title>
    
    <style>
        body {
            font-family: Arial, sans-serif;
            margin: 0;
            padding: 0;
            background-size: cover;
        }

        .container {
            padding: 20px;
            text-align: center;
            margin-top: 150px; /* Adjusted to accommodate fixed header */
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

        .stock-btn {
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
        }

       


    </style>
</head>
<body>
    <header class="header">
        <div class="header-left">
            <img src="image/toyloa.png" alt="Logo">
        </div>
        <h1>Admin Dashboard</h1>
        <div class="header-right">
            <a href="#" class="icon"><img src="image/notification.png" alt="Notifications"></a>
            <a href="#" class="icon"><img src="image/help.png" alt="Help"></a>
            <a href="#" class="icon"><img src="image/email.png" alt="Email"></a>
        </div>
    </header>
    <div class="sidebar">
        <div class="logo-section">
            <img src="image/33.jpg" alt="Logo">
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
    </div>
    <div class="container main-content" id="main-content">
        <h2>Toys for 0-6 Years</h2>
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
                // Connect to the database
                $cn = mysqli_connect("localhost", "root", "", "inter6");
                if (!$cn) {
                    die("Connection failed: " . mysqli_connect_error());
                }

                // Fetch toys from the database
                $result = mysqli_query($cn, "SELECT * FROM toys");
                if (mysqli_num_rows($result) > 0) {
                    while ($row = mysqli_fetch_assoc($result)) {
                        echo '<tr class="toy-item">';
                        echo '<td><img src="' . $row['image'] . '" alt="' . $row['name'] . '"></td>';
                        echo '<td>' . $row['name'] . '</td>';
                        echo '<td>$' . $row['price'] . '</td>';
                        echo '<td>' . $row['status'] . '</td>';
                        echo '<td>
                                <button class="btn buy-btn" onclick="buyItem(\'' . $row['image'] . '\',\'' . $row['name'] . '\',\'$' . $row['price'] . '\')">Buy</button>
                                <button class="btn wishlist-btn" onclick="addToWishlist(\'' . $row['image'] . '\',\'' . $row['name'] . '\',\'$' . $row['price'] . '\')">Wishlist</button>
                                <button class="btn update-btn" onclick="updateItem(' . $row['id'] . ')">Update</button>
                                <button class="btn delete-btn" onclick="deleteItem(' . $row['id'] . ')">Delete</button>
                                <button class="btn stock-btn" onclick="toggleStock(' . $row['id'] . ', \'' . $row['status'] . '\')">Toggle Stock</button>
                              </td>';
                        echo '</tr>';
                    }
                } else {
                    echo '<tr><td colspan="5">No toys found</td></tr>';
                }

                // Close the database connection
                mysqli_close($cn);
                ?>
            </tbody>
        </table>
        <button class="btn add-btn" onclick="addItem()">Add Item</button>
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
            location.href = `update.php?id=${id}`;
        }

        function deleteItem(id) {
            if (confirm('Are you sure you want to delete this item?')) {
                location.href = `delete.php?id=${id}`;
            }
        }
        
        function toggleStock(id, currentStatus) {
            let newStatus = currentStatus === 'In Stock' ? 'Out of Stock' : 'In Stock';
            fetch(`toggle_stock.php?id=${id}&status=${newStatus}`)
                .then(response => response.text())
                .then(data => {
                    if (data === 'success') {
                        alert('Status updated successfully!');
                        location.reload();
                    } else {
                        alert('succesfully updating status.');
                    }
                });
        }

        function addItem() {
            location.href = 'add.php';
        }

    
     
    </script>
</body>
</html>
