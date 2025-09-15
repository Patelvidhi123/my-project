<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "inter6";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $image = $_POST['image'];
    $name = $_POST['name'];
    $price = $_POST['price'];
    $stock_status = $_POST['stock_status'];

    $sql = "INSERT INTO t1928 (image, name, price, stock_status) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssds", $image, $name, $price, $stock_status);

    if ($stmt->execute()) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $stmt->close();
}
$conn->close();
?>

<!DOCTYPE html>
<html>
<head>
    <title>Add New Toy</title>
</head>
<body>
    <h2>Add New Toy</h2>
    <form method="post" action="">
        <label for="image">Image URL:</label><br>
        <input type="text" id="image" name="image"><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name"><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price"><br>
        <label for="stock_status">Stock Status:</label><br>
        <select id="stock_status" name="stock_status">
            <option value="In Stock">In Stock</option>
            <option value="Out of Stock">Out of Stock</option>
        </select><br><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
