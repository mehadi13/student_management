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
        <label for="single"><?php echo $single['id']?></label>
    </div>

    <!--Field First Name-->
    <div class="form-group">
        <label for="firstname">First Name:</label>
        <label for="single"><?php echo $single['firstname']?></label>
    </div>

    <!--Field Last Name-->
    <div class="form-group">
        <label for="lastname">Last Name:</label>
        <label for="single"><?php echo $single['lastname']?></label>
    </div>

    <!--Field Email-->
    <div class="form-group">
        <label for="email">Email:</label>
        <label for="single"><?php echo $single['email']?></label>
    </div>
</form>