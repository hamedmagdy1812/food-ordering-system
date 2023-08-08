<?php
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

$sql = "dELETE from food where Name ='".$_GET['name']."'";
echo $sql;
// Execute the query
if ($conn->query($sql) === TRUE) {
  echo "Data deleted successfully.";
} else {
  echo "Error deleting data: " . $conn->error;
}

// Close the database connection
$conn->close();
?>
