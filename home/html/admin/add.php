<!DOCTYPE html>
<html lang="en">
<head> 
    <meta charset="UTF-8">
    <title>Add Toy</title>
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
            margin-left:64px;
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
        <h2>Add Toy</h2>
        <form method="post" enctype="multipart/form-data">
            <label>Name:</label>
            <input type="text" name="name">
            <label>Image:</label>
            <input type="file" name="image">
            <label>Price:</label>
            <input type="text" name="price">
            <button type="submit" name="add">Add</button>
        </form>
        <a class="back-link" href="0-6a.php">Back to List</a>
    </div>
</body>
</html>

<?php
if (isset($_POST['add'])) {
    $name = $_POST['name'];
    $price = $_POST['price'];
    $uploadDir = 'image/';

    // Create the uploads directory if it doesn't exist
    if (!is_dir($uploadDir) && !mkdir($uploadDir, 0755, true)) {
        die("Failed to create directory: $uploadDir");
    }

    // Check if a file was uploaded
    if (isset($_FILES['image']) && $_FILES['image']['error'] == 0) {
        // File upload handling
        $target_file = $uploadDir . basename($_FILES["image"]["name"]);
        $uploadOk = 1;
        $imageFileType = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));

        // Check if file is an actual image or fake image
        $check = getimagesize($_FILES["image"]["tmp_name"]);
        if ($check !== false) {
            $uploadOk = 1;
        } else {
            echo "<script>alert('File is not an image.');</script>";
            $uploadOk = 0;
        }

        // Check file size (5MB maximum)
        if ($_FILES["image"]["size"] > 5000000) {
            echo "<script>alert('Sorry, your file is too large.');</script>";
            $uploadOk = 0;
        }

        // Allow certain file formats
        if ($imageFileType != "jpg" && $imageFileType != "png" && $imageFileType != "jpeg" && $imageFileType != "gif") {
            echo "<script>alert('Sorry, only JPG, JPEG, PNG & GIF files are allowed.');</script>";
            $uploadOk = 0;
        }

        // Check if $uploadOk is set to 0 by an error
        if ($uploadOk == 0) {
            echo "<script>alert('Sorry, your file was not uploaded.');</script>";
        // if everything is ok, try to upload file
        } else {
            if (move_uploaded_file($_FILES["image"]["tmp_name"], $target_file)) {
                $image = basename($_FILES["image"]["name"]); // Just the file name
                
                $cn = mysqli_connect("localhost", "root", "", "inter6");
                if (!$cn) {
                    die("Connection failed: " . mysqli_connect_error());
                }
                
                $query = "INSERT INTO toys (name, image, price, status) VALUES ('$name', '$image', '$price', 'In Stock')";
                if (mysqli_query($cn, $query)) {
                    echo "<script>alert('Toy added successfully'); window.location.href='0-6a.php';</script>";
                } else {
                    echo "<script>alert('Error adding toy');</script>";
                }
                
                mysqli_close($cn); 
            } else {
                echo "<script>alert('Sorry, there was an error uploading your file.');</script>";
            }
        }
    } else {
        echo "<script>alert('Please select an image file to upload.');</script>";
    }
}
?>
 