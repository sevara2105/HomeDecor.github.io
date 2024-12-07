<?php
session_start(); // Start the session to manage the shopping cart

// Check if cart is empty
if (empty($_SESSION['cart'])) {
    echo "<p>Your cart is empty. <a href='index.php'>Continue shopping</a></p>";
} else {
    echo "<h2>Your Shopping Cart</h2>";
    foreach ($_SESSION['cart'] as $id => $product) {
        echo "<p>{$product['name']} - \${$product['price']} x {$product['quantity']}</p>";
    }
    echo "<p><a href='checkout.php' class='w3-button w3-black'>Proceed to Checkout</a></p>";
}
?>
