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
    $status = $_POST['status'];

    $sql = "INSERT INTO t2939 (image, name, price, status) VALUES (?, ?, ?, ?)";
    $stmt = $conn->prepare($sql);
    $stmt->bind_param("ssds", $image, $name, $price, $status);

    if ($stmt->execute()) {
        echo "<script>alert('New record created successfully'); window.location.href = '2939a.php';</script>";
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
        <input type="text" id="image" name="image" required><br>
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br>
        <label for="price">Price:</label><br>
        <input type="text" id="price" name="price" required><br>
        <label for="status">Stock Status:</label><br>
        <select id="status" name="status" required>
            <option value="In Stock">In Stock</option>
            <option value="Out of Stock">Out of Stock</option>
        </select><br><br>
        <input type="submit" value="Add">
    </form>
</body>
</html>
