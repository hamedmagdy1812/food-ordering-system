<?php

    $imagename=$_FILES['img']['name'];
    $imagetype=$_FILES['img']['type'];
    $imageerror=$_FILES['img']['error'];
    $imagetemp=$_FILES['img']['tmp_name'];

    
    $Name=$_POST['name'];
    $Description=$_POST['description'];
    $Price=$_POST['price'];
    $type=$_POST['type'];
    $imagepath="images/";
    $img=$imagepath.$imagename;

        
    $conn =mysqli_connect("localhost","root","","software_project");
    
    $query= "INSERT INTO `food` (`Type`, `Name`, `Description`, `Price`, `Image`) 
    VALUES ('$type', '$Name', '$Description', '$Price', '$img')";

    if($conn->query($query))
    {
        echo "added succesfully";
    }
    $conn->close();

    if(is_uploaded_file($imagetemp))
    {
        if(move_uploaded_file($imagetemp, $imagepath.$imagename))
        {
            echo "successfully uploaded your image";
        }
        else
        {
            echo "failed to move your image";
        }
    }
    else
    {
        echo "failed to upload your image";
    }


?>
