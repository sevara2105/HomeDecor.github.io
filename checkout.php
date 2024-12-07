<?php
session_start(); // Start the session to manage the shopping cart

// If the form is submitted, process the order
if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Order is processed here
    $customer_name = $_POST['name'];
    $customer_email = $_POST['email'];

    // For simplicity, let's simulate sending an email (real-world projects would use a mail library)
    $subject = "Order Confirmation";
    $message = "Thank you for your order, {$customer_name}!\n\nYour items:\n";

    foreach ($_SESSION['cart'] as $product) {
        $message .= "{$product['name']} - \${$product['price']} x {$product['quantity']}\n";
    }

    mail($customer_email, $subject, $message);
    
    // Clear the cart
    unset($_SESSION['cart']);
    
    // Redirect to the thank you page
    header('Location: thank_you.php');
    exit;
}
?>

<form method="POST" action="checkout.php">
    <label for="name">Name:</label>
    <input type="text" id="name" name="name" required><br><br>
    
    <label for="email">Email:</label>
    <input type="email" id="email" name="email" required><br><br>

    <input type="submit" value="Place Order" class="w3-button w3-black">
</form>
