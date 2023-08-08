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

button {
  background-color: #ff0000; /* Red color for the buttons */
  color: #fff;
  border: none;
  padding: 5px 10px;
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

  <table>
    <thead>
      <tr>
        <th>First Name</th>
        <th>Last Name</th>
        <th>Contact</th>
        <th>Email</th>
        <th>Password</th>
        <th>Type</th>
        <th>Edit</th>
        <th>Delete</th>
      </tr>
    </thead>
    <tbody>
      <?php 

      $conn = mysqli_connect("localhost", "root", "", "software_project");

      // Check connection
      if (!$conn) {
        die("Connection failed: " . mysqli_connect_error());
      }
      $sql = "SELECT * FROM user";
      $result = mysqli_query($conn, $sql);

      // Display menu items
      while ($row = mysqli_fetch_assoc($result)) {
        echo '<tr>';
        echo '<td>' . $row['first_name'] . '</td>';
        echo '<td>' . $row['last_name'] . '</td>';
        echo '<td>' . $row['contact'] . '</td>';
        echo '<td>' . $row['email'] . '</td>';
        echo '<td>' . $row['password'] . '</td>';
        echo '<td>' . $row['type'] . '</td>';
        echo '<td><a href="edit_user.php?email=' . $row['email'] . '"><button onclick="">Edit</button></a></td>';
        echo '<td><a href="delete_user.php?email=' . $row['email'] . '"><button onclick="">delete</button></a></td>';
        echo '</tr>';
        
      }

      mysqli_close($conn);

      ?>
    </tbody>
  </table>
  <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>
</body>
</html>
