<?php
// add.php

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

// Handle form submission for adding a new product
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock_status = $_POST['stock_status'];
    $image = $_FILES['image']['name'];

    // Move the uploaded file to the desired directory
    move_uploaded_file($_FILES['image']['tmp_name'], 'images/' . $image);

    $sql = "INSERT INTO `t1419` (name, price, image, stock_status) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("sssd", $name, $price, $image, $stock_status);

    if ($stmt->execute()) {
        echo "Product added successfully!";
    } else {
        echo "Error adding product: " . $stmt->error;
    }
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add Product</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        form { display: flex; flex-direction: column; }
        input, select, button { margin: 10px 0; padding: 10px; font-size: 16px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New Product</h1>
        <form method="post" enctype="multipart/form-data">
            <label for="name">Name:</label>
            <input type="text" id="name" name="name" required>

            <label for="price">Price:</label>
            <input type="text" id="price" name="price" required>

            <label for="stock_status">Stock Status:</label>
            <select id="stock_status" name="stock_status" required>
                <option value="In Stock">In Stock</option>
                <option value="Out of Stock">Out of Stock</option>
            </select>

            <label for="image">Image:</label>
            <input type="file" id="image" name="image" required>

            <button type="submit">Add Product</button>
        </form>
    </div>
</body>
</html> 
