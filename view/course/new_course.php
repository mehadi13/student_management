<?php
/**
 * Created by PhpStorm.
 * User: mehadi
 * Date: 9/17/17
 * Time: 3:17 PM
 */
if (isset($_POST['name'])) {
    include 'database/connection_open.php';
    $name = $_POST['name'];
    $sql = "INSERT INTO course (name) VALUES ('$name')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form action="" method="post">

    <!--Field Name-->
    <div class="form-group">
        <label for="name">First Name:</label>
        <input type="text" class="form-control" id="name" name="name"
               placeholder="Please enter Name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>