

<table class="table table-hover">
    <thead>
    <tr>
        <th class="text-center">Id</th>
        <th class="text-center">Name</th>
    </tr>
    </thead>
    <tbody>

    <?php
    include 'database/connection_open.php';

    $sql = "SELECT *  FROM course";
    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        // output data of each row
        while ($row = $result->fetch_assoc()) {
            $id = $row["id"];
            echo "<tr> <td>" . $row["id"] . "</td><td>" . $row["name"] . "</td>" .
                "<td class=\"minimal_cell\">
    <a href=\"index.php?value=edit_course&single=$id\">
        <span class=\"glyphicon glyphicon-edit\"></span>
    </a>
    &nbsp;
    <a href=\"index.php?value=delete_course&single=$id\">
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

