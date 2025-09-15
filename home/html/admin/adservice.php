<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Add Service</title>
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
</head>
<body>
    <div class="header">
        <h1>Add New Service</h1>
    </div>
    <div class="container">
        <form action="servicea.php" method="post">
            <div>
                <label for="title">Title:</label>
                <input type="text" id="title" name="title" required>
            </div>
            <div>
                <label for="description">Description:</label>
                <textarea id="description" name="description" rows="4" required></textarea>
            </div>
            <div>
                <label for="icon">Icon (Font Awesome class):</label>
                <input type="text" id="icon" name="icon" required>
            </div>
            <button type="submit">Add Service</button>
        </form>
    </div>
    <?php
    if (isset($_POST['success'])) {
        echo "<p>Service added successfully!</p>";
    }
    ?>
</body>
</html>
