<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sevara Shodieva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Page 1 - Home Decor & Essentials Store</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
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
</div>

<!-- Products Section -->
<div class="w3-container w3-padding-64 w3-center">
    <h2>Our Products - Page 1</h2>
    <div class="w3-row">
        <?php
        $products = [
            ["vase.jpg", "Decorative Vase", 101, "Elegant vase for any space.", 25],
            ["dishes.jpeg", "Ceramic Dishes Set", 102, "Set of 6 ceramic dishes.", 45],
            ["wallart.jpeg", "Wall Art Frame", 103, "Modern art piece for your wall.", 75],
            ["tablecover.jpeg", "Elegant Table Cloth", 104, "Durable and elegant table cloth for dining tables.", 20],
            ["lamp.jpeg", "Stylish Desk Lamp", 105, "Modern desk lamp with adjustable light.", 35],
            ["pillow.jpeg", "Comfortable Cushion", 106, "Soft cushion to add comfort to any seat.", 15],
            ["rug.jpeg", "Area Rug", 107, "Soft and durable area rug.", 225],
            ["wallshelves.jpeg", "Wall Shelves", 108, "Wooden wall shelves to display your items.", 30],
            ["candle.jpeg", "Scented Candle", 109, "Relaxing lavender scented candle.", 10],
            ["clock.jpeg", "Modern Wall Clock", 110, "Stylish wall clock with minimalistic design.", 40],
            ["plant Pot.jpeg", "Indoor Plant", 111, "Fresh indoor plant for your home.", 25],
            ["comfypillow.jpeg", "Throw Pillow", 112, "Cozy pillow for your couch.", 18]
        ];

        foreach ($products as $product) {
            echo '
            <div class="w3-third">
                <img src="' . $product[0] . '" alt="' . $product[1] . '" style="width:80%; height:300px; object-fit:cover;">
                <h3>' . $product[1] . '</h3>
                <p>Product ID: ' . $product[2] . '</p>
                <p>Description: ' . $product[3] . '</p>
                <p>Price: $' . $product[4] . '</p>
                <button class="w3-button w3-black">Add to Cart</button>
            </div>';
        }
        ?>
    </div>
</div>

<!-- Footer Section -->
<footer class="w3-center w3-light-grey w3-padding-32">
    <p>&copy; 2024 Home Decor & Essentials Store. All Rights Reserved.</p>
</footer>

</body>
</html>
