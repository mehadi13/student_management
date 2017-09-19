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
            </ul>
            <h3>Course</h3>
            <ul class="list-group">
                <a href="index.php?value=course_list"><li class="list-group-item">Course List</li></a>
                <a href="index.php?value=new_course"><li class="list-group-item">New Course</li></a>
            </ul>
            <h3>Student Course</h3>
            <ul class="list-group">
                <a href="index.php?value=assign_course"><li class="list-group-item">Assign Course</li></a>
                <a href="index.php?value=view_course"><li class="list-group-item">View Course</li></a>
                <a href="index.php?value=view_student"><li class="list-group-item">View Student's Courses</li></a>
            </ul>
</body>
</html>