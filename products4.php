<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sevara Shodieva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Products - Page 4 - Home Decor & Essentials Store</title>
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
    ["tier bar .jpeg", "Wine Rack", 137, "Elegant rack for home bars.", 120],
    ["Sleek towel rack.jpeg", "Towel Rack", 138, "Sleek towel rack for bathrooms.", 30],
    ["Multi-functionalstorage.webp", "Storage Bench", 139, "Multi-functional storage bench for entryways.", 340],
    ["bedsidetable.jpeg", "Bedside Table", 140, "Simple bedside table with storage.", 60],
    ["drawer.jpeg", "Storage Drawer", 141, "Organize your items with this stylish drawer.", 50],
    ["comfortable.jpeg", "Footrest", 142, "Comfortable footrest for your couch.", 40],
    ["metalshelf.jpeg", "Shelf Unit", 143, "Stylish metal shelf for home storage.", 80],
    ["rack.jpeg", "Coat Rack", 144, "Stylish rack for your coats and jackets.", 35],
    ["desklamp.jpeg", "Table Lamp", 145, "Elegant lamp for your study or desk.", 60],
    ["vanity.jpeg", "Vanity Desk", 146, "Makeup vanity table.", 20],
    ["tree.jpeg", "Bookshelf Tree", 147, "Bookshelf made from tree rustic floating shelf decorative bookcase home decor.", 550],
    ["walllight.jpeg", "Wall Light", 148, "Classic wall light.", 70]
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
    <h2>Our Products - Page 4</h2>
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

