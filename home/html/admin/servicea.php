<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Dashboard</title>
    <link rel="stylesheet" href="admin_panel.css">
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

        .profile-section {
            text-align: center;
            margin-bottom: 20px;
            margin-top: 50px;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            background-color: #f9f9f9;
        }

        .profile-section .profile-pic {
            height: 180px;
            width: 180px;
            border-radius: 50%;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            margin-bottom: 10px;
        }

        .profile-section h2 {
            margin: 10px 0;
            color: #333;
        }

        .profile-section p {
            margin: 5px 0;
            color: #777;
        }

        .info-box {
            background-color: #fff;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            text-align: left;
            margin-top: 20px;
        }

        .info-box h3 {
            margin-bottom: 10px;
            color: #333;
        }

        .info-box p {
            color: #555;
        }

        h1 {
            margin-bottom: 20px;
            color: #333;
        }

        .add-button {
            display: inline-block;
            margin-bottom: 20px;
            padding: 10px 20px;
            background-color: #4CAF50;
            color: white;
            text-decoration: none;
            border-radius: 5px;
            cursor: pointer;
        }

        .add-button:hover {
            background-color: #45a049;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            margin-bottom: 40px;
        }

        table, th, td {
            border: 1px solid #ddd;
        }

        th, td {
            padding: 15px;
            text-align: left;
        }

        th {
            background-color: #f2f2f2;
        }

        button {
            background-color: #4CAF50;
            color: white;
            border: none;
            padding: 10px 20px;
            border-radius: 5px;
            cursor: pointer;
            margin-right: 5px;
        }

        button:hover {
            background-color: #45a049;
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
            <h2>Services</h2>
            <button class="add-button" onclick="location.href='adservice.php'">Add Service</button>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Title</th>
                        <th>Description</th>
                        <th>Icon</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
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

                    $sql = "SELECT * FROM services";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td>" . $row["title"] . "</td>
                                <td>" . $row["description"] . "</td>
                                <td><i class='fa " . $row["icon"] . "'></i></td>
                                <td>
                                    <button onclick='location.href=\"editservice.php?id=" . $row["id"] . "\"'>Edit</button>
                                    <button onclick='location.href=\"delservice.php?id=" . $row["id"] . "\"'>Delete</button>
                                </td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='5'>No services found</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
            <h2>Feedback</h2>
            <table>
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Image</th>
                        <th>Comments</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $conn = new mysqli($servername, $username, $password, $dbname);

                    if ($conn->connect_error) {
                        die("Connection failed: " . $conn->connect_error);
                    }

                    $sql = "SELECT * FROM feedback";
                    $result = $conn->query($sql);

                    if ($result->num_rows > 0) {
                        while($row = $result->fetch_assoc()) {
                            echo "<tr>
                                <td>" . $row["id"] . "</td>
                                <td><img src='image/" . $row["image"] . "' alt='" . $row["image"] . "' width='50'></td>
                                <td>" . $row["comments"] . "</td>
                            </tr>";
                        }
                    } else {
                        echo "<tr><td colspan='3'>No feedback found</td></tr>";
                    }

                    $conn->close();
                    ?>
                </tbody>
            </table>
        </div>
    </div>
</body>
</html>
