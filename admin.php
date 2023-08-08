<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Admin Dashboard</title>
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

.admin-dashboard {
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

ul {
  list-style-type: none;
  padding: 0;
}

li {
  margin-bottom: 10px;
}

a {
  display: block;
  padding: 10px;
  background-color: #ff0000; /* Red color for the buttons */
  color: #fff;
  text-decoration: none;
  border-radius: 5px;
  text-align: center;
}

a:hover {
  background-color: #cc0000; /* Darker red color on hover */
}
  </style>
</head>
<body>
<header>
    <h1>Sizzler Restaurant</h1>
  </header>


  <div class="admin-dashboard">
    <h2>Welcome, Admin!</h2>
    <ul>
      <li><a href="add.php">Add Food</a></li>
      <li><a href="add_user.php">Add User</a></li>
      <li><a href="view.php">View Menu</a></li>
      <li><a href="view_users.php">View Users</a></li>
    </ul>
  </div>
  <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>
</body>
</html>
