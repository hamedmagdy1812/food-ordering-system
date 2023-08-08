<?php
$conn = mysqli_connect("localhost", "root", "", "software_project");

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$firstname = $_POST['firstname'];
$lastname = $_POST['lastname'];
$contact = $_POST['contact'];
$email = $_POST['email'];
$password = $_POST['password'];
$type=$_POST['type'];
$sql="UPDATE user SET first_name = '".$_POST['firstname']."', last_name = '".$_POST['lastname']."', contact = '".$_POST['contact']."', email = '".$_POST['email']."', password = '".$_POST['password']."', type = '".$_POST['type']."'  WHERE email = '".$_GET['email']."'";
$result=mysqli_query($conn,$sql);
echo $sql;
if($result)	{
    echo 'successsful';
} else {
    echo "Error editing data: " . $conn->error;
  }
mysqli_close($conn);
?>
