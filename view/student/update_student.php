<?php
    include 'database/connection_open.php';

    //var_dump($_POST);
    $single = $_POST['single'];
    //echo $single."idadsfasd f asdf";
    $firstname = $_POST['firstname'];
    //echo '<br>' . $firstname;
    $lastname = $_POST['lastname'];
   // echo '<br>' . $lastname;
    $email = $_POST['email'];
   // echo '<br>' . $email;
    $sql = "UPDATE student SET firstname='$firstname',lastname='$lastname',email='$email' WHERE id='$single'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
?>