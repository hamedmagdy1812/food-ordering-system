<?php

    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $contact = $_POST['contact'];
    $email = $_POST['email'];
    $password = $_POST['password'];
    $type=$_POST['type'];

        
    $conn =mysqli_connect("localhost","root","","software_project");
    
    $query= "INSERT INTO `user` (`first_name`, `last_name`, `contact`, `email`, `password`, `type`) 
    VALUES ('$firstname', '$lastname', '$contact', '$email', '$password', '$type')";

    if($conn->query($query))
    {
        echo "added succesfully";
    }
    $conn->close();



?>
