<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys for 29-39 Years</title>
    <link rel="stylesheet" type="text/css" href="29-29.css">
</head>
<body>
    <section>
        <div class="container">
            <h2>Toys for 29-39 Years</h2>
            <div class="toy-grid">
                <?php
                // Database connection
                $conn = new mysqli('localhost', 'root', '', 'inter6');
                if ($conn->connect_error) {
                    die("Connection failed: " . $conn->connect_error);
                }

                // Fetch data from t2939 table
                $sql = "SELECT * FROM t2939";
                $result = $conn->query($sql);

                if ($result->num_rows > 0) {
                    while($row = $result->fetch_assoc()) {
                        echo '<div class="toy-item">';
                        echo '<img src="' . $row['image'] . '" alt="' . $row['name'] . '">';
                        echo '<p>$' . $row['price'] . '</p>';
                        echo '<p>Status: ' . $row['status'] . '</p>';
                        if ($row['status'] == 'In Stock') {
                            echo '<button class="buy-btn" onclick="buyItem(\'' . $row['image'] . '\',\'' . $row['name'] . '\',\'' . $row['price'] . '\')">Buy</button>';
                            echo '<button class="wishlist-btn" onclick="addToWishlist(\'' . $row['image'] . '\',\'' . $row['name'] . '\',\'' . $row['price'] . '\')">Wishlist</button>';
                        } else {
                            echo '<button class="buy-btn" disabled>Out of Stock</button>';
                        }
                        echo '</div>';
                    }
                } else {
                    echo "No toys available for this age group.";
                }

                $conn->close();
                ?>
            </div>
        </div>
    </section>

    <script>
        function buyItem(image, name, price) {
            location.href = `buy.html?image=${encodeURIComponent(image)}&name=${encodeURIComponent(name)}&price=${encodeURIComponent(price)}`;
        }

        function addToWishlist(image, name, price) {
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            wishlist.push({ image, name, price });
            localStorage.setItem('wishlist', JSON.stringify(wishlist));
            alert('Wishlist updated successfully!');
        }

        function showWishlist() {
            let wishlist = JSON.parse(localStorage.getItem('wishlist')) || [];
            let wishlistDiv = document.getElementById('wishlist');
            wishlistDiv.innerHTML = '';

            wishlist.forEach(item => {
                wishlistDiv.innerHTML += `
                    <div class="toy-item">
                        <img src="${item.image}" alt="${item.name}">
                        <p>${item.name}</p>
                        <p>${item.price}</p>
                    </div>
                `;
            });
        }
    </script>
</body>
</html>
