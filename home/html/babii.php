<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title> toys</title>
    <link rel="stylesheet" type="text/css" href="19-28.css">
</head>
<body>


<section>
<div class="container">
    <h2>NERF Toys</h2>
    <div class="toy-grid">
        <div class="toy-item">
            <img src="image/bb1.jpg" alt="Toy 1">
            <p>$10</p>
             <button class="buy-btn" onclick="buyItem('image/bb1.jpg','Toy 1','$10')">Buy</button>
            <button class="wishlist-btn" onclick="addToWishlist('image/bb1.jpg','Toy 1','$10')">Wishlist</button>

        </div>
        <div class="toy-item">
            <img src="image/bb2.jpeg" alt="Toy 2">
            <p>$15</p>
             <button class="buy-btn" onclick="buyItem('image/bb2.jpeg','Toy 2','$15')">Buy</button>
            <button class="wishlist-btn" onclick="addToWishlist('image/bb2.jpeg','Toy 2','$15')">Wishlist</button>

        </div>
        <div class="toy-item">
            <img src="image/bb3.jpg" alt="Toy 3">
            <p>$20</p>
             <button class="buy-btn" onclick="buyItem('image/bb3.jpg','Toy 3','$20')">Buy</button>
            <button class="wishlist-btn" onclick="addToWishlist('image/bb3.jpg','Toy 3','$20')">Wishlist</button>

        </div>
    </div>
</div>
<section>



    <section>
        <div class="container">
            <div class="toy-grid">
                <div class="toy-item">
                    <img src="image/bb4.jpg" alt="Toy 1">
                    <p>$10</p>
                     <button class="buy-btn" onclick="buyItem('image/bb4.jpg','Toy 1','$10')">Buy</button>
                    <button class="wishlist-btn" onclick="addToWishlist('image/bb4.jpg','Toy 1','$10')">Wishlist</button>

                </div>
                <div class="toy-item">
                    <img src="image/bb5.jpeg" alt="Toy 2">
                    <p>$15</p>
                     <button class="buy-btn" onclick="buyItem('image/bb5.jpeg','Toy 2','$15')">Buy</button>
                    <button class="wishlist-btn" onclick="addToWishlist('image/bb5.jpeg','Toy 2','$15')">Wishlist</button>

</div>
            </div>
        </div>
        <section>
    

           








</body>
</html>


















<style>



body {
    font-family: Arial, sans-serif;
    margin: 0;
    padding: 0;
    background-size: cover;
}

.container {
    padding: 20px;
    text-align: center;
}

.toy-grid {
    display: flex;
    justify-content: space-around;
    flex-wrap: wrap;
}

.toy-item {
    border: 1px solid #ddd;
    padding: 20px;
    margin: 10px;
    text-align: center;
    width: 200px;
    box-shadow: 0 2px 4px rgba(0,0,0,0.1);
    transition: transform 0.3s ease, box-shadow 0.3s ease;
}

.toy-item:hover {
    transform: rotate(5deg);
    box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
}

.toy-item img {
    max-width: 100%;
    height: auto;
}

.toy-item p {
    font-size: 16px;
    margin: 10px 0;
}

.buy-btn, .wishlist-btn {
    padding: 10px 20px;
    margin: 5px;
    border: none;
    border-radius: 5px;
    cursor: pointer;
}

.buy-btn {
    background-color: #28a745;
    color: white;
}

.wishlist-btn {
    background-color: #ff851b;
    color: white;
}

.buy-btn:hover, .wishlist-btn:hover {
    opacity: 0.8;
}
</style>























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
