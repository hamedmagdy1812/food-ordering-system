<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Table with Buttons</title>
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

table {
  width: 100%;
  border-collapse: collapse;
}

th, td {
  padding: 10px;
  text-align: left;
  border-bottom: 1px solid #ddd;
}

tr:hover {
  background-color: #f2f2f2;
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
 

  </style>

<body>

<header>
    <h1>Sizzler Restaurant</h1>
  </header>

  <nav>
    <a href="home.php">Home</a>
  </nav>
</body>

<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Cart Page</title>
</head>
<body>
    <h2>Your Cart</h2>
    <table border="1">
        <tr>
            <th>Item</th>
            <th>Price</th>
        </tr>
        <?php
        $totalPrice = 0;

        if(isset($_SESSION['cart']) && !empty($_SESSION['cart'])) {
            foreach ($_SESSION['cart'] as $item) {
                echo "<tr>";
                echo "<td>{$item['name']}</td>";
                echo "<td>{$item['price']}</td>";
                echo "</tr>";
                $totalPrice += $item['price'];
            }
        } else {
            echo "<tr><td colspan='2'>Your cart is empty</td></tr>";
        }
        ?>
        <tr>
            <td>Total Price:</td>
            <td><?php echo $totalPrice; ?></td>
        </tr>
    </table>
    <br>
    <a href="clear_cart.php">Clear Cart</a>
    
    <form action="" method="POST">
    <div class="red-button">
    <button type="submit" name="visa">Visa</button>
    </div>
    <div class="red-button">
    <button type="submit" name="cash">Cash</button>
    </div>
    </form>

    <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>
</body>
</html>

<?php
if(isset($_POST['visa'])) {
    $_SESSION['total_price']=$totalPrice;
    header("Location: visa.php");
    exit();
}
else if(isset($_POST['cash'])) {
    header("Location: cash.php");
    exit();
}

?>
