<?php
/**
 * Created by PhpStorm.
 * User: mehadi
 * Date: 9/19/17
 * Time: 3:14 PM
 */
include 'database/connection_open.php';

$sql = "SELECT *  FROM student";
$student = $conn->query($sql);
$sql = "SELECT *  FROM course";
$course = $conn->query($sql);
$conn->close();

?>

<form action="index.php?value=assign" method="post">
    <label for="sel1">Student (select one):</label>
    <select class="form-control" id="sel1" name="student">
        <?php
        if ($student->num_rows > 0) {
        // output data of each row
        while ($row = $student->fetch_assoc()) {
            echo '<option value="'.$row['id'].'">'.$row['id'].' - '.$row['firstname'].'</option>';
        }
        }
        ?>
    </select>

    <label for="course">Select Course</label>
    <div id="course" class="form-check">
        <?php
        if ($course->num_rows > 0) {
            // output data of each row
            while ($row = $course->fetch_assoc()) {
                $id = $row['id'];
                echo "<label><input class='form-check-input' name='course[]' type='checkbox' value=\"$id\"/>".$row[name]."</label>";
            }
        }
        ?>

    </div>

    <button type="submit" class="btn btn-primary">Submit</button>
</form>
