<?php
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])) {
    include 'database/connection_open.php';

    //var_dump($_POST);
    $single = $_POST['single'];

    //echo $single."idadsfasd f asdf";
    $name = $_POST['name'];

    $sql = "UPDATE course SET name='$name' WHERE id='$single'";

    if ($conn->query($sql) === TRUE) {
        echo "Record updated successfully";
    } else {
        echo "Error updating record: " . $conn->error;
    }

    $conn->close();
}
?>