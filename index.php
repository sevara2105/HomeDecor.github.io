<?php
session_start(); // Start the session to manage the shopping cart
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sevara Shodieva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home Decor & Essentials Store</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
</head>
<body class="w3-light-grey">

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom">
  <a href="index.php" class="w3-bar-item w3-button w3-wide">HOME DECOR STORE</a>
  <a href="about.php" class="w3-bar-item w3-button">About Us</a>
  <a href="contact.php" class="w3-bar-item w3-button">Contact</a>
  <a href="products1.php" class="w3-bar-item w3-button">Products Page 1</a>
  <a href="products2.php" class="w3-bar-item w3-button">Products Page 2</a>
  <a href="products3.php" class="w3-bar-item w3-button">Products Page 3</a>
  <a href="products4.php" class="w3-bar-item w3-button">Products Page 4</a>
  <a href="viewcart.php" class="w3-bar-item w3-button">View Cart</a>
  <a href="checkout.php" class="w3-bar-item w3-button">Checkout</a>
</div>

<!-- Header Section -->
<header class="w3-display-container w3-wide" style="height:300px;">
  <img src="images/placeholder-header.jpg" alt="Home Decor" class="w3-image">
  <div class="w3-display-middle w3-center">
    <h1>Welcome to Our Home Decor & Essentials Store</h1>
    <p>Discover stylish dishes, decorations, and more!</p>
  </div>
</header>

<!-- Featured Products Section -->
<div class="w3-container w3-padding-64 w3-center" id="products">
    <h2>Featured Products</h2>
    <p>Explore our beautiful selection of home decorations and kitchenware.</p>
    <div class="w3-row">
        <!-- Product 1 -->
        <div class="w3-third">
            <img src="vase.jpg" alt="Product 1" style="width:80%">
            <h3>Decorative Vase</h3>
            <p>Price: $50</p>
            <a href="addtocart.php?id=1&name=Decorative+Vase&price=50" class="w3-button w3-black">Add to Cart</a>
        </div>
        <!-- Product 2 -->
        <div class="w3-third">
            <img src="dishes.jpeg" alt="Product 2" style="width:80%">
            <h3>Ceramic Dishes Set</h3>
            <p>Price: $80</p>
            <a href="addtocart.php?id=2&name=Ceramic+Dishes+Set&price=80" class="w3-button w3-black">Add to Cart</a>
        </div>
        <!-- Product 3 -->
        <div class="w3-third">
            <img src="wallart.jpeg" alt="Product 3" style="width:80%">
            <h3>Wall Art Frame</h3>
            <p>Price: $40</p>
            <a href="addtocart.php?id=3&name=Wall+Art+Frame&price=40" class="w3-button w3-black">Add to Cart</a>
        </div>
    </div>
</div>

<!-- Footer Section -->
<footer class="w3-center w3-light-grey w3-padding-32">
    <p>&copy; 2024 Home Decor & Essentials Store. All Rights Reserved.</p>
</footer>

</body>
</html>
