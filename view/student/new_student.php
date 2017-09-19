<?php
/**
 * Created by PhpStorm.
 * User: mehadi
 * Date: 9/17/17
 * Time: 3:17 PM
 */
if (isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])) {
    include 'database/connection_open.php';
    $firstname = $_POST['firstname'];
    //echo '<br>' . $firstname;
    $lastname = $_POST['lastname'];
    //echo '<br>' . $lastname;
    $email = $_POST['email'];
    //echo '<br>' . $email;
    $sql = "INSERT INTO student (firstname, lastname, email) VALUES ('$firstname','$lastname','$email')";

    if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }

    $conn->close();
}
?>

<form action="" method="post">

    <!--Field First Name-->
    <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" class="form-control" id="firstname" name="firstname"
               placeholder="Please enter First Name">
    </div>

    <!--Field Last Name-->
    <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" class="form-control" id="lastname" name="lastname"
               placeholder="Please enter Last Name">
    </div>

    <!--Field Email-->
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email"
               placeholder="Please enter email">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>