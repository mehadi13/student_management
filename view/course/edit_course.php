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
    echo $id;
    $sql = "SELECT * FROM course WHERE id = ".$id;
    $temp = $conn->query($sql);
    //echo 'check';
    $single = $temp->fetch_assoc();
    //var_dump($single);
    $conn->close();
?>
<form action="index.php?value=update_course" method="post">

    <!--Field Id-->
    <div class="form-group">
        <label for="single">Id:</label>
        <input type="text" class="form-control" id="single" name="single" value="<?php echo $single['id']?>">
    </div>

    <!--Field Name-->
    <div class="form-group">
        <label for="firstname">Name:</label>
        <input type="text" class="form-control" id="name" name="name" value="<?php echo $single['name']?>"
               placeholder="Please enter Name">
    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>