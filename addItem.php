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

    .red-button {
      display: inline-block;
      background-color: #ff0000; /* Red color */
      color: #fff; /* Text color (white) */
      padding: 10px 20px;
      border: none;
      border-radius: 5px;
      cursor: pointer;
      text-decoration: none;
    }

    .red-button:hover {
      background-color: #cc0000; /* Darker red color on hover */
    }
    
    </style>
  </head>
<body>
  <header>
    <h1>Sizzler Restaurant</h1>
  </header>

  <nav>
    <a href="home.php">Home</a>
    <a href="#menu">Cart</a>
  </nav>

  <div class="gallery">
    <?php

session_start();

if (!isset($_SESSION['email'])) {
  header("Location: login.php");
  exit();
}


if (isset($_GET['food'])) {
    // Retrieve the value of 'category' from the URL
    $food = $_GET['food'];
}
// Connect to the database (replace with your database credentials)
$conn = mysqli_connect("localhost", "root", "", "software_project");


// Check connection
if (!$conn) {
  die("Connection failed: " . mysqli_connect_error());
}
$sql = 'SELECT * FROM food WHERE Name = "'.$food.'"';
$result = mysqli_query($conn, $sql);

// Display menu items
while ($row = mysqli_fetch_assoc($result)) {
  echo '<div class="container">';
  echo '<div class="description">';
  echo '<h2>'.$row['Description'].'</h2>';
  echo '<h3>Price= '.$row['Price'].'</h3>';
  echo '</div>';
  echo '<div class="gallery-item">';
  echo '<img src="' . $row['Image'] . '" alt="' . $row['Name'] . '">';
  echo '</div>';
  $buttonText = "Add to Cart";
  $foodName=$row['Name'];
  $foodPrice=$row['Price'];
  echo '<div class="red-button">';
  echo '<form action="" method="POST">';
  echo '<button type="submit" name="addData">Add to Cart</button>';
  echo '</form>';
  echo '</div>';
  if(isset($_POST['addData'])) {

    $newItem = array(
        'name' => $foodName,
        'price' => $foodPrice
    );
  
    if(isset($_SESSION['cart'])) {
        array_push($_SESSION['cart'], $newItem);
    } else {
        $_SESSION['cart'] = array($newItem);
    }
    
    header("Location: cart.php");
    exit();
}
}





// Close the database connection
mysqli_close($conn);


?>

<div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>

</body>