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
.signup-container {
  max-width: 400px;
  margin: 100px auto;
  background-color: #fff;
  padding: 20px;
  border-radius: 5px;
  box-shadow: 0 0 10px rgba(0, 0, 0, 0.3);
}

h2 {
  text-align: center;
  margin-bottom: 20px;
}

label {
  display: block;
  font-weight: bold;
  margin-bottom: 5px;
}

input[type="text"] {
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 1px solid #ccc;
  border-radius: 5px;
}

input[type="submit"] {
  width: 100%;
  padding: 10px;
  background-color: #ff0000; /* Red color for the button */
  color: #fff;
  border: none;
  border-radius: 5px;
  cursor: pointer;
}
</style>
<script>
        function validateForm() {
            var expiration = document.getElementById('expr').value;
            var cardNumber = document.getElementById('cardno').value;
            var cvv = document.getElementById('cvv').value;

            if (!/^5\d{15}$/.test(cardNumber)) {
                alert('Invalid card number. Number must start with 5 then followed by 15 digits');
                return false;
            }

            if (!/^\d{3}$/.test(cvv)) {
                alert('Invalid CVV.Number Must Consist of 3 Digits');
                return false;
            }


            return true;
        }
    </script>
<?php
session_start();
if (!isset($_SESSION['email'])) {
    header("Location: login.php");
    exit();
}
?>

<body>

<header>
    <h1>Sizzler Restaurant</h1>
  </header>

  <nav>
    <a href="home.php">Home</a>
    <a href="cart.php">Cart</a>
  </nav>

  <div class="signup-container">
    <h2>Add Item:</h2>
    <form action="visa2.php" method="post" onsubmit="return validateForm()">
      <label for="cardno">Card Number:</label>
      <input type="text" id="cardno" name="cardno" title="Date Must Start with Day then Month then Year example (02/09/2024)" required>

      <label for="expr">Expiration Date:</label>
      <input type="text" id="expr" name="expr" pattern="(0[1-9]|[12][0-9]|3[01])\/(0[1-9]|1[0-2])\/(20\d{2}|2[1-9]\d{1})"
       title="Date Must Start with Day then Month then Year example (02/09/2024)" required>

      <label for="cvv">Cvv:</label>
      <input type="text" id="cvv" name="cvv" required>

      <input type="submit" value="Submit">
    </form>
  </div>

  <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>


</body>
</html>
