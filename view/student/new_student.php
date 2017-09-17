<?php
/**
 * Created by PhpStorm.
 * User: mehadi
 * Date: 9/17/17
 * Time: 3:17 PM
 */
if(isset($_POST['firstname']) && isset($_POST['lastname']) && isset($_POST['email'])){
$servername = "localhost";
$username = "root";
$password = "1234567";
$dbname = "sug";

// Create connection
$conn = new mysqli($servername, $username, $password,$dbname);

// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/*echo "Connected successfully";
if(isset($_POST['firstname'])){
    echo 'set';
}else{
    echo 'not set';
}*/
$firstname = $_POST['firstname'];
echo '<br>'.$firstname;
$lastname = $_POST['lastname'];
echo '<br>'.$lastname;
$email = $_POST['email'];
echo '<br>'.$email;

//$firstname=$lastname=$email="fdf";

//$sql = "INSERT INTO student (firstname, lastname, email) VALUES ($firstname,$lastname,$email )";
$sql = "INSERT INTO `student` (`firstname`, `lastname`, `email`) VALUES ($firstname,$lastname,$email)";

if ($conn->query($sql) === TRUE) {
    echo "New record created successfully";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
}
?>


<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
</head>
<body class="text-left">
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

</body>
</html>