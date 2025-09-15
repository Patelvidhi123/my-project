<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Our Services</title>
    <link rel="stylesheet" href="service.css">
</head>
<body>
    <main>
        <section class="hero">
            <h1>Our Services</h1>
            <p>We offer a variety of services to ensure you have the best experience with our toys.</p>
        </section>
        
        <section class="service-container">
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
                    echo "<div class='service'>
                        <div class='service-icon'>
                            <i class='fa " . $row["icon"] . "'></i>
                        </div>
                        <h2>" . $row["title"] . "</h2>
                        <p>" . $row["description"] . "</p>
                    </div>";
                }
            } else {
                echo "<p>No services found</p>";
            }

            $conn->close();
            ?>
        </section>
    </main>

    <section class="feedback-section">
        <h2>We Value Your Feedback</h2>
        <div class="feedback-bar">
            <p>Select an image to rate:</p>
            <div class="feedback-images">
                <img src="image/happy.jpg" alt="Happy" data-value="happy" class="feedback-image">
                <img src="image/avrage.jpg" alt="Neutral" data-value="neutral" class="feedback-image">
                <img src="image/bad.jpeg" alt="Sad" data-value="sad" class="feedback-image">
            </div>
            <form class="feedback-form" method="post" action="service.php">
                <input type="hidden" name="image" id="selected-image" value="">
                <textarea name="comments" placeholder="Leave additional comments here..." rows="4" required></textarea>
                <button type="submit">Submit Feedback</button>
            </form>
        </div>
    </section>

    <footer>
        <p>&copy; 2024 Toy Store. All rights reserved.</p>
    </footer>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.0.0-beta3/js/all.min.js"></script>
    <script>
        document.addEventListener('DOMContentLoaded', () => {
            const feedbackImages = document.querySelectorAll('.feedback-image');
            const selectedImageInput = document.getElementById('selected-image');

            feedbackImages.forEach(image => {
                image.addEventListener('click', () => {
                    feedbackImages.forEach(img => img.classList.remove('selected'));
                    image.classList.add('selected');
                    selectedImageInput.value = image.getAttribute('data-value');
                });
            });
        });
    </script>
</body>
</html>
