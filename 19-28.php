<?php
$servername = "localhost";
$username = "root"; // change if your database username is different
$password = ""; // change if your database password is different
$dbname = "inter6";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT image, name, price, stock_status FROM t1928";
$result = $conn->query($sql);

$toys = array();
if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        $toys[] = $row;
    }
} else {
    echo "0 results";
}
$conn->close();
?>

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
        <?php foreach($toys as $toy): ?>
        <div class="toy-item">
            <img src="<?php echo $toy['image']; ?>" alt="<?php echo $toy['name']; ?>">
            <p><?php echo $toy['price']; ?></p>
            <p><?php echo $toy['stock_status']; ?></p>
            <?php if($toy['stock_status'] === 'In Stock'): ?>
            <button class="buy-btn" onclick="buyItem('<?php echo $toy['image']; ?>', '<?php echo $toy['name']; ?>', '<?php echo $toy['price']; ?>')">Buy</button>
            <button class="wishlist-btn" onclick="addToWishlist('<?php echo $toy['image']; ?>', '<?php echo $toy['name']; ?>', '<?php echo $toy['price']; ?>')">Wishlist</button>
            <?php else: ?>
            <button class="buy-btn" disabled>Out of Stock</button>
            <?php endif; ?>
        </div>
        <?php endforeach; ?>
    </div>
</div>
</section>
</body>
</html>
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
