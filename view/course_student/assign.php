<?php
/**
 * Created by PhpStorm.
 * User: mehadi
 * Date: 9/19/17
 * Time: 3:14 PM
 */
include 'database/connection_open.php';
//var_dump($_POST);

$student = $_POST['student'];
$courses = $_POST['course'];

foreach ($courses as $course){
// echo $course .'<br>';
    $sql = "INSERT INTO course_student (course_id,student_id) VALUES ('$course','$student')";
    /*if ($conn->query($sql) === TRUE) {
        echo "New record created successfully";
    } else {
        echo "Error: " . $sql . "<br>" . $conn->error;
    }*/
    $conn->query($sql);

}

$conn->close();

?>