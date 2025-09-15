<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Page</title>









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
    transition:background 0.3s;
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
                <li><a href="servicea.php">Services</a></li>
                
            </ul>
        </nav>
        <div class="main-content" id="main-content">
            <div class="profile-section">
                <img src="image/33.jpg" alt="Admin Profile" class="profile-pic"> <!-- Replace with your profile picture path -->
                <h2>Name: Kalariya Vidhi</h2>
                <p>My Shop Name: Toy For All Ages</p>
                <div class="info-box">
                    <h3>Additional Information</h3>
                    <p>"Manage and explore all toy details, inventory, and customer interactions seamlessly with our admin panel."</p>
                </div>
            </div>
            <p>Welcome to the admin dashboard. Select a page from the sidebar to manage the content.</p>
            <!-- Add main content here -->
        </div>
    </div>

   
</body>
</html>




















