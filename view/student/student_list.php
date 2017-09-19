<?php
/**
 * Created by PhpStorm.
 * User: mehadi
 * Date: 9/17/17
 * Time: 10:40 AM
 */
?>

<table class="table table-hover">
    <thead>
    <tr>
        <th class="text-center">id</th>
        <th class="text-center">Firstname</th>
        <th class="text-center">Lastname</th>
        <th class="text-center">Email</th>
    </tr>
    </thead>
    <tbody>

    <?php
    include 'database/connection_open.php';

    $sql = "SELECT *  FROM student";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            echo "<tr> <td>" . $row["id"] . "</td><td>" . $row["firstname"] . "</td><td>"
                . $row["lastname"] . "</td><td>" . $row["email"] . "</td>" .
                "<td class=\"minimal_cell\">
    &nbsp;
    <a href=\"index.php?value=preview_student&single=$id\">
        <span class=\"glyphicon glyphicon-eye-open\"></span>
    </a>
    &nbsp;
    <a href=\"index.php?value=edit_student&single=$id\">
        <span class=\"glyphicon glyphicon-edit\"></span>
    </a>
    &nbsp;
    <a href=\"\">
        <span class=\"glyphicon glyphicon-trash\"></span>
    </a>
    </td></tr>";

        }
    } else {
        echo "0 results";
    }
    $conn->close();
    ?>
    </tbody>
</table>

