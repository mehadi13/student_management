<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0-beta/css/bootstrap.min.css" integrity="sha384-/Y6pD6FV/Vv2HJnA6t+vslU6fwYXjCFtcEpHbNJ0lyAFsXTsjBbfaDjzALeQsN6M" crossorigin="anonymous"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="view/css/index.css">
    <link rel="stylesheet" type="text/css" href="view/css/student.css">
</head>
<body>


<div class="container">
    <!-- Title of page -->
    <div class="row">
        <div class="col-md-12">
            <?php include_once 'view/header.php' ?>
        </div>
    </div>


    <!--Body section-->
    <div class="row">
        <!--Content view of page-->
        <div class="col-md-8">


            <?php
            // echo $_GET['value'];
            switch ($_GET['value']) {
                //student pages
                case 'student_list':
                    include 'view/student/student_list.php';
                    break;
                case 'new_student':
                    include 'view/student/new_student.php';
                    break;
                case 'edit_student':
                    //echo $_GET['single'];
                    include 'view/student/edit_student.php';
                    break;
                case 'preview_student':
                    //echo $_GET['single'];
                    include 'view/student/preview_student.php';
                    break;
                case 'update_student':
                    include 'view/student/update_student.php';
                    include 'view/student/student_list.php';
                    break;

                //course pages
                case 'course_list':
                    include 'view/course/course_list.php';
                    break;
                case 'new_course':
                    include 'view/course/new_course.php';
                    break;
                case 'edit_course':
                    //echo $_GET['single'];
                    include 'view/course/edit_course.php';
                    break;
                case 'update_course':
                    echo 'value:' . $_POST['single'] . '<br>';

                    include 'view/course/update_course.php';
                    include 'view/course/course_list.php';
                    break;
                case 'delete_course':
                    include 'view/course/delete_course.php';
                    include 'view/course/course_list.php';
                    break;
                case 'assign_course':
                    include 'view/course_student/assign_course.php';
                    break;

                case 'assign':
                    include 'view/course_student/assign.php';
                    include 'view/course_student/assign_course.php';
                    break;

                case 'view_course':
                    include 'view/course_student/view_course.php';
                    break;
                case 'view_student':
                    include 'view/course_student/student_course.php';
                    break;
                default:
                    echo 'Welcome!!!';
            }
            ?>
        </div>
        <!--Side menu-->
        <div class="col-md-4">
            <?php include_once 'view/side_menu.php' ?>
        </div>
    </div>

    <!--Footer section-->
    <div class="row">
        <div class="col-md-12">
            <?php include_once 'view/footer.php' ?>
        </div>
    </div>


</div>

</body>
</html>
