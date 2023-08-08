<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}

if (!isset($_SESSION['cart']) || empty($_SESSION['cart'])) {
    header("Location: cart.php");
    exit();
}

// Replace these with your actual database credentials


// Create a connection to the database
$conn =mysqli_connect("localhost","root","","software_project");

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$customeremail = $_SESSION['email'];
$totalPrice = $_SESSION['total_price'];
$payment="visa";

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