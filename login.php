<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login Page</title>
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

.login-container {
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
}

 </style>

</head>
<body>

<header>
    <h1>Sizzler Restaurant</h1>
  </header>

  <div class="login-container">
    <h2>Login</h2>
    <form action="login_check.php" method="POST">
      <label for="email">Email:</label>
      <input type="email" id="email" name="email" required>

      <label for="password">Password:</label>
      <input type="password" id="password" name="password" required>

      <input type="submit" value="Log In">
    </form>
    <a href="signup.php">Don't have an account? click to create a new account.</a>
  </div>

  

  <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>

</body>
</html>
