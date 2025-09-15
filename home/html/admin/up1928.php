<?php
$cn = mysqli_connect("localhost", "root", "", "inter6");
if (!$cn) {
    die("Connection failed: " . mysqli_connect_error());
}

if (isset($_GET['id'])) {
    $id = intval($_GET['id']);

    if (isset($_POST['update'])) {
        $name = mysqli_real_escape_string($cn, $_POST['name']);
        $price = mysqli_real_escape_string($cn, $_POST['price']);
        $imagePath = '';
        $uploadDir = 'image/';

        // Create the uploads directory if it doesn't exist
        if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
            die("Failed to create directory: $uploadDir");
        }

        // Check if a file was uploaded
        if ($_FILES['image']['error'] == UPLOAD_ERR_OK) {
            $imageTmpName = $_FILES['image']['tmp_name'];
            $imageName = basename($_FILES['image']['name']);
            $imagePath = $uploadDir . $imageName;

            // Validate file type (e.g., allow only images)
            $allowedTypes = ['image/jpeg', 'image/png'];
            if (in_array($_FILES['image']['type'], $allowedTypes)) {
                // Move the uploaded file to the desired directory
                if (move_uploaded_file($imageTmpName, $imagePath)) {
                    $imagePath = mysqli_real_escape_string($cn, $imagePath);
                    $query = "UPDATE `t1928` SET name=?, image=?, price=? WHERE id=?";
                    $stmt = mysqli_prepare($cn, $query);
                    mysqli_stmt_bind_param($stmt, 'sssi', $name, $imagePath, $price, $id);
                } else {
                    echo "<script>alert('Error uploading image');</script>";
                }
            } else {
                echo "<script>alert('Invalid file type');</script>";
            }
        } else {
            // No file uploaded, update other fields only
            $query = "UPDATE `t1928` SET name=?, price=? WHERE id=?";
            $stmt = mysqli_prepare($cn, $query);
            mysqli_stmt_bind_param($stmt, 'ssi', $name, $price, $id);
        }

        if (mysqli_stmt_execute($stmt)) {
            echo "<script>alert('Toy updated successfully'); window.location.href='1419a.php';</script>";
        } else {
            echo "<script>alert('Error updating toy');</script>";
        }
    }

    $query = "SELECT * FROM `t1928` WHERE id=?";
    $stmt = mysqli_prepare($cn, $query);
    mysqli_stmt_bind_param($stmt, 'i', $id);
    mysqli_stmt_execute($stmt);
    $result = mysqli_stmt_get_result($stmt);
    $toy = mysqli_fetch_assoc($result);

    if (!$toy) {
        echo "Toy not found.";
        exit;
    }
}

mysqli_close($cn);
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Update Toy</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f4f4f4;
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            margin: 0;
        }
        .container {
            background-color: #fff;
            border-radius: 10px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
            padding: 20px;
            width: 300px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        label {
            display: block;
            margin-bottom: 8px;
            color: #333;
        }
        input[type="text"], input[type="file"] {
            width: 80%;
            padding: 10px;
            margin-bottom: 10px;
            border: 1px solid #ccc;
            border-radius: 5px;
        }
        button {
            width: 50%;
            padding: 10px;
            background-color: #28a745;
            border: none;
            border-radius: 5px;
            color: #fff;
            font-size: 16px;
            cursor: pointer;
            margin-left: 64px;
        }
        button:hover {
            background-color: #218838;
        }
        .back-link {
            display: block;
            text-align: center;
            margin-top: 10px;
            color: #007bff;
            text-decoration: none;
        }
        .back-link:hover {
            text-decoration: underline;
        }
    </style>
</head>
<body>
    <div class="container">
        <h2>Update Toy</h2>
        <form method="post" enctype="multipart/form-data">
            <label>Name:</label>
            <input type="text" name="name" value="<?php echo htmlspecialchars($toy['name']); ?>">
            <label>Image:</label>
            <input type="file" name="image">
            <label>Price:</label>
            <input type="text" name="price" value="<?php echo htmlspecialchars($toy['price']); ?>">
            <button type="submit" name="update">Update</button>
        </form>
        <a class="back-link" href="1928a.php">Back to List</a>
    </div>
</body>
</html>
