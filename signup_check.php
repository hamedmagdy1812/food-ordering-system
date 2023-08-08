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

// Retrieve sign-up data from the form
$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$email = $_POST['email'];
$password = $_POST['password'];
$contact = $_POST['contact'];
$type="customer";
$_SESSION['customer_email']= $_POST['email'];


// Use prepared statement to insert data into the database
$stmt = $conn->prepare("INSERT INTO user (first_name, last_name, contact, email, password, type) VALUES ('$firstname', '$lastname', '$contact', '$email', '$password', '$type')");
//$stmt->bind_param("sss", $firstname, $lastname, $contact, $email, $password, $type);

// Execute the query
if ($stmt->execute()) {
    echo "Sign-up successful.";
    $_SESSION['email'] = $email;
    header("Location: home.php");
} else {
    echo "Error signing up: " . $stmt->error;
}

// Close the prepared statement
$stmt->close();

// Close the database connection
$conn->close();
?>
