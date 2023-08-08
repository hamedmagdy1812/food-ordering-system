<?php
session_start();

// Replace these with your actual database credentials
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "software_project";

// Create a connection to the database
$conn = new mysqli($servername, $username, $password, $dbname);

// Check if the connection was successful
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

// Retrieve the username and password from the form
$email = $_POST['email'];
$password = $_POST['password'];


// Use prepared statement to select user with given credentials
$stmt = $conn->prepare("SELECT * FROM user WHERE email = ? AND password = ?");
$stmt->bind_param("ss", $email, $password);
$stmt->execute();

// Check if a user was found
$result = $stmt->get_result();
if ($result->num_rows === 1) {
    $user = $result->fetch_assoc();
    $_SESSION['email'] = $email; // Store username in session
    if ($user['type'] === 'admin') {
        header("Location: admin.php");
    } elseif ($user['type'] === 'customer') {
        header("Location: home.php");
    }
} else {
    echo "Invalid username or password. Please try again.";
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>
