<?php
    include 'database/connection_open.php';

    echo 'dd';
    //var_dump($_POST);
    $single = $_POST['single'];


    $sql = "DELETE FROM course WHERE id=1";

    if ($conn->query($sql) === TRUE) {
        echo "Record deleted successfully";
    } else {
        echo "Error deleting record: " . $conn->error;
    }

    $conn->close();
?>