<?php
// You can add any server-side PHP logic here if needed (e.g., handling form submissions)
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="author" content="Sevara Shodieva">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Contact Us - Home Decor & Essentials Store</title>
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
</div>

<!-- Contact Us Section -->
<div class="w3-container w3-padding-64 w3-center">
    <h1>Contact Us</h1>
    <p>If you have any questions or feedback, feel free to reach out.</p>
    <form class="w3-container w3-card-4 w3-light-grey w3-text-black w3-margin" method="post" action="contact_handler.php">
        <h2 class="w3-center">Leave Us a Message</h2>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-user"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="name" type="text" placeholder="Your Name" required>
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-envelope-o"></i></div>
            <div class="w3-rest">
                <input class="w3-input w3-border" name="email" type="email" placeholder="Your Email" required>
            </div>
        </div>
        <div class="w3-row w3-section">
            <div class="w3-col" style="width:50px"><i class="w3-xxlarge fa fa-comment-o"></i></div>
            <div class="w3-rest">
                <textarea class="w3-input w3-border" name="message" placeholder="Your Message" rows="4" required></textarea>
            </div>
        </div>
        <button class="w3-button w3-block w3-black w3-section" type="submit">Send</button>
    </form>
</div>

<!-- Footer Section -->
<footer class="w3-center w3-light-grey w3-padding-32">
    <p>&copy; 2024 Home Decor & Essentials Store. All Rights Reserved.</p>
</footer>

</body>
</html>
