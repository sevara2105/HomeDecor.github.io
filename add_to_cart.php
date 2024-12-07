<?php
session_start(); // Start the session to manage the shopping cart

if (isset($_GET['id'], $_GET['name'], $_GET['price'])) {
    // Get product details from URL
    $product_id = $_GET['id'];
    $product_name = $_GET['name'];
    $product_price = $_GET['price'];

    // Add the product to the session cart
    $_SESSION['cart'][$product_id] = [
        'name' => $product_name,
        'price' => $product_price,
        'quantity' => isset($_SESSION['cart'][$product_id]) ? $_SESSION['cart'][$product_id]['quantity'] + 1 : 1
    ];

    // Redirect to the cart page
    header('Location: viewcart.php');
    exit;
}
?>
