<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Toys for 14-19 Years</title>
    <link rel="stylesheet" type="text/css" href="14-19.css">
    <style>
        .out-of-stock {
            color: red;
            font-weight: bold;
        }
        /* Add any additional CSS styling here */
    </style>
</head>
<body>

<section>
<div class="container">
    <h2>Toys for 14-19 Years</h2>
    <div class="toy-grid">
        <?php
        // Connect to the database
        $cn = mysqli_connect("localhost", "root", "", "inter6");
        if (!$cn) {
            die("Connection failed: " . mysqli_connect_error());
        }
 
        // Fetch toys from the database
        $result = mysqli_query($cn, "SELECT * FROM `t1419`");
        if (mysqli_num_rows($result) > 0) {
            while ($row = mysqli_fetch_assoc($result)) {
                echo '<div class="toy-item">';
                echo '<img src="' . htmlspecialchars($row['image']) . '" alt="' . htmlspecialchars($row['name']) . '">';
                echo '<p>$' . htmlspecialchars($row['price']) . '</p>';
                if ($row['stock_status'] == 'Out of Stock') {
                    echo '<p class="out-of-stock">Out of Stock</p>';
                } else {
                    echo '<button class="buy-btn" onclick="buyItem(\'' . htmlspecialchars($row['image']) . '\',\'' . htmlspecialchars($row['name']) . '\',\'$' . htmlspecialchars($row['price']) . '\')">Buy</button>';
                    echo '<button class="wishlist-btn" onclick="addToWishlist(\'' . htmlspecialchars($row['image']) . '\',\'' . htmlspecialchars($row['name']) . '\',\'$' . htmlspecialchars($row['price']) . '\')">Wishlist</button>';
                }
                echo '</div>';
            }
        } else {
            echo '<p>No toys available.</p>';
        }

        // Close the database connection
        mysqli_close($cn);
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
