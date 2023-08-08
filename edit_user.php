<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Signup Page</title>
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

input[type="text"]{
  width: 100%;
  padding: 10px;
  margin-bottom: 10px;
  border: 2px solid #ccc;
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
</head>

<body>

<header>
    <h1>Sizzler Restaurant</h1>
  </header>

  <nav>
    <a href="admin.php">Home</a>
  </nav>
  <?php

$email="";
if (isset($_GET['email'])) {
    // Retrieve the value of 'category' from the URL
    $email = $_GET['email'];
}



// Connect to the database (replace with your database credentials)
$conn = mysqli_connect("localhost", "root", "", "software_project");

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}


$sql = "SELECT * FROM user WHERE email= '$email'";
$result = mysqli_query($conn, $sql);

// Display menu items
while ($row = mysqli_fetch_assoc($result)) {
    echo  '<div class="signup-container">';
    echo  '<h2>Edit User</h2>';
    echo  '<form action="edit2_user.php?email=' . $email . '" method="post">';
    echo  '<label for="firstname">First Name:</label>';
    echo  '<input type="text" id="firstname" name="firstname" value="'.$row['first_name'].'" required>';

    echo  '<label for="lastname">Last Name:</label>';
    echo  '<input type="text" id="lastname" name="lastname" value="'.$row['last_name'].'" required>';

    echo  '<label for="contact">First Name:</label>';
    echo  '<input type="text" id="contact" name="contact" value="'.$row['contact'].'" pattern="0\d{10}"
    title="Contact Must Start with Zero and Must be 11 Digits" required>';

    echo  '<label for="email">Email:</label>';
    echo  '<input type="text" id="email" name="email" value="'.$row['email'].'" <required>';

    echo  '<label for="password">Password:</label>';
    echo  '<input type="text" id="password" name="password" value="'.$row['password'].'" pattern="(?=.\d)(?=.[a-z])(?=.*[A-Z]).{8,}"
    title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>';

    echo  '<label for="type">Type:</label>';
    echo  '<input type="text" id="type" name="type" value="'.$row['type'].'" required>';

    echo  '<input type="submit" value="Submit">';
    echo '</form>';
    echo '</div>';
}

// Close the database connection
mysqli_close($conn);
    
?>
  <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>
</body>
</html>
