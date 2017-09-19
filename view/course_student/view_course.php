<?php
/**
 * Created by PhpStorm.
 * User: mehadi
 * Date: 9/19/17
 * Time: 4:30 PM
 */
include 'database/connection_open.php';
$sql = 'SELECT * FROM student RIGHT JOIN (course_student RIGHT JOIN course ON course_student.course_id = course.id) ON student.id = course_student.student_id  ORDER BY student.id';
$result = $conn->query($sql);

/*$sql = 'SELECT * FROM course_student GROUP BY course_student.student_id ORDER BY course_student.id';
$result_row = $conn->query($sql);*/

$conn->close();

?>

<table class="table table-hover">
    <thead>
    <tr>
        <th class="text-center">Student Id</th>
        <th class="text-center">Student Name</th>
        <th class="text-center">Course Name</th>
    </tr>
    </thead>
    <tbody>

    <?php
    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            echo "<tr> <td>" . $row["student_id"] . "</td><td>" . $row["firstname"] . "</td><td>" . $row["name"] . "</td></tr>";
        }
    } else {
        echo "0 results";
    }
    ?>
    </tbody>
</table>


