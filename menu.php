<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Menu Page</title>
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
<body>
  <header>
    <h1>Sizzler Restaurant</h1>
  </header>

  <nav>
    <a href="home.php">Home</a>
    <a href="cart.php">Cart</a>
  </nav>

  <div class="gallery">
    <?php
        session_start();

        if (!isset($_SESSION['email'])) {
          header("Location: login.php");
          exit();
      }

        $category="";
        if (isset($_GET['category'])) {
            // Retrieve the value of 'category' from the URL
            $category = $_GET['category'];
        }
        


      // Connect to the database (replace with your database credentials)
      $conn = mysqli_connect("localhost", "root", "", "software_project");

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }

      // Fetch menu items from the database
      
      $sql="";

      if ($category=="Pasta"){
        $sql = "SELECT * FROM food WHERE type = 'Pasta'";
      }
      if ($category=="Beef"){
        $sql = "SELECT * FROM food WHERE type = 'Beef'";
      }
      if ($category=="Chicken"){
        $sql = "SELECT * FROM food WHERE type = 'Chicken'";
      }
      if ($category=="Appetizers"){
        $sql = "SELECT * FROM food WHERE type = 'Appetizers'";
      }
      if ($category=="Pizza"){
        $sql = "SELECT * FROM food WHERE type = 'Pizza'";
      }
      if ($category=="Sandwiches"){
        $sql = "SELECT * FROM food WHERE type = 'Sandwiches'";
      }
      if ($category=="Drinks"){
        $sql = "SELECT * FROM food WHERE type = 'Drinks'";
      }
      if ($category=="Dessert"){
        $sql = "SELECT * FROM food WHERE type = 'Dessert'";
      }

      //$sql = "SELECT * FROM food WHERE type = 'Pasta'";
      $result = mysqli_query($conn, $sql);

      // Display menu items
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<div class="gallery-item">';
        echo '<a href="addItem.php?food=' . $row['Name'] . '">';
        echo '<img src="' . $row['Image'] . '" alt="' . $row['Name'] . '">';
        echo '<div class="overlay">';
        echo '<p>' . $row['Name']  . '</p>';
        echo '</div>';
        echo '</a>';
        echo '</div>';
      }

      // Close the database connection
      mysqli_close($conn);
    ?>
  </div>

  <!-- Add the contact bar at the end of the page -->
  <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>

  <script>
    // Add any JavaScript if needed
  </script>
</body>
</html>
