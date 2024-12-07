<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sevara Shodieva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Page 3 - Home Decor & Essentials Store</title>
    <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
</head>
<body class="w3-light-grey">

<?php
// Navigation Links
$pages = [
    "index.html" => "HOME DECOR STORE",
    "about.html" => "About Us",
    "contact.html" => "Contact",
    "products1.html" => "Products Page 1",
    "products2.html" => "Products Page 2",
    "products3.html" => "Products Page 3",
    "products4.html" => "Products Page 4"
];

// Product Data
$products = [
    ["Side Table.jpeg", "Side Table", 125, "Compact side table for any room.", 45],
    ["Storage Ottoman.jpeg", "Storage Ottoman", 126, "Ottoman with hidden storage.", 160],
    ["Wooden Wardrobe.jpeg", "Wooden Wardrobe", 127, "Spacious wooden wardrobe for your clothes.", 967],
    ["Dining Table.jpeg", "Dining Table", 128, "Wooden dining table set for family meals.", 300],
    ["Decorative Jar.jpeg", "Decorative Jar", 129, "Beautiful jar to enhance your decor.", 35],
    ["deck chair.jpeg", "Deck Chair", 130, "Comfortable deck chair for outdoor relaxation.", 190],
    ["Stylish storage basket for organizing items..jpeg", "Storage Basket", 131, "Stylish storage basket for organizing items.", 15],
    ["Comfortable Armchair.jpeg", "Comfortable Armchair", 132, "Cozy armchair for your living room.", 180],
    ["Picture Frame.jpeg", "Picture Frame", 133, "Elegant frame to display your photos.", 25],
    ["Antique Clock.jpeg", "Antique Clock", 134, "Vintage-style antique clock for your home.", 65],
    ["desk.jpeg", "Vintage Desk", 135, "Classic desk for home offices.", 200],
    ["Storage Cabinet.jpeg", "Storage Cabinet", 136, "Spacious storage cabinet for your home.", 150]
];
?>

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom">
    <?php foreach ($pages as $link => $title): ?>
        <a href="<?= $link ?>" class="w3-bar-item w3-button"><?= $title ?></a>
    <?php endforeach; ?>
</div>

<!-- Products Section -->
<div class="w3-container w3-padding-64 w3-center">
    <h2>Our Products - Page 3</h2>
    <div class="w3-row">
        <?php foreach ($products as $product): ?>
            <div class="w3-third">
                <img src="<?= $product[0] ?>" alt="<?= $product[1] ?>" style="width:80%; height:300px; object-fit:cover;">
                <h3><?= $product[1] ?></h3>
                <p>Product ID: <?= $product[2] ?></p>
                <p>Description: <?= $product[3] ?></p>
                <p>Price: $<?= $product[4] ?></p>
                <button class="w3-button w3-black">Add to Cart</button>
            </div>
        <?php endforeach; ?>
    </div>
</div>

<!-- Footer Section -->
<footer class="w3-center w3-light-grey w3-padding-32">
    <p>&copy; <?= date("Y") ?> Home Decor & Essentials Store. All Rights Reserved.</p>
</footer>

</body>
</html>

