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

input[type="text"],
input[type="email"],
input[type="password"] {
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
  /*pattern="(?=.[A-Z])(?=.[a-z]).{8,}"*/
}


  </style>
</head>



<body>

<header>
    <h1>Sizzler Restaurant</h1>
  </header>

  <div class="signup-container">
    <h2>Create an Account</h2>
    <form action="signup_check.php" method="post" onsubmit = 'return validate()'>
      <label for="firstname">First Name:</label>
      <input type="text" id="firstname" name="firstname" required>

      <label for="lastname">Last Name:</label>
      <input type="text" id="lastname" name="lastname" required>

      <label for="contact">Phone Number:</label>
      <input type="text" id="contact" name="contact" pattern="0\d{10}"
    title="Contact Must Start with Zero and Must be 11 Digits" required>

      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" 
       title="Must contain at least one number and one uppercase and lowercase letter, and at least 8 or more characters" required>

      <input type="submit" value="Sign Up">
    </form>
  </div>
  <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>
</body>
</html>
