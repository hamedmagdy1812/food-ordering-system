<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Home Page</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      margin: 0;
      padding: 0;
    }

    header {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }
    .contact-bar {
      background-color: #333;
      color: #fff;
      padding: 10px;
      text-align: center;
    }

    nav {
      background-color: #444;
      padding: 10px;
      text-align: center;
    }

    nav a {
      color: #fff;
      text-decoration: none;
      padding: 10px;
    }

    nav a:hover {
      background-color: #555;
      border-radius: 5px;
    }

    .gallery {
      display: flex;
      flex-wrap: wrap;
      justify-content: center;
    }

    .gallery-item {
      margin: 10px;
      position: relative;
      overflow: hidden;
      cursor: pointer;
      transition: transform 0.3s ease-in-out;
    }

    .gallery-item img {
      width: 350px;
      height: 350px;
      object-fit: cover;
    }

    .gallery-item .overlay {
      position: absolute;
      top: 0;
      left: 0;
      width: 100%;
      height: 100%;
      background-color: rgba(0, 0, 0, 0.5);
      color: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
      opacity: 0;
      transition: opacity 0.3s ease-in-out;
    }

    .gallery-item:hover {
      transform: scale(1.1);
    }

    .gallery-item:hover .overlay {
      opacity: 1;
    }
  </style>
</head>
<?php
session_start();
?>
<body>
  <header>
    <h1>Sizzler Restaurant</h1>
  </header>

  <nav>
    <a href="#home">Home</a>
    <a href="cart.php">Cart</a>
  </nav>

  <div class="gallery">
    <div class="gallery-item">
      <a href="menu.php?category=Beef">
      <img src="images/beef.jpg" alt="Image 1">
      <div class="overlay">
        <p>Beef</p>
      </div>
    </a>
    </div>
    <div class="gallery-item">
      <a href="menu.php?category=Chicken">
      <img src="images/chicken.png" alt="Image 2">
      <div class="overlay">
        <p>chicken</p>
      </div>
    </a>
    </div>
    <div class="gallery-item">
      <a href="menu.php?category=Pasta">
        <img src="images/pasta.jpg" alt="Image 2">
        <div class="overlay">
          <p>Pasta</p>
        </div>
      </a>
    </div>
    <div class="gallery-item">
      <a href="menu.php?category=Appetizers">
      <img src="images/appetizers.png" alt="Image 2">
      <div class="overlay">
        <p>Appetizers</p>
      </div>
    </a>
    </div>
    <div class="gallery-item">
      <a href="menu.php?category=Pizza">
      <img src="images/pizza.jpg" alt="Image 2">
      <div class="overlay">
        <p>Pizza</p>
      </div>
    </a>
    </div>
    <div class="gallery-item">
      <a href="menu.php?category=Sandwiches">
      <img src="images/sandwiches.jpg" alt="Image 2">
      <div class="overlay">
        <p>Sandwiches</p>
      </div>
      </a>
    </div>
    <div class="gallery-item">
      <a href="menu.php?category=Drinks">
      <img src="images/drinks.png" alt="Image 2">
      <div class="overlay">
        <p>Drinks</p>
      </div>
    </a>
    </div>
    <div class="gallery-item">
      <a href="menu.php?category=Dessert">
      <img src="images/dessert.jpg" alt="Image 2">
      <div class="overlay">
        <p>Dessert</p>
      </div>
    </a>
    </div>
  </div>
  <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>


</body>
</html>
