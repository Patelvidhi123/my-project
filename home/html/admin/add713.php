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

// Handle form submission for adding a new product
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock_status = $_POST['stock_status'];

    // Handle file upload
    if (!empty($_FILES['image']['name'])) {
        $target_dir = "uploads/";
        $target_file = $target_dir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if image file is an actual image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check === false) {
            echo "File is not an image.";
            $uploadOk = 0;
        }

        // Check file size (5MB max)
        if ($_FILES["image"]["size"] > 5000000) {
            echo "Sorry, your file is too large.";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "Sorry, only JPG, JPEG, PNG & GIF files are allowed.";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "Sorry, your file was not uploaded.";
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image_path = basename($_FILES["image"]["name"]);
            } else {
                echo "Sorry, there was an error uploading your file.";
                $image_path = ""; // Keep empty if upload fails
            }
        }
    } else {
        $image_path = ""; // Handle case where no image is uploaded
    }

    // Insert new product into the database
    $sql = "INSERT INTO `713` (name, price, stock_status, image) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssss", $name, $price, $stock_status, $image_path);

    if ($stmt->execute()) {
        echo "New product added successfully!";
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
    <title>Add New Product</title>
    <style>
        body { font-family: Arial, sans-serif; }
        .container { max-width: 600px; margin: 0 auto; padding: 20px; }
        form { display: flex; flex-direction: column; }
        input, select, button { margin: 10px 0; padding: 10px; font-size: 16px; }
        .form-group { margin-bottom: 15px; }
        .form-group label { display: block; margin-bottom: 5px; }
    </style>
</head>
<body>
    <div class="container">
        <h1>Add New Product</h1>
        <form method="post" enctype="multipart/form-data">
            <div class="form-group">
                <label for="name">Name:</label>
                <input type="text" id="name" name="name" required>
            </div>

            <div class="form-group">
                <label for="price">Price:</label>
                <input type="text" id="price" name="price" required>
            </div>

            <div class="form-group">
                <label for="stock_status">Stock Status:</label>
                <select id="stock_status" name="stock_status" required>
                    <option value="In Stock">In Stock</option>
                    <option value="Out of Stock">Out of Stock</option>
                </select>
            </div>

            <div class="form-group">
                <label for="image">Image:</label>
                <input type="file" id="image" name="image">
            </div>

            <button type="submit">Add Product</button>
        </form>
    </div>
</body>
</html>
