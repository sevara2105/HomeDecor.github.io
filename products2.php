<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sevara Shodieva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Page 2 - Home Decor & Essentials Store</title>
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
?>

<!-- Navigation Bar -->
<div class="w3-bar w3-white w3-border-bottom">
    <?php foreach ($pages as $link => $title): ?>
        <a href="<?= $link ?>" class="w3-bar-item w3-button"><?= $title ?></a>
    <?php endforeach; ?>
</div>

<!-- Products Section -->
<div class="w3-container w3-padding-64 w3-center">
    <h2>Our Products - Page 2</h2>
    <div class="w3-row">
        <?php
        // Product Data
        $products = [
            ["Luxury curtains.jpeg", "Luxury Curtains", 113, "Elegant curtains for your living room.", 150],
            ["Modern sofa.jpeg", "Modern Sofa", 114, "Comfortable and stylish sofa.", 878],
            ["mirror.jpeg", "Wall Mirror", 115, "Sleek mirror to enhance your room.", 190],
            ["coffeetable.jpeg", "Coffee Table", 116, "Stylish wooden coffee table.", 120],
            ["Wooden Bookshelf.jpeg", "Bookshelf", 117, "Spacious bookshelf to store your books.", 100],
            ["Retrolight.jpeg", "Vintage Lamp", 118, "Retro-style vintage lamp for cozy lighting.", 19],
            ["Dining Chair.jpeg", "Dining Chair", 119, "Comfortable chair perfect for dining rooms.", 80],
            ["King Size Bed.jpeg", "King Size Bed", 120, "Spacious and comfortable king-size bed.", 500],
            ["Throw Blanket.jpeg", "Throw Blanket", 121, "Soft throw blanket for your couch.", 50],
            ["Glass Vase.jpeg", "Glass Vase", 122, "Simple and elegant glass vase for flowers.", 15],
            ["Plant Pot.jpeg", "Plant Pot", 123, "Decorative pot for indoor plants.", 20],
            ["Cozy Blanket.jpeg", "Cozy Blanket", 124, "Soft, comfortable blanket for cold nights.", 35]
        ];

        // Render Products
        foreach ($products as $product): ?>
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

