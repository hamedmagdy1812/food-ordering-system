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
</head>

<body>

<header>
    <h1>Sizzler Restaurant</h1>
  </header>

  <nav>
    <a href="admin.php">Home</a>
  </nav>

  <div class="signup-container">
    <h2>Add Item:</h2>
    <form action="add2.php" method="post" enctype="multipart/form-data">
      <label for="type">Type:</label>
      <input type="text" id="type" name="type" required>

      <label for="name">Name:</label>
      <input type="text" id="name" name="name" required>

      <label for="description">Description:</label>
      <input type="text" id="description" name="description" required>

      <label for="price">Price:</label>
      <input type="text" id="price" name="price" pattern="[0-9]+"
       title="Price Must be an Integer" required>

      <label for="img">Upload Image:</label>
      <input type="file" name="img" id="img" >

      <input type="submit" value="add_item">
    </form>
  </div>
  <div class="contact-bar">
    <p>Restaurant Address | Phone: +1 123 456 7890 | Email: info@Sizzler.com</p>
  </div>
</body>
    </script>
</html>
