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
</head>
<body>


<div class="container">
    <!-- Title of page -->
    <div class="row">
        <div class="col-md-12">
            <?php echo $_GET['value'].'<br>'; ?>
            <?php include_once 'view/header.php'?>
        </div>
    </div>


    <!--Body section-->
    <div class="row">
        <!--Content view of page-->
        <div class="col-md-8">

            <?php
            switch ($_GET['value']) {
                case 'student_list':
                   // echo 'asdfasdf';
                    include 'view/student/student_list.php';
                    break;

                case 'new_student':
                    echo 'asdfsadf';
                    include 'view/student/new_student.php';
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
            <?php include_once 'view/footer.php'?>
        </div>
    </div>



</div>

</body>
</html>
