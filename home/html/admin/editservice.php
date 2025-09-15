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

$id = $_GET['id'] ?? '';

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $title = trim($_POST['title']);
    $description = trim($_POST['description']);
    $icon = trim($_POST['icon']);

    if (!empty($title) && !empty($description) && !empty($icon)) {
        $stmt = $conn->prepare("UPDATE services SET title = ?, description = ?, icon = ? WHERE id = ?");
        $stmt->bind_param("sssi", $title, $description, $icon, $id);

        if ($stmt->execute()) {
            header("Location: servicea.php");
        } else {
            echo "Error: " . $stmt->error;
        }

        $stmt->close();
    } else {
        echo "All fields are required.";
    }
} else {
    $stmt = $conn->prepare("SELECT * FROM services WHERE id = ?");
    $stmt->bind_param("i", $id);
    $stmt->execute();
    $result = $stmt->get_result();
    $service = $result->fetch_assoc();
    $stmt->close();
}

$conn->close();
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Edit Service</title>
</head>
<body>
    <div class="header">
        <h1>Edit Service</h1>
    </div>
    <div class="container">
        <form action="servicea.php?id=<?php echo $id; ?>" method="post">
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" value="<?php echo htmlspecialchars($service['title']); ?>" required>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required><?php echo htmlspecialchars($service['description']); ?></textarea>
            </div>
            <div>
                <label for="icon">Icon (Font Awesome class):</label>
                <input type="text" id="icon" name="icon" value="<?php echo htmlspecialchars($service['icon']); ?>" required>
            </div>
            <button type="submit">Update Service</button>
        </form>
    </div>
</body>
</html>
























<style>
    body {
        font-family: Arial, sans-serif;
        background-color: #f4f4f9;
        margin: 0;
        padding: 0;
        display: flex;
        flex-direction: column;
        align-items: center;
        justify-content: center;
        height: 100vh;
    }
    .header {
        background-color: #4CAF50;
        color: white;
        padding: 20px;
        width: 100%;
        text-align: center;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
    }
    .container {
        background: white;
        padding: 30px;
        border-radius: 8px;
        box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        max-width: 500px;
        width: 100%;
    }
    form div {
        margin-bottom: 15px;
    }
    label {
        display: block;
        margin-bottom: 5px;
        font-weight: bold;
    }
    input[type="text"], textarea {
        width: calc(100% - 22px);
        padding: 10px;
        border: 1px solid #ddd;
        border-radius: 4px;
        font-size: 16px;
        box-sizing: border-box;
    }
    button {
        background-color: #4CAF50;
        color: white;
        padding: 10px 20px;
        border: none;
        border-radius: 4px;
        cursor: pointer;
        font-size: 16px;
    }
    button:hover {
        background-color: #45a049;
    }
    p {
        color: green;
        font-weight: bold;
    }
</style>
