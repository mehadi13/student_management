<?php
/**
 * Created by PhpStorm.
 * User: mehadi
 * Date: 9/17/17
 * Time: 3:17 PM
 */

    include 'database/connection_open.php';

    //echo 'edit page   ';
    $id = $_GET['single'];
    //echo $id;
    $sql = "SELECT * FROM student WHERE id = ".$id;
    $temp = $conn->query($sql);
    //echo 'check';
    $single = $temp->fetch_assoc();
    //var_dump($single);
    $conn->close();
?>
<form action="index.php?value=update_student" method="post">

    <!--Field First Name-->
    <div class="form-group">
        <label for="single">Id:</label>
        <input type="text" class="form-control" id="single" name="single" value="<?php echo $single['id']?>" readonly >
    </div>

    <!--Field First Name-->
    <div class="form-group">
        <label for="firstname">First Name:</label>
        <input type="text" class="form-control" id="firstname" name="firstname" value="<?php echo $single['firstname']?>"
               placeholder="Please enter First Name">
    </div>

    <!--Field Last Name-->
    <div class="form-group">
        <label for="lastname">Last Name:</label>
        <input type="text" class="form-control" id="lastname" name="lastname" value="<?php echo $single['lastname']?>"
               placeholder="Please enter Last Name">
    </div>

    <!--Field Email-->
    <div class="form-group">
        <label for="email">Email:</label>
        <input type="text" class="form-control" id="email" name="email" value="<?php echo $single['email']?>"
               placeholder="Please enter email">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>