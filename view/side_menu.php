<?php
/**
 * Created by PhpStorm.
 * User: mehadi
 * Date: 9/17/17
 * Time: 10:40 AM
 */
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
<body>
<!-- Menu -->

            <h3>Student</h3>
            <ul class="list-group">
                <a href="index.php?value=student_list"><li class="list-group-item">Student List</a>
                <a href="index.php?value=new_student"><li class="list-group-item">New Student</li></a>
               <!-- <a href="index.php?value=edit_student"><li class="list-group-item">Edit Student Information</li></a>
                <a href="index.php?value=remove_student"><li class="list-group-item">Remove Student</li></a>-->
            </ul>
            <h3>Course</h3>
            <ul class="list-group">
                <a href="index.php?value=course_list"><li class="list-group-item">Course List</li></a>
                <a href="index.php?value=new_course"><li class="list-group-item">New Course</li></a>

                <!--<li class="list-group-item">Edit Course Information</li>
                <li class="list-group-item">Delete Course</li>-->
            </ul>
            <h3>Student Course</h3>
            <ul class="list-group">
                <li class="list-group-item">View</li>
                <li class="list-group-item">Edit</li>
            </ul>
</body>
</html>