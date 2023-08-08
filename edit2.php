<?php
$conn = mysqli_connect("localhost", "root", "", "software_project");

// Check connection
if (!$conn) {
die("Connection failed: " . mysqli_connect_error());
}

$Type=$_POST["type"];
$Name=$_POST["name"];
$Price=$_POST["price"];
$Description=$_POST["description"];
$sql="UPDATE food SET Type = '".$_POST['type']."', Name = '".$_POST['name']."', Price = '".$_POST['price']."', Description = '".$_POST['description']."'  WHERE Name = '".$_GET['name']."'";
$result=mysqli_query($conn,$sql);
echo $sql;
if($result)	{
    echo 'successsful';
} else {
    echo "Error editing data: " . $conn->error;
  }
mysqli_close($conn);
?>