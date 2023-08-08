<!DOCTYPE html>
<html lang="en">
  <style>
body {
  font-family: Arial, sans-serif;
  margin: 0;
  padding: 0;
  background-color: #f1f1f1;
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

h2 {
  text-align: center;
  margin: 20px 0;
}
</style>
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
$conn =mysqli_connect("localhost","root","","software_project");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$customeremail = $_SESSION['email'];
$totalPrice = $_SESSION['total_price'];
$payment="cash";

$foodName='';
foreach ($_SESSION['cart'] as $item) {
    $foodName = $foodName."  ".$item['name']; 
}

echo $customeremail;
echo $totalPrice;
echo $payment;
echo $foodName;
    
$query= "INSERT INTO `order` (`customer_email`, `items`, `total_amount`, `payment`) 
VALUES ('$customeremail', '$foodName', '$totalPrice', '$payment')";

if($conn->query($query))
{
    echo "added succesfully";
}
$conn->close();
unset($_SESSION['cart']); // Clear the cart after checkout


?>
?>

<body>

<header>
    <h1>Sizzler Restaurant</h1>
  </header>

  <nav>
    <a href="home.php">Home</a>
  </nav>

  <h2>Order Successful :) </h2>

  <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>
</body>
</html>
